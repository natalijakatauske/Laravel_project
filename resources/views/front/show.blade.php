@extends('components.layout')

@section('title', $recipe->name)

@section('content')

@include('components.alert.success_message')

<div class="container text-center">
    <div class="row">
        <div class="col card" style="margin: 1rem;">
            @if ($recipe->image)
                <img src="{{ asset($recipe->image) }}">
            @else
                No image
            @endif
        </div>
        <div class="col card" style="margin: 1rem;">
            <div class="card-body">
                <h4 class="card-title">{{ $recipe->name }}</h4>
                <div class="card-text">Category: 
                    @if($recipe->category)
                        {{ $recipe->category->name }}
                    @endif
                </div>
                <div class="card-text">Ingredients:
                    @if($recipe->ingredient)
                        {{ $recipe->ingredient->name }}
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col card" style="margin: 1rem;">
            <div class="card-body">
                <div class="card-text">{{ $recipe->description }}</div>
            </div>
        </div>
    </div>
</div>

@endsection