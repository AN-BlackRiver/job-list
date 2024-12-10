<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register\StoreEmployerRequest;
use App\Http\Requests\Register\StoreUserRequest;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function create()
    {
        return view('auth.register');
    }

    public function store(StoreUserRequest $requestUser, StoreEmployerRequest $requestEmployer)
    {
        $user = User::query()->create($requestUser->validated());

        $logoPath = $requestEmployer->logo->store("logos");

        //dd($logoPath);

        $user->employer()->create([
            "name" => $requestEmployer["employer"],
            "logo" => $logoPath,
        ]);

        Auth::login($user);

        return redirect("/");
    }

}
