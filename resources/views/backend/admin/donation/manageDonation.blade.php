@extends('backend.admin.master')
@section('body')
<div class="row">
    <div class="col-12">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Cloth Details</h4>
            </div>
            <div class="col-md-7 align-self-center text-end">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb justify-content-end">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Cloth Details</li>
                    </ol>
                    <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i
                            class="fa fa-plus-circle"></i> Create New</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cloth Details</h4>
              
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-striped border">
                        <thead>
                            <tr>
                                <th>Cloth Image</th>
                                <th>Donar Name</th>
                                <th>Cloth Name</th>
                                <th>Cloth Quantity</th>
                                <th>Cloth Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donations as $donation)
                            <tr>
                                <td><img src="{{asset("/$donation->image")}}" class="card-img-top" alt="" width="30px" height="100px"></td>
                                <td>{{$donation->donar_name}}</td>
                                <td>{{$donation->cloth_name}}</td>
                                <td>{{$donation->quantiy}}</td>
                                <td>{{$donation->description}}</td>
                                <td><a href="{{route('editDonation',['id'=>$donation->id])}}" class="btn btn-success btn-sm">
                                    <i class="ti-pencil"></i>
                                    </a>
                                    <a href="{{route('delete',['id'=> $donation->id])}}" class="btn btn-danger btn-sm">
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