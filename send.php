<?php

    if(isset($_GET['myValues']) && !empty($_GET['myValues'])){

        $showdata = json_decode($_GET['myValues']);

        // The object operator, -> , is used in object scope to aceess
        // methods and properties of an object.
        
        echo $showdata -> firstname;
        echo $showdata -> lastname;
    }

?>