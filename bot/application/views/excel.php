<html>
<head>
	<title></title>
</head>
<body>
	<div class="row">
		<div class="col-sm-3">
	<?php
	$this->load->view('nav');
	
	?></div>
		<div class="col-sm-8"><center>
<form method="post" action="<?php echo base_url('index.php/seller_ctrl/convert1'); ?>" >
<input type="file" name="file1">
<input type='submit' value="upload" name="submit">
</form></center>
</div>

</div>
</body>
</html>