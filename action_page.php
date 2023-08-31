      <!-- Header -->
      <?php include("include/header.php"); ?>
<div class="seite container flex flex-col items-center   mt-10">
   <div class="action--page bg-veryLightGray p-6">
       <?php
   if(!empty($_POST['name'])) {
   echo("<h3>First name: " . $_POST['name'] . "</h3><br />\n");
   }
   if(!empty($_POST['email'])) {
   echo("<h3>Email: " . $_POST['email'] . "</h3><br />\n");
   }
   if(!empty($_POST['gossip'])) {
   echo("<h3>How did you hear about us: " . $_POST['gossip'] . "</h3><br />\n");
   }
   if(!empty($_POST['message'])) {
   echo("<h3>Massage: " . $_POST['message'] . "</h3><br />\n");
   }
?>
   </div>
  
</div>

     <!-- FOOTER -->
     <?php include("include/footer.php"); ?>