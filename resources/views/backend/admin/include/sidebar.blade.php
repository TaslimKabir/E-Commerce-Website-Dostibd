<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">


                <li> <a class=" waves-effect waves-dark" href="{{ route('dashboard') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>

                </li>
                {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i><span class="hide-menu">Category</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('category.add') }}">Add Category</a></li>
                        <li><a href="{{ route('category.manage') }}">Manage Category</a></li>
                    </ul>
                </li> --}}
                <li> <a class=" waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i><span class="hide-menu">Product Details</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">

                        <li><a href="{{ route('product.manageProduct') }}">Product Upload</a></li>
                        <li><a href="{{ route('showProductList') }}">Product List</a></li>


                    </ul>

                </li>
                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i><span class="hide-menu">Donation</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ route('donation.manageDonation') }}">Manage Donation</a></li>

                    </ul>
                </li>

                <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="ti-layout-grid2"></i><span class="hide-menu">Other</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{route('admin.orderDetails')}}">Manage Order</a></li>

                    </ul>
                </li>

            </ul>


        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
