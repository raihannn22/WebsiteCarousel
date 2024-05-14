@extends('admin')



@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail</h1>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('detail.dashboard')}}">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit gambar</li>
    </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-pencil-square me-1"></i>
            Edit gambar data Detail
        </div>

        <div class="card-body">

            <form action="{{ route('detail.updatepostgambar', $detail->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                    <div class="mb-3">
                        <label for="image" class="form-label">Update Gambar Satu Post</label>
                        <input type="file" class="form-control-file" id="imagesatu" name="imagesatu" required>
                        <img src="{{asset('images/posts/'.$detail->postDetail->imagesatu)}}" alt="" style="width: 70px">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Update Gambar Dua Post</label>
                        <input type="file" class="form-control-file" id="imagedua" name="imagedua" required>
                        <img src="{{asset('images/posts/'.$detail->postDetail->imagedua)}}" alt="" style="width: 70px">
                    </div>

                     <div class="mb-3">
                        <label for="image" class="form-label">Update Gambar Tiga Post</label>
                        <input type="file" class="form-control-file" id="imagetiga" name="imagetiga" required>
                        <img src="{{asset('images/posts/'.$detail->postDetail->imagetiga)}}" alt="" style="width: 70px">
                    </div>

                     <div class="mb-3">
                        <label for="image" class="form-label">Update Gambar Empat Post</label>
                        <input type="file" class="form-control-file" id="imageempat" name="imageempat" required>
                        <img src="{{asset('images/posts/'.$detail->postDetail->imageempat)}}" alt="" style="width: 70px">
                    </div>

                    <button class="btn btn-primary">Submit</button> <br>
                    <label for="caption" class="form-label mt-4 fw-bold"><em>*jika anda tidak ingin edit gambar masukkan ulang file/gambar yang sama</em></label>
            </form>

            {{-- modal --}}

        </div>
    </div>
</div>

@endsection


