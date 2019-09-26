<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct() {

    }

    public function index() {
        $user = Auth::user();

        if($user->hasRole('Admin')){

            $user_count = User::all()->count();



            return view('dashboard.admin')->with([
                'user_count' => $user_count
            ]);
        } else {
            abort(404);
        }
    }
}
