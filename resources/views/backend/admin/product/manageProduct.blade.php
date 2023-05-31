@extends('backend.admin.master')
@section('body')
    <div class="row my-4 px-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Create</h4>
                    <h3 class="text-center text-success "> {{ Session::get('msg') }}</h3>
                    <form class="form-horizontal p-t-20" action="{{ route('productDetailsRec') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Category Name <span class="text-danger">*</span></label>
                            <select id="category_name" class="col-sm-9" name="category_name" required>
                                <option value="" class="text-center">----------Chose product Category----------</option> 
                                <option value="shirt">Shirt</option>
                                <option value="t-shirt">T-Shirts</option>
                                <option value="pant">Pant</option>
                                <option value="shoes">Shoes</option>
                           
                              </select>
                        </div>
                        
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Brand-Name <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="brand_name" id="exampleInputuname3"
                                    placeholder="Name" />

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Code<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="code" id="exampleInputuname3"
                                    placeholder="Code" />

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Price<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="price" id="exampleInputuname3"
                                    placeholder="Price" />

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Quantity<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="quantity" id="exampleInputuname3"
                                    placeholder="Quantity" />

                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Tags<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tag" id="exampleInputuname3"
                                    placeholder="Tags" />

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputuname3" class="col-sm-3 control-label">Weight<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="weight" id="exampleInputuname3"
                                    placeholder="Weight" />

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="exampleInputEmail3" class="col-sm-3 control-label">Description<span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">

                                <textarea type="text" class="form-control" name="description" id="exampleInputEmail3"
                                    placeholder="Enter Description"></textarea>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="form-label col-sm-3 control-label" for="web">Category Image</label>
                            <div class="col-sm-9">

                                <div class="card">
                                    <input type="file" id="input-file-now" name="image" class="dropify" />
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword5" class="col-sm-3 control-label">Status</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-text"></span>
                                    <label class="me-3"><input type="radio" name="status" value="1" />
                                        Published</label>
                                    <label class="me-3"><input type="radio" name="status" value="2 " />
                                        Unpublished</label>
                                </div>
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
