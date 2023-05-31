@extends('frontend.master')
@section('body')
    <div class="products-section">
        <div class="featured-products salePart" style="background-color: #e1f5fe">
            <a href="#"><button class="float-right btn btn-primary">View
                    All</button></a>
            <h2 class="px-5" style="color:rgb(43, 163, 89);">Shoes</h2>

            <div class="row">
                @foreach ($products as $product)
                    @if ($product->category_name == 'shoes')
                        <div class="column">
                            <div class="carddds">
                                <p><a href="http://dostibd.techdevbd.com/product-details-114">
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
    </div>
   
@endsection
