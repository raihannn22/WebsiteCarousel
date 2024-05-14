@extends('admin')



@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail</h1>

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="{{route('detail.dashboard')}}">Detail</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit kata</li>
    </ol>
    </nav>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fa fa-pencil-square me-1"></i>
            Edit kata data Detail
        </div>

        <div class="card-body">

            <form action="{{ route('detail.updatepost', $detail->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul Post</label>
                        <input type="text" class="form-control" id="postjudul" name="postjudul" value="{{$detail->postDetail->postjudul}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="caption" class="form-label">Caption Post</label>
                        {{-- <div id="editor"> --}}
                        <textarea class="form-control" id="editor" name="postcaption" required>{{$detail->postDetail->postcaption}}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" value="{{$detail->postDetail->postjudul}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Map</label>
                        <input type="text" class="form-control" id="map" name="map" value="{{$detail->postDetail->postjudul}}" required>
                    </div>

                    <div class="mb-3">
                        <label for="judul" class="form-label">Stock :</label> <br>
                        <input type="number" step="1" min="0"max="100" class="form-control-sm" id="stock" q name="stock" value="{{$detail->postDetail->stock    }}" required>
                    </div>

                    <button class="btn btn-primary">Submit</button> <br>
            </form>

            {{-- modal --}}

        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection


