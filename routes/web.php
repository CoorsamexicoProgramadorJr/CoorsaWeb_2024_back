<?php

use App\Models\Consult;
use App\Mail\MailConsult;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email-consult', function () {
    $consult = Consult::find(14);
    return new MailConsult($consult);
});
