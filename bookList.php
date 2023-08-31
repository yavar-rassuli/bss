
      <!-- Header -->
      <?php include("include/header_buecher.php"); ?>



<section class="block xl:hidden">
    <div class="container my-8">
<?php
$search = $_POST["searchtext"];

$con = mysqli_connect("","root","");
mysqli_select_db($con, "bss");

$sql = "SELECT * FROM books LEFT JOIN autoren ON books.AID = autoren.AID LEFT JOIN genre ON books.GID = genre.GID WHERE books.Titel LIKE '%$search%' OR books.OT LIKE '%$search%' OR books.Jahrgang LIKE '%$search%' OR books.Verlag LIKE '%$search%' OR books.Sonstiges LIKE '%$search%' OR autoren.Name LIKE '%$search%' OR genre.Genre LIKE '%$search%'";

$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);
if($num == 0)
		echo "Kein Eintrag gefunden";
	else
	{
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
	
	mysqli_close($con);

?>
<br />
<div class="mt-4">
   <a  class=" p-3 px-6 pt-2 text-white font-bold bg-brightRed rounded-lg baseline hover:bg-red-200 " href="javascript:history.back()">Zurück</a>
</div>
    </div>
</section>

<section class= "hidden xl:block">
    <div class="container my-8">
<?php
$search = $_POST["searchtext"];

$con = mysqli_connect("","root","");
mysqli_select_db($con, "bss");

$sql = "SELECT * FROM books LEFT JOIN autoren ON books.AID = autoren.AID LEFT JOIN genre ON books.GID = genre.GID WHERE books.Titel LIKE '%$search%' OR books.OT LIKE '%$search%' OR books.Jahrgang LIKE '%$search%' OR books.Verlag LIKE '%$search%' OR books.Sonstiges LIKE '%$search%' OR autoren.Name LIKE '%$search%' OR genre.Genre LIKE '%$search%'";

$res = mysqli_query($con, $sql);
$num = mysqli_num_rows($res);
if($num == 0)
		echo "Kein Eintrag gefunden";
	else
	{
        ?>
	<table class="w-full border-b border-2 border-indigo-600 bg-red-100">
    <tr class=" border-b border-2 border-indigo-600">
      <th>ID</th>
      <th>Titel</th>
      <th>Original Titel</th>
      <th>Autor</th>
      <th>Verlag</th>
      <th>Jahrgang</th>
      <th>Genre</th>
      <th>Sonstiges</th>
    </tr>

      <?php
        while ($dsatz = mysqli_fetch_assoc($res))
        {
            ?>
         <div class="bg-red-200 ">
                 <tr>  
     <td class=""><?php echo $dsatz["BID"] ?> </td><td>
         <?php echo $dsatz["Titel"]?> </td><td>
         <?php echo $dsatz["OT"]  ?> </td><td>
         <?php echo $dsatz["Name"]  ?> </td><td>
         <?php echo $dsatz["Verlag"]  ?> </td><td>
         <?php echo $dsatz["Jahrgang"]  ?> </td><td>
         <?php echo $dsatz["Genre"]  ?> </td><td>
         <?php echo $dsatz["Sonstiges"]  ?> </td><tr>
         </div>
    
         <?php
        }
       ?>
     
       </table>

       <?php
    }
	
	mysqli_close($con);

?>
<br />
<div class="mt-4">
   <a  class=" p-3 px-6 pt-2 text-black  font-bold bg-brightRed rounded-lg baseline hover:bg-red-300 " href="javascript:history.back()">Zurück</a>
</div>
    </div>
</section>



    <!-- FOOTER -->
    <?php include("include/footer.php"); ?>