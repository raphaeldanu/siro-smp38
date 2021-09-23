<?php

  

if (!function_exists('nilaiHuruf')) {
  function nilaiHuruf($nilaiAngka)
  {
    if ($nilaiAngka >= 90 && $nilaiAngka <= 100) {
      return "A";
    } elseif ($nilaiAngka >= 80 && $nilaiAngka < 90){
      return "B";
    } elseif ($nilaiAngka >= 70 && $nilaiAngka < 80){
      return "C";
    } else {
      return "D";
    }
  }
}