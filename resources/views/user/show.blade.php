@extends('components.admin_layout')

@section('title', 'User profile')

@section('content')
    <h4>Hello, Admin!</h4>
    <div>Your information:</div>
    <div class="card">
        <div>Name: {{ $user->name }}</div>
        <div>Email: {{ $user->email }}</div>
    </div>
@endsection
