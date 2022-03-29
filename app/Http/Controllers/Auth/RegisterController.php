<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{


    use RegistersUsers;


    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function viewRegister(){
        return view('auth.register');
    }

    protected function create(array $data)
    {
        $capacidades = [];

        if(isset($_POST['btnRegistrar'])){
            $checkInstagram = false;
            $checkTwitter = false;
            $checkFacebook = false;

            if(isset($_POST['instagram'])){
                $checkInstagram = $_POST['instagram'];
            }

            if(isset($_POST['twitter'])){
                $checkTwitter = $_POST['twitter'];
            }

            if(isset($_POST['facebook'])){
                $checkFacebook = $_POST['facebook'];
            }

            $capacidades =[
                'Instagram' => $checkInstagram,
                'Twitter' => $checkTwitter,
                'Facebook' => $checkFacebook
            ];

        }

        return User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'DNI' => $data['DNI'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'capacidades' => json_encode($capacidades, true),
        ]);
    }
}
