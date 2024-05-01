@extends('admin')



@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit data Carousel baru</h1>
    <form action="{{ route('carousel.update', $carousel->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $carousel->judul }}">
        </div>

        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <textarea class="form-control" id="caption" name="caption">{{ $carousel->caption }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Update Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image">
            <img src="{{asset('images/'.$carousel->image)}}" alt="" style="width: 70px">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>

    @if (session()->has ('message'))
    <div class="alert alert-success mt-5"> {{ session()->get('message')}}</div>
    @endif



</div>
@endsection


