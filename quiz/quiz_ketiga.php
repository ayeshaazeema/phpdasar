<?php

/* Zaki telah mengikuti Ujian Matematika di sekolahnya, lalu untuk penilaian ujiannya,
nilai 90-100 mendapatkan A, nilai 80-90 mendapatkan B, lalu nilai 70-80
mendapatkan C. Jika Zaki mendapatkan nilai 85, nilai huruf apa yang
didapatkannya? buatlah code phpnya!! */

$nilai = 85;

echo "Nilai: {$nilai} <br>";

if ($nilai >= 90 && $nilai <= 100) {
  echo "A";
} elseif ($nilai >= 80) {
  echo "B";
} elseif ($nilai >= 70) {
  echo "C";
} else {
  echo "Nilai tidak valid.";
}

?>