<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Algoritma extends CI_Controller {
    
   function latihan1()
   {
      $angka = 123456;

      echo $angka;
   }

   function latihan2($nama, $umur, $jns_kelamin)
   {
      echo 'Nama saya : '.$nama.'<br>
            Umur saya : '.$umur.'<br>
            Jesni Kelamin: '.$jns_kelamin.'</br>
      ';
   }

   function latihan3()
   {
      $nama = "Hari";
      $umur = 30;
      $jns_kelamin = "Laki-laki";

      $this->latihan2($nama, $umur, $jns_kelamin);
   }

   function latihan4()
   {
      $angka1 = 20;
      $angka2 = 30;

      $hasil = $angka1 + $angka2;


      $id_kategori = 1;

      


   }



}