@extends('adminUI.shared.main')


@section('main')
    <div class="container col-md-6">

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

        <h1 class="text-center text-success">Create Categorios Page </h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Category Name </label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Category Description </label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Category Image </label>
                        <input type="file" name="inputFile" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="d-grid">
                            <button class="btn btn-info"> Save </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
