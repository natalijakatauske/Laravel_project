@extends('components.admin_layout')

@section('title', 'Ingredients')

@section('content')

<h1>Ingredients</h1>

@include('components.alert.success_message')

<div class="row">
    <div class="col"> <a href="{{ route('admin.ingredient.create') }}" class="btn btn-secondary">Create</a> </div>
</div>

<table class="table">
    <tr>
        <th scope="col" width="100">ID</th>
        <th scope="col">Ingredient</th>
        <th scope="col">Is Active</th>
        <th scope="col" width="100">Edit</th>
        <th scope="col" width="100">Delete</th>
    </tr>
    @foreach($ingredients as $ingredient)
    <tr>
        <th scope="row">{{ $ingredient->id }}</th>
        <td class="list-group-flush" >{{ $ingredient->name }}</td>
        {{-- <td class="list-group-flush" >
            <a href="{{ route('admin.ingredients', ['id' => $ingredient->id]) }}" class="list-group-item list-group-item-action">{{ $ingredient->is_active }}</a>
        </td> --}}
        
        <td>{{ $ingredient->is_active }}</td>
        <td>
            <a href="{{ route('admin.ingredient.edit', ['id' => $ingredient->id]) }}" class="btn btn-secondary">Edit</a>
        </td>
        <td>
            <form action="{{ route('admin.ingredient.delete', ['id' => $ingredient->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-dark">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<div class="row">
    <div class="col">
        {{ $ingredients->links()}}
    </div>
</div>
@endsection