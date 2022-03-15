<?php
namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\InsuranceCompany;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{

    public function customLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('insurance.company');
        }

        return redirect()->route('account');
    }

    public function customRegistration(RegistrationRequest $request)
    {
        $data = $request->all();
        $check = InsuranceCompany::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect("/");
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
