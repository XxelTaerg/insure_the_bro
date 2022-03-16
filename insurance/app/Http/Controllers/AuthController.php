<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    /**
     * Форма авторизации
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }
    /**
     * Авторизация
     *
     * @param LoginRequest $request
     * @param AuthService $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request, AuthService $service)
    {
        if ($service->checkLogin($request->validated())) {
            return redirect()->route('account.index');
        }

        return redirect()->route('auth.login-show')->withErrors(['password' => ['Неверный пароль']]);
    }

    /**
     * Форма регистрация
     *
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Регистрация
     *
     * @param RegistrationRequest $request
     * @param AuthService $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registration(RegistrationRequest $request, AuthService $service)
    {
        $service->register($request->validated());

        return redirect()->route('index');
    }

    /**
     * Выход
     *
     * @param AuthService $service
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signOut(AuthService $service)
    {
        $service->logout();

        return redirect()->route('index');
    }
}
