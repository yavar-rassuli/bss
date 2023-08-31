
      <!-- Header -->
      <?php include("include/header_buecher.php"); ?>

<section>
    <div class="container my-8 ">
      <h1 class="h1 font-bold">Neues Buch erfassen</h1>
  <p class="mb-2">Bitte geben Sie alle Daten ein, welche für das neue Buch benötigt werden</p>
  <table>
    <form action="newBook.php" method="post">
      <tr>
        <td>Titel:</td>
        <td ><input class="bg-red-200 my-2" type="text" name="titel" required></td>
      </tr>
      <tr>
        <td>Original Titel:</td>
        <td><input  class="bg-red-300 mb-2" type="text" name="otitel"></td>
      </tr>
      <tr>
        <td>Autor:</td>
        <td><input  class="bg-red-200 mb-2" type="text" name="autor" required></td>
      </tr>
      <tr>
        <td>Verlag:</td>
        <td><input  class="bg-red-300 mb-2 " type="text" name="verlag" required></td>
      </tr>
      <tr>
        <td>Jahrgang:</td>
        <td><input  class="bg-red-200 mb-2" type="text" name="jahrgang"></td>
      </tr>
      <tr>
        <td>Genre:</td>
        <td><select  class="bg-red-300 " id="genre" name="genre">
              <option value="Sachbuch Informatik">Sachbuch Informatik</option>
              <option value="Sachbuch Projektmanagement">Sachbuch Projektmanagement</option>
              <option value="Fantasy">Fantasy</option>
              <option value="Science Fiction">Science Fiction</option>
            </select></td>
      </tr>
      <tr>
        <td>Sonstiges:</td>
        <td><textarea   class="bg-red-200 "name="sonstiges" rows="10" cols="30"></textarea></td>
      </tr>

      <tr >
        <td><input class=" mr-2 p-3 px-6 pt-2 text-black bg-red-300 font-bold rounded-lg baseline hover:bg-red-200 " type="submit" name="senden" value="Abschicken"></td>
        <td><input class="p-3 px-6 pt-2 text-black bg-red-300 font-bold rounded-lg baseline hover:bg-red-200 " type="reset" name="reset" value="Zurücksetzen"></td>
      </tr>
    </form>
  </table>


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
         <tr class="bg-red-200"><th>Autor</th><td><?php echo $dsatz["Name"]  ?> </td></tr>
         <tr class="bg-red-300"><th>Verlag</th><td><?php echo $dsatz["Verlag"]  ?> </td></tr>
         <tr class="bg-red-200"><th>Jahrgang</th><td><?php echo $dsatz["Jahrgang"]  ?> </td></tr>
         <tr class="bg-red-300"><th>Genre</th><td><?php echo $dsatz["Genre"]  ?> </td></tr>
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

<br />
<div class="mt-4">
   <a  class=" p-3 px-6 pt-2 text-white font-bold bg-brightRed rounded-lg baseline hover:bg-red-200 " href="mainpage.php">Zurück zum Menü</a>
</div>
  
      </div>
</section>
    
  


      <!-- FOOTER -->
 <?php include("include/footer.php"); ?>