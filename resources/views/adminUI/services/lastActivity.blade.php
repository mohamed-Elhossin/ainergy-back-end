@extends('adminUI.shared.main')


@section('main')
    <div class="container col-md-12">
        @if (Session::has('done'))
            <div class="alert alert-success">
                {{ Session::get('done') }}
            </div>
        @endif
        <h1 class="text-center text-success">List Services By Category  </h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-lgiht">
                    <tr>
                        <th> ID</th>
                        <th> title</th>
                        <th> Description </th>
                        <th> image</th>
                        <td> Vendor </td>
                        <td> Category </td>
                        <th>Action</th>
                    </tr>

                    @forelse ($services as $item)
                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->title }} </td>
                            <td> {{ $item->description }} </td>
                            <td> <img width="30" src="{{ asset("upload/services/$item->image") }}" alt=""> </td>

                            <td> {{ $item->vendor }} </td>
                            <td> {{ $item->category }} </td>
                            <td><a onclick="return confirm('are you sure')"
                                    href="{{ route('services.destroy', $item->id) }}"><i title="remove"
                                        class='text-danger bx bx-folder-minus'></i></a>
                                {{-- Remove --}}
                            </td>


                        </tr>
                    @empty
                        <h1 class="text-center text-danger"> You dont have any Services </h1>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
