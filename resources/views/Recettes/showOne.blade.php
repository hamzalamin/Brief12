@extends('base')
@section('title', 'Recipe Details')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $recipe->title }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/storage/{{ $recipe->image }}" alt="{{ $recipe->image }}" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <p>Description: {{ $recipe->description }}</p>
                            @if ($category)
                            <p>Category: {{ $recipe->category->CategoryName }}</p>
                        @else
                            <p>No category available</p>
                        @endif                           
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
