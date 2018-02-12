@extends('main')

<div class="container_12">
    <div class="grid_12">
        <h1>
            <a href="{{Route('index')}}">
                <img src="asset/images/logo.png" alt="Your Happy Family">
            </a>
        </h1>
    </div>
</div>
<div class="clear"></div>
@section('content')
    <div class="slider_wrapper ">
        <div id="camera_wrap" class="">
            <div data-src="asset/images/a1.jpg" ></div>
            {{--<div data-src="asset/images/a2.jpg" ></div>--}}
            {{--<div data-src="asset/images/a3.jpg"></div>--}}
        </div>
    </div>
    <div class="container_12">
        <div class="grid_4">
            <div class="banner">
                <div class="maxheight">
                    <div class="banner_title">
                        <img src="asset/images/icon1.png" alt="">
                        <div class="extra_wrapper">Fast&amp;
                            <div class="color1">Safe</div>
                        </div>
                    </div>
                    Dorem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuad
                    <a href="#" class="fa fa-share-square"></a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <div class="maxheight">
                    <div class="banner_title">
                        <img src="asset/images/icon2.png" alt="">
                        <div class="extra_wrapper">Best
                            <div class="color1">Prices</div>
                        </div>
                    </div>
                    Hem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuader
                    <a href="#" class="fa fa-share-square"></a>
                </div>
            </div>
        </div>
        <div class="grid_4">
            <div class="banner">
                <div class="maxheight">
                    <div class="banner_title">
                        <img src="asset/images/icon3.png" alt="">
                        <div class="extra_wrapper">Package
                            <div class="color1">Delivery</div>
                        </div>
                    </div>
                    Kurem ipsum dolor sit amet, consectetur adipiscinger elit. In mollis erat mattis neque facilisis, sit ameter ultricies erat rutrum. Cras facilisis, nulla vel viver auctor, leo magna sodales felis, quis malesuki
                    <a href="#" class="fa fa-share-square"></a>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="c_phone">
        <div class="container_12">
            <div class="grid_12">
                <div class="fa fa-phone"></div>+ 1800 559 6580
                <span>ORDER NOW!</span>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--==============================Content=================================-->
    <div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - April 07, 2014!</div>
        <div class="container_12">
            <div class="grid_5">


            </div>
            <div class="grid_6 prefix_1">
                <a href="index2.html" class="type"><img src="asset/images/page1_img1.jpg" alt=""><span class="type_caption">Economy</span></a>
                <a href="index2.html" class="type"><img src="asset/images/page1_img2.jpg" alt=""><span class="type_caption">Standard</span></a>
                <a href="index2.html" class="type"><img src="asset/images/page1_img3.jpg" alt=""><span class="type_caption">Lux</span></a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    </div>
@endsection
