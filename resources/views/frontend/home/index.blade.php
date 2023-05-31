@extends('frontend.master')
@section('body')
    <!--Main Contant Section Start-->
    <div class="main-container">
        <!--Slider Part Include Start-->
        <div class="slider-section">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100 h-50" src="{{ asset('/') }}asset/folder/slider.png" alt="SM Power Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 h-50" src="{{ asset('/') }}asset/folder/slider.png" alt="SM Power Image">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100 h-50" src="{{ asset('/') }}asset/folder/slider.png" alt="SM Power Image">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="main-home-page">
            <div class="container">
                <div class="categories-tabs">
                    <div class="row">

                    </div>

                    <div class="featured-products latest" style="background-color: #e1f5fe;">
                        <a href="{{ route('newProduct')}}"> <button class="float-right btn btn-primary">View
                                All</button></a>
                        <h2 style="color:rgb(43, 163, 89);">New Products</h2>
                        <div class="row">
                            <?php $count=0 ?>
                            @foreach ($products->reverse() as $product)
                             
                                @if ($count==6)
                                    @break;
                                @endif
                                <div class="column">
                                    <div class="carddds">
                                        <p><a href="{{ route('productDetails',['id'=>$product->id])}}">
                                                <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                    alt="Denim Jeans"
                                                    style="height:160px; !important;width:147px; !important">
                                                <p class="word">{{ $product->brand_name }}</p>
                                                <p class="price p-0" style="color:red;">
                                                    Price:{{ $product->price }}Tk</p>

                                            </a></p>
                                        <p><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </p>
                                    </div>

                                </div> 
                             <?php $count=$count+1; ?>
                            @endforeach

                        </div>
                    </div>

                    <div class="products-section">
                        <div class="featured-products salePart" style="background-color: #e1f5fe">
                            <a href="{{ route('categoryShoes') }}"><button class="float-right btn btn-primary">View
                                    All</button></a>
                            <h2 style="color:rgb(43, 163, 89);">Shoes</h2>

                            <div class="row">
                                @foreach ($products as $product)
                                    @if ($product->category_name == 'shoes')
                                        <div class="column">
                                            <div class="carddds">
                                                <p><a href="{{ route('productDetails',['id'=>$product->id])}}">
                                                        <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                            alt="Denim Jeans"
                                                            style="height:160px; !important;width:147px; !important">
                                                        <p class="word">{{ $product->brand_name }}</p>
                                                        <p class="price p-0" style="color:red;">
                                                            Price:{{ $product->price }}Tk</p>

                                                    </a></p>
                                                <p><span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                </p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </div>

                        <div class="featured-products latest" style="background-color: #e1f5fe;">
                            <a href="{{ route('categoryTshirt') }}"><button class="float-right btn btn-primary">View
                                    All</button></a>
                            <h2 style="color:rgb(43, 163, 89);">T-Shirts</h2>
                            <div class="row">
                                @foreach ($products as $product)
                                    @if ($product->category_name == 't-shirt')
                                        <div class="column">
                                            <div class="carddds">
                                                <p><a href="{{ route('productDetails',['id'=>$product->id])}}">
                                                        <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                            alt="Denim Jeans"
                                                            style="height:160px; !important;width:147px; !important">
                                                        <p class="word">{{ $product->brand_name }}</p>
                                                        <p class="price p-0" style="color:red;">
                                                            Price:{{ $product->price }}Tk</p>

                                                    </a></p>
                                                <p><span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                </p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                        <div class="featured-products latest" style="background-color: #e1f5fe;">
                            <a href="{{ route('categoryPant') }}"><button class="float-right btn btn-primary">View
                                    All</button></a>
                            <h2 style="color:rgb(43, 163, 89);">Pants</h2>
                            <div class="row">
                                @foreach ($products as $product)
                                    @if ($product->category_name == 'pant')
                                        <div class="column">
                                            <div class="carddds">
                                                <p><a href="{{ route('productDetails',['id'=>$product->id])}}">
                                                        <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                            alt="Denim Jeans"
                                                            style="height:160px; !important;width:147px; !important">
                                                        <p class="word">{{ $product->brand_name }}</p>
                                                        <p class="price p-0" style="color:red;">
                                                            Price:{{ $product->price }}Tk</p>

                                                    </a></p>
                                                <p><span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                </p>
                                            </div>

                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="featured-products latest" style="background-color: #e1f5fe;">
                        <a href="{{ route('categoryCloth') }}"><button class="float-right btn btn-primary">View
                                All</button></a>
                        <h2 style="color:rgb(43, 163, 89);">Clothes</h2>
                        <div class="row">
                            @foreach ($products as $product)
                                @if ($product->category_name == 'cloth')
                                    <div class="column">
                                        <div class="carddds">
                                            <p><a href="{{ route('productDetails',['id'=>$product->id])}}">
                                                    <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                        alt="Denim Jeans"
                                                        style="height:160px; !important;width:147px; !important">
                                                    <p class="word">{{ $product->brand_name }}</p>
                                                    <p class="price p-0" style="color:red;">
                                                        Price:{{ $product->price }}Tk</p>

                                                </a></p>
                                            <p><span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </p>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
