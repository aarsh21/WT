<?PHP
include './header.php';
?>

<main>
  <div class="d-flex justify-content-between align-items-center">
    <h1 class="text-black fs-1 m-3">Product Lists</h1>
    <a href="/pages/inputform.html" class="btn btn-outline-dark rounded-3 m-3">Add New Item</a>
  </div>

  <div class="d-flex gap-4 flex-wrap">
    <?php
    $csvFile = '../data/manga.csv';
    if (($handle = fopen($csvFile, 'r')) !== false) {
      $headers = fgetcsv($handle, 1000, ',');
      while (($data = fgetcsv($handle, 1000, ',')) !== false) {
        list($title, $type, $price, $chapters, $genres, $description) = $data;
        echo <<<HTML
                        <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
                            <div style="width: 300px">
                                <img src="IMAGE_URL" class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
                            </div>
                            <div class="card-body w-75 d-flex flex-column justify-content-evenly">
                                <div class="d-flex justify-content-between">
                                    <h6>$type</h6>
                                    <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">Price: $$price</h5>
                                </div>
                                <h2 class="card-title">$title</h2>
                                <ul class="d-flex text-white list-unstyled column-gap-3">
                                    <li class="bg-black rounded-3 p-2 fs-6">$genres</li>
                                </ul>
                                <h6>$chapters chapters</h6>
                                <p class="card-text lead fs-6">$description</p>
                                <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
                            </div>
                        </div>
                    HTML;
      }
      fclose($handle);
    }
    ?>
  </div>
</main>


<?PHP
include './footer.php';
?>


<!-- <main>
  <div class="d-flex justify-content-between align-items-center">
    <h1 class="text-black fs-1 m-3">Product Lists</h1>
    <a href="/pages/inputform.html" class="btn btn-outline-dark rounded-3 m-3">Add New Item</a>
  </div>

  <div class="d-flex gap-4 flex-wrap">
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/2/2b/2b28367c96a25cced9dc6337953c2f62.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>manhwa</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 100$
          </h5>
        </div>

        <h2 class="card-title">Etrangere</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Action</li>
          <li class="bg-black rounded-3 p-2 fs-6">Drama</li>
          <li class="bg-black rounded-3 p-2 fs-6">Horror</li>
        </ul>
        <h6>56 chapters</h6>
        <p class="card-text lead fs-6">
          During a routine skydiving exercise, Commander Kang San and
          Lieutenant Kim Biyeon are thrown into a treacherous realm
          completing quests, but must rely on their own resource..
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/6/6c/6c900cb12dca35493a3b4ca12669ffcf.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>Manhwa</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 30$
          </h5>
        </div>

        <h2 class="card-title">Kokoro no Program</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Romance</li>
          <li class="bg-black rounded-3 p-2 fs-6">Drama</li>
          <li class="bg-black rounded-3 p-2 fs-6">Slice Of Life</li>
        </ul>
        <h6>3 chapters</h6>
        <p class="card-text lead fs-6">
          An elemantary schooler, Usami Kyuu encounter Ichiko, a female
          robot trying to learn about [heart]. What awaits the two that
          start to live together... Boy X Robot Girl, Begin!
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/f/f4/f4b48fcd9c58423b40ade03b3dae5bc4.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>Manga</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 199$
          </h5>
        </div>

        <h2 class="card-title">Tensura</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Isekai</li>
          <li class="bg-black rounded-3 p-2 fs-6">Demons</li>
          <li class="bg-black rounded-3 p-2 fs-6">Super Powers</li>
        </ul>
        <h6>109 chapters</h6>
        <p class="card-text lead fs-6">
          It is just another ordinary day for Satoru Mikami. The sun is
          shining brightly on the streets of Tokyo, a discussion with his
          colleagues when suddenly he gets stabbed by a passing robber.
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/5/5e/5e727f402d8f75a168be15447e92dd6d.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>Manga</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 30000$
          </h5>
        </div>

        <h2 class="card-title">One Piece</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Shounen</li>
          <li class="bg-black rounded-3 p-2 fs-6">Super Power</li>
          <li class="bg-black rounded-3 p-2 fs-6">Comedy</li>
        </ul>
        <h6>1090 chapters</h6>
        <p class="card-text lead fs-6">
          Gol D. Roger, a man referred to as the "Pirate King," is set to be
          executed by the World Government. But just before his demise, he
          confirms the existence of a great treasure.
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/2/2b/2b28367c96a25cced9dc6337953c2f62.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>manhwa</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 100$
          </h5>
        </div>

        <h2 class="card-title">Etrangere</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Action</li>
          <li class="bg-black rounded-3 p-2 fs-6">Drama</li>
          <li class="bg-black rounded-3 p-2 fs-6">Horror</li>
        </ul>
        <h6>56 chapters</h6>
        <p class="card-text lead fs-6">
          During a routine skydiving exercise, Commander Kang San and
          Lieutenant Kim Biyeon are thrown into a treacherous realm
          completing quests, but must rely on their own resource..
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/6/6c/6c900cb12dca35493a3b4ca12669ffcf.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>Manhwa</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 30$
          </h5>
        </div>

        <h2 class="card-title">Kokoro no Program</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Romance</li>
          <li class="bg-black rounded-3 p-2 fs-6">Drama</li>
          <li class="bg-black rounded-3 p-2 fs-6">Slice Of Life</li>
        </ul>
        <h6>3 chapters</h6>
        <p class="card-text lead fs-6">
          An elemantary schooler, Usami Kyuu encounter Ichiko, a female
          robot trying to learn about [heart]. What awaits the two that
          start to live together... Boy X Robot Girl, Begin!
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/f/f4/f4b48fcd9c58423b40ade03b3dae5bc4.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>Manga</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 199$
          </h5>
        </div>

        <h2 class="card-title">Tensura</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Isekai</li>
          <li class="bg-black rounded-3 p-2 fs-6">Demons</li>
          <li class="bg-black rounded-3 p-2 fs-6">Super Powers</li>
        </ul>
        <h6>109 chapters</h6>
        <p class="card-text lead fs-6">
          It is just another ordinary day for Satoru Mikami. The sun is
          shining brightly on the streets of Tokyo, a discussion with his
          colleagues when suddenly he gets stabbed by a passing robber.
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
    <div class="card flex-row rounded-4" style="width: 600px; height: 400px">
      <div style="width: 300px">
        <img src="https://static.bunnycdn.ru/i/cache/images/5/5e/5e727f402d8f75a168be15447e92dd6d.jpg"
          class="card-img-top object-fit-cover rounded-4" alt="..." height="400px" />
      </div>
      <div class="card-body w-75 d-flex flex-column justify-content-evenly">
        <div class="d-flex justify-content-between">
          <h6>Manga</h6>
          <h5 class="bg-black p-1 text-white rounded-3 p-2 fs-6">
            Price : 30000$
          </h5>
        </div>

        <h2 class="card-title">One Piece</h2>
        <ul class="d-flex text-white list-unstyled column-gap-3">
          <li class="bg-black rounded-3 p-2 fs-6">Shounen</li>
          <li class="bg-black rounded-3 p-2 fs-6">Super Power</li>
          <li class="bg-black rounded-3 p-2 fs-6">Comedy</li>
        </ul>
        <h6>1090 chapters</h6>
        <p class="card-text lead fs-6">
          Gol D. Roger, a man referred to as the "Pirate King," is set to be
          executed by the World Government. But just before his demise, he
          confirms the existence of a great treasure.
        </p>
        <a href="/pages/editform.html" class="btn btn-outline-dark">Edit</a>
      </div>
    </div>
  </div>
</main> -->