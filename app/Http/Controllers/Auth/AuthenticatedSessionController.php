<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    public function showAgentLoginForm()
    {
        return view('auth.agent_login'); // Load the agent login view
    }

    public function agentLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (auth()->user()->is_admin == 2) { // Check if user is an agent
                return redirect()->intended('/agent/home'); // Redirect to agent dashboard
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function showDispatcherLoginForm()
    {
        return view('auth.dispatcher_login'); // Load the dispatcher login view
    }

    public function dispatcherLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (auth()->user()->is_admin == 3) { // Check if user is a dispatcher
                return redirect()->intended('/dispatcher/home'); // Redirect to dispatcher dashboard
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login'); // Change to your default login page if needed
    }
}
