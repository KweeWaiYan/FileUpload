<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductsPdf;
use App\Http\Requests\PdfUploadRequest;
use Illuminate\Support\Facades\Storage;

class PdfUploadController extends Controller
{
    //
    public function uploadForm()
    {
        return view('upload_pdf_form');
    }

    public function uploadSubmit(PdfUploadRequest $request)
    {
        // Coming soon...

            $product = Product::create($request->all());
            $uniqueFileName = uniqid()  . '.' . $request->file('pdf')->getClientOriginalExtension();
            Storage::disk('local')->put('pdfs',$request->file('pdf'));

            ProductsPdf::create([
                'product_id' => $product->id,
                'filename' => $uniqueFileName
            ]);

        return 'Upload successful!';
    }
}
