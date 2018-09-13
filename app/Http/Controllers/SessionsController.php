<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct() {
        // auth'd users can't see this page.
        $this->middleware('guest', ['except' => 'destroy']);
    }

    public function create() {
        return view('sessions.create');
    }

    public function destroy() {
        auth()->logout();

        return redirect()->home();
    }

    public function store(Request $request) {
        if (!auth()->attempt(request(['email', 'password']))) {
            return back();
        }

        return redirect()->home();
    }
}
