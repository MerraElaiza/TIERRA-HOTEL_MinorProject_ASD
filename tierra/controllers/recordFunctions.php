<?php
  include "../models/RecordsModel.php";

  $records = new RecordsModel();

  if (isset($_POST['userid'])){
    if ($_POST['userid'] == "User ID"){
      $records->sortByUserId();
    }
  }
  
?>
