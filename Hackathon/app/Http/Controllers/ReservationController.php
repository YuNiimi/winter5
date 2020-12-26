<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;

class ReservationController extends Controller
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
    public function indexGuest()
    {
        
    }

    public function indexHost(){

        $records = Reservation::all();
        // dd($records);
        return view('hostReservation',['records' => $records]);

    }

    public function createGuest(Request $request)
    {
        //reservationsテーブルに挿入（カラム数＝選択時間数）
        // dd($request->all());
        for($i=0;$i<count($request->time);$i++){
            $record = new Reservation;
            $record->guest_id = Auth::id();
            $record->date = $request->date;
            $record->time = $request->time[$i];
            $record->save();
        }
        return view('guestReserved',$request->all());
    }
}
