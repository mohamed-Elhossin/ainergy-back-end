@extends('adminUI.shared.main')


@section('main')
    <div class="container col-md-12">
        @if (Session::has('done'))
            <div class="alert alert-success">
                {{ Session::get('done') }}
            </div>
        @endif
        <h1 class="text-center text-success">List Users Page </h1>
        <div class="card">
            <div class="card-body">
                <table class="table table-lgiht">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th> Email </th>

                        <th>Action</th>
                    </tr>

                    @forelse ($User as $item)
                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> {{ $item->name }} </td>
                            <td> {{ $item->email }} </td>
                            <td><a onclick="return confirm('are you sure')" href="{{ route('user.delete', $item->id) }}"><i
                                        title="remove" class='text-danger bx bx-folder-minus'></i></a>
                                {{-- Remove --}}
                            </td>
                        </tr>
                    @empty
                        <h1 class="text-center text-danger"> You dont have any Users </h1>
                    @endforelse
                </table>
            </div>
        </div>
    </div>
@endsection
