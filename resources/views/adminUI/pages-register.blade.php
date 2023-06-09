@extends('adminUI.shared.main')


@section('main')
    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center ">
            <div class="container">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('done'))
                    <div class="alert alert-success">
                        {{ Session::get('done') }}
                    </div>
                @endif
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="card">


                            <div class="card-body">

                                <div class=" ">
                                    <h5 class="card-title text-center pb-0 fs-4">Create Account</h5>
                                </div>

                                <form action="{{ route('admin.adminRegister') }}" method="POST"
                                    class="row g-3 needs-validation">
                                    @csrf
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <div class="input-group has-validation">

                                            <input type="text" name="name" class="form-control" id="yourUsername"
                                                required>
                                            <div class="invalid-feedback">Please enter your username.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="email" name="email" class="form-control" id="email"
                                                required>
                                            <div class="invalid-feedback">Please enter your Email.</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="yourPassword" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="yourPassword"
                                            required>
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>


                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Add Account</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>

@endsection
