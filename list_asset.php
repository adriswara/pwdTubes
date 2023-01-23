<?php include "header2.php"; ?>
<h3>List Kendaraan</h3>


<section class="services" id="services">
	<div class="heading">
		<span>best services</span>
        <h1>
			rent with 3 easy steps<br />
			from top rated dealers
        </h1>
	</div>
	<form method="post">
	<label>Search</label>
	<input type="text" name="search">
	<input type="submit" name="submit">
	</form>
	<div class="services-container">
		
		
		
		
<?php

$con = new PDO("mysql:host=localhost;dbname=sewa_kendaraan",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM asset_kendaraan WHERE nama_kendaraan like '$str' or lokasi_kendaraan like '$str' ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
	?>
	<br><br><br>
		<div class="box">
			<div class="box-img">
				<img src="img/<?php echo $row->display_kendaraan;?>" alt="" />
			</div>
	  		<p><?php echo $row->deskripsi_kendaraan;?></p>
	  		<h3><?php echo $row->nama_kendaraan;?></h3>
	  		<p><?php echo $row->jenis_kendaraan;?></p>
	  		<h2><?php echo $row->harga; ?><span>/mounth</span></h2>
	  		<a href="order_asset.php?id=<?php echo $row->id_asset;?>" class="btn" onclick="return confirm('Are You sure?')">Pesan Kendaraan</a>
	</div>
</div>
      </div>
    </section>
    <script src="main.js"></script>
	<?php 
	}
	else{
		echo "Name Does not exist";
	}
}
else{
	?>
    <?php 
        include "connection.php";
        $query = "SELECT * FROM asset_kendaraan";
        $pets = mysqli_query($db_connection,$query);
        
        $i = 1;
       
        ?>


<section class="services" id="services">
      <div class="heading">
        
      </div>
      <div class="services-container">

<?php foreach($pets as $data): ?>

	<div class="box">
	  <div class="box-img">
		<img src="img/<?= $data['display_kendaraan'];?>" alt="" />
	  </div>
	  <p><?php echo $data["deskripsi_kendaraan"]; ?></p>
	  <h3><?php echo $data["nama_kendaraan"]; ?></h3>
	  <p><?php echo $data["jenis_kendaraan"]; ?></p>
	  <h2><?php echo $data["harga"]; ?><span>/mounth</span></h2>
	  <a href="order_asset.php?id=<?php echo $row->id_asset;?>" class="btn" onclick="return confirm('Are You sure?')">Pesan Kendaraan</a>
	</div>

<?php endforeach ?>
		</div>
      </div>
    </section>
    <script src="main.js"></script>

<?php 
}
?>


<?php include "footer.php"; ?>