
@extends('layouts.app')

@section('content')
<section class="categories">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="d-flex section-title">
            <h4>Trend</h4>
            <h4>&nbsp;Categories</h4>
        </div>
        </div>
    </div>
    <div class="row mt-auto">
        <div class="col-3 competent-categories">
        <div class="tag">
            <span>Vest</span>
        </div>
        <a href="#">
            <div class="categories-thumbnail">
            <div class="categories-img" style="background-image: url('Frontend/img/vest.jpg');"></div>
            </div>
        </a>
        </div>
        <div class="col-3">
        <div class="row">
            <div class="col-10 competent-categories">
            <div class="tag">
                <span>Bullet</span>
            </div>
            <a href="#">
                <div class="categories-thumbnail-small">
                <div class="categories-img" style="background-image: url('Frontend/img/istockphoto-516075450-612x612.jpg');"></div>
                </div>
            </a>
            </div>
            <div class="col-10">
            <div class="tag">
                <span>Knives</span>
            </div>
            <a href="#">
                <div class="categories-thumbnail-small">
                <div class="categories-img" style="background-image: url('Frontend/img/pexels-photo-365631.jpeg');"></div>
                </div>
            </a>
            </div>
        </div>
        </div>
        <div class="col-3">
        <div class="row">
            <div class="col-10 competent-categories">
            <div class="tag">
                <span>Weapons</span>
            </div>
            <a href="#">
                <div class="categories-thumbnail-small">
                <div class="categories-img" style="background-image: url(Frontend/img/pexels-photo-889709.jpeg);"></div>
                </div>
            </a>
            </div>
            <div class="col-10">
            <div class="tag">
                <span>Grenade</span>
            </div>
            <a href="#">
                <div class="categories-thumbnail-small">
                <div class="categories-img" style="background-image: url(Frontend/img/istockphoto-1396222865-612x612.jpg);"></div>
                </div>
            </a>
            </div>
        </div>
        </div>
        <div class="col-3">
        <div class="row">
            <div class="col-10 competent-categories">
            <div class="tag">
                <span>Helmets</span>
            </div>
            <a href="#">
                <div class="categories-thumbnail-small">
                <div class="categories-img" style="background-image: url(Frontend/img/istockphoto-145160930-612x612.jpg);"></div>
                </div>
            </a>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- Close Trend Categories -->

<br><br>

<!-- Popular Products -->
<section class="popular-products">
    <div class="container">
    <div class="row">
        <div class="col-12">
        <div class="d-flex section-title">
            <h4>Popular</h4>
            <h4>&nbsp;Products</h4>
            <div class="row mx-5 my-auto">
            <div class="col-3">  
                <div class="dropright">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropright">
                    See All
                </button>
                </div>
            </div>
            </div>
        </div>  
        </div>
    </div>
    <div class="row">
        <div class="col-3">
        <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
            <img src="Frontend/img/istockphoto-155316260-612x612.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            P90 + Supressor
            </div>
            <div class="products-price">
            $999
            </div>
        </a>
        </div>
        <div class="col-3">
        <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
            <img src="Frontend/img/istockphoto-519802161-612x612.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            Mosin Nagant
            </div>
            <div class="products-price">
            $1399
            </div>
        </a>
        </div>
        <div class="col-3">
        <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
            <img src="Frontend/img/istockphoto-1314735264-612x612.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            Thompson (Submachine Gun)
            </div>
            <div class="products-price">
            $ 899
            </div>
        </a>
        </div>
        <div class="col-3">
        <a href="#" class="component-products d-block active">
            <div class="products-img mb-4">
            <img src="Frontend/img/m60.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            M60 (Machine Gun)
            </div>
            <div class="products-price">
            $2999
            </div>
        </a>
        </div>
        <div class="col-3">
        <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
            <img src="Frontend/img/300px-Kar_98K_-_AM.021488.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            Kar 98 K
            </div>
            <div class="products-price">
            $799
            </div>
        </a>
        </div>
        <div class="col-3">
        <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
            <img src="Frontend/img/220px-M1903-Springfield-Rifle.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            Spriengfield
            </div>
            <div class="products-price">
            $749
            </div>
        </a>
        </div>
        <div class="col-3">
        <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
            <img src="Frontend/img/istockphoto-145160930-612x612.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            Helmet 32PG Steel
            </div>
            <div class="products-price">
            $399
            </div>
        </a>
        </div>
        <div class="col-3">
        <a href="#" class="component-products d-block">
            <div class="products-img mb-4">
            <img src="Frontend/img/istockphoto-906527992-612x612.jpg" class="img-fluid">
            </div>
            <div class="products-text mb-2">
            Karambit 
            </div>
            <div class="products-price">
            $599
            </div>
        </a>
        </div>
    </div>
    </div>
</section>
<!-- Close Popular Products -->

<!-- Testimonial -->
<section class="testimonial">
    <div class="container">
    <div class="row">
        <div class="col-4">
        <div class="testimonial-hero">
            <img src="Frontend/img/guns.webp" class="testimonial-img">
            <img src="Frontend/img/Cyrcle.png" class="testimonial-frame">
        </div>
        </div>
        <div class="col-1"></div>
        <div class="col-7 my-auto">
        <div class="stars">
            <img src="Frontend/img/Ratings.png">
        </div>
        <h2 class="testimonial-text">KILLER SHOP <br> Hurry up buy or not we will kill you ...</h2>
        <p class="testimonial-name">Group 3 : David imanuel, Dikho Riyuda, Heru Sumardi, M Farhan Hadi, Hamidho Sagala , Pemrogrammer</p>
        <a href="#" class="btn btn-testimonial">Download Now</a>
        </div>
    </div>
    </div>
</section>
@endsection