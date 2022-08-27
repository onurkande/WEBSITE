<?php 

    try
    {
        $db=new PDO("mysql:host=localhost;dbname=pdofirma","root","");
        //echo "veritabanı baglantısı başarılı";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

?>