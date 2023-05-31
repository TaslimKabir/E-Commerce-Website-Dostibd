@extends('frontend.master')
@section('body')
    <div class="container">

        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-6">
                    <div class="cards">
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
@endsection
