@extends('base')
@section('title', 'recettes')
@section('content')


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
</div>


<h1>All Recettes</h1>

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
                    <div class="mt-3">
                        <div class="mt-3 d-flex justify-content-between">
                            <a href="{{ route('recettes.edit', $recette) }}" class="edit btn btn-sm btn-primary">Edit</a>
                            <a class="showw btn btn-sm btn-info" href="{{ route('showOne', ['id' => $recette->id]) }}">Show</a>
                            <form method="post" action="{{ route('recettes.destroy', $recette) }}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="delete btn btn-sm btn-danger" value="Delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="col-md-12">
            <h1>no recettes</h1>
        </div>
    @endforelse
</div>


@endsection
