<?php

use App\video;
use Illuminate\Support\Facades\Route;
use Vimeo\Laravel\Facades\Vimeo;

Route::view('/', 'welcome');

Route::get('/all', function () {
    $videos = [];
    $vimeo  = Vimeo::request('/me/videos', ['per_page' => 10], 'GET');
    if ($vimeo['status'] == 200) {
        $data = $vimeo['body']['data'];
        dd($data);
        foreach ($data as $video) {
            $videos[] = video::create([
                'video_id' => substr($video['uri'], 8),
                'video_type' => "vimeo",
                'title' => $video['name'],
                'description' => $video['description'],
                'duration' => $video['duration'],
                'width' => $video['width'],
                'height' => $video['height'],
                'image' => $video['pictures']['sizes'][count($video['pictures']['sizes']) - 1]['link']
            ]);
        }
    }
    dd($videos);
});

Route::get('upload', function () {
    $video  = Vimeo::upload(storage_path("app/public/video.mp4" , [
        'name' => "محاضرة 1"
    ]));
    dd($video);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
