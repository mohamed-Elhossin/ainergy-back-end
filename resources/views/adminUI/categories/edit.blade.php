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

        <h1 class="text-center text-success">Edit Categorios Page </h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label> Category Name </label>
                        <input type="text" value="{{$category->title}}" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Category Description </label>
                        <input type="text"  value="{{$category->description}}" name="description" class="form-control">
                    </div>
                    <div class="form-group">
                        <label> Category Image: <img width="30" src="{{asset("upload/category/$category->image") }}" alt="">  </label>
                        <input type="file"  name="inputFile" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="d-grid">
                            <button class="btn btn-warning"> Update </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
