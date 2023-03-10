<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\user\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view('pages.user.profile', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, $id)
    // ID berasal dari route nya
    {
        $validated = $request->validated();
        if ($request['password']) {
            $data = [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $request['password'],
            ];
        } else {
            $data = [
                'name' => $validated['name'],
                'email' => $validated['email'],
            ];
        }
        try {
            $user = User::where('id', $id)->update($data);
            return response()->json(['success' => true, 'data' => $user]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }

}
