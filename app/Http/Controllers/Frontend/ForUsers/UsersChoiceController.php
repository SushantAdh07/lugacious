<?php

namespace App\Http\Controllers\Frontend\forUsers;

use App\Models\UsersChoice;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersChoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.ForUsers.usersChoice');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'users_choice' => ['required', 'min:5'],
        ]);

        Auth::user()->usersChoice()->create([
            'users_choice' =>$request->users_choice,
        ]);

        return redirect()->back()->with('success', 'Your store of choice is added.');

    }

    /**
     * Display the specified resource.
     */
    public function show(UsersChoice $usersChoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UsersChoice $usersChoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UsersChoice $usersChoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UsersChoice $usersChoice)
    {
        //
    }
}
