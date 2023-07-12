@extends('userUI.layouts.main')




@section('main')
    <section id="blog" class="padd-sectio my-5 pt-5">

        <div class="container" data-aos="fade-up">
            <div class="section-title text-center">
                <h2> Your Services </h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                @forelse ($services as $item)
                    <div class="my-3 col-md-6 col-lg-4">
                        <div class="block-blog text-left">
                            <a href="#"><img src="{{ asset("upload/services/$item->servImage") }}" alt="img"></a>
                            <div class="content-blog">
                                <h4 class="text-center"><a>{{ $item->servTitle }} </a></h4>
                                <h5>{{ $item->servDescription }} </h5>
                                <hr>
                                <span>Vendor :{{ $item->vendorName }} </span>
                                {{-- <span>  Category :{{$item->categoryTitle}} </span> --}}
                                <a class="float-end readmore" href="{{ route('user.oneSerivces', $item->servId) }}">Read
                                    more</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12 col-lg-12">
                        <div class="block-blog text-left">
                            <div class="content-blog">
                                <h1 class="text-center text-danger"><a>No Have A Services in this Category</a></h1>
                            </div>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </section><!-- End Blog Section -->
@endsection
