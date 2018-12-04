<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Hesap Bilgilerim</div>
							<p >Bilgilerinizi aşağıdan düzenleyebilirsiniz...</p>
						
						
						<h5>Hesap Bilgi Düzenleme... <small>,
             				 <?php 

              					if ($_GET['durum']=="ok") {?>

              						<b style="color:green;">İşlem Başarılı...</b>

              							<?php } elseif ($_GET['durum']=="no") {?>

              						<b style="color:red;">İşlem Başarısız...</b>

             				  <?php }

           	  				  ?>
           				   </small></h5>
           				</div>
					  </div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Kayıt Bilgileri</div>
				</div>

				<?php 

				if ($_GET['durum']=="farklisifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
				</div>

				<?php } elseif ($_GET['durum']=="eksiksifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
				</div>

				<?php } elseif ($_GET['durum']=="mukerrerkayit") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
				</div>

				<?php } elseif ($_GET['durum']=="basarisiz") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
				</div>

				<?php }
				?>


				


				<div class="form-group dob">
					<div class="col-sm-12">
						<label class="control-label " for="first-name">Ad Soyad<span class="required"></span>
               			</label>
						<input type="text" class="form-control"  required="" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
					</div>
					
				</div>

				<div class="form-group dob">
					<div class="col-sm-6">
               			<label class="control-label " for="first-name">Adres<span class="required"></span>
               			</label>
						<input type="text" class="form-control" name="kullanici_adres"    value="<?php echo $kullanicicek['kullanici_adres'] ?>">
					</div>
				</div>

				<div class="form-group dob">
					<div class="col-sm-6">
						<label class="control-label " for="first-name">İl<span class="required"></span>
               			</label>
						<input type="text" class="form-control" name="kullanici_il"    value="<?php echo $kullanicicek['kullanici_il'] ?>">
					</div>
					
				</div>


				<div class="form-group dob">
					<div class="col-sm-6">
						<label class="control-label " for="first-name">İlçe<span class="required"></span>
               			</label>
						<input type="text" class="form-control" name="kullanici_ilce"   value="<?php echo $kullanicicek['kullanici_ilce'] ?>">
					</div>
				</div>

				<div class="form-group dob">
					<div class="col-sm-6">
						<label class="control-label " for="first-name">Telefon<span class="required"></span>
               			</label>
						<input type="text" class="form-control" name="kullanici_gsm"    value="<?php echo $kullanicicek['kullanici_gsm'] ?>">
					</div>
				</div>
				




				<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">



				<button type="submit" name="kullanicibilgiguncelle" class="btn btn-default btn-red">Bilgilerimi Güncelle</button>
			</div>
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Şifrenizi mi Unuttunuz?</div>
				</div>


				<center><a href="sifre-guncelle"><img width="200" src="dimg/sifremi-unuttum.jpg"></a></center>
			</div>
		</div>
	</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>