@extends('userUI.layouts.main')




@section('main')
    <section id="createServices" class="padd-section mt-5">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                <h2>Create Services</h2>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-5 col-md-8">
                    @if (Session::has('done'))
                        <div class="alert alert-success">
                            {{ Session::get('done') }}
                        </div>
                    @endif
                    <div class="form">
                        <form action="{{ route('services.storeVendor') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="title" class="form-control" placeholder="Your title" required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="description" placeholder="Your description"
                                    required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="">image</label>
                                <input type="file" class="form-control" name="inputFile" required>
                            </div>
                            <div class="form-group mt-3">
                                <label for=""> Category</label>
                                <select type="text" class="form-control" name="category">
                                    @foreach ($category as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="text-center mt-2"><button class="btn btn-info" type="submit">Send Services</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->
@endsection
