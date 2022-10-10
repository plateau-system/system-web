<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
  <div class="container mt-3">
    <h1 class="card-name">{{ $chartSpot[0]['spots_name'] }}</h1>
  </div>

  <div class="container">
    <div class="row">
      <!-- 検出物の推移（折れ線グラフ） -->
      <div class="container col-8">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
              <div class="card-name card-header">
              Month transition
              </div>
              <div class="card-body">
                <canvas id="line_chart">
                  Canvas not supported...
                </canvas>
              </div>
            </div>
          </div>
        </div>
      </div>  

      <!-- 検出物の割合（円グラフ） -->
      <div class="container col-4">
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
              <div class="card-name card-header">
                Rate
              </div>
              <div class="card-body">
                <canvas id="pie_chart">
                  Canvas not supported...
                </canvas>
              </div>
            </div>
          </div>
        </div>
      </div>  

        <!-- 時間別割合（円グラフ） -->
      <div class="container col-12">      
        <div class="row justify-content-center">
          <div class="col-md-12">
            <div class="card">
              <div class="card-name card-header">
                Time transition
              </div>
              <div class="card-body">
                <canvas id="time_chart">
                  Canvas not supported...
                </canvas>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>

  </body>
  <script>
  // 過去データとの比較(折れ線グラフ)
  const line_ctx = document.getElementById('line_chart').getContext('2d');
  line_ctx.canvas.height = 140;
  const line_type = 'line'
  const line_labels = [0,5,10,15,20,25,30];
  const line_data = {
    labels: line_labels,
    datasets: [{
      label: 'person',
      data: [55, 96, 88, 42, 11, 48, 55],
      backgroundColor: ['rgba(255, 99, 132, 0.4)',],
      borderColor: ['rgba(255, 99, 132, 1)',],
    },
    {
      label: 'car',
      data: [30, 22, 25, 66, 22, 36, 44],
      backgroundColor: ['rgba(54, 162, 235, 0.4)',],
      borderColor: ['rgba(54, 162, 235, 1)',],
    },
    {
      label: 'bicycle',
      data: [11, 5, 11, 32, 15, 13, 2],
      backgroundColor: ['rgba(255, 206, 86, 0.4)',],
      borderColor: ['rgba(255, 206, 86, 1)',],
    },
    {
      label: 'motorbike',
      data: [20, 58, 2, 5, 16, 15, 23],
      backgroundColor: ['rgba(75, 192, 192, 0.4)',],
      borderColor: ['rgba(75, 192, 192, 1)',],
    }]
  };
  const line_options = {
    title: {
      display: true,
      text: "検出比較"
    },
    scale: {
      ticks: {
        min: 0,
        max: 500,
        stepSize: 10,
      }
    }
  }

  const line_chart = new Chart(line_ctx, {
    type: line_type,
    data: line_data,
    options: line_options
  })

  // 検出物の割合(円グラフ)
  const pie_ctx = document.getElementById('pie_chart').getContext('2d');
  pie_ctx.canvas.height = 140;
  const pie_type = 'doughnut'
  const pie_labels = [
    'person',
    'car',    
    'bicycle',
    'motorbike',

  ];
  const pie_data = {
    labels: pie_labels,
    datasets: [{
      data: [55, 96, 88, 42],
      backgroundColor: [
                'rgba(255, 99, 132, 0.4)',
                'rgba(54, 162, 235, 0.4)',
                'rgba(255, 206, 86, 0.4)',
                'rgba(75, 192, 192, 0.4)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
            ],
    }]
  };
  const pie_options = {
    title: {
      display: true,
      text: "検出割合"
    },
    scale: {
      ticks: {
        min: 0,
        max: 100,
        stepSize: 10,
      }
    }
  }
  const pie_chart = new Chart(pie_ctx, {
    type: pie_type,
    data: pie_data,
    options: pie_options
  })

  // 時間別の割合(折れ線グラフ)
  const time_ctx = document.getElementById('time_chart').getContext('2d');
  time_ctx.canvas.height = 60;
  const time_type = 'line'
  const time_labels = [0,2,4,6,8,10,12,14,16,18,20,22,23,24];
  const time_data = {
    labels: time_labels,
    datasets: [{
      label: 'person',
      data: [55, 96, 88, 42, 11, 48, 55, 43, 22, 25, 68, 55, 41],
      backgroundColor: ['rgba(255, 99, 132, 0.4)',],
      borderColor: ['rgba(255, 99, 132, 1)',],
    },
    {
      label: 'car',
      data: [30, 22, 25, 66, 22, 36, 44, 22, 23, 55, 32, 11, 3],
      backgroundColor: ['rgba(54, 162, 235, 0.4)',],
      borderColor: ['rgba(54, 162, 235, 1)',],
    },
    {
      label: 'bicycle',
      data: [11, 5, 11, 32, 15, 13, 2, 5, 8, 11, 22, 10, 9,],
      backgroundColor: ['rgba(255, 206, 86, 0.4)',],
      borderColor: ['rgba(255, 206, 86, 1)',],
    },
    {
      label: 'motorbike',
      data: [20, 58, 2, 5, 16, 15, 23, 66, 52, 23, 11, 15, 53],
      backgroundColor: ['rgba(75, 192, 192, 0.4)',],
      borderColor: ['rgba(75, 192, 192, 1)',],
    }]
  };
  const time_options = {
    title: {
      display: true,
      text: "時間別割合"
    },
    scale: {
      ticks: {
        min: 0,
        max: 100,
        stepSize: 10,
      }
    }
  }
  const time_chart = new Chart(time_ctx, {
    type: time_type,
    data: time_data,
    options: time_options
  })
  </script>
</html>