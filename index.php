
      <!-- Header -->
      <?php include("include/header.php"); ?>

      
  <!-- Hero Section -->
  <section  class="seite" id="hero">
    <!-- Flex Container -->
    <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
      <!-- Left item -->
        <div class="flex flex-col mb-32 space-y-12 md:w-1/2 mt-32">
          <h1
            class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left"
          >
           Willkommen zum Book Storage System. 
          </h1>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
          Das Book Storage System ermöglicht Ihnen schnell und einfach einen Überblick über Ihre Bücher zu gewinnen. Ordnung war noch nie so einfach.
          </p>
          <div class="flex justify-center md:justify-start">
        
          </div>
        </div>
        <!-- Image -->
        <div class=" book--icon md:w-1/3">
          <img src="img/books.png" alt="" />
        </div>
      </div>
    </section>

    <!-- Features Section -->
    <section id="features">
      <!-- Flex container -->
      <div
        class="container flex flex-col px-4 mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row"
      >
        <!-- What's Different -->
        <div class="flex flex-col space-y-12 md:w-1/2">
          <h2 class="max-w-md text-4xl font-bold text-center md:text-left">
            Das Book Storage System in 3 Schritten
          </h2>
          <p class="max-w-sm text-center text-darkGrayishBlue md:text-left">
            Die Bedienung des Book Storage Systems ist überraschend leicht. In nur 3 Schritten kommen auch Sie zum Erfolg.
          </p>
        </div>

        <!-- Numbered List -->
        <div class="flex flex-col space-y-8 md:w-1/2">
          <!-- List Item 1 -->
          <div
            class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
          >
            <!-- Heading -->
            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
              <div class="flex items-center space-x-2">
                <div
                  class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
                >
                  01
                </div>
                <h3 class="text-base font-bold md:mb-4 md:hidden">
                  Ein Buch erfassen
              </div>
            </div>

            <div>
              <h3 class="hidden mb-4 text-lg font-bold md:block">
                Ein Buch erfassen
              </h3>
              <p class="text-darkGrayishBlue">
              Um ein neues Buch zu erfassen, klicken Sie am oberen Seitenende auf "Bücher". Darauf werden Sie zu einem Eingabeformular für neue Bücher geleitet. Geben Sie alle Informationen ein und klicken Sie danach auf "Abschicken".
              </p>
            </div>
          </div>

          <!-- List Item 2 -->
          <div
            class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
          >
            <!-- Heading -->
            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
              <div class="flex items-center space-x-2">
                <div
                  class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
                >
                  02
                </div>
                <h3 class="text-base font-bold md:mb-4 md:hidden">
                  Ein Buch suchen
                </h3>
              </div>
            </div>

            <div>
              <h3 class="hidden mb-4 text-lg font-bold md:block">
                Ein Buch suchen
              </h3>
              <p class="text-darkGrayishBlue">
               Um nach einem Buch zu suchen, nutzen Sie das Suchfeld. Sie können jede Teilinformation des gesuchten Buches eingeben. Sie müssen sich also nicht zwingend an den Titel erinnern, der Autor, Jahrgang oder selbst das Genre reichen bereits aus.
              </p>
            </div>
          </div>

          <!-- List Item 3 -->
          <div
            class="flex flex-col space-y-3 md:space-y-0 md:space-x-6 md:flex-row"
          >
            <!-- Heading -->
            <div class="rounded-l-full bg-brightRedSupLight md:bg-transparent">
              <div class="flex items-center space-x-2">
                <div
                  class="px-4 py-2 text-white rounded-full md:py-1 bg-brightRed"
                >
                  03
                </div>
                <h3 class="text-base font-bold md:mb-4 md:hidden">
                  Das Leben geniessen
                </h3>
              </div>
            </div>

            <div>
              <h3 class="hidden mb-4 text-lg font-bold md:block">
                Das Leben geniessen
              </h3>
              <p class="text-darkGrayishBlue">
                Nachdem Sie nun Ihre Bücher online einspeichern können und auch wissen wie Sie nach ihnen suchen können, bleibt nur noch eines übrig. Geniessen Sie das Leben und überlassen Sie organisatorische Sorgen dem Book Storage System.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials">
      <!-- Container to heading and testm blocks -->
      <div class=" container px-5 mx-auto mt-32 text-center my-16">
        <!-- Heading -->
        <h2 class="text-4xl font-bold text-center">
          Lieblingsbücher
        </h2>
        <!-- Testimonials Container -->
        <div class="flex flex-col mt-24 md:flex-row md:gap-3 gap-20">
          <!-- Testimonial 1 -->
          <div
            class="flex flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray md:w-1/3"
          >
            <img src="img/On-the-road.png" class="w-24 -mt-14" alt="" />
            <h5 class="text-lg font-bold">Jack Kerouac – „On the Road“ (1957)</h5>
            <p class="text-sm text-darkGrayishBlue">
              “Der autobiographische Roman gilt als das Manifest der „Beat Generation“ schlechthin. Kerouac verfasste sein bekanntestes Werk innerhalb von nur drei Wochen und schuf damit einen Reiseroman, der Freigeister und Glückssuchende bis heute inspiriert.”
            </p>
          </div>

          <!-- Testimonial 2 -->
          <div
            class=" flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray flex md:w-1/3"
          >
            <img src="img/lolita.png" class="w-24 -mt-14" alt="" />
            <h5 class="text-lg font-bold">Vladimir Nabokov – „Lolita“ (1955)</h5>
            <p class="text-sm text-darkGrayishBlue">
              “Im prüden Amerika der 50er-Jahre löste Nabokovs Roman über den pädophilen Humbert Humbert einen Skandal aus. Dabei ist das Werk weitaus mehr als die psychologische Darstellung einer moralisch fragwürdigen Beziehung. „Lolita“ ist aufgrund seiner Vielschichtigkeit ein Buch, das bei jedem Lesen aufs Neue zum spannenden Roman-Erlebnis wird.”
            </p>
          </div>

          <!-- Testimonial 3 -->
          <div
            class=" flex-col items-center p-6 space-y-6 rounded-lg bg-veryLightGray flex md:w-1/3"
          >
            <img src="img/der-name-der-rose.png" class="w-24 -mt-14" alt="" />
            <h5 class="text-lg font-bold">Umberto Eco – „Der Name der Rose“ (1980)</h5>
            <p class="text-sm text-darkGrayishBlue">
              “Mit seinem Debüt gelang Eco der Durchbruch als Schriftsteller. Der Roman, der im Jahr 1327 in einer Benediktiner-Abtei spielt, wird als typisches Beispiel des postmodernen Schreibens betrachtet, da er gleich mehrere Genres in sich vereint und unzählige Interpretationsmöglichkeiten bietet. Spannend!”
            </p>
          </div>
        </div>

      </div>
    </section>

     <!-- FOOTER -->
  <?php include("include/footer.php"); ?>