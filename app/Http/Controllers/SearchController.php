<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Post;
use App\search;
use DB;



class SearchController extends Controller { 


public function index(Request $request)
{
$distances = DB::table('posts')->select('distance')->distinct()->get()->pluck('distance');
$prices = DB::table('posts')->select('price')->distinct()->get()->pluck('price');

$postsInRange = $request->has('distance')
? Post::where('distance', $request->distance)->get()
: [];
$postsInRange1 = $request->has('price')
? Post::where('price', $request->price)->get()
: [];

return view('Pages.search', [
'distances' => $distances,
'prices' => $prices,
'posts' => $postsInRange,
'posts' => $postsInRange1,
]);
  

   }

   public function store(Request $request)
   {
       // This will return all request data to your screen.
       return $request->all();
       return view('Pages.search');
   }


}


