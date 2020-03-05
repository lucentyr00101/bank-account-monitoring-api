<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fund;
use App\Http\Resources\FundsResource;

class FundController extends Controller
{
    public function store(Request $request) {
        $fund = new Fund;
        $fund->amount = $request->amount;
        return $fund->user()->associate($request->user())->save() ? 200 : 'error';
    }

    public function index() {
        $funds = Fund::paginate(10);
        return FundsResource::collection($funds);
    }
}
