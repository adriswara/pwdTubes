<?php include "header.php"; ?>
<h3>List Kendaraan</h3>

<form method="post">
<label>Search</label>
<input type="text" name="search">
<input type="submit" name="submit">

<section class="services" id="services">
      <div class="heading">
        <span>best services</span>
        <h1>
          rent with 3 easy steps<br />
          from top rated dealers
        </h1>
      </div>
      <div class="services-container">
	
</form>

</body>
</html>

<?php

$con = new PDO("mysql:host=localhost;dbname=sewa_kendaraan",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM asset_kendaraan WHERE nama_kendaraan = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		<table border="1">
			<tr>
				<th>Id</th>
				<th>harga</th>
				<th>Nama Kendaraan</th>
				<th>Merek Kendaraan</th>
				<th>Jenis Kendaraan</th>
				<th>Deskripsi</th>
				<th>Image</th>
				<th>Pesan</th>
			</tr>
			<tr>
				
                <td><?php echo $row->id_asset;?></td>
				<td><?php echo $row->harga; ?></td>
                <td><?php echo $row->nama_kendaraan;?></td>
                <td><?php echo $row->merek_kendaraan;?></td>
                <td><?php echo $row->jenis_kendaraan;?></td>
				<td><?php echo $row->deskripsi_kendaraan;?></td>
				<td><img src="img/<?php echo $row->display_kendaraan;?>" width="50" height="50" alt=""></td>
				<td><a href="order_asset.php?id=<?php echo $row->id_asset;?>" onclick="return confirm('Are You sure?')">Pesan
                Kendaraan</a></td>
			</tr>

		</table>


		<div class="box">
	  <div class="box-img">
		<img src="img/<?php echo $row->display_kendaraan;?>" alt="" />
	  </div>
	  <p><?php echo $row->deskripsi_kendaraan;?></p>
	  <h3><?php echo $row->nama_kendaraan;?></h3>
	  <p><?php echo $row->jenis_kendaraan;?></p>
	  <h2><?php echo $row->harga; ?><span>/mounth</span></h2>
	  <a href="#" class="btn"> rent Now</a>
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






<table border="1">
    <tr>
        <th>Id</th>
        <th>harga</th>
        <th>Nama Kendaraan</th>
        <th>Merek Kendaraan</th>
        <th>Jenis Kendaraan</th>
        <th>Deskripsi</th>
		<th>Image</th>
		<th>Pesan</th>
    </tr>

    <?php 
        include "connection.php";
        $query = "SELECT * FROM asset_kendaraan";
        $pets = mysqli_query($db_connection,$query);
        
        $i = 1;
        foreach ($pets as $data) :
        ?>

    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $data['harga']; ?></td>
        <td><?php echo $data['nama_kendaraan']; ?></td>
        <td><?php echo $data['merek_kendaraan']; ?></td>
        <td><?php echo $data['jenis_kendaraan']; ?></td>
        <td><?php echo $data['deskripsi_kendaraan']; ?></td>
        <td align="center"><img src="img/<?= $data['display_kendaraan'];?>" width="50" height="50" alt=""><br>
            <a href="display_kendaraan.php?id=<?=$data['id_asset']?>">Change Photo</a>
        </td>
        <td><a href="order_asset.php?id=<?=$data['id_asset']?>" onclick="return confirm('Are You sure?')">Pesan
                Kendaraan</a></td>
    </tr>
    <?php endforeach ?>
</table>

<section class="services" id="services">
      <div class="heading">
        <span>best services</span>
        <h1>
          rent with 3 easy steps<br />
          from top rated dealers
        </h1>
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
	  <a href="#" class="btn"> rent Now</a>
	</div>

<?php endforeach ?>
		</div>
      </div>
    </section>
    <script src="main.js"></script>

<?php 
}
?>

<section class="services" id="services">
      <div class="heading">
        <span>best services</span>
        <h1>
          rent with 3 easy steps<br />
          from top rated dealers
        </h1>
      </div>
      <div class="services-container">
        <div class="box">
          <div class="box-img">
            <img src="img/car1.jpg" alt="" />
          </div>
          <p>2017</p>
          <h3>2018 Honda civic</h3>
          <h2>$58500 | $358<span>/mounth</span></h2>
          <a href="#" class="btn"> rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/car2.jpg" alt="" />
          </div>
          <p>2017</p>
          <h3>2018 Honda civic</h3>
          <h2>$58500 | $358<span>/mounth</span></h2>
          <a href="#" class="btn"> rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/car3.jpg" alt="" />
          </div>
          <p>2017</p>
          <h3>2018 Honda civic</h3>
          <h2>$58500 | $358<span>/mounth</span></h2>
          <a href="#" class="btn"> rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/car4.jpg" alt="" />
          </div>
          <p>2017</p>
          <h3>2018 Honda civic</h3>
          <h2>$58500 | $358<span>/mounth</span></h2>
          <a href="#" class="btn"> rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/car5.jpg" alt="" />
          </div>
          <p>2017</p>
          <h3>2018 Honda civic</h3>
          <h2>$58500 | $358<span>/mounth</span></h2>
          <a href="#" class="btn"> rent Now</a>
        </div>

        <div class="box">
          <div class="box-img">
            <img src="img/car6.jpg" alt="" />
          </div>
          <p>2017</p>
          <h3>2018 Honda civic</h3>
          <h2>$58500 | $358<span>/mounth</span></h2>
          <a href="#" class="btn"> rent Now</a>
        </div>
      </div>
    </section>

<?php include "footer.php"; ?>