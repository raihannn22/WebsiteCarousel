@extends('index')

@section('content')

    <div class="container mt-5 min h-75">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if (session()->has ('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session ('loginError')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="email"> Email </label>
                                <input type="email" name="email" class="form-control mt-1 @error('email') is-invalid
                                @enderror"  id="email" placeholder="Email" autofocus required />

                                @error('email')
                                <div class="invalid-feedback"> {{$message}}</div>

                                @enderror
                            </div>

                            <div class="form-group mt-4">
                                <label for="password"> Password</label>
                                <input type="password" name="password" class="form-control mt-1" id="password" placeholder="Password" required/>
                            </div>

                            <button class="btn btn-primary mt-3" type="submit"> Login </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
