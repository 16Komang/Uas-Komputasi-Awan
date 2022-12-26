<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\GuestRequest;
use App\Models\Attendance;
use App\Models\Brides;
use App\Models\Gallery;
use App\Models\Groom;
use App\Models\Guest;
use App\Models\Invitations;
use App\Models\Place;
use App\Models\Template;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index($id)
    {
        return view('pages.component.guest', ['data' => ['id' => $id]]);
    }

    public function store(GuestRequest $request, $id)
    {
        Guest::create([
            'name' => $request['name_guest'],
            'invitation_id' => $id,
            'presence' => $request['presence'],
            'congratulation' => $request['congratulation'],
        ]);

        return redirect()->route('show', $id);
    }

    public function show($id)
    {
        $invit = Invitations::where('id', $id)->get()->first();
        $temp_id = $invit['template_id'];
        $temp = Template::where('id', $temp_id)->get()->first();
        $filename = $temp['filename'];
        $bride = Brides::where('invitation_id', $id)->get()->first();
        $groom = Groom::where('invitation_id', $id)->get()->first();
        $place = Place::where('invitation_id', $id)->get()->first();
        $gallery = Gallery::where('invitation_id', $id)->get()->first();
        $data = [
            'invitation' => $invit,
            'bride' => $bride,
            'groom' => $groom,
            'place' => $place,
            'gallery' => $gallery
        ];
        return view('pages.guest.' . $filename, ['data' => $data]);
    }
}
