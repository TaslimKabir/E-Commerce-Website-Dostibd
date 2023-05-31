@extends('backend.admin.master')

@section('body')
    <div class="row">
        <div class="col-12">
           
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title text-primary">Product List</h2>
                    <div class="table-responsive m-t-30">
                        <table id="myTable" class="table table-striped border">
                            <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>

                                        <td>{{ $product->id }}</td>
                                        <td><img src="{{ asset("/$product->image") }}" class="card-img-top" alt=""
                                                width="50px" height="100px"></td>
                                        <td>{{ $product->brand_name }}</td>

                                        <td>{{ $product->quantity }}</td>
                                        <td>{{ $product->price }}</td>
                                        {{-- <td>{{$product->status ==1 ? 'Published' :'Unpublised'}}</td> --}}
                                        <td>
                                            <a href="{{route('viewIDwiseProduct',['id'=>$product->id])}}" class="btn btn-danger btn-sm">
                                                👁
                                            </a>
                                            <a href="{{route('editProduct',['id'=>$product->id])}}"
                                                class="btn btn-success btn-sm">
                                                <i class="ti-pencil"></i>
                                            </a>
                                            <a href="{{route('deleteProduct',['id'=>$product->id])}}"
                                                class="btn btn-danger btn-sm">
                                                <i class="ti-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
