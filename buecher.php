
      <!-- Header -->
      <?php include("include/header_buecher.php"); ?>

      
  <!-- Hero Section -->
<!-- -------------------------------------------------------------- -->


<section  class="seite" id="hero">
    <!-- Flex Container -->
    <div class="container mt-4">
      <h1 class="display-4 text-center">
      <i class="fas fa-book-open text-brightRed"></i> Neues<span class="text-brightRed">Buch</span>erfassen</h2>


    <form action="buecher.php" method="post">
    <div id="book-form" class="form-group">
            <label for="titel">Titel</label>
            <input type="text" name="titel" required class="form-control">
          </div>
          <div id="book-form" class="form-group">
            <label for="otitel">Original Titel</label>
            <input type="text" name="otitel"required class="form-control">
          </div>
          <div id="book-form" class="form-group">
            <label for="autor">Autor</label>
            <input  type="text" name="autor" required class="form-control">
          </div>
          <div id="book-form" class="form-group">
            <label for="verlag">Verlag</label>
            <input type="text" name="verlag" required class="form-control">
          </div>
          <div id="book-form" class="form-group">
            <label for="jahrgang">Jahrgang</label>
            <input type="text" name="jahrgang" class="form-control">
          </div>
          <div id="book-form" class="form-group">
            <label for="genre"> Genre</label>
            <select  id="genre" name="genre" class="form-group">
            <option value="Sachbuch Informatik">Sachbuch Informatik</option>
              <option value="Sachbuch Projektmanagement">Sachbuch Projektmanagement</option>
              <option value="Fantasy">Fantasy</option>
              <option value="Science Fiction">Science Fiction</option>
              </select>
          </div>
          <div id="book-form" class="form-group">
            <label for="sonstiges">Sonstiges</label>
            <textarea name="sonstiges" class="form-control" rows="10" cols="30"></textarea> 
          </div>

          <input type="submit"  name="senden" value="Abschicken" class="p-3 px-5 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
          <input type="reset" name="reset" value="Zurücksetzen" class="p-3 px-5 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
    </form>


<?php
if($_POST)
{
  error_reporting(0);
  $titel = $_POST["titel"];
  $otitel = $_POST["otitel"];
  $autor = $_POST["autor"];
  $verlag = $_POST["verlag"];
  $jahrgang = $_POST["jahrgang"];
  $genre = $_POST["genre"];
  $sonstiges = $_POST["sonstiges"];

  $con = mysqli_connect("","root","");
  mysqli_select_db($con, "bss");

  //select or insert autor
$sql = "SELECT AID FROM autoren WHERE Name LIKE '$autor'";
$aid = mysqli_query($con, $sql);
$dsatz = mysqli_fetch_assoc($aid);
$aid = $dsatz["AID"];
if($aid == NULL OR $aid == FALSE)
{
$sql = "INSERT INTO autoren (AID, Name) VALUES (NULL, '$autor')";
mysqli_query($con, $sql);
$sql = "SELECT AID FROM autoren WHERE Name LIKE '$autor'";
$aid = mysqli_query($con, $sql);
$dsatz = mysqli_fetch_assoc($aid);
$aid = $dsatz["AID"];
}

//select genre
$sql = "SELECT GID FROM genre WHERE Genre LIKE '$genre'";
$gid = mysqli_query($con, $sql);
$dsatz = mysqli_fetch_assoc($gid);
$gid = $dsatz["GID"];

$sql = "SELECT BID FROM books WHERE Titel LIKE '$titel'";
$bid = mysqli_query($con, $sql);
$dsatz = mysqli_fetch_assoc($bid);
$bid = $dsatz["BID"];

if($bid == NULL OR $bid == FALSE)
{
  $sql = "INSERT INTO books (BID, Titel, OT, Jahrgang, Verlag, Sonstiges, AID, GID) VALUES (NULL, '$titel', '$otitel', '$jahrgang', '$verlag', '$sonstiges', '$aid', '$gid')";
  mysqli_query($con, $sql);
  $sql = "SELECT * FROM books WHERE Titel LIKE '$titel'";
  $res = mysqli_query($con, $sql);

  ?>
	<table class="w-full  p-8">


      <?php
        while ($dsatz = mysqli_fetch_assoc($res))
        {
            ?>
         
         <tr class="w-full block my-4 w-full p-1">  
         <tr class="bg-red-300"><th>ID</th> <td><?php echo $dsatz["BID"] ?> </td>
         <tr class="bg-red-200"><th>Titel</th><td><?php echo $dsatz["Titel"]?> </td></tr>
         <tr class="bg-red-300"><th>Original Titel</th><td><?php echo $dsatz["OT"]  ?> </td></tr>
         <tr class="bg-red-200"><th>Autor</th><td><?php echo $autor  ?> </td></tr>
         <tr class="bg-red-300"><th>Verlag</th><td><?php echo $dsatz["Verlag"]  ?> </td></tr>
         <tr class="bg-red-200"><th>Jahrgang</th><td><?php echo $dsatz["Jahrgang"]  ?> </td></tr>
         <tr class="bg-red-300"><th>Genre</th><td><?php echo $genre  ?></td></tr>
        <tr class="bg-red-200"><th>Sonstiges</th><td><?php echo $dsatz["Sonstiges"]  ?> </td></tr>
        <div class="border-solid border-3 border-red-300 mb-4 w-full"></div> 
        </tr>
         <?php
        }
       ?>
     
       </table>

       <?php
}
else
{
  echo "<br />";
  echo "Buch ist bereits vorhanden";
  echo "<br />";
}
mysqli_close($con);
}//if $post

?>
<br/>
<div class="mt-4">
   <a  class=" p-3 px-6 pt-2 text-black  bg-gray-200 " href="buecher-temp.php">Bücher temporär speichern</a>
</div>
</div>



</section>



<!---------------------------------------------------------------------  -->


  <section>
    <div class="panel__image panel__image--book">
      <a href="#" class="books__book__image">
        <div class="books__book__img">
          <img src="https://d33wubrfki0l68.cloudfront.net/91ed41706514200a7ef212ebfeead7471354e622/01dcc/images/books/design-systems--large-opt.png">
        </div>
      </a>
    </div>
  </section>


    
    
    <!-- FOOTER -->
 <?php include("include/footer.php"); ?>