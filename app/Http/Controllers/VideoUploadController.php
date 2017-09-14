<?php

namespace App\Http\Controllers;

use App\ProductsPhoto;
use Illuminate\Http\Request;
use App\ProductsVideo;
use App\Product;
use App\Http\Requests\VideoUploadRequest;
use Illuminate\Support\Facades\Storage;

class VideoUploadController extends Controller
{
    //
    public function uploadForm()
    {
        return view('upload_video_form');
    }

    public function uploadSubmit(VideoUploadRequest $request)
    {
        // Coming soon...
        $product = Product::create($request->all());
        // foreach ($request->photos as $photo) {

        $uniqueFileName = uniqid() . '.' . $request->file('video')->getClientOriginalExtension();
        Storage::disk('local')->put('videos', $request->file('video'));

        ProductsPhoto::create([
            'product_id' => $product->id,
            'filename' => $uniqueFileName
        ]);

    return 'Upload successful!';
        }

}
