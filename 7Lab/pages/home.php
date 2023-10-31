<?PHP
include './header.php';
?>
<main>
  <div class="d-flex gap-5 mt-4 justify-content-center align-items-center mb-3 p-4 rounded-4">
    <h2 class="btn btn-outline-warning text-dark p-3 rounded-3">
      Yearly Visits : <span class="text-warning-emphasis">130000</span>
    </h2>
    <h2 class="btn btn-outline-success text-dark p-3 rounded-3">
      Montly Visits : <span class="text-success-emphasis">2333</span>
    </h2>
    <h2 class="btn btn-outline-danger p-3 rounded-3 text-dark">
      Weekly Visits : <span class="text-danger-emphasis">599</span>
    </h2>
  </div>
  <hr class="my-4" />
  <div class="container">
    <div class="jumbotron text-black">
      <h1 class="display-4 fw-bolder">Hottest Weekly</h1>
      <p class="lead">
        These all items are the hottest selling this week !!!
      </p>
    </div>
  </div>

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-5">
      <div class="carousel-item active">
        <img src="/assets/manga_courosels/gojowallp.jpg" class="d-block w-100 object-fit-cover rounded-5" alt="..."
          height="300px" />
        <div class="carousel-caption d-none d-md-block fw-bold">
          <h5>Jujutsu Kaisen</h5>
          <p>
            "Supernatural battles, curses, exorcists, Jujutsu Kaisen anime,
            thrilling action."
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/manga_courosels/wallpaperflare.com_wallpaper.jpg" class="d-block w-100 object-fit-cover"
          alt="..." height="300px" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Berserk</h5>
          <p>
            "Dark fantasy, Guts, Griffith, relentless struggle, monsters,
            betrayal, Berserk manga."
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/assets/manga_courosels/wallpaperflare.com_wallpaper (1).jpg" class="d-block w-100 object-fit-cover"
          alt="..." height="300px" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Solo Levelling</h5>
          <p>
            "Powerful hunter, dungeons, leveling up, monsters, Solo Leveling
            webtoon, epic."
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <hr class="my-4" />
  <div class="mt-3">
    <h2>Monthly Target</h2>
    <div class="progress">
      <div class="progress-bar bg-black" style="width: 55%">55%</div>
    </div>

    <h2 class="mt-4">Weekly Target</h2>
    <div class="progress">
      <div class="progress-bar bg-black" style="width: 60%">60%</div>
    </div>
  </div>
</main>
<?PHP
include './footer.php';
?>