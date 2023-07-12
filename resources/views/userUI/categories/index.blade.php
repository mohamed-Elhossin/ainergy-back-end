@extends('userUI.layouts.main')




@section('main')
    <section id="team" class="padd-section text-center">

        <div id="category" class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title text-center">

                <h2>Category</h2>
                <p class="separator">List All Category.</p>
            </div>

            <div class="row">

                @foreach ($category as $item)
                    <div class="categories mt-3 col-md-6 col-md-3 col-lg-2 aos-init aos-animate" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="team-block bottom">
                            <img src="{{ asset("upload/category/$item->image") }}" class="img-fluid" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <a href="{{ route('user.services', $item->id) }}"> View Services </a>
                                </ul>
                                <span>{{ $item->title }}</span>
                                <h4>{{ $item->description }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>
        </div>
    </section>
@endsection
