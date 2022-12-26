<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Bride\CreateBrideRequest;
use App\Models\Attendance;
use App\Models\Brides;
use App\Models\Gallery;
use App\Models\Groom;
use App\Models\Guest;
use App\Models\Invitations;
use App\Models\Place;
use App\Models\Template;
use Attribute;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'PHPMailer-master/src/Exception.php';
// require 'PHPMailer-master/src/PHPMailer.php';
// require 'PHPMailer-master/src/SMTP.php';

class InvitationController extends Controller
{
    public function index()
    {
        $data = Template::all();
        return view('pages.component.pilihTemplate', ['data' => $data]);
    }

    public function nextForm($id)
    {
        $data = Template::where('id', $id)->get();
        return view('pages.component.form', ['data' => $data]);
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
        $guest = Guest::where('invitation_id', $id)->get();
        $total_guest = $guest->count();
        $data = [
            'invitation' => $invit,
            'bride' => $bride,
            'groom' => $groom,
            'place' => $place,
            'gallery' => $gallery,
            'guest' => $guest,
            'total_guest' => $total_guest
        ];
        return view('pages.component.undangan.' . $filename, ['data' => $data]);
    }

    public function updateImage($file)
    {
        $path = $file->file('avatar')->store('avatars');

        return $path;
    }

    public function createInvit(Request $request, $id)
    {
        $invitation = Invitations::create([
            'template_id' => $id,
            'user_id' => auth()->user()->id,
            'date' => $request['date'],
            'time_start' => $request['time_start'],
            'time_end' => $request['time_end'],
        ]);

        $invit_id = $invitation->id;

        $bride = $this->createBride($request, $invit_id);
        $groom = $this->createGroom($request, $invit_id);
        $place = $this->createPlace($request, $invit_id);
        $gallery = $this->createGallery($request, $invit_id);

        return redirect()->route('undangan', $invit_id);
    }


    public function createBride($request, $invit_id)
    {
        $file = $request->file('image');
        $filename  = $file->getClientOriginalName();
        $file->storeAs('images/bride/', $filename);
        $bride = Brides::create([
            'invitation_id' => $invit_id,
            'name' => $request['name'],
            'image' => $filename,
            'father' => $request['father'],
            'mother' => $request['mother'],
        ]);
        return $bride;
    }

    public function createGroom($request, $invit_id)
    {
        $file = $request->file('image_groom');
        $filename  = $file->getClientOriginalName();
        $file->storeAs('images/groom/', $filename);
        $groom = Groom::create([
            'invitation_id' => $invit_id,
            'name' => $request['name_groom'],
            'image' => $filename,
            'father' => $request['father_groom'],
            'mother' => $request['mother_groom'],
        ]);
        return $groom;
    }

    public function createPlace($request, $invit_id)
    {
        $file = $request->file('image_place');
        $filename  = $file->getClientOriginalName();
        $file->storeAs('images/place/', $filename);
        $place = Place::create([
            'name' => $request['name_place'],
            'invitation_id' => $invit_id,
            'image' => $filename,
            'address' => $request['address'],
            'place_desc' => $request['place_desc'],
        ]);
        return $place;
    }

    public function createGallery($request, $invit_id)
    {
        $file = $request->file('image_gallery');
        $filename  = $file->getClientOriginalName();
        $file->storeAs('images/gallery/', $filename);
        $gallery = Gallery::create([
            'name' => $filename,
            'invitation_id' => $invit_id,
        ]);
        return $gallery;
    }

    public function share()
    {
        // $validator = Validator::make($request->all(), [
        //     'email' => 'required|email|unique:subscribers'
        // ]);
        // if ($validator->fails()) {
        //     return new JsonResponse(
        //         [
        //             'success' => false,
        //             'message' => $validator->errors()
        //         ],
        //         422
        //     );
        // }
        // $email = $request->all()['email'];
        // $subscriber = Subscriber::create([
        //     'email' => $email
        // ]);
        // if ($subscriber) {
        //     Mail::to($email)->send(new Subscribe($email));
        //     return new JsonResponse(
        //         [
        //             'success' => true,
        //             'message' => "Thank you for subscribing to our email, please check your inbox"
        //         ],
        //         200
        //     );
        // }
    }
}
