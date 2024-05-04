@extends('admin')



@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Buat data Fitur baru</h1>
    <form action="{{route('fitur.create')}}" method="post" enctype="multipart/form-data">
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
        <button class="btn btn-primary">Submit</button>
    </form>

    @if (session()->has ('message'))
    <div class="alert alert-success mt-5"> {{ session()->get('message')}}</div>
    @endif



</div>
@endsection


