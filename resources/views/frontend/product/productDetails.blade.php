@extends('frontend.master')
@section('body')
    <div class="container" style="padding: 50px 0;">
        <div class="row">

            <div class="col-md-6">
                <div class="xzoom-container">
                    <img height="420" width="350" src="{{ asset("/$id->image") }}" class="xzoom4" id="xzoom-fancy">

                </div>
            </div>
            <div class="col-md-6">
                <div class="products-process">
                    <h3 class="singleProducttitle">{{ $id->brand_name }}</h3>
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
                        Price: {{ $id->price }}TK
                    </h5>
                    <p class="single-excerpt">
                        Category: {{ $id->category_name }}(Next Type)
                    </p>
                    <p class="single-excerpt">
                        Weight: {{ $id->weight }}
                    </p>
                    <p class="single-excerpt">
                        Description: {{ $id->description }}
                    </p>
                    <p class="single-excerpt">
                        MoreInfo: size: 6 to 12
                        color: only black
                    </p>

                    <form action="{{ url('/cart') }}" method="post">
                        @csrf
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <fieldset>
                            <div class="row">
                                <div class="column">
                                    <div class="">
                                        <span class="qty-minus" onclick="decrementQty();"><i class="fa fa-minus"
                                                aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1"
                                            max="50" name="quantity" value="1" style="text-align:center">
                                        <span class="qty-plus" onclick="incrementQty();"><i class="fa fa-plus"
                                                aria-hidden="true"></i></span>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="ml-3">
                                        <input type="hidden" name="pid" value="{{ $id }}">
                                        <a href="javascript:void(0);" onclick="addToCart();" class="btn btn-success">ADD TO
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <script>
                        function incrementQty() {
                            var qtyInput = document.getElementById('qty');
                            qtyInput.value = parseInt(qtyInput.value) + 1;
                        }

                        function decrementQty() {
                            var qtyInput = document.getElementById('qty');
                            if (qtyInput.value > 1) {
                                qtyInput.value = parseInt(qtyInput.value) - 1;
                            }
                        }

                        function addToCart() {
                            var currentUrl = window.location.href;
                            // console.warn(currentUrl);
                            var substring = currentUrl.substring(currentUrl.lastIndexOf("/details") + "/details".length);
                            var Id = substring;
                            var qtyInput = document.getElementById('qty');
                            var quantity = qtyInput.value;
                            var url = "{{ url('/cart') }}?quantity=" + quantity + "&Id=" + Id;
                            window.location.href = url;
                        }
                    </script>
                    
                    <hr>
                    <p class="stockAvailable">
                        {{ $id->status }}In Stock: 91
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
                                <a href="#" style="background-image: linear-gradient(#4560ca, #ff5745,#ffd057);"><i
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

        </div>
    </div>
    <div class="singleRelated" style="background-color: #e1f5fe;">
        <h3 style="color:rgb(43, 163, 89);">Related Products</h3>
        <div class="row">
            @foreach ($products as $product)
                @if ($product->category_name == 'shoes' || 't-shirt')
                    <div class="column">
                        <div class="carddds">
                            <p><a href="{{ route('productDetails', ['id' => $product->id]) }}">
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
