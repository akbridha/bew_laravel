<nav class="navbar navbar-dark navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="/welcome">KeepLiveCorp.</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link {{($title === 'tahun') ? 'active' : ""  }}" href="tahun">Y-Feature</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === 'about') ? 'active' : ""  }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === 'welcome') ? 'active' : ""  }}"href="/welcome">welcome</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>