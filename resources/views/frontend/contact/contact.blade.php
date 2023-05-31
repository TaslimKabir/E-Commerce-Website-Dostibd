@extends('frontend.master')
@section('body')
     <!--Main Contant Section Start-->
     <div class="main-container">

        <div class="contact-page">
            <div class="container">

                <div class="contact-info">

                    <div class="row">

                        <div class="col-md-6" style="padding: 15px;">
                            <h3>Contact Information</h3><br><br>
                            <div class="media">
                                <i class="fa fa-map-signs" aria-hidden="true"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Office Address</h5>
                                    <p>{{ __('Dhaka-BD,1205, Bangladesh.') }} </p>
                                </div>
                            </div>
                            <br><br><br><br>
                            <div class="media">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <div class="media-body">
                                    <h5 class="mt-0">Address</h5>
                                    <p>{{ __('Post No : 114-0021 Email: dostibd@gmail.com') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6" style="padding: 15px;">
                            <div class="form-info">
                                <h3>Send Messege</h3>
                                <p>Feel Free To Contact Us</p>
                                <form action="{{route('contact.sendMsg')}}" method="post"
                                    class="creditly-card-form agileinfo_form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group form-group-section">
                                        <input type="name" name="name" value=""
                                            class="form-control control-section" placeholder="Enter Name" required="">
                                    </div>
                                    <div class="form-group form-group-section">
                                        <input type="phone" name="numberad" value=""
                                            class="form-control control-section" placeholder="Phone Number" required="">
                                    </div>
                                    <div class="form-group form-group-section">
                                        <input type="text" name="address" value=""
                                            class="form-control control-section" placeholder="Your Address" required="">
                                    </div>


                                    <div class="form-group form-group-section">
                                        <textarea name="msg" rows="5" value="" class="form-control control-section"
                                            placeholder="Write Your Massege" required=""></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" name="send" class="btn submitbutton">CONTACT NOW</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="contact-form-section">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div class="container">

                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection