@extends('layouts.user')

@section('body')
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item home-three-slider-item slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                           <div class="slide-text">
                                <h2>The Executive Committee of BCA has decided to hold 5th Conference of the Bangladesh Crystallographic Association on 25-26 January 2019.</h2>
                                <p style="text-align: center;">
                                    <a href="{{Route('download')}}" style="margin-bottom: 10px;" class="button active about-readmore">View Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-three-slider-item slider-item-four slider-bg-two">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                            <div class="slide-text">
                                <h2>Like other countries of the World, Bangladesh also organized events to promote crystallography</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item home-three-slider-item slider-item-four slider-bg-three">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                           <div class="slide-text">
                                <h2>Bangladesh is one of the member countries of AsCA and has been participating in all conferences and other events of AsCA and also in regional and international crystallographic related conferences</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Slider Section -->
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
            <div class="content-section ptb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="">
                                <div class="">
                                    <h2>INTRODUCTION</h2>
                                    <p>Though scientists of Bangladesh are active in the fields of crystallography since 1920’s but there was no Society of Bangladesh crystallographers till 2011. Scientists working in the field of crystallography in Bangladesh are members of other learned societies such as Bangladesh Chemical Society, Bangladesh Physical Society, etc. for which may be a society of crystallographers was not formed earlier.</p>
                                    <p>Asian Crystallographic Association (AsCA), in its Council Meeting in 2011 decided to hold its Conference of 2013 at Dhaka, Bangladesh and that was the driving force of Bangladeshi scientists working in different fields of crystallography to launch a society and Bangladesh Crystallographic Association (BCA) was formed in December 2011. Another driving force to form BCA is that the UN adopted a resolution (Number 66/284) in its General Assembly to observe 2014 as the International Year of Crystallography (IYCr 2014). Like other countries of the World, Bangladesh also organized events to promote crystallography, throughout the year 2014.</p>
                                    <p>Bangladesh is one of the member countries of AsCA and has been participating in all conferences and other events of AsCA and also in regional and international crystallographic related conferences. In the 24th General Assembly and Congress of the International Union of Crystallography (IUCr), held in Hyderabad, India, on 21-28 August 2017, BCA became an adhering body of IUCr. Though there were activities in different fields of crystallography in Bangladesh but scientists did not have enough participation in past congresses of IUCr. However, in the 24th IUCr congress, a well representation of Bangladesh was there. It is now expected that young and senior scientists of Bangladesh will participate in regional and international events of crystallography in future as well.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="content-section ptb-80" style="background-color: whitesmoke;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-8">
                            <div class="call-to-action-details">
                                <h2 style="color:#3364d7">Great News!!!</h2>
                                <p>The Executive Committee of BCA has decided to hold 5th Conference of the Bangladesh Crystallographic Association on 25-26 January 2019.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="call-to-action-btn-details" style="text-align: center;">
                                <p style="text-align: center;">
                                    <a href="{{Route('download')}}" style="margin-bottom: 10px;" class="button active about-readmore">View Details</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="/js/validators/validator.js"></script>
    <script type="text/javascript" src="/js/validators/registrationValidator.js"></script>
@endsection