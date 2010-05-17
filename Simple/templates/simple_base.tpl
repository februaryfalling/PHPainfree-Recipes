<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $Simple->title(); ?></title>
	</head>
	<body>
<?php
        list($view,$id,$action) = explode('/', $Painfree->path);
	$sub_view = $Painfree->Root . 'templates/view/' . $view . '.tpl';
        if ( file_exists($sub_view) ) {
                include 'templates/view/' . $view . '.tpl';
        } else {
		// home.tpl is the view we want to load if no view is defined
                include 'templates/view/home.tpl';
        }

?>
	</body>
</html>
