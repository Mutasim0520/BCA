@extends('layouts.user')

@section('body')
    <div class="banner-area banner-bg-1 ptb-100 bg-opacity-black-80 text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-wrapper">
                        <h2>{{ucwords($committee)}} Committee</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Main content Wrapper -->
    <div class="main-content-wrapper">
        <!-- Start creative team -->
        <div class="content-section ptb-100 text-center">
            <div class="container">
                <div class="row">
                    <div class="team-wrapper-">
                        @if(sizeof($members)>0)
                            @foreach($members as $item)
                                <div class="col-md-3 col-sm-6" style="min-height: 440px;">
                                    <div class="team-item">
                                        <div class="team-thumb">
                                            <?php
                                                if($item->photo){
                                                    $path =$item->photo;
                                                }else{
                                                    $path = "propic.jpg";
                                                }

                                            ?>
                                            <img class="img-responsive" src="/uploads/images/{{$path}}" alt="">
                                        </div>
                                        <div class="team-content">
                                            <h3>{{$item->name}}</h3>
                                            <span class="position">{{$item->designation}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <p>No Committee Member Found</p>
                        @endif
                        <center>{{$members->links()}}</center>
                    </div>
                </div>
            </div>
        </div>
        <!-- End creative team -->
    </div>
@endsection