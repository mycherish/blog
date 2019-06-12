<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>倚南</title>
  
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
    <script  src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/index.js')}}"></script>

</head>

<body>

<h1>倚南窗以寄傲，审容膝之易安</h1>
<div class="css_top_container">
	<div class="outside_number left_hour_css_clock">
		<div id="hour_ones_top" class="zero_top3"></div>
		<div id="hour_ones_bottom" class="zero_bottom3"></div>
	</div>
	<div class="spacer1"></div>
	<div class="outside_number right_hour_css_clock">
		<div id="hour_tens_top" class="zero_top3"></div>
		<div id="hour_tens_bottom" class="zero_bottom3"></div>
	</div>
	
	<div class="spacer2 am_or_pm">
		<p class="AMorPM" id="AMorPM">MM</p>
	</div>
	
	<div class="outside_number left_minute_css_clock">
		<div id="minute_ones_top" class="zero_top2"></div>
		<div id="minute_ones_bottom" class="zero_bottom2"></div>
	</div>
	<div class="spacer1"></div>
	<div class="outside_number right_minute_css_clock">
		<div id="minute_tens_top" class="zero_top2"></div>
		<div id="minute_tens_bottom" class="zero_bottom2"></div>
	</div>
	
	<div class="spacer1"></div>
	
	<div class="outside_number left_second_css_clock">
		<div id="second_ones_top" class="zero_top1"></div>
		<div id="second_ones_bottom" class="zero_bottom1"></div>
	</div>
	<div class="spacer1"></div>
	<div class="outside_number right_second_css_clock">
		<div id="second_tens_top" class="zero_top1"></div>
		<div id="second_tens_bottom" class="zero_bottom1"></div>
	</div>
</div>


</body>

</html>