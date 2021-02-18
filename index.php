<?php
require_once("Controllers/Index.php");

if(isset($_GET['Page'])){
    if($_GET['Page']=="A-propos"){
        Apropos();
    }elseif($_GET['Page']=="Contact"){
        Contact();
    }elseif($_GET['Page']=="Batela"){
        Decouvrir();
    }elseif($_GET['Page']=="Se Proteger"){
        SeProteger();
    }elseif($_GET['Page'] == "Denoncer"){
        Denoncer();
    }else{
        Index();
    }
}else{
    Index();
}
