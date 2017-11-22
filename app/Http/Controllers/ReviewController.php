<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use App\Upload;

class ReviewController extends Controller
{	
  public function index(Request $request)
  {
    $reviews = Review::orderBy('id','DESC')->paginate(5);
    return view('reviews.create',compact('reviews'))   //
                ->with('i', ($request->input('page', 1) - 1) * 5);

  }
  public function create()
  {
    return view('reviews.create');
  }
  
  public function store(Request $request)
  {
    $this->validate($request, [
        'name' => 'required',
		'reviews' => 'required',
    ]);

    $input = $request->all();
	
    $review = Review::create($input);
    return redirect()->route('review.index')
                    ->with('success','Image/file successfully added');
  }
}
