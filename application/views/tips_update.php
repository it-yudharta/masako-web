<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tips Update</title>
	<link rel="stylesheet" href="<?php base_url();?> /assets/style.css">
</head>
<body>
	<div class="tab">
		<a href="http://masao.byethost9.com/index.php/Masao">Resep</a>
	</div>
	<div class="tab">
		<a href="">Tips</a>
	</div>
	<div class="content">
				<!-- input data resep -->
				<div class="side">
					<div class="container">
						<form method="POST" action="<?php echo base_url()."index.php/Masao_tips/do_update"; ?>">
							<p><input type="text" name="id" placeholder="Id" value="<?php echo $id; ?>"></p>
							<p><input type="text" name="judul" placeholder="Judul" value="<?php echo $judul; ?>"></p>
							<p><textarea name="konten" placeholder="Remember, be nice!" cols="30" rows="5"><?php echo $konten; ?></textarea></p>
							<p><input type="text" name="sumber" placeholder="Sumber" value="<?php echo $sumber; ?>"></p>
							<p><input type="text" name="img_url" placeholder="Sumber" value="<?php echo $img_url; ?>"></p>
							<p><input type="submit" name="btnSubmit" value="Update"></p>
						</form> 
					</div>
				</div>

			</div>

</body>
</html>