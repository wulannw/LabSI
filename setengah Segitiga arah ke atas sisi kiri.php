<?php

function bintangSegitiga($n) {
  // Perulangan untuk mengulang baris - Wulan 11121302
  for ($i = 0; $i < $n; $i++) {
    // Perulangan untuk mengulang kolom - Wulan 11121302
    for ($j = 0; $j <= $i; $j++) {
       // Mencetak bintang - Wulan 11121302
      echo "*";
    }
    // Baris baru - Wulan 11121302
    echo "<br>";
  }

  echo "</pre>";
}

bintangSegitiga(10);

?>