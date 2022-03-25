<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CreateCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createCustomer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name'    =>  'required',
            'customer_address'    =>  'required',
            'customer_phonenumber'    =>  'required',
            'customer_email'    =>  'required',
            'customer_username'    =>  'required',
            'customer_password'    =>  'required'
        ]);
        $customer = new Customer([
            'customer_name'    =>  $request->get('customer_name'),
            'customer_address'    =>  $request->get('customer_address'),
            'customer_phonenumber'    =>  $request->get('customer_name'),
            'customer_email'    =>  $request->get('customer_email'),
            'customer_username'    =>  $request->get('customer_name'),
            'customer_password'    =>  Hash::make($request->customer_password)
        ]);
        $customer->save();
        return redirect('/createcustomer')->with('success', 'Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('createCustomer');
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