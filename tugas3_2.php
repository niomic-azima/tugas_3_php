<?php
  // persen
  $Bunga = 12.5;
  $Tabungan_awal = 150000;
  // bulan
  $n = 12;

  echo "Tabungan Awal = Rp. $Tabungan_awal <br>";
  echo "Bunga Setahun = $Bunga % <br>";

  $B =  $n / 12 * $Bunga /100 * $Tabungan_awal;
  echo " Bunga Rp. $B <br>";
  $Defan = $B + $Tabungan_awal;
  echo "Total Tabungan Setahun = Rp. $Defan";
   ?>
