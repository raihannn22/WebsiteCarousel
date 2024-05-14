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
            'image' => 'required|mimes:jpeg,png|max:2000',
            'imagesatu' => 'required|mimes:jpeg,png|max:2000',
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

        $uploadImage = $request->file('imagesatu');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $insertImage = $imageName . time() . "." . $imageExt;
        $request->imagesatu->move(public_path('images/posts'), $insertImage);

        $uploadImage = $request->file('imagedua');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $getImage = $imageName . time() . "." . $imageExt;
        $request->imagedua->move(public_path('images/posts'), $getImage);

        $uploadImage = $request->file('imagetiga');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $putImage = $imageName . time() . "." . $imageExt;
        $request->imagetiga->move(public_path('images/posts'), $putImage);

        $uploadImage = $request->file('imageempat');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $masukImage = $imageName . time() . "." . $imageExt;
        $request->imageempat->move(public_path('images/posts'), $masukImage);

        $detail->postDetail()->create([
            'imagesatu' => $insertImage,
            'imagedua' => $getImage,
            'imagetiga' => $putImage,
            'imageempat' => $masukImage,
            'postjudul' => $request->postjudul,
            'postcaption' => $request->postcaption,
            'map' => $request->map,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

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

    public function editpost($id)
    {
        $detail = Detail::find($id);

        return view('admin.detail.editpost', compact('detail'));
    }

    public function updatepost(Request $request, $id)
    {
        $detail = Detail::find($id);

        $detail->postDetail()->update([
            'postjudul' => $request->postjudul,
            'postcaption' => $request->postcaption,
            'harga' => $request->harga,
            'map' => $request->map,
            'stock' => $request->stock,
        ]);

        return redirect()->route('detail.dashboard')->with('message', 'Edit Kata data detail post berhasil');
    }

    public function editpostgambar($id)
    {
        $detail = Detail::find($id);

        return view('admin.detail.editpostgambar', compact('detail'));
    }


    public function updatepostgambar(Request $request, $id)
    {
       $detail = Detail::find($id);
        $request->validate([
            'imagesatu' => 'required|mimes:jpeg,png|max:2000',
            'imagedua' => 'required|mimes:jpeg,png|max:2000',
            'imagetiga' => 'required|mimes:jpeg,png|max:2000',
            'imageempat' => 'required|mimes:jpeg,png|max:2000',
        ]);


        $destination1 = 'images/posts/'.$detail->postDetail->imagesatu;
        if (File::exists($destination1))
            {
                File::delete($destination1);
            }
        $uploadImage = $request->file('imagesatu');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $storeImage = $imageName . time() . "." . $imageExt;
        $request->imagesatu->move(public_path('images/posts'), $storeImage);

        $destination2 = 'images/posts/'.$detail->postDetail->imagedua;
        if (File::exists($destination2))
            {
                File::delete($destination2);
            }
        $uploadImage = $request->file('imagedua');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $getImage = $imageName . time() . "." . $imageExt;
        $request->imagedua->move(public_path('images/posts'), $getImage);

        $destination3 = 'images/posts/'.$detail->postDetail->imagetiga;
        if (File::exists($destination3))
            {
                File::delete($destination3);
            }
        $uploadImage = $request->file('imagetiga');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $putImage = $imageName . time() . "." . $imageExt;
        $request->imagetiga->move(public_path('images/posts'), $putImage);

        $destination4 = 'images/posts/'.$detail->postDetail->imageempat;
        if (File::exists($destination4))
            {
                File::delete($destination4);
            }
        $uploadImage = $request->file('imageempat');
        $imageNameWithExt = $uploadImage->getClientOriginalName();
        $imageName = pathinfo($imageNameWithExt, PATHINFO_FILENAME);
        // dd($imageName);
        $imageExt = $uploadImage->getClientOriginalExtension();
        $insertImage = $imageName . time() . "." . $imageExt;
        $request->imageempat->move(public_path('images/posts'), $insertImage);



        $detail->postDetail()->update([
            'imagesatu' => $storeImage,
            'imagedua' => $getImage,
            'imagetiga' => $putImage,
            'imageempat' => $insertImage,
        ]);

        return redirect()->route('detail.dashboard')->with('message', 'Edit data Gambar detail post berhasil');
    }
}
