@extends('layouts.master')
@section('content')

    <div class="banner video_banner">
        <div id="feature" class="bghide"><img id="featureImg" src="{{ URL::asset('img/contact-us.png') }}">
            <div id="extraContainer11">
                <div class="videoWrapper">

                </div>
            </div>
        </div>
    </div>


    <div class="clear"></div>


    <div id="container">
        <div id="extraContainer7"></div>
        <div id="extraContainer8"></div>

        <section>
            <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;"
                                 class="_1KJtL"></grammarly-extension>

            <div id="padding">
                <center>
                    <form action="{{'sendEmail'}}" method="post" enctype="multipart/form-data"
                          _lpchecked="1">
                        @csrf
                        <div>
                            <div class="message-text"><span style="font-size:17px; font-weight:bold; ">BeMo Academic Consulting Inc. </span><br><span><span
                                        style="font-size:13px; font-weight:bold; "><u>Toll Free</u></span><span
                                        style="font-size:13px; ">: </span><span style="font-size:14px; ">1-855-900-BeMo (2366)</span><span
                                        style="font-size:13px; "><br></span><span
                                        style="font-size:13px; font-weight:bold; "><u>Email</u></span><span
                                        style="font-size:13px; ">: </span><span style="font-size:14px; ">{{$setting->email_contact?$setting->email_contact:'info@bemoacademicconsulting.com'}}</span></span>
                            </div>
                            <label>Name:</label> *<br>
                            <input class="form-input-field" type="text" value="" name="name"
                                   size="40"><br><br>

                            <label>Email Address:</label> *<br>
                            <input class="form-input-field" type="text" value="" name="email"
                                   size="40"><br><br>

                            <label>How can we help you?</label> *<br>
                            <textarea class="form-input-field" name="description" rows="8" cols="38"
                                      spellcheck="false"></textarea><br><br>
                            <input style="color: #444" class="form-input-button" type="reset"
                                   value="Reset">
                            <input style="color: #444" class="form-input-button" type="submit"
                                   value="Submit">
                        </div>
                    </form>
                    <br>
                    <div class="form-footer"><span style="font-size:15px; font-weight:bold; "><u>Note</u></span><span
                            style="font-size:15px; ">: If you are having difficulties with our contact us form above, send us an email to {{$setting->email_contact?$setting->email_contact:'info@bemoacademicconsulting.com'}} (copy &amp; paste the email address)</span><span
                            style="font-size:13px; "><br></span></div>
                    <br>
                </center>

            </div>

        </section>
@endsection
