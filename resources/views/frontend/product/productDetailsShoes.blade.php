@extends('frontend.master')

@section('body')
    <div class="container" style="padding: 50px 0;">
        <div class="row">
            @foreach ($products as $product)
                @if ($product->category_name == 'shoes')
                <div class="col-md-6">
                    <div class="xzoom-container">
                        <img height="420" width="350" src="{{ asset("/$product->image") }}" class="xzoom4"
                            id="xzoom-fancy">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="products-process">
                        <h3 class="singleProducttitle">{{ $product->brand_name }}</h3>
                        <div class="starView">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <span class=" ml-2">
                                (0)
                            </span>
                            Review
                        </div>
                        <h5 class="singlPrice">
                            Price: {{ $product->price }}TK
                        </h5>
                        <p class="single-excerpt">
                            Category: {{ $product->category_name }}(Next Type)
                        </p>
                        <p class="single-excerpt">
                            Weight: {{ $product->weight }}
                        </p>
                        <p class="single-excerpt">
                            Description: {{ $product->description }}
                        </p>
                        <p class="single-excerpt">
                            MoreInfo: size: 6 to 12
                            color: only black
                        </p>

                        <form action="http://dostibd.techdevbd.com/cart/addtocart" method="post">
                            <input type="hidden" name="_token" value="Ga1ANg9FYESGym9gsuwFuiAq83NVyO5mFXkImasJ">
                            <fieldset>
                                <div class="row">
                                    <div class="column">
                                        <div class="">
                                            <span class="qty-minus"
                                                onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                    class="  fa fa-minus" aria-hidden="true"></i></span>
                                            <input type="number" class="qty-text" id="qty" step="1"
                                                min="1" max="50" name="quantity" value="1"
                                                style="text-align:center">
                                            <span class="qty-plus"
                                                onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                    class="fa fa-plus" aria-hidden="true"></i></span>


                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="ml-3">
                                            <input type="hidden" name="pid" value="114">
                                            <a href="{{ route('cart') }}" name="addtocart" class="btn btn-success">ADD
                                                TO
                                                CART</a>

                                        </div>
                                    </div>
                            </fieldset>
                        </form>
                        <hr>
                        <p class="stockAvailable">
                            {{ $product->status }}In Stock: 91
                        </p>
                        <div class="singleSocial">
                            <ul>
                                <li>
                                    <a href="#" style="background: #3a579a;"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" style="background: #0da8e3;"><i class="fa fa-twitter"
                                            aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#"
                                        style="background-image: linear-gradient(#4560ca, #ff5745,#ffd057);"><i
                                            class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="#" style="background: #1c9a11;"><i class="fa fa-whatsapp"
                                            aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>
    <div class="singleRelated" style="background-color: #e1f5fe;">
        <h3 style="color:rgb(43, 163, 89);">Related Products</h3>
        <div class="row">
            @foreach ($products as $product)
                @if ($product->category_name == 'shoes' || 't-shirt')
                    <div class="column">
                        <div class="carddds">
                            <p><a href="{{ 'productDetails' }}">
                                    <img class="card-img-top" src="{{ asset("/$product->image") }}" alt="Denim Jeans"
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
@endsection
