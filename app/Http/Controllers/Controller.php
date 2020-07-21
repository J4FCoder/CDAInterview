<?php

namespace App\Http\Controllers;

use App\Post;
use App\Setting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Request as Request;

class Controller extends BaseController
{
    /**
     * Show the application First global page.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('index', [
            'post' => Post::query()->first(),
            'setting' => Setting::query()->first()
        ]);
    }

    /**
     * Show the application First global page.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function contactUs()
    {
        return view('contact', [
            'post'=>null,
            'setting' => Setting::query()->first()
        ]);
    }

    /**
     * send contact us email
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sendEmail(Request $request)
    {
        $to_email = Setting::query()->first()->email_contact;
        $to_message = 'CDA Interviewer';
        $data = [
            'receiver_name' => $to_message,
            'sender_name' => $request->request->get('name'),
            'body' => $request->request->get('description'),
            'sender_email' => $request->request->get('email')
        ];
        Mail::send('mailer', $data, function ($message) use ($to_message, $to_email) {
            $message->to($to_email)->subject('CDA Interview | Contact us form');
        });
        return self::contactUs();
    }
}
