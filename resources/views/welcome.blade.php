@extends('base')
@section('title', 'recettes')
@section('content')

<section class="banner_part py-5 mb-5">
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5 class="mb-4 custom-heading">Our Recettes</h5>
                        <h1 class="mb-4">Deliciousness jumping into the mouth</h1>
                        <p class="mb-4">Together creeping heaven upon third dominion be upon won't darkness rule land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="storage/electro-maroc-2-65b3f59c5a3bc974840308.webp" alt="" class="img-fluid w-100 rounded-3">
            </div>
        </div>
    </div>
</section>
<section class="mx-1 mb-5">
{{-- 
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center">
            <form action="{{ route('search') }}" method="POST" class="form-search d-flex mb-3">
                @csrf
              <input type="search" class="form-control px-4" name="search" id="search" placeholder="You can search at RECETTES here" />
             <button type="submit"  class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div> --}}
    
<h1 class="mx-5 mb-5 kilua">LAST RACETTES:</h1>

<div class="row">
    @forelse ($recettes as $recette)
        <div class="col-md-4 mb-4 wikis">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$recette->name}}</h5>
                    <img src="storage/{{$recette->image}}" alt="{{$recette->image}}" class="img-fluid w-100 rounded-3">
                    <p class="card-text">{{$recette->description}}<br></p>
                    <p class="card-text">choumicha</p>
                    <div class="specs"></div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <h1>no recettes</h1>
        </div>
    @endforelse
</div>
</section>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
@endsection
