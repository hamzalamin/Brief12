@extends('base')
@section('title', ($isUpdate?'Update':'Create').  ' Recettes')
@section('content')
@php
    $route = route('recettes.store');
    if ($isUpdate) {
        $route = route('recettes.update', $recette);
    }
@endphp


<div class="container mt-5" style="">
    <div class="row justify-content-center">
      <div class="col-md-6 form-wrapper">
        <h2 class="mb-4 text-center">@yield('title')</h2>
        <form action="{{ $route }}" method="post" class="main-input" enctype="multipart/form-data">
         @csrf
         @if ($isUpdate)
         @method('PUT')
         @endif
         
          <div class="form-group">
            <div class="col-md-6">
                  <label for="RecettePicture">Picture URL</label>
                  {{-- <input type="text" class="" hidden id="image" name="image" value="{{ $recette->image }}"> --}}
                  <input type="file" class="form-control" id="image" name="image">
          </div>


          
          </div>
          <div class="form-group">
            <label for="RecetteName">Recette Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name', $recette->name)}}">
          </div>
  
          <div class="form-group">
            <label for="RecetteDescription">Recette Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $recette->description) }}</textarea>
          </div>
          <div class="form-group">
    <label for="category_id">Category:</label>
    <select class="form-control" id="category_id" name="category_id" required>
        <option value="">Select Category</option>
        @foreach ($categorys as $category)
        <option value="{{ $category->id }}">{{ $category->CategoryName }}</option>
        @endforeach
    </select>
</div>
  
          <input type="submit" style="background-color: rgb(233, 132, 0); " class="btn mt-3 btnto_add" value="{{ $isUpdate?'Edit': 'Add'}}">
        </form>
      </div>
    </div>
  </div>

  @endsection