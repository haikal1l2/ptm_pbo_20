<?php
class mobil_lama 
    public function nama_kenfdaraan(){
        return "mobil : lexus, 100kmh, 2000";
    }
}

$dealer = new mobil_lama()
echo $dealer->nama_kenfdaraan();