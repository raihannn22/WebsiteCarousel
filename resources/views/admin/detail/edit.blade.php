@extends('admin')



@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail</h1>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('detail.dashboard')}}">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-pencil-square me-1"></i>
            Edit data Detail
        </div>

        <div class="card-body">

            <form action="{{ route('detail.update', $detail->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{ $detail->judul }}">
                </div>

                <div class="mb-3">
                    <label for="caption" class="form-label">Caption</label>
                    <textarea class="form-control" id="caption" name="caption">{{ $detail->caption }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Update Gambar</label>
                    <input type="file" class="form-control-file" id="image" name="image" value="{{$detail->image}}" required>
                    <img src="{{asset('images/details/'.$detail->image)}}" alt="" style="width: 70px">
                </div>
                <button class="btn btn-primary">Submit</button></br>
                <label for="caption" class="form-label mt-4 fw-bold"><em>*jika anda tidak ingin edit gambar masukkan ulang file/gambar yang sama</em></label>

            </form>
        </div>
    </div>
</div>

@endsection


