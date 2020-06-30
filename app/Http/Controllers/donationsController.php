<?php

namespace App\Http\Controllers;

use App\Donation;
use App\Province;
use App\FocusArea;
use Paynow\Payments\Paynow;
use Illuminate\Http\Request;

class donationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provinces = Province::all();

        $focus_areas = FocusArea::all();

        return view('donate', compact('focus_areas', 'provinces'));
    }

     public function store()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function paynow(Request $request)
    {
        $paynow = new Paynow(
        env('PAYNOW_ID'),
        env('PAYNOW_SECRET'),
        'http://example.com/gateways/paynow/update',

        // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
        'http://example.com/return?gateway=paynow'
        );

        $invoice_num = date("His");

        $payment = $paynow->createPayment("Invoice $invoice_num", request('email'));

        $payment->add('Donations', request('amount'));

        $phone = request('phone');

        if (substr( $phone, 0, 3 ) === "071"){
             $response = $paynow->sendMobile($payment, $phone, 'onemoney');
        }else{
             $response = $paynow->sendMobile($payment, $phone, 'ecocash');
        }

        if($response->success()) {
            // Get the poll url (used to check the status of a transaction). You might want to save this in your DB

            $pollUrl = $response->pollUrl();

            // Get the instructions
            $instrutions = $response->instructions();
            $status = $paynow->pollTransaction($pollUrl);

            if ($status){


                 $timeout = 3;

                while (true){

                    sleep(rand(1,10));
                    if($status->paid()) {
                        Donation::create([
                            'amount' => $request->amount,
                            'payment_method' => $request->payment_method,
                            'focus_area' => $request->focus_area,
                            'email' => $request->email,
                            'phone' => $request->phone,
                            'address' => $request->address,
                            'address2' => $request->address2,
                            'country' => $request->country,
                            'province_id' => $request->province_id,
                            'zip' => $request->zip,
                        ]);

                        session()->flash('success', "$ $request->amount has been donated succesfully");

                        return redirect(route('donate.create'));

                    }

                    $timeout -= 1;

                    if ($timeout == 0){
                        session()->flash('error', "Timeout reached! Please try again");

                        return redirect(route('donate.create'));
                    }

                }
            }else{
                session()->flash('error', 'Sorry, transaction failed, please try again.');
                 return redirect(route('donate.create'));
            }

        }else{
                 session()->flash('error', 'Sorry, transaction has been cancelled please try again.');
                 return redirect(route('donate.create'));
        } 
        
            // Save the response from paynow in a variable
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
