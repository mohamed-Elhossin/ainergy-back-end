@extends('adminUI.shared.main')


@section('main')
    <div class="container col-md-12">
        @if (Session::has('done'))
            <div class="alert alert-success">
                {{ Session::get('done') }}
            </div>
        @endif
        <h1 class="text-center text-success">List Categorios Page </h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-lgiht">
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th> Description </th>
                        <th>image</th>
                        <th colspan="3">Action</th>
                    </tr>

                    @forelse ($category as $item)
                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->title }} </td>
                            <td> {{ $item->description }} </td>
                            <td> <img width="30" src="{{ asset("upload/category/$item->image") }}" alt=""> </td>
                            <td><a onclick="return confirm('are you sure')"
                                    href="{{ route('category.destroy', $item->id) }}"><i title="remove"
                                        class='text-danger bx bx-folder-minus'></i></a>
                                {{-- Remove --}}
                            </td>
                            <td><a href="{{ route('category.edit', $item->id) }}">
                                    <i title="edit" class='bx bx-message-alt-edit'></i>
                                </a>
                                {{-- Edit --}}
                            </td>
                            <td><a href="{{ route('services.listServiceByCategory', $item->id) }}">
                                    list Servies
                                </a>
                                {{-- List Services by Category --}}
                            </td>
                        </tr>
                    @empty
                        <h1 class="text-center text-danger"> You dont have any category </h1>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
