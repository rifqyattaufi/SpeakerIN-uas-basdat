<?php

namespace App\Http\Controllers;

use App\Models\Speaker;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SpeakerController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $user = Auth::user();
            if (Speaker::where('user_id', $user->id)->first() == null) {
                return redirect()->route('speaker.register');
            } else if ($user->isActive == 0) {
                return redirect()->route('ban');
            } else if ($user->isActive == 2) {
                return redirect()->route('ban');
            }
            
            return $next($request);
        });
    }

    public function dashboard()
    {
        return view('speaker.dashboard');
    }
}
