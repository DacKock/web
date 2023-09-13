<?php
if(isset($_POST['number'])) {
    $number = $_POST['number'];
    $sum = 0;
    $digits = str_split($number);
    
    foreach($digits as $digit) {
        $sum += $digit;
    }
    
    echo "Сума цифр числа $number дорівнює $sum";
}
?>

<form method="post">
  <label for="number">Введіть число:</label>
  <input type="text" name="number" id="number" />
  <input type="submit" value="Обчислити" />
</form>
