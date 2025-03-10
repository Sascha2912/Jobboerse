<?php

namespace App\Policies;

use App\Models\Job_User;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobUserPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Ein Business_User kann nur die Private_Users sehen, die sich auf einen Job von seiner Firma beworben haben.
        if ($user->role === 'business_user'){
            // Firma des Business_Users holen.
            $company = $user->company;

            // Überprüfen, ob die Firma existiert und Jobs hat.
            if($company){
                $jobs = $company->jobs()->pluck('id')->toArray();

                // Hole die IDs der Private_Users, die sich auf Jobs der Firma beworben haben.
                $privateUsers = Job_User::whereIn('job_id', $jobs)->pluck('user_id')->toArray();

                // Überprüfen, ob der Benutzer in dieser Liste ist
                return in_array($user->id, $privateUsers);
            }
        }

        // Ein Private_User kann nur die Jobs sehen, auf die er sich beworben hat.
        if($user->role === 'private_user'){
            // IDs der Jobs, auf die sich der Benutzer beworben hat holen.
            $appliedJobs = Job_User::where('user_id', $user->id)->pluck('job_id')->toArray();

            // Überprüfen, ob die ID des angeforderten Jobs in der Liste der beworbenen Jobs enthalten ist.
            return in_array(request()->job_id, $appliedJobs);
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Job_User $jobUser): bool
    {
        // Business_Users können nur die Private_Users sehen, die sich auf einen Job von seiner Firma beworben haben.
        if($user->role === 'business_user'){
            // Job des Job_Users holen.
            $job = $jobUser->job;

            // Überprüfen, ob der Job existiert und zur Firma des Business_Users gehört.
            if($job && $job->company_id === $user->company_id){
                return true;
            }

        }

        // Ein Private_User kann nur die Informationen über seine eigenen Bewerbungen einsehen.
        if($user->role === 'private_user' && $jobUser->user_id === $user->id){
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Job_User $jobUser): bool
    {
        // Prüfen, oder der Benutzer ein Admin ist.
        if($user->role === 'admin'){
            return true;
        }

        // Prüfen, ob der Benutzer ein Private_user ist und ob die Bewerbung ihm gehört.
       return $user->role === 'private_user' && $user->id === $jobUser->user_id; 
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Job_User $jobUser): bool
    {
        // Ein Admin kann jede Bewerbung löschen.
        if($user->role === 'admin'){
            return true;
        }

         // Ein Business_user kann Bewerbungen an seine Company löschen.
         if($user->role === 'business_user'){
            // Überprüfen, ob der Job zur Company des Benutzers gehört.
            $job = $jobUser->job;
            if($job && $job->company_id === $user->company_id){
                return true;
            }
         }

        // Ein private_user kann seine eigene Bewerbung löschen.
        return $user->role === 'private_user' && $user->id === $jobUser->id;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Job_User $jobUser): bool
    {
        return $user->role === 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Job_User $jobUser): bool
    {
        return $user->role === 'admin';
    }
}
