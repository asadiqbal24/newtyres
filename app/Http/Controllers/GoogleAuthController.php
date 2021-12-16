<?php

namespace App\Http\Controllers;
use Socialite;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class GoogleAuthController extends Controller
{
    public function redirectToProvider(){
	    return Socialite::driver('google')->redirect();
	}


public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {

            return redirect('/login');
        }

        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
/*            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->save();*/

             $newUser = User::create([
                    'email' => $user->email,
                    'name' => $user->name,
                    'google_id'=>$user->id
                ]);


            $role = DB::table('roles')->where('slug','user')->first();
            $newUser->roles()->attach($role->id);

            auth()->login($newUser, true);
        }
        return redirect()->to('/home');
    }

}
