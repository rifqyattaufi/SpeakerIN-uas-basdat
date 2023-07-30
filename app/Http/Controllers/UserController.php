<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Documentation;
use App\Models\Expertise;
use App\Models\Expertise_Speaker;
use App\Models\SocialMedia;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function SpeakerRegister()
    {
        $expertise = Expertise::all();

        return view('speaker.register', compact(['expertise']));
    }

    public function postSpeakerRegister(Request $request)
    {
        $request->validate([
            'profilePhoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gender' => 'required',
            'age' => 'required|numeric|min:18|max:100',
            'lastEducation' => 'required|string',
            'currentJob' => 'required|string',
            'description' => 'required|string',
            'province' => 'required|string',
            'city' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $user = Auth::user();
        $speaker = new Speaker();

        $speaker->user_id = $user->id;
        $speaker->gender = $request->gender;
        $speaker->age = $request->age;
        $speaker->lastEducation = $request->lastEducation;
        $speaker->currentJob = $request->currentJob;
        $speaker->description = $request->description;
        $speaker->province = $request->province;
        $speaker->city = $request->city;
        $speaker->price = $request->price;

        $imageName = time() . '.' . $request->profilePhoto->extension();
        $request->profilePhoto->move(public_path('uploads/speaker/profilePhoto'), $imageName);

        $speaker->profilePhoto = $imageName;

        $speaker->save();

        if ($request['socialMediaLink-linkedIn'] != null) {
            $socialMedia = new SocialMedia();
            $socialMedia->speaker_id = $speaker->id;
            $socialMedia->socialMediaName = 'LinkedIn';
            $socialMedia->socialMediaLink = $request['socialMediaLink-linkedIn'];
            $socialMedia->save();
        }

        if ($request['socialMediaLink-twitter'] != null) {
            $socialMedia = new SocialMedia();
            $socialMedia->speaker_id = $speaker->id;
            $socialMedia->socialMediaName = 'Twitter';
            $socialMedia->socialMediaLink = $request['socialMediaLink-twitter'];
            $socialMedia->save();
        }

        if ($request['socialMediaLink-facebook'] != null) {
            $socialMedia = new SocialMedia();
            $socialMedia->speaker_id = $speaker->id;
            $socialMedia->socialMediaName = 'Facebook';
            $socialMedia->socialMediaLink = $request['socialMediaLink-facebook'];
            $socialMedia->save();
        }

        if ($request['socialMediaLink-instagram'] != null) {
            $socialMedia = new SocialMedia();
            $socialMedia->speaker_id = $speaker->id;
            $socialMedia->socialMediaName = 'Instagram';
            $socialMedia->socialMediaLink = $request['socialMediaLink-instagram'];
            $socialMedia->save();
        }

        if ($request['socialMediaLink-github'] != null) {
            $socialMedia = new SocialMedia();
            $socialMedia->speaker_id = $speaker->id;
            $socialMedia->socialMediaName = 'Github';
            $socialMedia->socialMediaLink = $request['socialMediaLink-github'];
            $socialMedia->save();
        }

        foreach ($request->socialMediaName as $index => $socialMediaData) {
            if (isset($socialMediaData) && isset($request->socialMediaLink[$index])) {
                $socialMedia = new SocialMedia();
                $socialMedia->speaker_id = $speaker->id;
                $socialMedia->socialMediaName = $socialMediaData;
                $socialMedia->socialMediaLink = $request->socialMediaLink[$index];
                $socialMedia->save();
            }
        }

        $request->validate([
            'expertise.*' => 'required|string',
        ]);
        foreach ($request->expertise as $expertiseData) {
            if ($expertiseData != null) {
                $expertiseSpeaker = new Expertise_Speaker();
                $expertiseSpeaker->speaker_id = $speaker->id;
                $expertiseSpeaker->expertise_id = $expertiseData;
                $expertiseSpeaker->save();
            }
        }

        $request->validate([
            'certificate.*' => 'required|string',
            'certificatePhoto.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        foreach ($request->certificate as $index => $certificateData) {
            if ($certificateData != null && $request->certificatePhoto[$index] != null) {
                $certificate = new Certificate();
                $certificate->speaker_id = $speaker->id;
                $certificate->certificate = $certificateData;

                $certificateName = time() . '.' . $request->certificatePhoto[$index]->extension();

                $request->certificatePhoto[$index]->move(public_path('uploads/speaker/certificatePhoto'), $certificateName);

                $certificate->certificatePhoto = $certificateName;

                $certificate->save();
            }
        }

        $request->validate([
            'documentation.*' => 'required|string',
            'documentationPhoto.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        foreach ($request->documentation as $index => $documentationData) {
            if ($documentationData != null && $request->documentationPhoto[$index] != null) {
                $documentation = new Documentation();
                $documentation->speaker_id = $speaker->id;
                $documentation->documentation = $documentationData;

                $documentationName = time() . '.' . $request->documentationPhoto[$index]->extension();

                $request->documentationPhoto[$index]->move(public_path('uploads/speaker/documentationPhoto'), $documentationName);

                $documentation->documentationPhoto = $documentationName;

                $documentation->save();
            }
        }
    }
}
