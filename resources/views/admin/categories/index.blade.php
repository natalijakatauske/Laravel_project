@extends('components.admin_layout')

@section('title', 'Categories')

@section('content')

<h1>Categories</h1>

@include('components.alert.success_message')

<div class="row">
    <div class="col"> <a href="{{ route('admin.category.create') }}" class="btn btn-secondary">Create</a> </div>
</div>

<table class="table">
    <tr>
        <th scope="col" width="100">ID</th>
        <th scope="col">Category</th>
        <th scope="col">Is Active</th>
        <th scope="col" width="100">Edit</th>
        <th scope="col" width="100">Delete</th>
    </tr>
    @foreach($categories as $category)
    <tr>
        <th scope="row">{{ $category->id }}</th>
        <td class="list-group-flush" >
            <a href="{{ route('admin.categories', ['id' => $category->id]) }}" class="list-group-item list-group-item-action">{{ $category->name }}</a>
        </td>
        {{-- <td class="list-group-flush" >
            <a href="{{ route('admin.categories', ['id' => $category->id]) }}" class="list-group-item list-group-item-action">{{ $category->is_active }}</a>
        </td> --}}
        
        <td>{{ $category->is_active }}</td>
        <td>
            <a href="{{ route('admin.category.edit', ['id' => $category->id]) }}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
            <form action="{{ route('admin.category.delete', ['id' => $category->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-dark">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection