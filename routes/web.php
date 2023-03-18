<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::post('/contact-us', function () {

    $validated = request()->validate(
        [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email',
            'message' => 'required',
        ]
    );

    $details = [
        'title' => 'Contact',
        'body' => 'We received your contact, in the next few hours you will receive an answer'

    ];

    Mail::to($validated['email'])->send(new \App\Mail\ContactMail($details));

    $title = "Contact to avoCode from " . $validated['name'] . ' ' . $validated['surname'] . " email " . $validated['email'];
    $msg = $validated['message'];

    Mail::to('savinocristian89@gmail.com')->send(new \App\Mail\ContactMailForUs($title, $msg));

    return redirect()->back();
});
