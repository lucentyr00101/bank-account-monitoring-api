<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\User;
use App\BankDetail;

class UserController extends Controller
{
    public function index() {
        return UserResource::collection(User::all());
    }

    public function show(User $user) {
        return new UserResource($user);
    }

    public function store(Request $request) {
        $user                 = new User;
        $user->first_name     = $request->first_name;
        $user->middle_initial = $request->middle_initial;
        $user->last_name      = $request->last_name;
        $user->birthday       = date('Y-m-d', strtotime($request->birthday));
        $user->email          = $request->email;
        $user->password       = bcrypt($request->password);

        $details                 = new BankDetail;
        $details->bank_name      = $request->bank_name;
        $details->account_type   = $request->account_type;
        $details->account_number = $request->account_number;

        if($user->save() && $user->bankDetails()->save($details)) {
            return 200;
        }
    }
}
