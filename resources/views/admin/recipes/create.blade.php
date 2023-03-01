@extends('components.admin_layout')

@section('title', 'Create recipe')

@section('content')

<h1>Create new recipe</h1>

<form action="{{ url('admin/recipe/store') }}" method="post" class="row g-3" enctype="multipart/form-data">

    @if ($errors->any())
     <div class="alert alert-danger">
         <ul>
             @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
             @endforeach
         </ul>
     </div>
 @endif

    @csrf
    <div class="form-group">
        <label class="form-label">Recipe name:</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" placeholder="Recipe name">
        @error('name')
        <div class="invalid-feedback">{{ $message }}</div><br>
        @enderror
    </div>


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
        <label class="form-label">Category:</label>
        <select name="category_id" class="form-control @error('ingredient_id') is-invalid @enderror" multiple>
            <option value=""> </option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
    </div>

    <div class="form-group">
        <label class="form-label">Description:</label>
        <textarea type="text" name="description" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" placeholder="Description"></textarea>
    </div>

    <div class="form-group">
        <label class="form-label">Image:</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="form-group">
        <input type="checkbox" name="is_active" class="form-check-input" value="1" @if (old('is_active')) checked @endif>
        <label class="form-check-label">Active?</label>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-secondary">Save</button>
    </div>
</form>

@endsection