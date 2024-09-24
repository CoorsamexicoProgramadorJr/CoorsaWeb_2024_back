<?php

use App\Mail\MailApplication;
use App\Models\Consult;
use App\Mail\MailConsult;
use App\Models\Application;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email-consult', function () {
    $consult = Consult::find(14);
    return new MailConsult($consult);
});

Route::get('/email-application', function () {
    $application = Application::find(2);
    return new MailApplication($application);
});
