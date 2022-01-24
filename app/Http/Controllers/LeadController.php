<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberConfirm;
use Illuminate\Support\Facades\Mail;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{

    // public function __construct()
    // {
    //     $this->authorizeResource(Lead::class, 'lead');
    // }

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Validator::make($request->all(), [
            'email' => 'required|email|unique:leads,email|'
        ])->validate();


        $lead = new Lead();
        $lead->email = $request['email'];
        $lead->save();

        Mail::to($lead->email)->send(new SubscriberConfirm);

        return response()->json(['lead' => $lead]);
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function show(Lead $lead)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function edit(Lead $lead)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeadRequest  $request
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lead $lead)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lead  $lead
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lead $lead)
    {
        //
    }
}
