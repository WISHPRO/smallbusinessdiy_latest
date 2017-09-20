<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head><!-- Dashboard and custom pages other than sitebuilder -->
	<meta charset="utf-8"/>
	<title>@if($page!='') {{$page}} @elseif(isset($data['page'])!='') {{$data['page']}} @endif | {{$cdata[0]}}</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" href="//storage.googleapis.com/assets-sitebuilder/images/favicon.ico" type="image/icon" >
    <link rel="icon" href="//storage.googleapis.com/assets-sitebuilder/images/favicon.ico" type="image/ico" >
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	    <!-- Custom CSS -->
    <link href="{{ asset('src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('src/css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('src/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('src/css/sbadmin/sb-admin-2.css') }}" rel="stylesheet"> 
    <link href="{{ asset('src/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
    
    <script src="{{ URL::to('src/js/vendor/jquery.min.js') }}"></script>
    <!--<script src="{{ asset('src/assets/scripts/jquery.min.js') }}"></script>-->
    <!-- Bootstrap Core JavaScript -->

    <script src="{{ asset('src/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="https://apis.google.com/js/api.js"></script>
<script src="{{ asset('src/assets/scripts/sb-admin-2.js') }}" type="text/javascript"></script>
    <script>
        var baseUrl = '<?php echo url('/'); ?>/';
        var siteUrl = '<?php echo url('/'); ?>/';
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
       function showGoogleDomainsFlow(){
		console.log(baseUrl); 
	    gapi.load('domains', function() {
            gapi.domains.searchAndBuy({
            partnerId: '6543',
            successUrl: 'https://smallbusinessdiy.com/sitebuilder/public/userwebsite/builtby',
            cancelUrl: 'https://smallbusinessdiy.com/sitebuilder/public/userwebsite/domain',
            defaultTlds: ['com','co'],
           
            });
        });
	} 
    </script>


</head>
<body>
	@yield('body')

<script src="{{ asset('src/metisMenu/metisMenu.min.js') }}" ></script>
<script src="{{asset('src/js/signup.js')}}"></script>
<!-- jQuery easing plugin -->
<script src="{{asset('src/js/jquery.easing.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
<script src="{{ URL::to('src/bootstrap/js/bootstrap-checkbox.js') }}"></script>
    <!-- Custom Theme JavaScript -->


<!-- jQuery easing plugin -->
</body>
</html>