<div class="col-md-3"><!--sidebar-->
	<div class="title-bg">
		<div class="title">Kategoriler</div>
	</div>
	
	<div class="categorybox">
		<ul>

			<?php 
			$kategorisor=$db->prepare("SELECT * FROM kategori order by kategori_sira ASC");
			$kategorisor->execute();
			while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)) { ?>
			
			<li><a href="kategori-<?=seo($kategoricek["kategori_ad"]) ?>"><?php echo $kategoricek['kategori_ad'] ?></a></li>

			<?php } ?>
		</ul>
	</div>



	<!-- Kategoriler yukarıda -->

	<div class="ads">
		<a href="product.htm"><img src="images\ads.png" class="img-responsive" alt=""></a>
	</div>

	

			