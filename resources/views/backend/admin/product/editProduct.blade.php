@extends('backend.admin.master')
@section('body')
<div class="row my-4 px-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product Create</h4>
                <h3 class="text-center text-success "> {{ Session::get('msg') }}</h3>
                <form class="form-horizontal p-t-20" action="{{route('UpdateProduct',['id'=>$product->id])}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Category Name<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="category" value="{{ $product->category_name }}" id="exampleInputuname3"
                                placeholder="Category" />

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Brand-Name <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="name" value="{{ $product->brand_name }}" id="exampleInputuname3"
                                placeholder="Name" />

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Code<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="code" value="{{ $product->code }}" id="exampleInputuname3"
                                placeholder="Code" />

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Price<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="price" value="{{ $product->price }}" id="exampleInputuname3"
                                placeholder="Price" />

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Quantity<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="quantity" value="{{ $product->quantity }}" id="exampleInputuname3"
                                placeholder="Quantity" />

                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Tags<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="tag" value="{{ $product->tag }}" id="exampleInputuname3"
                                placeholder="Tags" />

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputuname3" class="col-sm-3 control-label">Weight<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="weight" value="{{ $product->weight}}" id="exampleInputuname3"
                                placeholder="Weight" />

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Description<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">

                            <input type="text" class="form-control" name="description" value="{{ $product->description }}" id="exampleInputEmail3"
                                placeholder="Enter Description"/>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="form-label col-sm-3 control-label" for="web">Category Image</label>
                        <div class="col-sm-9">

                            <div class="card">
                                <input type="file" id="input-file-now" name="image" value="{{ $product->image}}" class="dropify" />
                            </div>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail3" class="col-sm-3 control-label">Status<span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">

                            <textarea type="text" class="form-control" name="action" value="{{ $product->status}}" id="exampleInputEmail3" placeholder="Staus"></textarea>

                        </div>
                    </div>


                    <div class="form-group row m-b-0">
                        <div class="offset-sm-3 col-sm-9 ">
                            <button type="submit" class="btn btn-success waves-effect waves-light text-white"
                                name="submit">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection