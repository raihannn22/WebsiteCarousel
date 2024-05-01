<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    public function dashboard()
    {
        $carousels = Carousel::all();

        return view('admin.carousel.index', compact('carousels'));
    }

    public function form()
    {
        return view('admin.carousel.create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'caption' => 'required',
            'image' => 'required|mimes:jpeg,png|max:2000',
        ]);

        $uploadImage = $request->file('image');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $storeImage = $imageName . time() . "." . $imageExt;
        $request->image->move(public_path('/images/'), $storeImage);

        $carousel = Carousel::create([
            'image' => $storeImage,
            'caption' => $request->caption,
            'judul' => $request->judul,
        ]);

        // Carousel::create([
        //     'caption' => $request->caption,
        //     'judul' => $request->judul,
        // ]);

        return redirect()->back()->with('message', ' Upload Succesfully');
    }

    public function edit($id)
    {
        $carousel = Carousel::find($id);

        return view('admin.carousel.edit', compact('carousel'));
    }

    public function update(Request $request, $id)
    {
        $carousel = Carousel::find($id);
        $request->validate([
            'judul' => 'required',
            'caption' => 'required',
            'image' => 'required|mimes:jpeg,png|max:2000',
        ]);


        $destination = 'images/'. $carousel->image;
        if (File::exists($destination))
            {
                File::delete($destination);
            }
        $uploadImage = $request->file('image');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $storeImage = $imageName . time() . "." . $imageExt;
        $request->image->move(public_path('/images/'), $storeImage);

        $carousel -> update([
            'image' => $storeImage,
            'caption' => $request->caption,
            'judul' => $request->judul,
        ]);

        return redirect()->back()->with('message', ' Upload Succesfully');
    }
}
