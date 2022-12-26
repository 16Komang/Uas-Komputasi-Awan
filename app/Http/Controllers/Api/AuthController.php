<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use App\Traits\ApiResponse;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    use ApiResponse;

    public function loginPage()
    {
        return view('pages.Login');
    }

    public function registerPage()
    {
        return view('pages.Register');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        if (!Auth::attempt($validated)) {
            return $this->apiError('Credential not match', Response::HTTP_UNAUTHORIZED);
        }

        if (auth()->attempt(array('email' => $request['email'], 'password' => $request['password']))) {
            if (Auth::user()->role_id == 1) {
                return redirect()->route("dashboard");
            } else if (Auth::user()->role_id == 2) {
                $user = User::where('email', $validated['email'])->first();
                $user->createToken('auth_token')->plainTextToken;
                return redirect()->route("profile");
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }

        // $user = User::where('email', $validated['email'])->first();
        // $token = $user->createToken('auth_token')->plainTextToken;
        // $data = $this->apiSuccess([
        //         'token' => $token,
        //         'token_type' => 'Bearer',
        //         'user' => $user,
        //         'user' => auth()->user()
        //     ]);
    }

    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();
        User::create([
            'name' => $validated['name'],
            'role_id' => 2 ,
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()->route('loginPage');

        // return response()->json(['success' => true, 'data' => $user]);

        // $token = $user->createToken('auth_token')->plainTextToken;
        // return $this->apiSuccess([
        //     'token' => $token,
        //     'token_type' => 'Bearer',
        //     'user' => $user,
        // ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');;
    }
}
