<?php
include 'logic.php';


if(isset($_POST['Rental'])){
    $nama = $_POST['nama'];
    $motor = $_POST['Motor'];
    $hari = $_POST ['Hari'];

   
    $rental = new Beli($nama, $motor,$hari );
    echo "<center>";
    echo"<br>";
    echo $nama ." Menyewa " .  $motor . " dengan jangka waktu " . $hari . " hari";
    echo " Harga yang harus anda bayar sebesar " . number_format($rental->hargaBeli(), 0, '.', '.');
    echo"<br>";
    echo "</center>";
    

    
}

if(isset($_SERVER['Rental'])){
  echo "<center>";
  echo "<br>";
  echo $nama. " Anda adalah member" . $nama ."menyewa" . $motor . " dengan jangka waktu" . $hari . " hari";
  echo " Harga yang harus anda bayar sebesar " . number_format($rental->setDiskon(), 0, '.', '.');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Motor</title>
</head>
<body>
    <center>
        <form action="" method="post">

            <label for="name">Masukan Nama</label>
            <input type="text" name="nama"> 

            
            <label for="Motor">Motor :</label>
            <select name="Motor" required> 
                <option value="" disabled selected>Pilih Motor</option>
                <option value="beet">beet</option>
                <option value="mio">mio</option>
                <option value="suzuki">suzuki</option>
                <option value="supra">Supra</option>
            </select>

            
            <label for="Hari">Waktu Peminjaman (hari)</label>
            <input type="number" name="Hari" required> 

            
            <button type="submit" name="Rental">Bayar</button> 

        </form>
    </center>


    <style>
    /* Style the form and center it */
    form {
      width: fit-content;
      margin: 0 auto;
    }

    /* Style the labels */
    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    /* Style the inputs with 10% border radius */
    input[type="text"],
    input[type="number"] {
      padding: 5px 10px;
      border: 1px solid #ccc;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    /* Style the select element */
    select {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    /* Style the button */
    button {
      padding: 10px 20px;
      background-color: #4CAF50; /* Green */
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
  </style>


</body>
</html>
