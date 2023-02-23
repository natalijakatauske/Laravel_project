@extends('components.admin_layout')

@section('title', 'Save category')

@section('content')

<h3>Fill name</h3>
<form action="{{ route('admin.category.create') }}" method="POST">
    @csrf
    <input type="text" name="name">
    <button type="submit">Send</button>
</form>

@if (isset($name))
<div>
    My name is: {{ $name }}
</div>
@endif

@endsection