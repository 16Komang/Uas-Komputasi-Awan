<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\admin\CreateTemplateeRequest;
use App\Models\Guest;
use App\Models\Template;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('pages.admin.admin');
    }

    public function showTemplate()
    {
        $temp = Template::all();
        return view('pages.admin.admin', ['temp' => $temp]);
    }

    public function storeTemplate(CreateTemplateeRequest $request)
    {
        $file = $request->file('cover');
        $filename  = $file->getClientOriginalName();
        $file->storeAs('images/place/', $filename);
        $temp = Template::create([
            'name' => $request['name'],
            'cover' => $filename,
            'filename' => $request['filename'],
            'desc' => $request['desc'],
        ]);
        return redirect('/list-template');
    }

    public function destroyUser($id)
    {
        $user = User::where('id', $id);
        $user->delete();
        return redirect('/list-acount');
    }

    public function destroyGuest($id)
    {
        $guest = Guest::where('id', $id);
        $guest->delete();
        return redirect('/list-guest');
    }

    public function destroyTemplate($id)
    {
        $temp = Template::where('id', $id);
        $temp->delete();
        return redirect('/list-template');
    }
}
