<?php
    //PHP Closures
    $anony = function(){
        return "lamda";
    };
    //Closures
    print(get_class($anony));
    print("<br />");
    //object
    print(gettype($anony));
?>