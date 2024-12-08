<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\StoreEmployerRequest;
use App\Http\Requests\Register\StoreUserRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $requestUser, StoreEmployerRequest $requestEmployer)
    {
        $user = User::query()->create($requestUser->validated());

        $logoPath = $requestEmployer->logo->store("logos");

        $user->employer()->create([
            "name" => $requestEmployer["employer"],
            "logo" => $logoPath,
        ]);

        Auth::login($user);
        
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
}
