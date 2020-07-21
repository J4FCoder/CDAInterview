<html lang="en"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="google-site-verification" content="XHAz5PWm2RHaIVuVJQ-gwi54Wn5O-LVlXL7QCExSSzA">
    <meta name="online" content="true">
    <meta name="viewport" content="initial-scale=1 maximum-scale=1">

    @if($post!=null && $post->index)
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">
    @endif

    <meta name="description"
          content="{{$post!=null?$post->meta_description:'Contact us'}}">

    <title>{{$post!=null?$post->meta_title:'Contact us'}} </title>

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <meta property="og:image" content="{{ URL::asset('img/cda-interview-guide.jpg') }}">

    <!-- Start Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-56991678-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">
        adroll_adv_id = "3ALUZKCJMFDS7KLVY2OWE2";
        adroll_pix_id = "YSN7W5KEY5FFBLKG45XIAS";
        (function () {
            var oldonload = window.onload;
            window.onload = function () {
                __adroll_loaded = true;
                var scr = document.createElement("script");
                var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
                scr.setAttribute('async', 'true');
                scr.type = "text/javascript";
                scr.src = host + "/j/roundtrip.js";
                ((document.getElementsByTagName('head') || [null])[0] ||
                    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
                if (oldonload) {
                    oldonload()
                }
            };
        }());
    </script>

    <script>(function () {
            var _fbq = window._fbq || (window._fbq = []);
            if (!_fbq.loaded) {
                var fbds = document.createElement('script');
                fbds.async = true;
                fbds.src = '//connect.facebook.net/en_US/fbds.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(fbds, s);
                _fbq.loaded = true;
            }
            _fbq.push(['addPixelId', '235586069975455']);
        })();
        window._fbq = window._fbq || [];
        window._fbq.push(['track', 'PixelInitialized', {}]);
    </script>
    <noscript><img height="1" width="1" alt="" style="display:none"
                   src="https://www.facebook.com/tr?id=235586069975455&amp;ev=NoScript"/></noscript>
    <!-- End Google Analytics -->

    <script defer="">
        var head = document.head;
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = "https://tracking.markethero.io/v1/lst/script?pid=173875";
        head.appendChild(script);
    </script>
    <script type="text/javascript" src="https://tracking.markethero.io/v1/lst/script?pid=173875"></script>
    <script
        src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/984918679/?random=1594973249347&amp;cv=9&amp;fst=1594973249347&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;u_h=1080&amp;u_w=1920&amp;u_ah=987&amp;u_aw=1920&amp;u_cd=24&amp;u_his=4&amp;u_tz=270&amp;u_java=false&amp;u_nplug=2&amp;u_nmime=2&amp;sendb=1&amp;ig=1&amp;frm=0&amp;url=https%3A%2F%2Fcdainterview.com%2Findex.html&amp;ref=https%3A%2F%2Fcdainterview.com%2Fsample-cda-interview-questions.html&amp;tiba=FREE%20Ultimate%20Guide%20to%20CDA%20Interviews%3A%20Tips%20%26%20Proven%20Strategies%20to%20Help%20You%20Prepare%20%26%20Ace%20Your%20CDA%20Structured%20Interview.&amp;hn=www.googleadservices.com&amp;rfmt=3&amp;fmt=4"></script>
</head>

<body data-gr-c-s-loaded="true">


<div id="wrapper">


    <div id="hwrap">
        <header class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
            <div id="headwrap">

                <div id="titlelogo">
                    <a href="https://cdainterview.com/">
                        <div id="logo"><img src="{{ URL::asset('img/bemo-logo2.png') }}" width="167" height="100"
                                            alt="Site logo"></div>
                        <h1></h1></a>
                    <h2></h2>
                </div>


                <div id="mwrap">
                    <div id="lt"></div>
                    <div id="lm"></div>
                    <div id="lb"></div>
                </div>


                <div id="nwrap">
                    <div id="menuBtn"></div>
                    <nav>
                        <ul class="navigation">
                            <li id="current"><a href="/" rel="self" id="current">Main</a></li>
                            <li><a style="cursor: not-allowed" href="#" rel="self" title="Not part of the test!">How To
                                    Prepare</a></li>
                            <li><a style="cursor: not-allowed" href="#" rel="self" title="Not part of the test!">CDA
                                    Interview Questions</a>
                            </li>
                            <li><a href="{{'contact_us'}}" rel="self">Contact Us</a></li>
                            <li><a href="/login" rel="self">Log-in</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')

        <footer>
            <div id="footer">©2013-2016 BeMo Academic Consulting Inc. All rights reserved. <a
                    href="http://www.cdainterview.com/disclaimer-privacy-policy.html" target="_blank"><span
                        style="text-decoration:underline;">Disclaimer &amp; Privacy Policy</span></a> <a
                    href="mailto:{{$setting->email_contact?$setting->email_contact:'info@bemoacademicconsulting.com'}}"
                ><span
                        style="text-decoration:underline;">Contact Us</span></a>
                <script type="text/javascript">var _rwObsfuscatedHref0 = "mai";
                    var _rwObsfuscatedHref1 = "lto";
                    var _rwObsfuscatedHref2 = ":in";
                    var _rwObsfuscatedHref3 = "fo@";
                    var _rwObsfuscatedHref4 = "bem";
                    var _rwObsfuscatedHref5 = "oac";
                    var _rwObsfuscatedHref6 = "ade";
                    var _rwObsfuscatedHref7 = "mic";
                    var _rwObsfuscatedHref8 = "con";
                    var _rwObsfuscatedHref9 = "sul";
                    var _rwObsfuscatedHref10 = "tin";
                    var _rwObsfuscatedHref11 = "g.c";
                    var _rwObsfuscatedHref12 = "om";
                    var _rwObsfuscatedHref = _rwObsfuscatedHref0 + _rwObsfuscatedHref1 + _rwObsfuscatedHref2 + _rwObsfuscatedHref3 + _rwObsfuscatedHref4 + _rwObsfuscatedHref5 + _rwObsfuscatedHref6 + _rwObsfuscatedHref7 + _rwObsfuscatedHref8 + _rwObsfuscatedHref9 + _rwObsfuscatedHref10 + _rwObsfuscatedHref11 + _rwObsfuscatedHref12;
                    document.getElementById('rw_email_contact').href = _rwObsfuscatedHref;</script>
            </div>

            <div id="socialicons">
                <div id="socialicons1"></div>
                <a class="social"
                   href="https://www.facebook.com/{{$setting->facebook_id?$setting->facebook_id:'bemoacademicconsulting'}}">F</a>
                <a class="social"
                   href="https://twitter.com/{{$setting->twitter_id?$setting->twitter_id:'BeMo_AC'}}">L</a>
            </div>

        </footer>


    </div>

    <a href="#" class="scrollup" style="display: none;">Scroll</a>


    <!-- Start LiveStats -->
    <!-- Google Code for Remarketing Tag -->
    <!--------------------------------------------------
    Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
    --------------------------------------------------->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 984918679;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt=""
                 src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/984918679/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript><!-- End LiveStats -->


</body>
</html>
