<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJob_UserRequest;
use App\Http\Requests\UpdateJob_UserRequest;
use App\Models\Job_User;

class JobUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job_users = Job_User::all();
        return view('job_users.index', ['job_users' => $job_users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job_users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJob_UserRequest $request)
    {
        $validatedData = $request->validated();
        $job_user = Job_User::create($validatedData);

        return redirect('/job_users/' . $job_user->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Job_User $job_user)
    {
        return view('job_users.show', ['job_user' => $job_user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job_User $job_User)
    {
        return view('job_users.edit', ['job_user' => $job_User]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJob_UserRequest $request, Job_User $job_User)
    {
        $validatedData = $request->validated();
        $job_User->update($validatedData);

        return redirect('/job_users/' . $job_User->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job_User $job_User)
    {
        $job_User->delete();

        return redirect('/job_users');
    }
}
