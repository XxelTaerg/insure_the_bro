<?php

namespace App\Services;

use App\Models\InsuranceCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthService
{
    /**
     * Авторизация
     *
     * @param Request $request
     * @return bool
     */
    public function checkLogin(array $credentials)
    {
        return Auth::attempt($credentials);
    }

    /**
     * Выход
     *
     * @return void
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();
    }

    /**
     * Регистрация
     *
     * @param Request $request
     * @return void
     */
    public function register(array $data)
    {
        InsuranceCompany::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password'])
        ]);
    }
}
