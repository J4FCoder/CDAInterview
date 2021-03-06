@extends('layouts.master')
@section('content')

    <div class="banner video_banner">
        <div id="feature" class="bghide"><img id="featureImg"
                                              src="{{ URL::asset('img/cda-interview-guide.jpg') }}">
            <div id="extraContainer11">
                <div class="videoWrapper">

                </div>
            </div>


            <div id="extraContainer1">
            </div>


            <div class="banner-text">

            </div>
            <div id="extraContainer9">
                <div id="myExtraContent9">CDA Interview Guide</div>
            </div>
        </div>


    </div>


    </div>


    <div class="clear"></div>


    <div id="container">
        <div id="extraContainer7"></div>
        <div id="extraContainer8"></div>

        <section>

            <div id="padding">

                <!-- Stacks v1198 -->
                <div id="stacks_out_7815_page0" class="stacks_top">
                    <div id="stacks_in_7815_page0" class="">
                        <div id="stacks_out_7822_page0" class="stacks_out">
                            <div id="stacks_in_7822_page0" class="stacks_in com_joeworkman_stacks_justifytext_stack">
                                <!-- Justify Text v1.0.7 Copyright @2010-2012 Joe Workman -->
                                <span style="font:15px CourierNewPSMT; color:#E9E9E9;"></span><br>
                                {!! $post->description  !!}
                            </div>
                        </div>
                    </div>
                </div>


                <!-- End of Stacks Content -->


            </div>

        </section>
        <div class="clear"></div>

        <div id="ecwrap"></div>
        <div id="ec2wrap">
            <div id="extraContainer2"></div>
        </div>
        <div id="ec3wrap">
            <div id="extraContainer3"></div>
        </div>
        <div id="ec4wrap">
            <div id="extraContainer4"></div>
        </div>
        <div id="ec5wrap">
            <div id="extraContainer5"></div>
        </div>
        <div id="ec6wrap">
            <div id="extraContainer6"></div>
        </div>

        <div id="extraContainer10">
            <aside>
                <div id="sidecontent">
                    <div id="sideTitle"></div>


                </div>
            </aside>
        </div>
    </div>

@endsection
