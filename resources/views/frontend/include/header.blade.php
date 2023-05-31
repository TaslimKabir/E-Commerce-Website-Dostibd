  <!--Header Part Start-->
  <header class="sticky-header">
      <!--Middle Header Part Start-->
      <div class="container">
          <div class="middle-header">
              <div class="row">
                  <div class="col-9 col-md-4">
                      <div class="destopmodehide">
                          <span class="moble-menus-models">
                              <i class="fa fa-bars"></i>
                          </span>
                      </div>
                      <div class="logo">
                          <a href="{{ route('welcome') }}">
                              <img src="{{ asset('/') }}asset/folder/logo1.webp" alt=""
                                  style="width:20% !important">
                          </a>
                      </div>
                  </div>
                  <div class="col-md-5 mobilemodehide">
                      <div class="search-section" style="width: 100%; margin: 25px auto 0px;">
                          <form action="{{ url('/search') }}" method="get">
                              @csrf
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search Here" name="query">
                                  <div class="input-group-append">
                                      <button type="submit" class="input-group-text search-button">
                                          <i class="fa fa-search"></i>
                                      </button>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
                  <div class="col-3 col-md-3">
                      <ul class="cartnavbar mobilemodehide">

                          <li class="padding:10px;HeaderCartItems">
                              <a style="background-color: #900C3F; border-radius: 7px; color: #fff; margin-left: 10px;padding:15px;"
                                  href="{{ route('cart') }}"><b> CART</b><i class="fa ml-1 fa-shopping-cart"
                                      aria-hidden="true"></i>
                              </a>

                          </li>

                      </ul>
                      <span class="HeaderCartItems2">
                          <a class="destopmodehide mobile-menus-models viewCartmobile"
                              href="http://dostibd.techdevbd.com/cart">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                          </a>
                          <!--Mobile Menu Side Models Start-->

                      </span>
                  </div>
              </div>
          </div>
      </div>
      <!--Middle Header Part End-->
      <!--Main Header Part Start-->
      <div class="">
          <div class="main-header">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="header-menu">
                              <ul>
                                  <li class="categorylists">
                                      <a href="#">
                                          <i class="fa mr-1 fa-bars" aria-hidden="true"></i>Category </a>
                                      <ul>
                                          <li class="nav-item ">
                                              <a class="nav-link" href="{{ route('categoryPant') }}"><span>
                                                      <img src="{{ asset('/') }}asset/folder/jeans.png"
                                                          style="width: 24px;">
                                                  </span>Pants</a>
                                          </li>
                                          <li class="nav-item ">
                                              <a class="nav-link" href="{{ route('categoryShoes') }}"><span>
                                                      <img src="{{ asset('/') }}asset/folder/high-heel.png"
                                                          style="width: 24px;">
                                                  </span>Shoes</a>
                                          </li>
                                          <li class="nav-item ">
                                              <a class="nav-link" href="{{ route('categoryTshirt') }}"><span>
                                                      <img src="{{ asset('/') }}asset/folder/polo-shirt.png"
                                                          style="width: 24px;">
                                                  </span>T-Shirts</a>
                                          </li>
                                          <li class="nav-item ">
                                              <a class="nav-link" href="{{ route('categoryCloth') }}"><span>
                                                      <img src="{{ asset('/') }}asset/folder/polo-shirt.png"
                                                          style="width: 24px;">
                                                  </span>Clothes</a>
                                          </li>
                                          <li class="nav-item ">
                                              <a class="nav-link" href="{{ route('categoryDonate') }}"><span>
                                                      <img src="{{ asset('/') }}asset/folder/clothdonation.png"
                                                          style="width: 24px;">
                                                  </span>For Donate</a>
                                          </li>
                                      </ul>
                                  </li>
                                  <li>
                                      <a href="{{ route('welcome') }}">HOME</a>
                                  </li>
                                  <li class="">
                                      <a href={{ route('about') }}>About Us</a>
                                  </li>
                                  <li class="">
                                      <a href={{ route('shelf') }}>Shelf</a>
                                  </li>
                                  <li class="">
                                      <a href={{ route('policies') }}>Policies</a>
                                  </li>
                                  <li class="">
                                      <a href={{ route('contact') }}>Contact Us</a>
                                  </li>
                                  <li>
                                      <a class="lost-pass" href={{ route('password') }}>
                                          Forgot Password?
                                      </a>
                                  </li>
                                  <li class="nav-item dropdown u-pro">

                                     @if (Route::has('login'))
                                          @auth
                                              <a href="{{ route('myAcount') }}">My-Acount</a>
                                             <li>
                                                <a href="" class="dropdown-item"
                                                  onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i
                                                    class="fa fa-power-off"></i> Logout
                                              </a>
                                              <form action="{{ route('logout') }}" id="logoutForm" method="post">
                                                  @csrf
                                              </form>
                                             </li> 
                                             
                                              
                                          @else
                                         <li>
                                          <a href="{{ route('login') }}"><b>Login/Sign Up</b></a>
                                         </li>

                                          @endauth
                                    @endif
                                    

                                  </li>

                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!--Main Header Part End-->
  </header>
