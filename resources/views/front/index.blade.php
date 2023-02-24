@extends('components.layout')

@section('title', 'ALL RECIPES')

@section('content')

<div class="row">
    <form action="{{ route('public.recipes') }}" method="get"> 
        
        <div class="col-12" style="margin: 1rem;">    
            <label class="form-label">Search recipe by name:</label>
            <input type="text" name="name" value="{{ $name }}" class="form-control" placeholder="Recipe name">
        </div>

        <div class="col-12" style="margin: 1rem;">        
            <label class="form-label">Category:</label>        
            <select name="category_id" class="form-control">
                <option value=""> </option>            
                @foreach($categories as $category)
                <option @if($category->id == $category_id) selected @endif
                    value="{{ $category->id }}">{{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="col-12 mt-2" style="margin: 1rem;">        
            <button type="submit" class="btn btn-outline-info">Filter</button> 
            <a href="{{ route('public.recipes') }}" class="btn btn-outline-info">Clear filter</a>
        </div>  
    </form>
</div>

    <div class="container text-center">
        <div class="row">
            @foreach($recipes as $recipe)
                <div class="col-4">
                    <div class="card" style="margin: 1rem;">
                        <div>
                            @if ($recipe->image)
                                <img src="{{ asset('storage/' . $recipe->image) }}" class="img-fluid card-img-top">
                            @else
                                No image
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $recipe->name }}</h5>
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

    <div class="row">
        <div class="col">
            {{ $recipes->links()}}
        </div>
    </div>

@endsection