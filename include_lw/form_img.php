<?php
//FORMULARZ - START dla jednego pliku
echo '<form action="" method="post" ENCTYPE="multipart/form-data">';
echo '</select></td></tr>';
echo '<tr><td><input type="file" name="plik"/></td><td><input type="submit" name="button" value="  dodaj  " /></td><td></td></tr>';
echo '</table>';
echo '</form>';// STOP -formularz dodawania danych
?>
 <!-- formularz dla przesyłania wielu plików -->
<form action="../include_lw/graphic_recording.php" method="post" enctype="multipart/form-data">
  <p><input type="file" name="file_array[]"></p>
  <p><input type="file" name="file_array[]"></p>
  <p><input type="file" name="file_array[]"></p>
  <input type="submit" value="Upload all files">
</form>
