<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Request $request){
        $income=$request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'coming_from'=>'required',
            'amount_to_pay'=>'required'

        ]);
        payment::create($income);
        return view('/task');
    }
}
