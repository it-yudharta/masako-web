<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resep</title>
	<link rel="stylesheet" href="<?php base_url();?> /assets/style.css">
</head>
<body>
	<div class="tab">
		<a href="">Resep</a>
	</div>
	<div class="tab">
		<a href="http://masao.byethost9.com/index.php/Masao_tips/">Tips</a>
	</div>
	<div class="content">
				<!-- input data resep -->
				<div class="side">
					<div class="container">
						<?=form_open_multipart('masao/input');?>
							<p><input type="text" name="img_url" placeholder="url gambar"></p>
							<p><input type="text" name="judul" placeholder="Judul"></p>
							<p><textarea name="bahan" placeholder="Remember, be nice!" cols="30" rows="5"></textarea></p>
							<p><textarea name="langkah" placeholder="Remember, be nice!" cols="30" rows="5"></textarea></p>
							<p><input type="text" name="sumber" placeholder="Sumber"></p>
							<p><input type="submit" name="go_upload" value="Upload"></p>
						<?=form_close();?> 
					</div>
				</div>


				<!-- view resep data -->
				<div class="side">
					<div class="containerview">
						<?php foreach($data as $k): ?>
						<div class="viewJudul">
							<div>
								<img src="<?php echo $k['img_url'] ?>" style="width:200px;">
								<h3><?php echo $k['judul'] ?></h3>
								<h4>Bahan - bahan</h4>
								<span><?php echo $k['bahan'] ?></span>
								<h4>Langkah - langkah</h4>
								<span><?php echo $k['langkah'] ?></span>
								<h4>Sumber</h4>
								<span><?php echo $k['sumber'] ?></span>
								<a href="<?php echo base_url()."index.php/Masao/update/".$k['id'] ?>" id="edit">Edit</a>
								<a href="<?php echo base_url()."index.php/Masao/do_delete/".$k['id'] ?>" id="delete">Delete</a>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
					</div>
				</div>

			</div>

</body>
</html>