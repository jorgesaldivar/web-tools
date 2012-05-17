<html>
<head>

	<title>AutoLoad</title>

	<!--CSS-->
	<link href="style.css" rel="stylesheet" type="text/css" />
	<!--JQuery-->
	<script type="text/javascript" src="jQueryV1.7.2.js"></script>

</head>

	<body>

	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<?php 
		
		//Get current page
		$page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
	
			if($page == 1){
				
				//Change css using jquery
				echo '
				<script type="text/javascript">
					$("body").css({"background-color":"black"});
				</script>';
				
				//Sets next page number
				$nextpage = 2;
			}
			
			else if($page == 2){
				
				//Change css using jquery
				echo '
				<script type="text/javascript">
					$("body").css({"background-color":"blue"});
				</script>';
			
				//Sets next page number
				$nextpage = 3;
			}
			
			else if($page == 3){
			
				//Change css using jquery
				echo '
				<script type="text/javascript">
					$("body").css({"background-color":"grey"});
				</script>';
				
				//Sets next page number
				$nextpage = 1;
			}
		
	?>
	</body>	

</html>
	
	<!--AutoLoad-->
	<script type="text/javascript">
		window.onscroll = function()
		{

			if( window.XMLHttpRequest ) {
			
				if ($('body').height() <= ($(window).height() + $(window).scrollTop())) {
					location.href="?page=<?php echo $nextpage;?>";
				}
			}
		}
	</script>