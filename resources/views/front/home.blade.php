@extends('components.layout')

@section('title', 'Home')

@section('content')

<h4 class="container text-center">The Most Recent <span class="badge bg-info">New</span></h4>


<div class="container text-center">
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-3">
                    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="margin: 1rem; height:20rem">
                        <div>
                            @if ($recipe->image)
                                <img src="{{ asset($recipe->image) }}" class="img-fluid card-img-center" style="height:10rem; width:8rem; margin:auto;">
                            @else
                                No image
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color:antracit; font-weight:bold">{{ $recipe->name }}</h5>
                            <div>
                                @if($recipe->category)
                                {{ $recipe->category->name }}
                                @endif
                            </div>
                            <div class="list-group-flush">
                                <a href="{{ route('public.recipe.show', ['id' => $recipe->id]) }}" class="btn btn-outline-info">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

<div class="container text-center">
    <div class="row">
        <div class="col-12 mt-2">
            <h5>For more recipes press here</h5>
        <div class="col-12 mt-2">
            <a href="{{ route('public.recipes') }}" class="btn btn-info" style="color:white; font-weight:bold">All recipes</a>
        </div>
    </div>
</div>


@endsection