<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserChangePasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id',auth()->user()->id)->first();
        //dd($user->userTasks);
        $tasks=$user?->userTasks;

        return view('dashboard',compact('tasks'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    /**
     * Change the user password from the site
     */
    public function updatePassword(UserChangePasswordRequest $request){
        try {
            if (!Hash::check($request->current_password, auth()->user()->password)) {
                return response()->json('The current password is incorrect.', 400);
            }
            $user =auth()->user();
            $user->password = Hash::make($request->new_password);
            $user->update();
            return response()->json('Data has been Updated successfully', 200);
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return response()->json('Error , please try again later', 400);
        }

    }
}
