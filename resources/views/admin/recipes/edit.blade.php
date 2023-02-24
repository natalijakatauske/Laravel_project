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
        <select name="ingredent_id[]" class="form-control @error('author_id') is-invalid @enderror" multiple>
            <option value=""> </option>
            @foreach($ingredents as $ingredent)
                <option @if($recipe->ingredents->contains($ingredent->id)) selected @endif value="{{ $ingredent->id }}">{{ $ingredent->name }}</option>
            @endforeach
        </select>
        @error('ingredent_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    DESCRIPTION

    <div class="form-group">
        <input type="checkbox" name="is_active" class="form-check-input" value="1" @if (old('is_active', $recipe->is_active)) checked @endif>
        <label class="form-check-label">Active</label>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-secondary">Save</button>
    </div>

</form>
@endsection