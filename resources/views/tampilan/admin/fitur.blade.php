@section('content')

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

            <a href="" class="btn btn-primary mb-3">Create new</a>

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
                    <tr>
                        <th> 1 </th>
                        <th> 1 </th>
                        <th> 1 </th>
                        <th> 1 </th>
                        <th>
                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <a href="" class="btn btn-sm btn-warning">Edit</a>
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                    </td></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
