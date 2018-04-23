<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Gallery;

class ImageController extends Controller
{
    public function postImages(Request $request) {
      $photo = $request->file('mini_image');
      $photo2 = $request->file('large_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();
      $imagename2 = time().'1.'.$photo2->getClientOriginalExtension();

      $destinationPath = public_path('/images/gallery');
      $thumb_img = Image::make($photo->getRealPath())->resize(370, 370);
      $thumb_img2 = Image::make($photo2->getRealPath())->resize(1200, 800);
      $thumb_img->save($destinationPath.'/'.$imagename);
      $thumb_img2->save($destinationPath.'/'.$imagename2);

      $data = $request->all();
      $data['mini_image'] = $imagename;
      $data['large_image'] = $imagename2;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Gallery::create($data);

      return redirect()->back()->with("success_status", "Image Added")->withInput();
    }
    public function postEditedImage(Request $request) {
      $photo = $request->file('mini_image');
      $photo2 = $request->file('large_image');
      $imagename = time().'.'.$photo->getClientOriginalExtension();
      $imagename2 = time().'1.'.$photo2->getClientOriginalExtension();

      $destinationPath = public_path('/images/gallery');
      $thumb_img = Image::make($photo->getRealPath())->resize(370, 370);
      $thumb_img2 = Image::make($photo2->getRealPath())->resize(1200, 800);
      $thumb_img->save($destinationPath.'/'.$imagename);
      $thumb_img2->save($destinationPath.'/'.$imagename2);

      $data = $request->all();
      $data['mini_image'] = $imagename;
      $data['large_image'] = $imagename2;

      if(isset($data['_token'])):
        unset($data['_token']);
      endif;

      Gallery::where('id', $request->input('id'))->update($data);

      return redirect('/view images')->with("success_status", "Image Edited")->withInput();
    }
}
