@extends('admin')

@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            
            <h1 class="mt-4">Carousel</h1>

            <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin')}}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Carousel</li>
            </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List data Carousel
                </div>

                <div class="card-body">

                    <a href="{{route ('carousel.form')}}" class="btn btn-primary mb-3">Create new</a>

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
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Caption</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>

                        <tbody>
                            @foreach ($carousels as $carousel)
                            <tr>
                                <th scope="row"> {{$loop->iteration}} </th>
                                <td> {{$carousel->judul}} </td>
                                <td> {{$carousel->caption}} </td>
                                <td> <img src="{{asset('images/carousels/'.$carousel->image)}}" alt="" style="width: 70px"></td>
                                <td>
                                    <form action="{{route ('carousel.delete', $carousel->id)}}" method="post" onsubmit="return confirm('Apakah anda yakin untuk hapus data?')">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route ('carousel.edit', $carousel->id)}}" class="btn btn-sm btn-warning mb-2">Edit</a> <br>
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td></th>
                            </tr>
                            @endforeach
                        </tbody>
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
