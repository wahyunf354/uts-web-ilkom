    <!-- hero -->
    <section id="hero-sejarah">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <?php 
            if(isset($_GET['page'])){
              $page=$_GET['page'];
              switch ($page) {
                case "sejarah" :
                  echo "<h2 class=\"h2  animate__animated animate__fadeInLeft\">Sejarah Ilmu Komputer UNIMED</h2>";
                  break;
                case "contact" :
                  echo "<h2 class=\"h2  animate__animated animate__fadeInLeft\">Kontak Ilmu Komputer UNIMED</h2>";
                  break;
              }
            }
          ?>
          
          <h1 class="display-4">Ilmu Komputer</h1>
        </div>
      </div>
    </section>
    <!-- end hero -->