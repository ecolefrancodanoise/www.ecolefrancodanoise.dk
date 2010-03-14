<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" >
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="Nicolas Guilbert" />
		<meta name="keywords" content="ecole, france, danemark, biculturalite, multiage, groupe de support" />
		<meta name="description" content="Une école biculturelle" />
		<meta name="robots" content="all" />

		<title>L'école franco-danoise</title>

		<script type="text/javascript"></script>
		<link rel="stylesheet" href="<?echo $bp?>/efd.css" type="text/css" />
	
	</head>

	<body>
			<?
			include("inc/menu_struct.php");
			include("inc/menu_struct_user.inc");

			$active_nodes = active_branch($ms, $page_name);
			$pp = new print_params("$bp/images/small_arrow_right.png",
						                 "$bp/images/small_ball.png",
						                 15,
						                 164);
			?>


		<div id="container">
			<div id="pageHeader">
				<div id="logo"></div>
				<div id="pagetitle">L'école franco-danoise</div>
				<div id="headerimage1"></div>
				<div id="headerimage2"></div>
			</div>

			<div id="menu">
				     <?php        
				        print_menu($active_nodes, $ms, 0, $pp); //here the menu is actually printed
				      php?>
			</div>


			<div id="supportingText">

				  <?php
				     if($ok){
				     include_once "markdown.php";
				     $my_text = file_get_contents("$DOCUMENT_ROOT/$page_name.mdwn"); 
				     $my_html = Markdown($my_text);
				     echo $my_html;
				  
				  }else print "<center>Page not found.<br><br><br><br></center>";
				  php?>

			</div>
  		<br>
	  	<br>
   		<br>
  
			<div id="footerimage"></div>

		</div>
		<br>
		<br>
		<br>

	</body>
</html>

