@extends('layouts.user')

@section('body')
    <div class="slider-area">
        <div class="slider-wrapper owl-carousel">
            <div class="slider-item home-three-slider-item slider-item-four slider-bg-one">
                <div class="container">
                    <div class="row">
                        <div class="slider-content-area">
                           <div class="slide-text">
                                <h2>When the University of Dhaka was established in July 1921 in British India under the University of Dacca ACT of 1920, three halls of residence were also established at the same time, Jagannath Hall was one of them.</h2>
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
                                <h2>Jagannath Hall of Dhaka University is a residence hall for minority students, Hindu, Buddhist, Christian, and others</h2>
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
                                <h2>Departments and Institutions of the Dhaka University arranged the Saraswati Pooja at the Jagannath Hall playground every year.</h2>
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
        <!-- Start About Section -->
        <div class="content-section ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="main-heading-content text-center">
                            <h2>File</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="col-md-6">
                            <div class="about-left-content-three">
                                <p style="text-align: justify; color: black; font-weight: bold;">Click in the button to download</p>
                                <p style="text-align: center;">
                                    <a href="/download/Design.docx" style="margin-bottom: 10px;" class="button active about-readmore">Learn More</a>
                                </p>
                            </div>
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