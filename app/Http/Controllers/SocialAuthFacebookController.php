<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use App\Services\SocialFacebookAccountService;
class SocialAuthFacebookController extends Controller
{
  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service)
    {
    	try{
            $user = Socialite::driver('facebook')->user();
        } catch (\Exception $e) {
        	alert()->danger('Something Went Wrong');
            return redirect('/login');
        }


        $fuser = User::where('email',$user->email)->first();
/*        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());*/
        auth()->login($fuser);
        return redirect()->to('/home');
    }
}