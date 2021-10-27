<!DOCTYPE html>
<html lang="en">
@include('frontend.partials.header')


<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
	<!-- Header Top ==== -->
    <header class="header rs-nav header-transparent">

		@include('frontend.partials.topbar')

		@include('frontend.partials.navbar')
    <!-- Header Top END ==== -->
		</header>
    <!-- Content -->

		@yield('content')
    <!-- Content END-->
	<!-- Footer ==== -->

		@include('frontend.partials.footer')
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

@include('frontend.partials.scripts')

<!--Start of Tawk.to Script-->
<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src='https://embed.tawk.to/6178eb2286aee40a57388be0/1fj05d0el';
	s1.charset='UTF-8';
	s1.setAttribute('crossorigin','*');
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->
</body>

</html>
