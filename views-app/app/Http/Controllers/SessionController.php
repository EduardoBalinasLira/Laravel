<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function gerSessionData(Request $request){
        if($request->session()->has('name')) {
            echo $request->session()->get('name');
        } else {
            echo 'No data in the session';
        }
    }

    public function storeSessionData(Request $request) {
        $request->session()->put('name','Eduardo');
        echo "Data has been added to the session";
    }

    public function deleteSessionData(Request $request) {
        $request->session()->forget('name');
        echo "Data has been remove from the session";
    }

}
