<?php

namespace App\Http\Controllers;

use App\Post;
use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application admin panel dashboard.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('home', [
            'post' => Post::query()->first(),
            'setting' => Setting::query()->first()
        ]);
    }

    /**
     * Update home content
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updatePost(Request $request)
    {
        $post = Post::query()->first();
        $request->request->set('index' , $request->request->get('index') == 'on' ? 1 : 0);
        foreach ($request->request as $key => $value) {
            if ($key != '_token') {
                $post->$key = $value;
            }
        }
        $post->save();

        return self::index();
    }

    /**
     * Update portal settings
     * @param Request $request
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function updateSetting(Request $request)
    {
        $setting = Setting::query()->first();
        foreach ($request->request as $key => $value) {
            if ($key != '_token') {
                $setting->$key = $value;
            }
        }
        $setting->save();

        return self::index();
    }
}
