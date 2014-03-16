<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="author" content="Nicolas Guilbert">
		<meta name="keywords" content="ecole, france, danemark, biculturalite, multiage, groupe de support">
		<meta name="description" content="En multikulturel og tidssvarende skole">
		<meta name="robots" content="all">

		<title>L'école franco-danoise</title>

		<script type="text/javascript"></script>
		<link rel="stylesheet" href="<?php echo $bp?>/efd.css" type="text/css">
                <link rel="shortcut icon" href="<?php echo $bp?>/images/bulles.ico" type="image/x-icon" />
                <link rel="icon" href="<?php echo $bp?>/images/bulles.ico" type="image/x-icon" />
	</head>

	<body>
		<div id="container">
			<div id="pageHeader">
				<div id="logo"></div>
				<div id="pagetitle">L'école franco-danoise</div>
				<div id="headerimage1"></div>
				<div id="headerimage2"></div>
			</div>

			<div id="menu">
				     <?php
                			include("inc/menu_struct.php");
		                	include("inc/menu_struct_user.inc");
				        print_menu($ms, $page_name); //here the menu is actually printed
				      ?>
                        <div id="translate-button">
                        <a href="http://ecolefrancodanoise.dk"><img src="<?echo $bp?>/images/tricolore.png" alt="Site en francais"></a>
                        </div>

			</div>


			<div id="supportingText">

				  <?php
				     if($ok){
				     include_once "markdown.php";
				     $my_text = file_get_contents("$DOCUMENT_ROOT/$page_name.mdwn"); 
				     $my_html = Markdown($my_text);
				     echo $my_html;
				  }else print "<center>Page not found.<br><br><br><br></center>";
				  ?>

			</div>
			<div id="footerimage"></div>
			<div id="bottomspace"></div>

		</div>

	</body>
</html>

