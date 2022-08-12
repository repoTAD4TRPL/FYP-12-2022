<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $user = User::find(auth()->user()->id);
        return view('profile.index',compact('user'));
    }

    public function membership(){

        $users = User::join('toko','users.id','=','toko.user_id')
        ->select('users.*','toko.*')
        ->whereNotNull('seller_registration_status')->get();

        return view('admin.membership',compact('users'));
    }

    public function confirmMemberRegistration($id){
        $user = User::find($id);
        $user->is_registered_as_seller = true;
        $user->seller_registration_status = 'Diterima';
        $user->role_id = 3;
        $user->updated_at = now();
        $user->updated_by = auth()->user()->username;
        $user->save();

        $toko = Toko::where('user_id',$id)->first();
        $toko->is_active = true;
        $toko->updated_at = now();
        $toko->updated_by = auth()->user()->username;
        $user->save();

        $inventory = new Inventory();
        $inventory->toko_id = $toko->id;
        $inventory->created_at = now();
        $inventory->created_by = auth()->user()->username;
        $inventory->save();

        return redirect('user/membership');
    }


    public function manageUser(){

        $users = User::all();
        return view('admin.user.index',compact('users'));
    }

    public function sellerRegistration(){
        $user = User::find(auth()->user()->id);
        return view('profile.seller_registration',compact('user'));
    }

    public function accountSetting(){
        $user = User::find(auth()->user()->id);
        return view('profile.account_setting');
    }
}
