<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Upload;
use Carbon;
class UploadController3 extends Controller
{	
  public function index(Request $request)
  {
    $uploads = Upload::orderBy('id','DESC')->paginate(5);
    return view('uploads.index',compact('uploads'))
                ->with('i', ($request->input('page', 1) - 1) * 5);

  }
  public function index2(Request $request)
  {
    $uploads = Upload::orderBy('id','DESC')->paginate(5);
    return view('welcome',compact('uploads'))
                ->with('i', ($request->input('page', 1) - 1) * 5);
  }

  public function create()
  {
    return view('uploads.create');
  }
  
  public function store(Request $request)
  {
    $this->validate($request, [
        'name' => 'required',
        'image' => 'required|mimes:jpeg,png,jpg',
        'sinopsis' => 'required',
		'date' => 'required'
    ]);

    $input = $request->all();
	 $input['date']= Carbon\Carbon::createFromFormat('d/m/Y', $request['date']);
    $imageName = '';
    if ($request->hasFile('image')) {
      $imageExtension = $request->file('image')->getClientOriginalExtension();
      $imageName = 'image_'.time().'.'.$imageExtension;
      $imageDestination = base_path() . '/public/uploads';
      $request->file('image')->move($imageDestination, $imageName);
      $input['image'] = $imageName;
    }

    $upload = Upload::create($input);
    return redirect()->route('upload.index')
                    ->with('success','Image/file successfully added');
  }
}
