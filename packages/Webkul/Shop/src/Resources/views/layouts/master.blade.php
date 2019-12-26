<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>@yield('page_title')</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="content-language" content="{{ app()->getLocale() }}">

    <link rel="stylesheet" href="{{ bagisto_asset('css/shop.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/webkul/ui/assets/css/ui.css') }}">

    <style>
        /*! CSS Used from: /style.css */
        /*! @import /css/bootstrap.min.css */
        body {
    font-family: 'Poppins', sans-serif!important;;
        }
        .header .header-top div.left-content ul.logo-container {
    margin-right: 12px
}

.header .search-responsive {
    display: none;
    background-color: #fff!important;
}

.header .header-bottom {
    height: 47px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    z-index: 10;
    -webkit-transform: translateZ(0);
    padding: 0;
    margin: auto;
    text-align: center;
    background-color: #fea712;
    border-radius: 5px 5px 0px 0px;
    border:1px solid #fea712;
}

.header .header-bottom ul.nav {
    display: block;
    font-size: 16px;
    max-width: 100%;
    width: auto;
    margin-left: auto;
    margin-right: auto
}

.header .header-bottom .nav ul {
    margin: 0;
    padding: 0;
    -webkit-box-shadow: 1px 1px 1px 0 rgba(0, 0, 0, .4);
    box-shadow: 1px 1px 1px 0 rgba(0, 0, 0, .4)
}

.header .header-bottom .nav a {
    display: block;
    color: #ffff;
    text-decoration: none;
    padding: .8em .3em .8em .5em;
    text-transform: capitalize;
    letter-spacing: -.38px;
    position: relative;
    font-family: 'Raleway', sans-serif;
    font-weight: 700;
    -webkit-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
    -o-transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
    transition: all 0.3s cubic-bezier(0.8, 0, 0, 1);
    box-shadow: inset 0 0 0 0 #fff;
    text-transform: uppercase;
}

.header .header-bottom .nav li>.icon {
    display: none
}

.header .header-bottom .nav {
    vertical-align: top;
    display: inline-block
}

.header .header-bottom .nav li {
    position: relative
}

.header .header-bottom .nav>li {
    float: left;
    margin-right: 1px;
    height: 45px;
    list-style: none;
    border-bottom: none;
}

.header .header-bottom .nav>li>a {
    margin-bottom: 1px
}

.header .header-bottom .nav>li>a .icon {
    display: none
}

.header .header-bottom .nav li li a {
    margin-top: 1px;
    white-space: normal;
    word-break: break-word;
    width: 200px
}

.header .header-bottom .nav li a:first-child:nth-last-child(2):before {
    content: "";
    position: absolute;
    height: 0;
    width: 0;
    border: 5px solid transparent;
    top: 50%;
    right: 5px
}

.header .header-bottom .nav ul {
    position: absolute;
    white-space: nowrap;
    border: 1px solid #c7c7c7;
    background-color: #fff;
    z-index: 10000;
    left: -99999em
}

.header .header-bottom .nav>li:hover {
    background-color: #f2f2f2
}

.header .header-bottom .nav>li:hover>ul {
    left: auto;
    min-width: 100%
}

.header .header-bottom .nav>li li:hover {
    background-color: #f2f2f2
}

.header .header-bottom .nav>li li:hover>ul {
    left: 100%;
    margin-left: 1px;
    top: -2px
}

.header .header-bottom .nav>li:hover>a:first-child:nth-last-child(2):before,
.header .header-bottom .nav li li>a:first-child:nth-last-child(2):before {
    margin-top: -5px
}

.header .header-bottom .nav li li:hover>a:first-child:nth-last-child(2):before {
    right: 10px
}


.rtl .header .header-bottom .nav>li {
    float: right;
    margin-right: 0;
    margin-left: 1px
}

.rtl .header .header-bottom .nav a {
    padding: .8em .5em .8em .3em !important
}

.rtl .header .header-bottom .nav li a>.icon {
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg)
}

.rtl .header .header-bottom .nav>li li:hover>ul {
    left: unset !important;
    right: 100% !important
}

.rtl .header .header-bottom .nav ul {
    left: 99999em
}

.header .header-top div.left-content ul.logo-container li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

