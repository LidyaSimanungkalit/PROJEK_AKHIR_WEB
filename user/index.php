<?php
  require '..\koneksi.php'; 
  session_start();

  $tampil  = "SELECT * FROM tb_produk ";
  $hasi    = mysqli_query($db, $tampil);
  $jumlah  = mysqli_num_rows($hasi);
  
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Produk</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">
</head>
<html>
<body>
  <nav>
    <ul>
    <?php if(isset($_SESSION['username'])){
    }if($_SESSION['username']){
        echo "<li><a href='profil_user.php'><i class='fa-solid fa-user'></i> Profile</a></li>";
    }
    ?>
    
    </a></li> 
    <li><a href="keranjang.php"><i class="fa-solid fa-cart-shopping"></i> Keranjang</a></li>
    <img class ="logo" src="..\img/cel.png" alt="gambarnya logonya" width="200px">

    </ul> 
  </nav>
    <div class="gari">
      <p class="info">Produk</p>
    </div>

    <div class="container-card">
    <?php
      if($jumlah > 0){
        while($row = mysqli_fetch_assoc($hasi)){
    ?>
      <div class="card">
            <img src="..\img/<?=$row['gambar']?>" alt="gambar_produk" width="200px">
            <h1><?= $row['kategori'] ?></h1>
            <p class="price">Rp.<?= $row['harga']?></p>
            <p><?= $row['desk']?></p>
            <a href="beli_produk.php?id_produk=<?php echo $row['id_produk']?>"class="masukan"><i class="fa-solid fa-cart-plus"></i></a>
            <a href="cekout.php?id_produk=<?php echo $row['id_produk']?>"><button class="cekout">Beli</button></a>
        </div>
    <?php
        }
    }
    ?>
    </div>

</body>
</html>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

*{
    margin: 0;
    padding: 0;
}
body{
    font-family: 'Poppins', sans-serif;

}
.logo{
    margin-top: -30px;
    margin-left:12px;
}
.container-card{
  display: flex;
  flex-wrap: wrap;
}
.card {
  flex: 0 1 24%;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  margin-bottom:35px;
  text-align: center;
}
.price {
  color: grey;
  font-size: 22px;
}
.masukan {  
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #145ba3;
  cursor: pointer;
  width: 50%;
  margin-left: 65px;
  margin: bottom 55px;
  font-size: 18px;
}

.cekout {  
  border: none;
  outline: 0;
  padding: 10px;
  color: white;
  background-color: #2f302f;
  text-align: center;
  cursor: pointer;
  width: 40%;
  height:45px;
  margin-left: -0px;
  margin-bottom:-0px;
  font-size: 18px;
}

input[type=text] {
  margin-right:-65px;
  padding: 3.5px;
  margin-top: 8px;
  font-size: 15px;
  font-family: 'Poppins', sans-serif;


  
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  font-size:20px;
  overflow: hidden;
}

li {
  float: right;
}

li a {
  display: block;
  color:black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.tombol{
  float:right;
}
button{
  text-decoration: none;
  display: inline-block;
  margin: 35px 69px;
    

}


.info{
  color:black;
  font-size:22px;
  padding-left:22px;
  margin-top:100px;
}


table {
  border-collapse: collapse;
  width: 90%;
  margin: auto;}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom:1px solid #cad1db;

}

th {
  background-color: #242020;
  color: white;
}


</style>


