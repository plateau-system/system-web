<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
    <div class="navigation">
      <ul>
        <li class="list">
          <a href="/top/{{ $user['id'] }}">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Top</span>
          </a>
        </li>
        <li class="list">
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" v-pre>
            <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
            <span class="title">Chart</span>
            </a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/chart-rate/{{ $user['id'] }}">
                  Rate
                </a>
                <a class="dropdown-item" href="/chart-comparison/{{ $user['id'] }}">
                  comparison
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        </li>
        <li class="list">
          <a href="{{ url('/simulator') }}">
            <span class="icon"><ion-icon name="analytics-outline"></ion-icon></span>
            <span class="title">Simulator</span>
          </a>
        </li>
        <li class="list">
          <a href="{{ url('/information') }}">
            <span class="icon"><ion-icon name="information-circle-outline"></ion-icon></span>
            <span class="title">information</span>
          </a>
        </li>
        <li class="list">
          <a href="{{ url('/setting') }}">
            <span class="icon"
              ><ion-icon name="settings-outline"></ion-icon
            ></span>
            <span class="title">Setting</span>
          </a>
        </li>
        <li class="list">
          <a href="{{ url('/help') }}">
            <span class="icon"
              ><ion-icon name="help-circle-outline"></ion-icon
            ></span>
            <span class="title">Help</span>
          </a>
        </li>
      </ul>
    </div>
  </body>
</html>
