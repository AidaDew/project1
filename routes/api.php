<?php

use Illuminate\Http\Request;
use App\Models\DoctorsAppointment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/request', function (Request $request) {
    $name = $request->name;
    $email = $request->email;
    $phone = $request->phone;
    $department = $request->department;
    $message = $request->message;

    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'department' => 'required',
        'message' => 'required',
    ]);
    $request = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'department' => 'required',
        'message' => 'required',
    ]);
    $doc = DoctorsAppointment::create([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'department' => $department,
        'message' => $message,
    ]);

    return back()->withInput();
});
