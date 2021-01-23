<?php $Title = "Batela" ?>
<?php ob_start()?>
   <?php require_once("Public/Annexe/Menu.php"); ?>
<?php $Menu = ob_get_clean()?>

<?php ob_start()?>
   <div class="Q1">
   </div>
   <div class="Q2">
   </div>
   <div class="Q3">
   </div>
<?php $Contenu = ob_get_clean()?>
<?php require_once("Public/Annexe/Template.php"); ?>
