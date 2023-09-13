<?php

function shortenName($fullName) {
    $names = explode(' ', $fullName);
    
    $surname = array_shift($names);
    $firstInitial = mb_substr($names[0], 0, 1, 'UTF-8');
    $secondInitial = mb_substr($names[1], 0, 1, 'UTF-8');

    $shortName = $surname . ' ' . $firstInitial . '. ' . $secondInitial . '.';
    
    return $shortName;
}

if(isset($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
    $shortName = shortenName($fullName);
    echo $shortName;
}
?>

<form method="post">
  <label for="number">Введіть повне ПІБ:</label>
  <input type="text" name="fullName" id="fullName" style="width: 300px"/>
  <input type="submit" value="Скоротити" />
</form>
