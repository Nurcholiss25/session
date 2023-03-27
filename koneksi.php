<?php
session_start();
 class koneksi{
    function getKoneksi(){
        return new PDO("mysql:host=localhost;dbname=barang",'root','');
    }
    
 }