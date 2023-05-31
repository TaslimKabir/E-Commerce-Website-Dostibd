@extends('frontend.master')
@section('body')

    <div class="main-home-page">
        <div class="container">
            <div class="cart-page">
                <div class="productList-table">
                    <p class="customer"><i class="fa mr-2 fa-check" aria-hidden="true"></i>Customer matched zone 1 Day Delivery
                    </p>
                    <hr style="border: 2px solid #ccc; margin: 5px 0 15px;">
                    <div class="row">

                        <div class="col-md-8" style="border-right: 1px solid #ccc;">
                            <div class="table-responsive">

                                <table class="table carttable">
                                    <thead>
                                        <tr>
                                            <th scope="col" colspan="1"
                                                style="width: 240px;min-width:250px;padding:5px;">Product
                                            </th>
                                            <th>Price</th>
                                            <th>Quantity </th>
                                            <th>Subtotal</th>
                                            <th></th>

                                        </tr>
                                    </thead>
                                    <?php $subtotal= 0 ?>
                                    @foreach ($carts as $cart)
                                        @if ($cart->email == auth()->user()->email)
                                            <tbody>
                                                <tr>

                                                    <td scope="col" colspan="1"
                                                        style="width: 250px;min-width:250px;padding:5px;">
                                                        <img src="{{ asset("/$cart->image") }}" height="100px"
                                                            alt="product">
                                                        <p>{{ $cart->name }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $cart->price }}TK</p>
                                                        <?php $subtotal =$subtotal + $cart->subtotal ?>
                                                    </td>
                                                    <td>
                                                        <p>{{ $cart->quantity }}</p>
                                                    </td>
                                                    <td>
                                                        <p>{{ $cart->subtotal }}TK</p>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('deleteCart',['id' => $cart->id])}}" class="btn btn-info btn-sm ">
                                                            
                                                            ❌
                                                        </a>
                                                    </td>

                                                </tr>

                                            </tbody>
                                            
                                        @endif
                                    @endforeach
                                </table>


                            </div>
                            <hr style="border: 1px solid #ccc;">
                            <div class="continueShop">
                                <ul>
                                    <li>
                                        <a class="continueShpbtn" href="{{ route('home') }}"><i
                                                class="fa mr-2 fa-long-arrow-left" aria-hidden="true"></i>Continue
                                            Shopping</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <table class="table carttotaltable">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 25%">Cart Totals</th>
                                        <th scope="col" style="width: 75%; text-align: end;">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Subtotal</td>
                                        <td style="text-align: end;">TK <?php echo "$subtotal" ;  $tax = (($subtotal*8)/100)?></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">SHIPPING</td>
                                        <td style="text-align: end;">
                                            TK 49.0
                                        </td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Tax</td>
                                        <td style="text-align: end;">TK 8%</td>
                                    </tr>

                                    <tr>
                                        <td scope="row">Total</td>
                                        <td style="text-align: end;">TK <?php  echo $subtotal + $tax + 49 ?></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr style="border: 2px solid #ccc; margin: 0;">
                            <a class="checkoutbtn" href="{{ route('order') }}">PROCEED TO CHECKOUT</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
