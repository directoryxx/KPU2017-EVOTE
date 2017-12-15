<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
  <meta charset="utf-8">
 	<title>E-Voting</title>
	<meta name="description" content="">
	<meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="{{ URL::asset('css/base.css') }} ">
   <link rel="stylesheet" href="{{ URL::asset('css/vendor.css') }} ">
   <link rel="stylesheet" href="{{ URL::asset('css/main.css') }} ">
   <link rel="stylesheet" href="{{ URL::asset('css/vote.css') }} ">


   <!-- script
   ================================================== -->
  <script src="{{URL::asset('js/modernizr.js')}}"></script>
  <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
  <script src="{{URL::asset('js/pace.min.js')}}"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
@yield('content')

<div id="preloader">
<div id="loader"></div>
</div>
<!-- Jquery Edit Source-->
<script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{URL::asset('js/plugins.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
<script>

		$('document').ready(function(){
			$('#pesertujuan').change(function () {
					if($('input#pesertujuan').is(':checked')  ) {
							$('#submitsema').show();
					} else {
						  $('#submitsema').hide();
					}
			}).change(); //to set the initial state

		});
	 </script>
<script>
	   $(function() {
		   $('#logout').click(function(e) {
			   e.preventDefault();
			   $('#logout-form').submit()
		   })

	   })
   </script>
</body>

</html>
