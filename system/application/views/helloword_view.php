<html>
	<head>
		<title><?php echo $page_title ?></title>
	</head>
	<body>
		<?php foreach($result as $row):?>
		<h3><?php echo $row->title ?></h3>
		<p><?php echo $row->text ?></p>
		<br />
		<?php endforeach;?>
	</body>
</html>