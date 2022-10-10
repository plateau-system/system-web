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
        <li class="list active">
          <a href="{{ url('/home') }}">
            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
            <span class="title">Top</span>
          </a>
        </li>
        <li class="list">
          <a href="{{ url('/chart') }}">
            <span class="icon"><ion-icon name="bar-chart-outline"></ion-icon></span>
            <span class="title">Chart</span>
          </a>
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
