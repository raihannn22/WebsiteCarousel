<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function dashboard()
    {
    $details = Detail::all();

    return view('admin.detail.index', compact('details'));
    }

    public function form()
    {
        return view('admin.detail.create');
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
        $request->image->move(public_path('images/details'), $storeImage);

        $detail = Detail::create([
            'image' => $storeImage,
            'caption' => $request->caption,
            'judul' => $request->judul,
        ]);

        // detail::create([
        //     'caption' => $request->caption,
        //     'judul' => $request->judul,
        // ]);

        return redirect()->route('detail.dashboard')->with('message', ' Upload data detail berhasil');
    }

    public function edit($id)
    {
        $detail = Detail::find($id);

        return view('admin.detail.edit', compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $detail = Detail::find($id);
        $request->validate([
            'image' => 'required|mimes:jpeg,png|max:2000',
        ]);


        $destination = 'images/details/'.$detail->image;
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
        $request->image->move(public_path('images/details'), $storeImage);

        $detail -> update([
            'image' => $storeImage,
            'caption' => $request->caption,
            'judul' => $request->judul,
        ]);

        return redirect()->route('detail.dashboard')->with('message', 'Edit data detail berhasil');
    }

    public function delete ($id){
        $detail = Detail::find($id);
        $destination = 'images/details/'.$detail->image;
        if (File::exists($destination))
            {
                File::delete($destination);
            }
        $detail->delete();

        return redirect()->back()->with('message', 'Hapus data detail berhasil');
    }
}
