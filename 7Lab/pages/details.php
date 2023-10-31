<?PHP
include './header.php';
?>


<main>
        <div class="d-flex text-white justify-content-evenly align-items-center">
            <img class="rounded-3" src="https://static.bunnycdn.ru/i/cache/images/f/fd/fd22997ad7669f6cd375b98fc27361a5.jpg"
                alt="jujutsu-kaisen" />
            <div class="d-flex flex-column gap-3 justify-content-evenly" id="manga-details">
                <?php
                $csvFile = '../data/details.csv';
                if (($handle = fopen($csvFile, 'r')) !== false) {
                    $headers = fgetcsv($handle, 1000, ',');
                    $data = fgetcsv($handle, 1000, ',');
                    fclose($handle);
                    foreach ($headers as $index => $header) {
                        echo "<p>{$header}: {$data[$index]}</p>\n";
                    }
                }
                ?>
            </div>
        </div>
        <h1 class="pt-3">Synopsis:</h1>
        <p class="lead m-5">
            <?php
            $synopsis = "Unbeknownst to many, an ancient war wages on between humanity and supernatural beasts dubbed \"Curses\". Striking from the shadows, these monsters wreak havoc on society, but the \"Jujutsu\" sorcerers have the mystical prowess to combat them. When Yuuji Itadori, a high school student, unwittingly stumbles upon a dry finger belonging to the mythical Curse Sukuna Ryoumen, he finds himself embroiled in this bloody battle. In a desperate attempt to escape the Curse's clutches, Yuuji uses the finger's energy to defend himself, inadvertently gaining power to fend off the Curses but also unleashing the malicious Sukuna back into the world. Though Yuuji is able to keep Sukuna contained within his body, the Jujutsu world deems him a dangerous, high-level Curse that must be eradicated. Sentenced to death, Yuuji meets Satoru Gojou, a teacher at Jujutsu High School, who offers an alternative. As a unique vessel to Sukuna, Yuuji's death would spell the end of the demon as well. To achieve this, Yuuji must consume Sukuna's remaining parts, which will guarantee his execution and ensure the eradication of the malevolent force. As a way to protect the world and have some semblance of a life, Yuuji enrolls in Jujutsu High and thrusts himself into the ruthless and unforgiving battlefield.";
            echo $synopsis;
            ?>
        </p>
    </main>
<?PHP
include './footer.php';
?>


<!-- <main>
  <div class="d-flex text-white justify-content-between align-items-center">
    <img class="rounded-3" src="https://static.bunnycdn.ru/i/cache/images/f/fd/fd22997ad7669f6cd375b98fc27361a5.jpg"
      alt="jujutsu-kaisen" />
    <div class="d-flex flex-column gap-3 justify-content-evenly">
      <h5 class="bg-black text-center p-2 rounded-2">Price : 199$</h5>
      <h4>Manga</h4>
      <h5>231 Chapters</h5>
      <h1 class="fs-1 fw-bolder">Jujutsu Kaisen</h1>
      <ul class="list-unstyled d-flex gap-3">
        <li class="bg-black rounded-3 p-2 text-white">Drama</li>
        <li class="bg-black rounded-3 p-2 text-white">Action</li>
        <li class="bg-black rounded-3 p-2 text-white">Shounen</li>
        <li class="bg-black rounded-3 p-2 text-white">Super Natural</li>
      </ul>
      <div class="d-flex gap-3">
        <button class="btn btn-outline-light">Edit</button>
        <button class="btn btn-outline-warning">Remove</button>
      </div>
    </div>
    <div class="d-flex flex-column justify-content-evenly">
      <h6 class="lead text-black rounded-3">Author: Gege Akutami</h6>
      <h6 class="lead text-black rounded-3">
        Published : Mar 04, 2018 to ?
      </h6>
      <h6 class="lead text-black rounded-3">
        Mangazines: Shounen Jump (Weekly)
      </h6>
      <h6 class="lead text-black rounded-3">
        MAL Scores: 8.53 by 143,561 users
      </h6>
    </div>
  </div>
  <h1 class="pt-3">Sypnosis:</h1>
  <p class="lead m-5">
    Unbeknownst to many, an ancient war wages on between humanity and
    supernatural beasts dubbed "Curses". Striking from the shadows, these
    monsters wreak havoc on society, but the "Jujutsu" sorcerers have the
    mystical prowess to combat them. When Yuuji Itadori, a high school
    student, unwittingly stumbles upon a dry finger belonging to the
    mythical Curse Sukuna Ryoumen, he finds himself embroiled in this bloody
    battle. In a desperate attempt to escape the Curse's clutches, Yuuji
    uses the finger's energy to defend himself, inadvertently gaining power
    to fend off the Curses but also unleashing the malicious Sukuna back
    into the world. Though Yuuji is able to keep Sukuna contained within his
    body, the Jujutsu world deems him a dangerous, high-level Curse that
    must be eradicated. Sentenced to death, Yuuji meets Satoru Gojou, a
    teacher at Jujutsu High School, who offers an alternative. As a unique
    vessel to Sukuna, Yuuji's death would spell the end of the demon as
    well. To achieve this, Yuuji must consume Sukuna's remaining parts,
    which will guarantee his execution and ensure the eradication of the
    malevolent force. As a way to protect the world and have some semblance
    of a life, Yuuji enrolls in Jujutsu High and thrusts himself into the
    ruthless and unforgiving battlefield.
  </p>
</main> -->