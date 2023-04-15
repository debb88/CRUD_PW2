<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top mr-auto px-3">
    <div class="container-fluid id">
      <a class="navbar-brand" href="home.php"
        ><img src="img/logowebc-modified.png" alt="logoweb" style="width: 50px"
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="cl.php">Comic List</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-white"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Genre
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="action.php">Action</a></li>
              <li><a class="dropdown-item" href="drama.php">Drama</a></li>
              <li><a class="dropdown-item" href="horror.php">Horror</a></li>
              <li><a class="dropdown-item" href="romance.php">Romance</a></li>
              <li><a class="dropdown-item" href="comedy.php">Comedy</a></li>
              <li>
                <a class="dropdown-item" href="schoollife.php">School Life</a>
              </li>
              <li>
                <a class="dropdown-item" href="sport.php">Sport</a>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-white"
              href="#"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Country
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="japan.php">Japan</a></li>
              <li><a class="dropdown-item" href="korean.php">Korean</a></li>
              <li><a class="dropdown-item" href="china.php">China</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="request.php">Request</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="about.php">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search" style="padding-right: 20px">
          <input
            class="form-control me-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-light btn" type="submit">
            Search
          </button>
        </form>
        <li class="nav-item" style="list-style: none">
          <a class="btn btn-outline-light" href="login.php" role="button">
            Log In
          </a>
        </li>
      </div>
    </div>
  </nav>
</header>
