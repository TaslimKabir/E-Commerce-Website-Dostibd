@extends('frontend.master')
@section('body')
    <div class="products-section">
        <div class="featured-products latest" style="background-color: #e1f5fe;">
            <a href="{{ route('newProduct') }}"> <button class="float-right btn btn-primary">View
                    All</button></a>
            <h2 style="color:rgb(43, 163, 89);">New Products</h2>
            <div class="row">
                @foreach ($products as $product)
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
                @endforeach
            </div>
        </div>

    </div>
@endsection
