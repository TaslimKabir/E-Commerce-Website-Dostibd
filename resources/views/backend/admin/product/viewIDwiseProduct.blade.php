@extends('backend.admin.master')
@section('body')
   
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Details</h4>
                    </h4>
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-striped border">
                        
                            <tbody>
                                <tr>
                                    <th scope="row">Category-Name</th>
                                    <td>{{ $products->category_name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Brand-Name</th>
                                    <td>{{ $products->brand_name }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Code</th>
                                    <td>{{ $products->code }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Price</th>
                                    <td>{{ $products->price }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Quantity</th>
                                    <td>{{ $products->quantity }}</td>
                                </tr>


                                <tr>
                                    <th scope="row">Weight</th>
                                    <td>{{ $products->weight }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Description</th>
                                    <td>{{ $products->description }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Image</th>
                                    <td><img src="{{ asset("/$products->image") }}"  alt=""
                                        width="150px" height="150px"></td>
                                </tr>
                                <tr>
                                    <th scope="row">Status</th>
                                    <td>{{ $products->status}}</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
