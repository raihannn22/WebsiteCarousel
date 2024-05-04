@extends('admin')

@section('content')
<div id="layoutSidenav">
    <div id="layoutSidenav_content">
        <div class="container-fluid px-4">
            <h1 class="mt-4">Fitur</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    List data Fitur
                </div>

                <div class="card-body">

                    <a href="{{route('fitur.form')}}" class="btn btn-primary mb-3">Create new</a>

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
                            @foreach ($fiturs as $fitur)
                            <tr>
                                <th scope="row"> {{$loop->iteration}} </th>
                                <td> {{$fitur->judul}} </td>
                                <td> {{$fitur->caption}} </td>
                                <td> <img src="{{asset('images/fiturs/'.$fitur->image)}}" alt="" style="width: 70px"></td>
                                <td>
                                    <form action="{{route('fitur.delete', $fitur->id )}}" method="post" onsubmit="return confirm('Apakah anda yakin untuk hapus data?')">
                                        @csrf
                                        @method('delete')
                                        <a href="{{route('fitur.edit', $fitur->id )}}" class="btn btn-sm btn-warning mb-2">Edit</a> <br>
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
