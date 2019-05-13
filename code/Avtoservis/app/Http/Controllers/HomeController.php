<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationCompletedMail;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = "Začetna stran";

        // Mail::to('mh7860@stundent.uni-lj.si')->send(
        //     new ReservationCompletedMail($title)
        // );

        return view('dashboard.home');
    }
}
