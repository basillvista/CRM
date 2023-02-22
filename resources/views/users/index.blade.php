@extends('layouts.crmApp')

@section('usersIndex')
    <div class="form-style-8">
        <h2><a href="{{ route('users.create') }}">Create Users</a></h2>
        <div class="table">
            <div class="table-header">
                <div class="header__item"><a>First Name</a></div>
                <div class="header__item"><a>Last Name</a></div>
                <div class="header__item"><a>Email</a></div>
                <div class="header__item"><a>Address</a></div>
                <div class="header__item"><a>Phone Number</a></div>
                <div class="header__item"><a>Created_at</a></div>
            </div>
            <div class="table-content">
                @foreach($users as $user)
                    <div class="table-row">
                        <div class="table-data">{{$user->first_name}}</div>
                        <div class="table-data">{{$user->last_name}}</div>
                        <div class="table-data">{{$user->email}}</div>
                        <div class="table-data">{{$user->address}}</div>
                        <div class="table-data">{{$user->phone_number}}</div>
                        <div class="table-data">{{$user->created_at}}</div>
                        <div>
                            <td rowspan="2">
                                <a href="{{ route('users.edit', ['user'=>$user]) }}">Edit</a>
                                <a href="{{ route('users.destroy', ['user'=>$user]) }}">Delete</a>
                            </td>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div>{{$users->links()}}</div>
    </div>
@endsection
