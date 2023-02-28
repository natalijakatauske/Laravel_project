@extends('components.layout')

@section('title', $recipe->name)

@section('content')

@include('components.alert.success_message')

<div class="container text-center">
    <div class="row">
        <div class="col card shadow p-3 mb-5 bg-body-tertiary rounded" style="margin: 1rem;">
            @if ($recipe->image)
                <img src="{{ asset($recipe->image) }}" style="height:20rem; width:15rem; margin:auto;">
            @else
                No image
            @endif
        </div>
        <div class="col card shadow p-3 mb-5 bg-body-tertiary rounded" style="margin: 1rem;">
            <div class="card-body">
                <h4 class="card-title" style="font-weight:bold">{{ $recipe->name }}</h4>
                <div class="card-text">Category: 
                    @if($recipe->category)
                        {{ $recipe->category->name }}
                    @endif
                </div>
                <div class="card-text">Ingredients:
                    @if($recipe->ingredients)
                        @foreach($recipe->ingredients as $ingredient)
                            {{ $ingredient->name . ', ' }}
                        @endforeach
                    @endif
                </div>
                


            </div>
        </div>
    </div>
    <div class="row">
        <div class="col card shadow p-3 mb-5 bg-body-tertiary rounded" style="margin: 1rem;">
            <div class="card-body">
                <div class="card-text">{{ $recipe->description }}</div>
            </div>
        </div>
    </div>
</div>

@endsection