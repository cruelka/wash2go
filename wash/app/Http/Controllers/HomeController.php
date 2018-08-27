<?php

namespace App\Http\Controllers;
use App\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->paginate(2);

        return view('home',compact( 'bookings'));
    }
    public function store(Request $request){

        if( Auth::check()) {
  
            $booking = [
                'user_id' => Auth::id(),
                'service' => request('services'),
                'price' => request('totalPrice'),
                'location' => request('where'),
                'date' => request('date'),
                'time' => request('time'),
                'status' => '0',
                'marks' => '0',
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,
                
            ];
            $newbooking = Booking::create($booking);
        }
        
    }

    public function checkTime(Request $request){
        $booking= Booking::where([
            ['date', request('date')],
            ['time', request('time')]
                ])->count();
        if($booking > 3){
            return '0';
        }else{
            return '1';
        }

    }
}
