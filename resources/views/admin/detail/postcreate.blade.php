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
            Buat data Postingan Detail
        </div>

        <div class="card-body">

            <form action="{{route('detail.createpost', $detail->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="judulpost" name="judulpost" value="{{ $detail->judulpost }}">
                    </div>

                    <div class="mb-3">
                        <label for="caption" class="form-label">Caption Post</label>
                        <textarea class="form-control" id="caption" name="captionpost" required>{{ $detail->captionpost }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="caption" class="form-label">Map</label>
                        <input type="text" class="form-control" id="judulpost" name="judulpost" value="{{ $detail->map }}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar</label>
                        <input type="file" class="form-control-file" id="imagesatu" name="imagesatu" required>
                    </div>
                    <button class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>

@endsection


