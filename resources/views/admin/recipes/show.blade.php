@extends('components.admin_layout')

@section('title', $recipe->name)

@section('content')

<h1>{{ $recipe->name }}</h1>

@include('components.alert.success_message')
        <div>
            <div style="margin-top:1rem; font-weight:bold">Description:</div>
            {{ $recipe->description }}
        </div>
        <div>
            <div style="margin-top:1rem; font-weight:bold">Category:</div> 
            @if($recipe->category)
            {{ $recipe->category->name }}
            @endif
        </div>
        <td>
        <div style="margin-top:1rem; font-weight:bold">Ingredients:</div>
            @if($recipe->ingredients)
                @foreach($recipe->ingredients as $ingredient)
                    {{ $ingredient->name }} <br>
                @endforeach
            @endif
        </td>
        <div>
            @if ($recipe->image)
                <img src="{{ asset($recipe->image) }}" style="height:10rem; width:8rem; margin-top:1rem; margin-bottom:1rem;">
            @else
                No image
            @endif
        </div>

@endsection