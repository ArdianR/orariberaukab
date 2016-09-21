<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RegisterRequest;
use AppHttpControllersController;
use JWTAuth;
use TymonJWTAuthExceptionsJWTException;
use App\User;


class AuthenticateController extends Controller
{
	public function __construct(User $user,JWTAuth $jwtauth)
	{
		$this->middleware('jwt.auth',['except' => ['authenticate','register']]);		
	}

    public function index()
    {
    	$user = User::all();
    	return $user;
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            // verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }
        } catch (JWTException $e) {
            // something went wrong
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        // if no errors are encountered we can return a JWT
        return response()->json(compact('token'));
    }

    public function register(RegisterRequest $request)
    {
    	try{
    		$newUser = User::create([
    			'name' => $request->get('name'),
    			'email' => $request->get('email'),
    			'password' => bcrypt($request->get('password'))
    		]);
    	}catch(Illuminate\Database\QueryException $e){
    		$errorCode = $e->errorInfo[1];
    		if($errorCode == 1062){
    			return response()->json(['errors'=>'User id sudah terdaftar!']);
    		}else{
    			return response()->json(['error'=>'Gagal menyimpan data!']);
    		}
    	}
    	
    	return response()->json(['token' => JWTAuth::fromUser($newUser)]);
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getStatusCode());

        } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['token_absent'], $e->getStatusCode());

        }

        // the token is valid and we have found the user via the sub claim
        return response()->json(compact('user'));
    }
}
