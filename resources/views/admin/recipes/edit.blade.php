@extends('components.admin_layout')

@section('title', 'Edit recipe '. $recipe->name)

@section('content')

<h1>Edit recipe "{{ $recipe->name }}"</h1>

<form action="{{ route('admin.recipe.edit', ['id' => $recipe->id]) }}" method="post" class="row g-3">

    @csrf
    <div class="form-group">
        <label class="form-label">Recipe name:</label>
        <input type="text" name="name" value="{{ old('name', $recipe->name) }}" class="form-control @error('name') is-invalid @enderror" placeholder="Recipe name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>

    <div class="col-12">
        <label class="form-label">Category:</label>
        <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
            <option value=""> </option>
            @foreach($categories as $category)
                <option @if(old('category_id', isset($recipe->category->id) ? $recipe->category->id : null) == $category->id) selected @endif value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
         @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="col-12">
        <label class="form-label">Ingredients:</label>
        <select name="ingredient_id[]" class="form-control @error('author_id') is-invalid @enderror" multiple>
            <option value=""> </option>
            @foreach($ingredients as $ingredient)
                <option @if($recipe->ingredients->contains($ingredient->id)) selected @endif value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
            @endforeach
        </select>
        @error('ingredient_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div><

    <div class="form-group">
        <label class="form-label">Ingredient:</label>
        <select name="ingredient_id[]" class="form-control @error('ingredient_id') is-invalid @enderror" multiple>
            <option value=""> </option>
            @foreach($ingredients as $ingredient)
            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
            @endforeach
        </select>
        @error('ingredient_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    
    <div class="form-group">
        <label class="form-label">Description:</label>
        <input type="text" name="description" value="{{ old('name', $recipe->description) }}" class="form-control @error('description') is-invalid @enderror" placeholder="Description">
    </div>


    <div class="col-12">
        <label class="form-label">Image:</label>
        <input type="file" name="image" value="{{ old('image', $recipe->image) }}" class="form-control">
    </div>

    <div class="form-group">
        <input type="checkbox" name="is_active" class="form-check-input" value="1" @if (old('is_active', $recipe->is_active)) checked @endif>
        <label class="form-check-label">Active</label>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-secondary">Save</button>
    </div>

</form>
@endsection