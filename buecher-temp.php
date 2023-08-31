
      <!-- Header -->
      <?php include("include/header_buecher.php"); ?>

      
  <!-- Hero Section -->
<!-- -------------------------------------------------------------- -->


<section  class="seite" id="hero">
    <!-- Flex Container -->
<!---------------------------------------------------------------------  -->
<section>
    <div class="container mt-4">
      <h1 class="display-4 text-center">
        <i class="fas fa-book-open text-brightRed"></i> Bücher<span class="text-brightRed">Temporär</span>speichern</h1>
        <form id="book-form">
          <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" id="title" class="form-control">
          </div>
          <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" class="form-control">
          </div>
          <div class="form-group">
            <label for="isbn">ISBN#</label>
            <input type="text" id="isbn" class="form-control">
          </div>
          <input type="submit" value="Buch hinzufügen" class="p-3 px-5 pt-2 text-white bg-brightRed rounded-full baseline hover:bg-brightRedLight">
        </form>
        <table class="table table-striped mt-5">
          <thead>
            <tr>
              <th>Titel</th>
              <th>Author</th>
              <th>ISBN#</th>
              <th></th>
            </tr>
          </thead>
          <tbody id="book-list"></tbody>
        </table>
    </div>
  </section>



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