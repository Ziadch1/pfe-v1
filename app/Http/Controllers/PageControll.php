<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageControll extends Controller
{
    public function home(){
        if (Auth::id()) {
            $usertype = Auth()->user()->type;
    
            if ($usertype === 'user') {
                return view('pages.home');
            } else if ($usertype === 'admin') {
                return view('admin.home');
            }
        }
    return view('pages.home');
    }
    
    // public function fetchData()
    // {
    //     $apiKey = '61d03fc60c3d19f380ec89cc291c7498';
    //     $response = Http::get("https://api.themoviedb.org/3/trending/all/day?api_key=$apiKey");
    
    //     if ($response->successful()) {
    //         $data = $response->json();
    //         // Process the data or return it to the view
    
    //         // Generate HTML form markup
    //         $form = '<form>';
    
    //         if (isset($data['results'])) {
    //             foreach ($data['results'] as $movie) {
    //                 if (isset($movie['title']) && isset($movie['poster_path'])) {
    //                     $title = $movie['title'];
    //                     $image = $movie['poster_path'];
    //                     $form .= '<div style="margin-bottom: 20px;">';
    //                     $form .= '<h3 style="font-size: 20px; margin-bottom: 10px;">' . $title . '</h3>';
    //                     $form .= '<img src="https://image.tmdb.org/t/p/w500' . $image . '" alt="' . $title . '" style="width: 200px;">';
    //                     $form .= '</div>';
    //                 }
    //             }
    //         }
    
    //         $form .= '</form>';
    
    //         return $form;
    //     } else {
    //         return response('Failed to fetch data from the API.', $response->status());
    //     }
    // }

    public function contact(){
        return view('pages.contact');
    }
    public function pcgamer()
    {
        $pcgamers = Product::where('type', 'pcgamer')->get();
        return view('pages.categories.pcGamer', compact('pcgamers'));
    }
    
    public function pcportable(){
        $pcportables = Product::where('type', 'pcportable')->get();
        return view('pages.categories.pcPortable',compact('pcportables'));
    }
    public function monitors(){
        $monitors = Product::where('type', 'monitors')->get();
        return view('pages.categories.monitors',compact('monitors'));
    }
    public function accessoire(){
        return view('pages.categories.accessoires');
    }
    public function shope(){
        $allproducts = Product::get();
        return view('pages.categories.shope', compact('allproducts'));
    }
   
}
