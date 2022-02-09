<?php
namespace App\Http\Controllers;
use App\Models\InsuranceCompany;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class CustomAuthController extends Controller
{

    public function index()
    {
        if(Auth::check()){
            return view('insurancecompany');
        }
        return redirect('/');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->route('insurance.company');

        }

        return redirect("/");
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);


        return redirect("welcome")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        return InsuranceCompany::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
