<?php

namespace App\Http\Controllers;

use App\AccountType;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the settings page.
     *
     * @return \Illuminate\Http\Response
     */
     public function settings()
     {
        $accountTypes = AccountType::all();        
        return view('settings', compact('accountTypes'));
     }

     public function settingsNew(Request $request)
     {
         $accountType = new AccountType;
         $accountType->account_type = $request->account_type;
         $accountType->save();
         return back();

     }

}
