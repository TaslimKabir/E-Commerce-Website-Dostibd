 <!--Mobile Menu Side Models Start-->
 <div class="mobile-menu-side-modals side-modals side-modalsBar right">
    <a href="javascript:void(0)" class="overlay side-modals-close"></a>
    <div class="cart-inner">
      <div class="search-section" style="width: 90%; margin: 20px auto 0px;">
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
      <div class="cart_top">
        <div class="row" style="margin: 0;">
          <div class="col-10" style="padding: 0;">
            <h3 style="margin: 0; font-size: 20px;font-family: sans-serif; font-weight: 600;"></h3>
          </div>
          <div class="col-2" style="padding: 0; text-align: center;">
            <a href="javascript:void(0)" class="side-modals-close" style="color: gray; margin-left: 13px;">
              <i class="fa fa-times" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="cart_media">
        <div class="primarymenu" style="display: block;">
          <div class="multi-lavel">
            <ul id="menu" class="metismenu">
               
              <li>
                <a href="{{route('welcome')}}" aria-expanded="false"> HOME</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('about')}}">About Us</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('welcome')}}">Halal Food</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('categoryShoes')}}">Shoes</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('categoryTshirt')}}">T-Shirts</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('categoryPant')}}">Pants</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('policies')}}">Polices</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
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
              {{-- <li>
                <a href="{{route('user.login')}}" aria-expande="false">Registration</a>
              </li>              </ul> --}}
            <ul class="socialMenus">
              <li>
                <a href="https://www.facebook.com/">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>