.header .header-top div.left-content ul.logo-container li img {
    max-width: 188px!important;
    max-height: 98px!important;
}

        
.header .header-top div.right-content ul.search-container li.search-group {
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center
}

.header .header-top div.right-content ul.search-container li.search-group .search-field {
  
    font-size: 14px
}

.header .header-top div.right-content ul.search-container li.search-group .search-icon-wrapper {
    /* -webkit-box-sizing: border-box;
    box-sizing: border-box;
    height: 38px;
    width: 38px;
    border: 2px solid #c7c7c7;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px */
}

.header .header-top div.right-content ul.search-container li.search-group .search-icon-wrapper button {
    background: #fff;
    border: 0;
    padding: 3px 5px
}
.header .header-top div.right-content ul.search-container li.search-group .search-field {
    /* border: 2px solid #c7c7c7;
    padding-right: 12px;
    padding-left: 0;
    border-radius: 2px;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0 */
}

.header .header-top div.right-content ul.search-container li.search-group .search-icon-wrapper {
    /* border: 2px solid #c7c7c7;
    border-right: none;
    border-radius: 2px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0 */
}

  
        .header{
            margin-top: 0px!important;
        }
        .header-container {
            
            position:relative;
            top:0;
	transition: all 0.5s;
	background: #44a23d!important;
}
        footer{display:block;position:relative;bottom:0;top:5px}
        a{background-color:transparent;}
        a:active,a:hover{outline:0;}
        img{border:0;}
        input{margin:0;font:inherit;color:inherit;}
        input[type=submit]{-webkit-appearance:button;cursor:pointer;}
        input::-moz-focus-inner{padding:0;border:0;}
        input{line-height:normal;}
        @media print{
            *,:after,:before{color:#000!important;text-shadow:none!important;background:0 0!important;-webkit-box-shadow:none!important;box-shadow:none!important;}
            a,a:visited{text-decoration:underline;}
            a[href]:after{content:" (" attr(href) ")";}
            a[href^="#"]:after{content:"";}
            img{page-break-inside:avoid;}
            img{max-width:100%!important;}
            p{orphans:3;widows:3;}
        }
        *{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
        :after,:before{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
        input{font-family:inherit;font-size:inherit;line-height:inherit;}
        a{color:#337ab7;text-decoration:none;}
        a:focus,a:hover{color:#23527c;text-decoration:underline;}
        a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px;}
        img{vertical-align:middle;}
        h5{font-family:inherit;font-weight:500;line-height:1.1;color:inherit;}
        h5{margin-top:10px;margin-bottom:10px;}
        h5{font-size:14px;}
        p{margin:0 0 10px;}
        ul{margin-top:0;margin-bottom:10px;}
        address{margin-bottom:20px;font-style:normal;line-height:1.42857143;}
        .container{margin-right:auto;margin-left:auto;}
        @media (min-width:768px){
            .container{width:750px;}
        }
        @media (min-width:992px){
            .container{width:970px;}
        }
        @media (min-width:1200px){
            .container{width:1170px;}
        }

        /*! @import /css/style.css */
        a{color:#8ac42f;}
        a:hover{color:#8ac42f;text-decoration:none;transition:color 300ms ease-in-out 0s, background-color 300ms ease-in-out 0s, background-position 300ms ease-in-out 0s;}
        .button{background:#fff;border-color:#ddd;color:#333;}
        .button:hover{background:#fdae03;border-color:#fdae03;color:#fff;}
        .footer-top{padding-top:30px;background-color:#ddd;margin-bottom:30px;border-top:1px solid #ccc;}
        footer .footer-top a{color:#666;}
        footer{padding:0px 0 0;overflow:hidden;color:#fff;padding-top:0px;background-color:#111;}
        footer ul{margin:0px;padding:0px;}
        footer ul li{list-style-type:none;}
        footer a{padding-top:7px;padding-bottom:7px;font-size:13px;
            color: #aaa;line-height: normal;}
        footer .footer-inner{margin:auto;overflow:hidden;margin-bottom:30px;}
        footer .footer-links a:before{content:"\f105";font-family:FontAwesome;font-size:11px;display:inline-block!important;cursor:pointer;line-height:20px;color:#aaa;margin-right:5px;}
        footer p{font-size:14px;color:#aaa;padding-top:0px;padding-bottom:5px;}
        footer .footer-links a{display:inline-block;color:##717171;}
        footer a{line-height:normal;}
        footer a:hover{color:#fdae03;}
        footer p{line-height:20px;}
        footer a{color:#aaa!important;}
        footer h5{padding:0 0 10px;font-size:14px;margin:0;color:#fff;text-transform:uppercase;letter-spacing:1px;}
        footer a:hover{text-decoration:none;}
        footer .coppyright{color:#666;float:left;margin-top:4px;}
        .footer-bottom{padding:0px;overflow:hidden;width:100%;margin:auto;padding:15px 0 12px;background-color:#060606;}
        .footer-bottom a{color:#999;}
        footer address{display:block;margin:auto;font-style:normal;line-height:35px;color:#777;padding-top:5px;margin-top:20px;text-align:center;margin-bottom:20px;font-size:13px;border:none;letter-spacing:0.5px;}
        footer address p{display:inline-block;padding:0px;color:#666;}
        footer address i{border:1px #888 solid;width:35px!important;line-height:33px!important;display:inline-block!important;height:35px!important;text-align:center;margin-left:20px!important;border-radius:2px;margin-right:5px!important;}
        footer address .fa{font-size:16px;}
        footer address .fa-envelope{font-size:14px;}
        footer address .fa-mobile{font-size:19px;}
        address{display:block;margin:auto;font-style:normal;line-height:21px;color:#999;padding-top:10px;margin-top:10px;text-align:left;padding-bottom:15px;border-bottom:1px #eaeaea solid;margin-bottom:15px;}
        .newsletter-inner{display:inline-block;}
        .footer-newsletter form{display:inline-block;margin-top:10px;}
        .footer-newsletter .newsletter-email{float:left;font-size:12px;font-weight:300;border:0;background:#fff;color:#666;padding:10px 12px;width:230px;border-radius:3px 0px 0px 3px;}
        .footer-newsletter .subscribe{text-transform:capitalize;font-size:12px;font-weight:600;float:right;color:#fff;text-decoration:none;background:#fdae03;padding:8px 15px 8px 18px;border:1px #fdae03 solid;border-radius:0px 3px 3px 0px;text-transform:uppercase;}
        .footer-newsletter .subscribe:hover{border:1px #000 solid;background:#000;padding:8px 15px 8px 18px;}
        .social{overflow:hidden;}
        .social h5{margin:28px 0 0px 0px;}
        .social ul.inline-mode li a:before{content:"";margin-right:0px;}
        .social ul.inline-mode li{display:inline-block;margin-right:6px;}
        .social ul.inline-mode li a{border:0px solid #666;color:#fff;font-size:15px;height:38px;width:38px;display:inline-block;text-align:center;border-radius:3px;}
        .social .fb a:hover,.social .tw a:hover,.social .instagram a:hover,.social .linkedin a:hover{background:#00b9f5;}
        .social .fb a{background:#3C5B9B;}
        .social .tw a{background:#359BED;}
        .social .instagram a{background:#3f729b;}
        .social .linkedin a{background:#027ba5;}
        .payment-accept{color:#333333;font-size:14px;margin:auto;overflow:hidden;}
        .payment-accept ul{padding:0;margin:auto;text-align:right;}
        .payment-accept li{display:inline-block;margin-left:5px;}
        .payment-accept li a img{width:40px;}
        .payment-accept img{opacity:0.7;}
        .payment-accept img:hover{opacity:1;}
        /*! end @import */
        /*! @import /css/responsive.css */
        @media only screen and (min-width: 320px) and (max-width: 479px){
            .social ul li{margin-right:4px;}
            .payment-accept{float:none!important;}
            footer .coppyright{float:none;text-align:center;margin-bottom:8px;}
            .social ul li a{width:35px;height:35px;line-height:32px;}
            .payment-accept img{margin-right:6px;}
            footer address{width:95%;margin:18px auto 10px;text-align:left;}
            footer address span{float:left;margin-right:8px;}
            .footer-links{margin-bottom:15px;}
            footer address p{display:inline-block;width:100%;line-height:normal;}
            footer address i{float:left;margin-right:5px;margin-left:12px!important;}
            footer .footer-inner{margin-bottom:10px;}
            .footer-newsletter .newsletter-email{border-radius:3px;width:100%;margin-bottom:8px;}
            .footer-newsletter .subscribe{border-radius:3px;float:left;}
            .payment-accept ul{text-align:center;}
        }
        @media only screen and (min-width: 480px) and (max-width: 767px){
            .social ul li{margin-right:4px;}
            .payment-accept{float:none!important;}
            footer{padding-top:40px;}
            footer .coppyright{float:none;text-align:center;margin-bottom:8px;}
            .social ul li a{width:35px;height:35px;line-height:32px;}
            .payment-accept img{margin-right:6px;}
            footer .footer-inner{margin-bottom:10px;}
            .footer-newsletter .newsletter-email{border-radius:3px;width:100%;margin-bottom:8px;}
            .footer-newsletter .subscribe{border-radius:3px;float:left;}
            footer address{width:95%;margin:18px auto 0px;text-align:left;}
            footer address span{float:left;margin-right:8px;}
            .footer-links{margin-bottom:15px;}
            footer address p{display:inline-block;width:100%;line-height:normal;}
            footer address i{float:left;margin-right:5px;}
            footer .footer-inner{margin-bottom:10px;}
            .payment-accept ul{text-align:center;}
        }
        @media (min-width: 768px) and (max-width: 991px){
            .social ul li a{width:35px;height:35px;}
            .footer-inner .social{width:45%;float:right;}
            .button{margin-bottom:5px;}
            footer .footer-inner{margin-bottom:15px;}
            .footer-newsletter{float:left;width:50%;margin-top:15px;}
            .footer-newsletter p{display:none;}
            .footer-inner .social{margin-top:15px;}
        }
        @media (min-width: 992px) and (max-width: 1199px){
            .footer-inner .social{margin-top:10px;}
            .footer-newsletter .newsletter-email{border-radius:3px;width:100%;margin-bottom:8px;}
            .footer-newsletter .subscribe{border-radius:3px;float:left;}
        }

    </style>
    <style>
        .row {
        display: flex;
        }

     .column {
        float: left;
        width: 25%;
        }

        .column-50 {
        float: left;
        width: 50%;
        }
        .column-100 {
        display:block;
        float: center;
        width: 100%;
        max-width:100%;
        flex: 100%;
        }

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


@media screen and (max-width: 600px) {
    .search-boxs{
        display:none!important;
    }
  .column {
    margin-left:30px;
    width: 100%;
  }
  .column-50 {
    margin-left:30px;
    width: 100%;
  }
  .right-content{
    position: relative!important;
    left: 15px!important;
  }
  .right-content-menu{
    position: relative;
    top: 0px!important;
    padding: 0px;
    display: inline-block;
}
}
        .footer {
            background-color: #f2f2f2;
            padding-left: 0px;
            padding-right: 0px;
            width: 100%;
            display: inline-block;
        }

        .header-top-1 {
    padding: 0px 0px 8px 0px;
    background-color: #409f3b;
}
.welcome-msg {
    text-align: left;
    display: inline-block;
    padding: 0px;
    margin: 0px 14px 0px 0px;
    font-size: 13px;
    color: #fff;
    vertical-align: top;
    margin-top: 8px;
}
.jtv-currency-box {
    display: inline-block !important;
    margin: 6px 0 0 18px;
}
.jtv-top-links {
    line-height: normal;
    padding: 8px 0 0;
}
.jtv-top-links .links {
    text-align: right;
}
.jtv-top-links .links ul li {
    display: inline-block;
    list-style: none;
}
.jtv-top-links .links li a {
    color: black;
    display: inline-block;
    padding: 0px;
    color: #fff;
    font-size: 12px;
    padding-left: 15px;
    font-weight: normal;
    text-decoration: none;
}
.right-content-menu{
    position: relative;
    top: -55px;
    padding: 0px;
    display: inline-block;
}

#gtx-trans{
    display:none!important
}
.banner-container{
    display:none!important
}

.search-form{
    position: relative;
    /* right: 40px; */
    display: inherit;
    /* margin-left: 10px; */
    /* border: 1px solid #44a23d; */
    box-sizing: border-box;
    /* margin: 23px 0px 0px; */
    border: 1px #409f3b solid;
    border-radius: 3px 0px 0px 3px!important;

}

.search-boxs {
    margin-top: -10px;
    margin: 0;
    width: 260px;
    font-size: 13px;
    height: 42px;
    color: #333;
    padding: 0 12px;
    background: none;
    outline: none;
    border: none;
    background: #ffff;
    border: 1px #409f3b solid;
    border-radius: 3px 0px 0px 3px!important;
}

.search-icon-wrapper{
    cursor: pointer;
    display: inline-block;
    background: #fff;
    position: absolute;
    outline: none;
    box-shadow: none;
    border: none;
    height: 40px;
    right: 0px;
    margin-top: 1px;
    font-size: 18px;
    border-left: 0px #eaeaea solid;
    /* padding-left: 14px; */
    width: 45px;
    border-radius: 0px 3px 3px 0px;
}
.search-btn{
    cursor: pointer;
    display: inline-block;
    background: #fff;
    position: absolute;
    outline: none;
    box-shadow: none;
    border: none;
    height: 40px;
    right: 15px;
    font-size: 18px;
    border-left: 0px #eaeaea solid;
    padding-left: 14px;
    width: 45px;
    border-radius: 0px 3px 3px 0px;

}
.slider-item{
    width:100%;
}

.show-content > p {
    padding: 8px 20px;
    font-size: 13px;
    font-weight: 600;
    text-transform: uppercase;
    color: #fff;
    letter-spacing: 1.5px;
    display: inline-block;
    border: 1px #44a23d solid;
    float: left;
    background-color: #44a23d;
    border-radius: 3px;
    position: absolute;
    bottom: 2;
    right: 0;
    left: 5px;
    bottom: 4px;
    width: 80%;
}
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    @if ($favicon = core()->getCurrentChannel()->favicon_url)
        <link rel="icon" sizes="16x16" href="{{ $favicon }}" />
    @else
        <link rel="icon" sizes="16x16" href="{{ bagisto_asset('images/favicon.ico') }}" />
    @endif

    @yield('head')

    @section('seo')
        @if (! request()->is('/'))
            <meta name="description" content="{{ core()->getCurrentChannel()->description }}"/>
        @endif
    @show

    @stack('css')

    {!! view_render_event('bagisto.shop.layout.head') !!}

</head>


<body @if (core()->getCurrentLocale()->direction == 'rtl') class="rtl" @endif style="scroll-behavior: smooth;">

    {!! view_render_event('bagisto.shop.layout.body.before') !!}

    <div id="app">
        <flash-wrapper ref='flashes'></flash-wrapper>

        <div class="">

            {!! view_render_event('bagisto.shop.layout.header.before') !!}

            @include('shop::layouts.header.index')

            {!! view_render_event('bagisto.shop.layout.header.after') !!}
            <div class="main-container-wrapper">

            @yield('slider')

            <div class="content-container">

                {!! view_render_event('bagisto.shop.layout.content.before') !!}

                @yield('content-wrapper')

                {!! view_render_event('bagisto.shop.layout.content.after') !!}

            </div>
    </div>

        </div>

        {!! view_render_event('bagisto.shop.layout.footer.before') !!}

        @include('shop::layouts.footer.footer')

        {!! view_render_event('bagisto.shop.layout.footer.after') !!}


    </div>

    <script type="text/javascript">
        window.flashMessages = [];

        @if ($success = session('success'))
            window.flashMessages = [{'type': 'alert-success', 'message': "{{ $success }}" }];
        @elseif ($warning = session('warning'))
            window.flashMessages = [{'type': 'alert-warning', 'message': "{{ $warning }}" }];
        @elseif ($error = session('error'))
            window.flashMessages = [{'type': 'alert-error', 'message': "{{ $error }}" }
            ];
        @elseif ($info = session('info'))
            window.flashMessages = [{'type': 'alert-info', 'message': "{{ $info }}" }
            ];
        @endif

        window.serverErrors = [];
        @if(isset($errors))
            @if (count($errors))
                window.serverErrors = @json($errors->getMessages());
            @endif
        @endif
    </script>

    <script type="text/javascript" src="{{ bagisto_asset('js/shop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/webkul/ui/assets/js/ui.js') }}"></script>

    @stack('scripts')

    {!! view_render_event('bagisto.shop.layout.body.after') !!}

    <div class="modal-overlay"></div>

</body>

</html>
