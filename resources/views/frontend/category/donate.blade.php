@extends('frontend.master')

@section('body')
<div class="products-section">
    <div class="featured-products salePart" style="background-color: #e1f5fe">
       
        <h2 class="px-5" style="color:rgb(43, 163, 89);">For Cloth Donate</h2>

        <div class="row my-4 px-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-success text-center">Add Cloth Details</h4> <br>
                        <form action="{{route('donation.recDonation')}}" class="form-horizontal   p-t-20" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label ">Doner Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="donar_name" id="exampleInputuname3"
                                        placeholder="Your Name" /> <br><br>
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label ">Cloth Name <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cloth_name" id="exampleInputuname3"
                                        placeholder="Cloth Name" /> <br><br>
    
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputuname3" class="col-sm-3 control-label">Cloth Quantity <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="quantiy" id="exampleInputuname3"
                                        placeholder="Cloth Quantity" /> <br><br>
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="form-label col-sm-3 control-label" for="web">Category Image<span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
    
                                    {{-- <div class="card-body"> --}}
                                        <input type="file" id="input-file-now" name="image" class="dropify" /> <br><br>
                                    {{-- </div> --}}
    
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="exampleInputEmail3" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
    
                                    <textarea type="text" class="form-control" name="description" id="exampleInputEmail3"
                                        placeholder="Enter Description"></textarea> <br>
    
                                </div>
                            </div>
    
                            <div class="form-group row m-b-0">
                                <div class="offset-sm-3 col-sm-9 ">
                                    <button type="submit"
                                        class="btn btn-danger waves-effect waves-light">Submit</button>
                                </div>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection
