@extends('userUI.layouts.main')




@section('main')
    <section id="blog" class="padd-sectio my-5 pt-5">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                <h2>Service : {{ $services->servTitle }} </h2>
            </div>
            <div class="row justify-content-around" data-aos="fade-up" data-aos-delay="100">
                <div class="my-3 col-md-6 col-lg-4">
                    <div class="block-blog text-left">
                        <a href="#"><img src="{{ asset("upload/services/$services->servImage") }}" alt="img"></a>
                        <div class="content-blog">
                            <h4 class="text-center"><a>{{ $services->servTitle }} </a></h4>
                            <h5>{{ $services->servDescription }} </h5>
                            <hr>
                            <span>Vendor :{{ $services->vendorName }} </span>
                            <span>Category :{{ $services->categoryTitle }} </span>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5 col-lg-6">
                    <div class="comints">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action " aria-current="true">
                                <div class="row justify-content-around">
                                    <div class="col-md-4">
                                        <div class="d-grid">
                                            <form action="{{ route('like.create', $services->servId) }}" method="POST">
                                                @csrf
                                                <button class="btn  btn-primary">
                                                    @if ($likeStatus == null)

                                                        <i class="fa-regular fa-heart"></i>
                                                    @else
                                                        @if ($likeStatus->status == 0)
                                                            <i class="fa-regular fa-heart"></i>
                                                        @else
                                                            <i class="fa-solid fa-heart like"></i>
                                                        @endif
                                                    @endif
                                                    <span>
                                                        ({{ $likeCount }}) </span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @forelse ($commints as $item)
                                <a class="list-group-item list-group-item-action " aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"></h5>
                                        <small> {{ $item->created_at }} </small>
                                    </div>
                                    <p class="mb-1">{{ $item->description }}</p>
                                    <small>{{ $item->userName }}</small>
                                </a>
                            @empty
                            @endforelse

                            <a class="list-group-item list-group-item-action">
                                <form action="{{ route('commint.create', $services->servId) }}" method="POST">
                                    <div class="form-group my-3">
                                        @csrf
                                        <input type="text" name="description" placeholder="Your Commint"
                                            class="form-control">
                                    </div>
                                    <button class="btn btn-info"> Post </button>
                                </form>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->
@endsection
