<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;




class UserController extends Controller
{
    //show register create forms
    public function create(){
        return view('users.register');
    }
    //store
    public function store(Request $request){
        $formFields =$request->validate([
            'name'=> ['required','min:3'],
            'email'=>['required', Rule::unique('users','email')],
            'password' => [ 'required','confirmed', 'min:6',]


            ]);
            //hash password
            $formFields['password'] = bcrypt($formFields['password']);

            // $user = User::create($formFields);
        //   $user =  DB::table('users')->insert($formFields);

        //     auth() ->login($user);
        //     redirect('http://127.0.0.1:8000')->with('message', 'User created successfully and login in');

        //First, the user data is inserted into the "users" table using DB::table('users')->insert($formFields).
        DB::table('users')->insert($formFields);

        //Then, the user is fetched from the database using the email provided ($formFields['email']) using DB::table('users')->where('email', $formFields['email'])->first()

       $user = DB::table('users')->where('email', $formFields['email'])->first();

        auth()->loginUsingId($user->id);
        // Finally, a redirection is performed to

        return redirect('/')->with('message', 'User created successfully and logged in');
    //   return response()->json([
    //     'message','listing created successfully'
    // ]);

    }


    // logout user
    public function logout(Request $request){
        // remove the authentification information for the user session
        Auth()->logout();

        //to invalidate the user authontification and regenarate the token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message','logged out successfully !');

    }
    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $formFields =$request->validate([
            'email'=>'required',
            'password' => 'required'


            ]);

            if(auth()->attempt($formFields)){
                $request ->session()->regenerate();
             return   redirect('/')->with('message', ' logged in successfully !');

            }


            return back()->withErrors(['email'=>'invalid Credentials'])->onlyInput('email');






    }
}
