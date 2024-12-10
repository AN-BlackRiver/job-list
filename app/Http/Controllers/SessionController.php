<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        if (! Auth::attempt($request->validated())) {
            throw ValidationException::withMessages([
                'email' => trans('Неправильный логин или пароль'),
            ]);
        }

        $request->session()->regenerate();

        return redirect("/");
    }


    public function destroy(string $id)
    {
        Auth::logout();
        return redirect("/");
    }
}
