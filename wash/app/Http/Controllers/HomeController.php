<?php

namespace App\Http\Controllers;
use App\Booking;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
                'user_name'   =>request('bename'),
                'date' => request('date'),
                'time' => request('time'),
                'status' => 'active',
                'marks' => '0',
                'email' => request('email'),
                'phone' => request('phone'),
                
            ];
            $newbooking = Booking::create($booking);
            Mail::to(Auth::user()->email)->send(new OrderShipped($newbooking));

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
    public function basic_email(){
        $data = array('name'=>"Virat Gandhi");
        Mail::send('mail',$data,function($message){
            $message->to('kes1993@yandex.ru')->subject("Email Testing with Laravel");
            $message->from('reply@wash2go.ae','Creative Losser Hopeless Genius');
        });
   
    }

}
