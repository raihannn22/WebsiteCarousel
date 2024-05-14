@extends('admin')

@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Detail</h1>

            <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
            </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List data Detail
                </div>

                <div class="card-body">

                    <a href="{{route('detail.form')}}" class="btn btn-primary mb-3">Create new</a>

                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Caption</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($details as $detail)
                            <tr>
                                <th scope="row"> {{$loop->iteration}} </th>
                                <td> {{$detail->judul}} </td>
                                <td> {{$detail->caption}} </td>
                                <td> <img src="{{asset('images/details/'.$detail->image)}}" alt="" style="width: 70px"></td>
                                <td>
                                    <form action="{{route('detail.delete', $detail->id )}}" method="post" onsubmit="return confirm('Apakah anda yakin untuk hapus data?')">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('detail.edit', $detail->id )}}" class="btn btn-sm btn-warning mb-2">Edit</a> <br>
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td></th>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>


             <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List Post data Detail
                </div>

                <div class="card-body">

                    <table id="datatablesSimples">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Post untuk detail dengan judul</th>
                                <th>Stock</th>
                                <th>Judul Post</th>
                                <th>Caption Post</th>
                                <th>Harga</th>
                                <th>Map</th>
                                <th>Gambar Satu</th>
                                <th>Gambar Dua</th>
                                <th>Gambar Tiga</th>
                                <th>Gambar Empat</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($details as $detail)
                            <tr>
                                <th scope="row"> {{$loop->iteration}} </th>
                                <td> {{$detail->judul}} </td>
                                <td> {{$detail->postDetail->stock}} </td>
                                <td> {{$detail->postDetail->postjudul}} </td>
                                <td> {!! $detail->postDetail->postcaption !!} </td>
                                <td> {{$detail->postDetail->harga}} </td>
                                <td> {{$detail->postDetail->map}} </td>
                                <td> <img src="{{asset('images/posts/'.$detail->postDetail->imagesatu)}}" alt="" style="width: 70px"></td>
                                <td> <img src="{{asset('images/posts/'.$detail->postDetail->imagedua)}}" alt="" style="width: 70px"></td>
                                <td> <img src="{{asset('images/posts/'.$detail->postDetail->imagetiga)}}" alt="" style="width: 70px"></td>
                                <td> <img src="{{asset('images/posts/'.$detail->postDetail->imageempat)}}" alt="" style="width: 70px"></td>
                                <td>
                                    <form action="{{route('detail.delete', $detail->id )}}" method="post" onsubmit="return confirm('Apakah anda yakin untuk hapus data?')">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('detail.editpost', $detail->id )}}" class="btn btn-sm btn-warning mb-2">Edit Kata</a> <br>
                                        <a href="{{route('detail.editpostgambar', $detail->id )}}" class="btn btn-sm btn-info">EditGambar</a>
                                    </form>
                                </td></th>
                            </tr>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
@if (session()->has ('message'))
    <script>
        toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-bottom-right",
                };
        toastr.success('{{session()->get('message')}}', 'Sistem', {timeOut: 5000})
    </script>
@endif
@endsection
