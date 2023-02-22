@extends('layouts.crmApp')

@section('users')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('users.update', ['user'=>$user]) }}">
        @csrf
        @method('PUT')
        <div class="form-style-8">
            <h2>Edit User</h2>
            <label>First name</label>
            <input type="text" name="first_name">
            <label>Last Name</label>
            <input type="text" name="last_name">
            <label>Password</label>
            <input type="password" name="password">
            <label>Email</label>
            <input type="email" name="email">
            <label>Adress</label>
            <input type="text" name="address">
            <label>Phone number</label>
            <input type="text" name="phone_number">
            <input type="submit" name="submit">
        </div>
    </form>
@endsection



