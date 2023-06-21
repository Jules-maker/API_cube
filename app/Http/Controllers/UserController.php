<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
    
        return view('users/index', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:users,name,' . $user->id,
            'email' => 'required|unique:users,email,' . $user->id,
        ]);

        $user->update($validatedData);

        return redirect()->route('users.index')->with('success', 'L\'utilisateur a été modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('success', 'L\'utilisateur a été supprimé avec succès.');
    }
}
