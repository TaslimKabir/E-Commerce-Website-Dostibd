@extends('backend.admin.master')
@section('body')
<div class="row">
    <div class="col-12">
       
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-primary">Order List</h2>
                <div class="table-responsive m-t-30">
                    <table id="myTable" class="table table-striped border">
                        <thead>
                            <tr>
                               
                                <th>Image</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th>Customer</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr>

                                   
                                    <td><img src="{{ asset("/$order->image") }}" class="card-img-top" alt=""
                                            width="50px" height="100px"></td>
                                    <td>{{ $order->brand_name }}</td>

                                    <td>{{ $order->quantity }}</td>
                                    <td>{{ $order->subtotal}}</td>
                                    <td>{{ $order->user_email }}</td>
                                    <td>{{ $order->time_slot}}</td>
                                    
                                    <td class="text-danger">{{$order->status == 1 ? 'Accepted' : 'Pendding'}}</td>
                                    <td>
                                       
                                        <a href="{{route('acceptOrder',['id'=>$order->id])}}"
                                            class="btn btn-success btn-sm">
                                            <i class="ti-right">✔</i>
                                        </a>
                                        <a href="{{route('deleteOrder',['id'=>$order->id])}}"
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