<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Reservation;


class StaticPagesController extends Controller
{
    public function home(){
       
        return view('home');
    }

    public function about(){
        return view('pages/about');
    }
    public function reservations(){
        return view('pages/reservations');
    }

    public function saveReservation(){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
            'guests_total' => ['required', 'string'],
            'time' => ['required', 'string'],
        ]);
        $reservation = new Reservation();
        $reservation->fname = request('fname');
        $reservation->lname = request('lname');
        $reservation->email = request('email');
        $reservation->guests_total = request('guests_total');
        $reservation->time = request('time');
        $reservation->phone_number = request('phone_number');
        $reservation->save();

       
        return redirect('/reservations/thank-you');
     
    }

    public function contact(){
        return view('pages/contact');
    }
    public function offers(){
        return view('pages/offers');
    }

    public function registerMember(){
        request()->validate([
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string'],
            'email' => ['required', 'string'],
            'phone_number' => ['required', 'string'],
        ]);
        $member = new Member();
        $member->fname = request('fname');
        $member->lname = request('lname');
        $member->email = request('email');
        $member->phone_number = request('phone_number');
        $member->save();

       
        return redirect('/offers/thank-you');
     
    }
    public function ThankYou(){
        return view('pages/thank-you');
        // return "Thank You";
    }
    public function menu(){
        return view('menu/index');
    }
    public function singleMenu(){
        return view('menu/single-menu');
    }
}
