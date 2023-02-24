@extends('components.admin_layout')

@section('title', $recipe->name)

@section('content')

<h1>{{ $recipe->name }}</h1>

@include('components.alert.success_message')

        <div>{{ $recipe->description }}</div>
        <div>
            Category: 
            @if($recipe->category)
            {{ $recipe->category->name }}
            @endif
        </div>
        <div>
            @if ($recipe->image)
                <img src="{{ asset($recipe->image) }}">
            @else
                No image
            @endif
        </div>

@endsection