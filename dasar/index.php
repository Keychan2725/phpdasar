<!DOCTYPE html>
<html lang="en">

<body><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"><br>
  Name: <input type="text" name="fname"><br><br>
  Umur: <input type="text" name="umur"><br><br>

  Gender : <input type="radio" value="Laki Laki" name="gender" id="laki">
  <label for="laki">Laki Laki </label>
  <input type="radio" value ="Perempuan" name="gender" id="cewe">
  <label for="cewe">Perempuan</label>

  <br><br>
 
      Makanan Kesukaan : 
  <input type="checkbox" id="ayam" name="makanan[]" value="Ayam">
  <label for="ayam">Ayam</label>
  <input type="checkbox" id="bakso" name="makanan[]" value="Bakso">
  <label for="bakso"> Bakso </label>
  <input type="checkbox" id="es" name="makanan[]" value="Es Krim">
  <label for="es"> Es Krim</label><br><br>
  <input type="submit">
  </form> 
  <br><br>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    $umur = $_POST['umur'];
    $gender = $_POST['gender'];
    $makanan=$_POST['makanan'];
    
    
    // $gender = $_POST['gender'];
    if (empty($name) && empty($umur) && empty($gender) && empty($makanan)) {
    }
    else {
      echo"Nama saya adalah $name <br>" ;
  
      echo "Umur saya   $umur <br>";
     
      echo "Saya seorang  $gender <br>";

      echo "Makanan favorit saya ";
      for ($i=0; $i < count($makanan) ; $i++){
        echo "$makanan[$i], ";
    }
  }
    
    
  }
  ?>







</body>
</html>