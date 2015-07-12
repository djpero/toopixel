<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Mail;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        if (Session::has('language')) {
            $value = Session::get('language');
        } else {
            $value = 'en';
        }
        return view("contact.form", compact('value'));
    }
    public function finish() {

        return view("contact.finish");
    }

    public function send(Requests\SendEmailRequest $request){
        $input = Request::all();
        Mail::send('emails.thank_you', $input, function($message) use ($input)
        {
            $message->from($input['email'], $input['name']. ' ' .$input['surname']);
            $message->to('djpero.84@gmail.com')->subject('Contact from TooPixel Contact Page');
            $message->attach($input['attachment']->getRealPath(), array(
                'as' => $input['attachment']->getClientOriginalName(),
                'mime' => $input['attachment']->getMimeType()));
        });
        $name = $input['name'];
        $surname = $input['surname'];
        if (Session::has('language')) {
            $value = Session::get('language');
        } else {
            $value = 'en';
        }
        return view('contact/finish', compact('name','surname','value'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
