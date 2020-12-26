<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //登録済みプロフィールの取得
        $user_id = Auth::id();
        $profile = Profile::where('user_id',$user_id)->first();
        // $profile = Profile::all();
        // dd($profile);
        return view('profile',['profile' => $profile]);
    }

    public function create(Request $request)
    {
        //DBに登録する
        dd($request->all());
        return view('profile');
    }
}
