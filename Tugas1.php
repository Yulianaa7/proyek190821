<!doctype html>
<html lang="en">
  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">	
      <link rel="stylesheet" type = "text/css" href = "">
      <title>TOKO HP</title>

  </head>
  <body>
    <?php
    $dataProduk = array(
    //nama, merk, harga, status
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
    );
    
    echo $dataProduk[0][0] . "<br>" . $dataProduk[0][1] . "<br>" . $dataProduk[0][2] . "<br>";
    if($dataProduk[0][3] == true){
        echo "Stok Tersedia";
        echo "<br> <button>Order</button>";
    }else{
        echo "Stok habis";
    }
    echo "<br>";
    echo "<br>";
    echo $dataProduk[1][0] . "<br>" . $dataProduk[1][1] . "<br>" . $dataProduk[1][2] . "<br>";
    if($dataProduk[1][3] == true){
        echo "Stok tersedia";
        echo "<br> <button>Order</button>";
    }else{
        echo "Stok habis";
    }
    echo "<br>";
    echo "<br>";
    echo $dataProduk[2][0] . "<br>" . $dataProduk[2][1] . "<br>" . $dataProduk[2][2] . "<br>";
    if($dataProduk[2][3] == true){
        echo "Stok tersedia";
        echo "<br> <button>Order</button>";
    }else{
        echo "Stok habis";
    }
    echo "<br>";
    echo "<br>";
    echo $dataProduk[3][0] . "<br>" . $dataProduk[3][1] . "<br>" . $dataProduk[3][2] . "<br>";
    if($dataProduk[3][3] == true){
        echo "Stok tersedia";
        echo "<br> <button>Order</button>";
    }else{
        echo "Stok habis";
    }
?>
</body>
</html>