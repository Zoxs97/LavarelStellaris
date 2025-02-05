<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BackgroundController extends Controller
{
    public function ChangeImage(Request $request)
    {
        //image list
        $images = [
            asset('images/alien-base-image.jpg'),
            asset('images/alien-planet.jpg'),
            asset('images/planet-image.jpg'),
            asset('images/starship-image.jpg'),
        ];

        $currentIndex = Session::get('image_index', 0);
        $image_list_length = count($images);

        //update image index based on direction (+1 or -1)
        $direction = (int) $request->input('direction');

        // ternary operator fpr setting the index
        if ($direction === 1) {
            $currentIndex = ($currentIndex + 1) % $image_list_length;
        } elseif ($direction === -1) {
            $currentIndex = ($currentIndex - 1 + $image_list_length) % $image_list_length;
        }

        Session::put('image_index', $currentIndex);

        return response()->json([
            'image' => $images[$currentIndex]
        ]);
    }

}
