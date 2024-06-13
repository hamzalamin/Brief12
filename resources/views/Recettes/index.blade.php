@extends('base')
@section('title', 'recettes')
@section('content')

<section class="inner-banner py-5">
    <div class="container pt-5 pb-sm-4 pb-2">
        <h4 class="inner-text-title font-weight-bold pt-5">Dashboard</h4>
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active"><i class="fas fa-angle-right mx-2"></i>Dashboard</li>
        </ul>
    </div>
</section>

<section class="w3l-breadcrumb py-lg-5">
    <div class="container mb-5 mt-5">
        <form action="{{ route('search') }}" method="POST" class="form-search d-flex mb-3">
            @csrf
            <input type="search" class="form-control px-4" name="search" id="search" placeholder="You can search at RECETTES here" />
            <button type="submit"  class="btn btn-style mt-1">Search</button>
        </form>
    </div>
</section>

<h1>All Recettes</h1>

<div class="w3l-grids-block-5 py-5">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="title-main text-center mx-auto mb-md-5 mb-4" style="max-width:500px;">
            <h5 class="sub-title">What We Offer</h5>
            <h3 class="title-style">Our Reccets</h3>
        </div>
        <div class="row text-center justify-content-center">
            @forelse ($recettes as $recette)
      
                <div class="col-lg-4 col-md-6">
                    <div class="servicecard-single">
                        <div class="grids5-info position-relative">
                        
                            <img src="storage/{{$recette->image}}" alt="{{$recette->image}}" class="" height="400px">
                        </div>
                        <div class="content-main-top">
                            <h4><a href="services.html">{{$recette->name}}</a></h4>
                            <p>{{$recette->description}}</p>
                            <div class="row">
                                <div class="col">
                                    <a class="btn btn-style mt-1" href="{{ route('recettes.edit', $recette) }}">Edit</a>
                                </div>
                                <div class="col">
                                    <form method="post" action="{{ route('recettes.destroy', $recette) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="delete btn btn-style mt-1" value="Delete">
                                    </form>
                                </div>
                                <div class="col">
                                    <a class="btn btn-style mt-1" href="{{ route('showOne', ['id' => $recette->id]) }}">Read More</a>
                                </div>
                            </div>                        </div>
                    </div>
                </div>
           
    @empty
    <div class="col-md-12">
        <h1>no recettes</h1>
    </div>
@endforelse
</div>
</div>
</div>  
</div>


{{-- 
        @forelse ($recettes as $recette)

        <div class="row text-center justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="servicecard-single">
                    <div class="grids5-info position-relative">
                        <img src="/storage/app/public/{{$recette->image}}" alt="{{$recette->image}}" class="img-fluid" />
                    </div>
                    <div class="content-main-top">
                        <h4><a>{{$recette->name}}</a></h4>
                        <p>{{$recette->description}} </p>
                        <div class="row">
                            <div class="col">
                                <a class="btn btn-style mt-1" href="{{ route('recettes.edit', $recette) }}">Edit</a>
                            </div>
                            <div class="col">
                                <form method="post" action="{{ route('recettes.destroy', $recette) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="delete btn btn-style mt-1" value="Delete">
                                </form>
                            </div>
                            <div class="col">
                                <a class="btn btn-style mt-1" href="{{ route('showOne', ['id' => $recette->id]) }}">Read More</a>
                            </div>
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
</div> --}}


<footer class="w3l-footer-29-main" style="">
    <div class="footer-29-w3l py-5">
        <div class="container pt-md-5 pt-4">
            <div class="w3l-footer-text-style">
                <div class="footer-list-cont d-flex align-items-center justify-content-between mb-5">
                    <h6 class="foot-sub-title">Contact Us</h6>
                    <div class="main-social-footer-29">
                        <a href="#facebook" class="facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#twitter" class="twitter"><i class="fab fa-twitter"></i></a>
                        <a href="#instagram" class="instagram"><i class="fab fa-instagram"></i></a>
                        <a href="#linkedin" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="row footer-top-29 pt-lg-5 pt-sm-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="address-grid">
                        <h5>10001 Alleghany st, 5th Avenue, 235 Terry, <br> London.</h5>
                        <h5 class="mt-sm-5 mt-4">Everyday: <span> 7 AM - 8 PM</span></h5>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                    <div class="address-grid">
                        <h5 class="top-bold">Phone</h5>
                        <h5 class="phone-number-text mt-2"><a href="tel:+1(21) 112 7368">+1(21) 112 7368</a></h5>
                    </div>
                    <div class="address-grid mt-sm-5 mt-4">
                        <h5 class="top-bold">E-mail</h5>
                        <h5 class="email-cont-text mt-1"> <a href="mailto:photogenic@mail.com"
                                class="mail">photogenic@mail.com</a></h5>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-5 footer-list-menu ps-lg-0 mt-lg-0 mt-sm-5 mt-4">
                    <div class="address-grid">
                        <h5 class="mb-sm-4 mb-3 pb-lg-2 top-bold">Support Links</h5>
                        <ul>
                            <li><a href="#privacy">Privacy Policy</a></li>
                            <li><a href="#terms"> Terms of Service</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#support"> Support</a></li>
                        </ul>
                    </div>
                </div>
                <div class="address-grid col-lg-4 col-md-6 col-sm-7 mt-lg-0 mt-sm-5 mt-4 w3l-footer-16-main">
                    <h5 class="top-bold">Subscribe Here</h5>
                    <form action="#" class="subscribe d-flex mt-sm-4 mt-3 pt-lg-2 mb-4" method="post">
                        <input type="email" name="email" placeholder="Email Address" required="">
                        <button><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                    </form>
                    <p>Subscribe to our mailing list and get updates to your email inbox.</p>
                </div>
            </div>
            <!-- copyright -->
            <div class="w3l-copyright text-center mt-lg-5 mt-4 pt-sm-4 pt-3">
                <p class="copy-footer-29">© 2022 Laundries. All rights reserved. Design by <a
                        href="https://w3layouts.com/" target="_blank">
                        W3layouts</a></p>
            </div>
        </div>
    </div>
</footer>

@endsection
