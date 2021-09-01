<?php

class mobil{
    function properti_mobil(){
        echo " kaca , spion , ban , merk";
    }
    function maju (){
    echo " mabil maju ";
    }
    function mundur (){
        echo " mabil mundur ";
    }

    $jalan_mundur = new mobil();

    echo $jalan_mundur->mundur();

?>