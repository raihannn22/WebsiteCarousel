<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fitur;
use Illuminate\Support\Facades\File;

class FiturController extends Controller
{
    public function dashboard()
    {
        $fiturs = Fitur::all();

        return view('admin.fitur.index', compact('fiturs'));
    }

    public function form()
    {
        return view('admin.fitur.create');
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
        $request->image->move(public_path('images/fiturs'), $storeImage);

        $fitur = Fitur::create([
            'image' => $storeImage,
            'caption' => $request->caption,
            'judul' => $request->judul,
        ]);
        return redirect()->route('fitur.dashboard')->with('message', ' Upload data fitur berhasil');
    }

        public function edit($id)
    {
        $fitur = Fitur::find($id);

        return view('admin.fitur.edit', compact('fitur'));
    }

    public function update(Request $request, $id)
    {
        $fitur = Fitur::find($id);
        $request->validate([
            'image' => 'required|mimes:jpeg,png|max:2000',
        ]);


        $destination = 'images/fiturs/'.$fitur->image;
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
        $request->image->move(public_path('images/fiturs'), $storeImage);

        $fitur -> update([
            'image' => $storeImage,
            'caption' => $request->caption,
            'judul' => $request->judul,
        ]);

        return redirect()->route('fitur.dashboard')->with('message', 'Edit data fitur berhasil');
    }

    public function delete ($id){
        $fitur = Fitur::find($id);
        $destination = 'images/fiturs/'.$fitur->image;
        if (File::exists($destination))
            {
                File::delete($destination);
            }
        $fitur->delete();

        return redirect()->back()->with('message', 'Hapus data fitur Berhasil');
    }
}
