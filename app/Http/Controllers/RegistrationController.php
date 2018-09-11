<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }
    
    public function store(Request $request) {
        /* dd($request->name); */
        // validate the form
        /* $this->validate($request, [ */
        /*     'name' => 'required', */
        /*     'email' => 'required|email', */
        /*     'password' => 'required|confirmed', */
        /* ]); */

        // create and save the user
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        
        // using the Facade, but I couldn't get that to work so used the above method (for this example)
        /* $user = User::create(request([ */
        /*     'name' => $request->name, */ 
        /*     'email' => $request->email, */ 
        /*     'password' => bcrypt($request->password), */
        /* ])); */

        // sign them in
        // using the facade...
        /* \Auth::login(); */

        // using the helper method
        auth()->login($user);

        // redirect to the home page
        return redirect()->home();
    }
}
