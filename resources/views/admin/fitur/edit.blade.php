@extends('admin')



@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Edit data fitur baru</h1>
    <form action="{{ route('fitur.update', $fitur->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $fitur->judul }}">
        </div>

        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <textarea class="form-control" id="caption" name="caption">{{ $fitur->caption }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Update Gambar</label>
            <input type="file" class="form-control-file" id="image" name="image" value="{{$fitur->image}}">
            <img src="{{asset('images/fiturs/'.$fitur->image)}}" alt="" style="width: 70px">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>

    @if (session()->has ('message'))
    <div class="alert alert-success mt-5"> {{ session()->get('message')}}</div>
    @endif



</div>
@endsection


