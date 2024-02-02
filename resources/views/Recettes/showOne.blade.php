@extends('base')
@section('title', 'Recipe Details')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="title-main mb-4">
                <h5 class="sub-title">Testimonials</h5>
                <h3 class="title-style">What our Customers think about us</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="test-img">
                <img src="/storage/{{ $recipe->image }}" class="img-fluid" style="max-width: 400px;" alt="client-img">
            </div>
        </div>

        <div class="col-md-6 " style="max-width: 400px;">
            <div class="testimonial-content">
                <div class="testimonial">
                    <div class="testi-des">
                        <div class="peopl align-self">
                            <h3>{{ $recipe->name }}</h3>
                            @if ($category)
                            <p>Category: {{ $recipe->category->CategoryName }}</p>
                        @else
                            <p>No category available</p>
                        @endif                               
                        </div>
                    </div>
                    
                    <q>{{ $recipe->description }}.</q>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- 
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


<h3 class="title-style">What our Customers think about us</h3> --}}


@endsection
