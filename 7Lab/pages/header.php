<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="../bootstrap/bootstrap.css" />
  <link rel="stylesheet" href="../styles/styles.css" />

  <title>Document</title>
</head>

<body class="text-black">
  <nav class="navbar navbar-expand-lg border-bottom mb-3">
    <div class="container-fluid align-items-center justify-content-center">
      <a class="navbar-brand text-center" href="/pages/home.html">
        <img class="rounded-4 p- 2" src="../assets/logo.png" alt="logo" height="80px" />
      </a>
    </div>
  </nav>

  <aside class="d-flex flex-nowrap position-fixed top-0">
    <div class="d-flex flex-column flex-shrink-0 gap-5 bg-white rounded-bottom-4" style="width: 4.5rem">
      <ul class="nav nav-pills nav-flush flex-column mb-auto text-center gap-5">
        <li class="nav-item">
          <a href="home.php" class="nav-link py-3 rounded-0">
            <img src="../assets/feather/home.svg" alt="home" />
          </a>
        </li>
        <li>
          <a href="dashboard.php" class="nav-link py-3 rounded-0">
            <img src="../assets/feather/clipboard.svg" alt="Dashboard" />
          </a>
        </li>
        <li>
          <a href="itemlist.php" class="nav-link py-3 rounded-0">
            <img src="../assets/feather/file-text.svg" alt="List" />
          </a>
        </li>
      </ul>
      <div class="dropdown border-top">
        <a href="#"
          class="d-flex align-items-center justify-content-center p-3 link-body-emphasis text-decoration-none dropdown-toggle"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="mdo" width="24" height="24" class="rounded-circle" />
        </a>
        <ul class="dropdown-menu text-small shadow">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
  </aside>