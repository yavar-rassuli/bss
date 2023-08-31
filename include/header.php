
  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/input.css" />
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/kontakt.css" />
  <link rel="stylesheet" href="css/about_us.css" />
  <link rel="stylesheet" href="public\styles.css" />
  <title>Book Storage System</title>
</head>

<section class="hero">
       <!--<div class="content"> 
           Navbar -->
    <nav class="relative container mx-auto p-6 ">
    <!-- Flex container -->
    <div class="flex items-center justify-between">
      <!-- Logo -->
      <div class="pt-2">
        <a href="index.php">
          <img src="img/logooo.svg" alt="" />
        </a>
      </div>
      <!-- Menu Items -->
      <div class="hidden space-x-6 md:flex font-bold text-dark">
        <a href="buecher.php" class="hover:text-darkGrayishBlue">Bücher</a>
        <a href="about_us.php" class="hover:text-darkGrayishBlue">Über uns</a>
        <a href="kontakt.php" class="hover:text-darkGrayishBlue">Kontakt</a>

      </div>

     <!-- search field for book, put in navigation -->
      <div class="hidden md:block">
        <form action="bookList.php" method="post">
          <div class="flex space-x-3">
            <input type="text"  name="searchtext" required class="flex-1 px-4 rounded-full focus:outline-none bg-veryLightGray text-dark" placeholder="Ein Buch suchen" />
            <button type="submit" name="senden" class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">
              Finden
            </button>
          </div>



        </form>
      </div>

      <!-- Hamburger Icon -->
      <button id="menu-btn" class="block hamburger md:hidden focus:outline-none">
        <span class="hamburger-top"></span>
        <span class="hamburger-middle"></span>
        <span class="hamburger-bottom"></span>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden">
      <div id="menu" class="absolute flex-col items-center hidden self-end py-8 mt-8 space-y-6 text-dark font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md z-40">
      <a href="buecher.php" class=" ">Bücher</a>
        <a href="about_us.php" class=" ">Über uns</a>
        <a href="kontakt.php" class=" ">Kontakt</a>
          
        <!-- search field for book, put in navigation -->
        <form action="bookList.php" method="post">
          <div class="flex space-x-3">
            <input type="text"  name="searchtext" required class="flex-1 px-4 rounded-full focus:outline-none bg-veryLightGray text-dark" placeholder="Ein Buch suchen" />
            <button type="submit" name="senden" class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">
              Finden
            </button>
          </div>
</form>
      </div>
    </div>
  </nav>

  

  <div class="waves "></div>
 
</section>