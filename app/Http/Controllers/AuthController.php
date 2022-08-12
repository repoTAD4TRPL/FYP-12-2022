<?php

namespace App\Http\Controllers;

use App\Models\Gereja;
use App\Models\Resort;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class   AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function loginPost(Request $request){
        request()->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $kredensil = $request->only('email','password');

        if(Auth::attempt($kredensil)){
           return redirect('dashboard');
        }else{
            return redirect('login');
        }

    }

    public function logout(Request $request){
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }

    public function register(){
        $ressorts = Resort::all();
        $gerejas = Gereja::all();

        return view('auth.register',compact('gerejas','ressorts'));
    }

    public function registerPost(Request $request){
        $rules = [
            'username'                    => 'required|min:3|max:35',
            'email'                       => 'required|email|unique:users,email',
            'password'                    => 'required|confirmed'
        ];

        $messages = [
            'first_name.required'         => 'Nama Lengkap wajib diisi',
            'email.required'        	  => 'Email wajib diisi',
            'email.unique'                => 'Email sudah terdaftar',
            'password.required'           => 'Password wajib diisi',
            'password.confirmed'          => 'Password tidak sama dengan konfirmasi password'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->password = Hash::make($request->password);
        $user->role_id = 2;
        $user->is_active = 1;
        $user->gereja_id = $request->gereja;
        if($user->save()){
            return redirect('/login');
        }
        return redirect('register');

    }

    public function registerSeller(){
        $user = User::find(auth()->user()->id);
        return view('profile.store_form',compact('user'));
    }

    public function registerSellerPost(Request $request){
        $user = User::find(auth()->user()->id);
        $user->seller_registration_status = 'Menunggu';
        $user->updated_at = now();
        $user->updated_by = auth()->user()->email;
        $user->save();

        $toko = new Toko();
        $toko->user_id = auth()->user()->id;
        $toko->nama_toko = $request->nama_toko;
        $toko->created_at = now();
        $toko->created_by = auth()->user()->email;
        $toko->save();

        return redirect(route('user.profile'));
    }
}
