@extends('frontend.master')
@section('body')
    <!--Main Contant Section Start-->
    <div class="main-container">
        <div class="userdashboard">
            <div class="container">
                <div class="row" style="margin:0;">
                    <div class="col-lg-3 usersidebardiv">
                        <div class="usersidebar">
                            <p style="margin: 0;font-size: 20px;color: #333;">Shortcuts</p>
                            <ul id="usersidebar">
                                <li>
                                    <a href="#">My Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="#">Change Password</a>
                                </li>
                                <li>
                                    <a href="#">My Orders</a>
                                </li>


                                <li>
                                    <a href="#">My Review</a>
                                </li>
                                {{-- 
                                <li>
                                    <a class="dropdown-profile" href="http://dostibd.techdevbd.com/logout"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="http://dostibd.techdevbd.com/logout" method="POST"
                                        style="display: none;">
                                        <input type="hidden" name="_token"
                                            value="qV8bBdXNERhlxsmEdVMTUqCFqJV1bMj57xWzgtkS">
                                    </form>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 usermainbody">
                        <div class="usercontent">
                            <div class="profiledetails">
                                <div class="row" style="margin: 0;padding: 10px;">



                                    {{-- <div class="col-6 col-md-2">
                                        <div class="profileImage">
                                            <img src="http://dostibd.techdevbd.com/images/profiles/images (2).jpeg"
                                                width="100px">
                                        </div>
                                    </div> --}}
                                    <div class="col-6 col-md-6">
                                        <div class="parsonalprofile2">
                                            <p><i class="fa fa-user"></i> {{auth()->user()->email}}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="parsonalprofile">
                                            <a href="#" class="editPrifilebtn">Edit Profile</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="background: #fafafa;margin: 0;padding: 10px;text-align: center;">
                                    <div class="dashboardcountinfo">
                                        <span>0</span>
                                        <p><a href="#">All Order</a></p>
                                    </div>
                                    <div class="dashboardcountinfo">
                                        <span>0</span>
                                        <p><a href="#">Pending Order</a></p>
                                    </div>
                                    <div class="dashboardcountinfo">
                                        <span>0</span>
                                        <p><a href="#">Confirm Order</a></p>
                                    </div>
                                    <div class="dashboardcountinfo">
                                        <span>0</span>
                                        <p><a href="#">Shipped Order</a></p>
                                    </div>
                                    <div class="dashboardcountinfo">
                                        <span>0</span>
                                        <p><a href="#">Completed Order</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="dashbaordInfo">

                                      
                                        <table class="table table-bordered shippingTable">
                                            <thead>
                                                <tr>
                                                    <th>Shipping Address</th>
                                                    <th>City</th>
                                                    <th>Postal Code </th>
                                                    <th> Prefecture</th>
                                                    <th>Country</th>

                                                </tr>
                                            </thead>


                                            @foreach ($orders as $order)
                                                {{-- @if ($cart->email == auth()->user()->email) --}}
                                                <tbody>
                                                    <tr>

                                                        <td style="width:30%;">{{ $order->address }}</td>
                                                        <td> {{ $order->city }}</td>
                                                        <td>{{ $order->postal_code }}</td>
                                                        <td> {{ $order->prefecture }}</td>
                                                        <td>Bangladesh</td>

                                                    </tr>

                                                  
                                                </tbody>

                                                {{-- @endif --}}
                                            @endforeach
                                        </table>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
