@extends('admin')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail</h1>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('detail.dashboard')}}">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-plus-circle me-1" ></i>
            Buat data Detail
        </div>

        <div class="card-body">

            <form action="{{route('detail.create')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>

                    <div class="mb-3">
                        <label for="caption" class="form-label">Caption</label>
                        <textarea class="form-control" id="caption" name="caption" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control-file" id="image" name="image" required>
                    </div>


        </div>
    </div>
</div>

<div class="container-fluid px-4">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-plus-circle me-1" ></i>
            Buat data Post Detail
        </div>

        <div class="card-body">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="postjudul" name="postjudul" required >
                    </div>

                    <div class="mb-3">
                        <label for="caption" class="form-label">Caption Post</label>
                        <textarea class="form-control" id="postcaption" name="postcaption" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" required>
                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Map</label>
                        <input type="text" class="form-control" id="map" name="map" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Satu Post</label>
                        <input type="file" class="form-control-file" id="imagesatu" name="imagesatu" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Dua Post</label>
                        <input type="file" class="form-control-file" id="imagedua" name="imagedua" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Tiga Post</label>
                        <input type="file" class="form-control-file" id="imagetiga" name="imagetiga" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Empat Post</label>
                        <input type="file" class="form-control-file" id="imageempat" name="imageempat" required>
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>

@endsection


