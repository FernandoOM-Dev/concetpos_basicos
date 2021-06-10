<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

class ImageController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Product $product, Request $request)
    {
        $file = $request->file('image');
        Storage::disk('local')->put($product->slug.'.png', File::get($file));
        $product->images()->create([
            'image_path' => $product->slug.'.png'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $image = $product->images()->first();
        $name = $image->image_path;
        $content = Storage::get($name);
        return $content;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $image = $product->images()->first();
        Storage::delete($image->image_path);
        $image->delete();
    }
}
