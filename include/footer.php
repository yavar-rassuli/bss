 <!-- CTA Section -->
 <section id="cta" class="bg-brightRed">
    <!-- Flex Container -->
    <div class="container flex flex-col items-center justify-between px-6 py-24 mx-auto space-y-12 md:py-12 md:flex-row md:space-y-0">
      <!-- Heading -->
      <h2 class="text-5xl font-bold leading-tight text-center text-white md:text-4xl md:max-w-xl md:text-left">
        Manage your Books today
      </h2>
      <!-- Button -->
      <div>
        <a href="buecher.php" class="p-3 px-6 pt-2 text-brightRed bg-white rounded-full shadow-2xl baseline hover:bg-gray-900">Get Started</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-veryDarkBlue">
    <!-- Flex Container -->
    <div class="container flex flex-col-reverse justify-between px-6 py-10 mx-auto space-y-8 md:flex-row md:space-y-0">
      <!-- Logo and social links container -->
      <div class="flex flex-col-reverse items-center justify-between space-y-12 md:flex-col md:space-y-0 md:items-start">
        <div class="mx-auto my-6 text-center text-white md:hidden">
          Copyright &copy; 2022, All Rights Reserved Y&M
        </div>
        <!-- Logo -->
        <div>
          <img src="img/logooo.svg" class="" alt="" />
        </div>
        <!-- Social Links Container -->
        <div class="flex justify-center space-x-2">
          <!-- Link 1 -->
          <a href="#">
            <img src="img/icon-facebook.svg" alt="" class="h-8" />
          </a>
          <!-- Link 2 -->
          <a href="#">
            <img src="img/icon-youtube.svg" alt="" class="h-8" />
          </a>
          <!-- Link 3 -->
          <a href="#">
            <img src="img/icon-twitter.svg" alt="" class="h-8" />
          </a>
          <!-- Link 4 -->
          <a href="#">
            <img src="img/icon-pinterest.svg" alt="" class="h-8" />
          </a>
          <!-- Link 5 -->
          <a href="#">
            <img src="img/icon-instagram.svg" alt="" class="h-8" />
          </a>
        </div>
      </div>
      <!-- List Container -->
      <div class="flex justify-around space-x-28 font-5 fond-bold">
        <div class="flex flex-col space-y-3 text-white">
          <a href="index.php" class="hover:text-brightRed">Home</a>
          <a href="buecher.php" class="hover:text-brightRed">Bücher</a>
          <a href="about_us.php" class="hover:text-brightRed">Über uns</a>

        </div>
        <div class="flex flex-col space-y-3 text-white">
          <a href="kontact.php" class="hover:text-brightRed">Kontakt</a>

          <a href="impressum.php" class="hover:text-brightRed">Impressum</a>
        </div>
      </div>

      <!-- Input Container -->
      <div class="flex flex-col justify-between font-5 fond-bold">
         
      <!-- search field for book, put in navigation -->
          <form action="bookList.php" method="post">
          <div class="flex space-x-3">
            <input type="text"  name="searchtext" required class="flex-1 px-4 rounded-full focus:outline-none bg-veryLightGray text-dark" placeholder="Ein Buch suchen" />
            <button type="submit" name="senden" class="px-6 py-2 text-white rounded-full bg-brightRed hover:bg-brightRedLight focus:outline-none">
              Finden
            </button>
          </div>
</form>
        <div class="hidden text-white md:block">
          Copyright &copy; 2022, All Rights Reserved Y&M
        </div>
      </div>
    </div>
  </footer>

  <script src="js/script.js"></script>
</body>

</html>