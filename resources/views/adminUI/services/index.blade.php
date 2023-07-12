@extends('adminUI.shared.main')


@section('main')
    <div class="container col-md-12">
        @if (Session::has('done'))
            <div class="alert alert-success">
                {{ Session::get('done') }}
            </div>
        @endif
        <h1 class="text-center text-success">List Services Page </h1>
        <div class="card">
            <div class="card-body">
                <a href="{{ route('services.deleteall') }}" onclick="return confirm('Are You Sure ? ')"
                    class="btn btn-danger my-3"> Delete All </a>
                <table class="table table-lgiht">
                    <tr>
                        <th> ID</th>
                        <th> title</th>
                        <th> Description </th>
                        <th> image</th>
                        <td> Vendor </td>
                        <td> Category </td>
                        <th colspan="1">Action</th>
                    </tr>

                    @forelse ($services as $item)
                        <tr>
                            <td> {{ $item->servId }} </td>
                            <td> {{ $item->servTitle }} </td>
                            <td> {{ $item->servDescription }} </td>
                            <td> <img width="30" src="{{ asset("upload/services/$item->servImage") }}" alt="">
                            </td>

                            <td> {{ $item->vendorName }} </td>
                            <td> {{ $item->categoryTitle }} </td>
                            <td><a onclick="return confirm('are you sure')"
                                    href="{{ route('services.destroy', $item->servId) }}"><i title="remove"
                                        class='text-danger bx bx-folder-minus'></i></a>
                                {{-- Remove --}}
                            </td>

                        </tr>


                    @empty

                        <h1 class="text-center text-danger"> You dont have any Services </h1>
                    @endforelse

                </table>
                {{ $services->render('pagination::simple-bootstrap-4') }}

            </div>

        </div>
    </div>
@endsection
