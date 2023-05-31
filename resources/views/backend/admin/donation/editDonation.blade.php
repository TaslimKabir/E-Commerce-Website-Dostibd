@extends('backend.admin.master')
@section('body')
<div class="row my-4 px-5">
    <div class="col-lg-10">
        <div class="card ">
            <div class="card-body">
                <h3><b class="text-danger">{{ $donation->cloth_name }}</b> details which you want to EDIT now:</h3><br>
                <form action="{{ route('UpdateDonation', ['id' => $donation->id]) }}" class="form-horizontal p-t-20" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label ">Doner Name <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="donar_name" id="exampleInputuname3"
                                value="{{ $donation->donar_name }}" placeholder="Your Name" /> <br><br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label ">Cloth Name <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="cloth_name" id="exampleInputuname3"
                                value="{{ $donation->cloth_name }}" placeholder="Category Name" /> <br><br>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label ">Cloth Quantity <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="quantiy" id="exampleInputuname3"
                                value="{{ $donation->quantiy }}" placeholder="Cloth Quantity" /> <br><br>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="form-label col-sm-3 control-label" for="web">Category Image<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">

                            <div class="card-body">
                                <input type="file" id="input-file-now" name="image" value="{{ $donation->image }}"
                                    class="dropify" />
                            </div>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label ">Description</label>
                        <div class="col-sm-9">

                            <textarea type="text" class="form-control" name="description" id="exampleInputEmail3"
                                value="{{ $donation->description }}" placeholder="Enter Description"></textarea> <br>

                        </div>
                    </div>

                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9 ">
                            <button type="submit"
                                class="btn btn-success waves-effect waves-light text-white">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection