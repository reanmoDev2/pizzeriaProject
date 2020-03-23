<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="content-container">
  <h2>Dashboard</h2>
  <div class="inner-container">
    <div class="sales-container">
      <h3 class="dashboard">Umsatz</h3>
      <ol class="list-unstyled">

        <?php for ($x = 0; $x < 5; $x++) {; ?>
          <li class="list-item">
            <div class="price"><?php echo ($results['sales'][$x]->sales <= 0) ? '-' : number_format($results['sales'][$x]->sales, 2, ',', '.') . ' €'; ?></div>
            <div class="name"><?php echo $results['sales'][$x]->name; ?></div>
          </li>
        <?php }; ?>
        <?php
        $sales = 0;
        foreach (array_slice($results['sales'], 5) as $result) {
          $sales += $result->sales;
        }; ?>
        <li class="list-item">
          <div class="price"><?php echo ($sales <= 0) ? '-' : number_format($sales, 2, ',', '.') . ' €'; ?></div>
          <div class="name">Sonstiges</div>
        </li>
      </ol>
      <div class="chart-container">
        <canvas id="chart" class="chart"></canvas>
        <script>
          var dataset = [];
          <?php foreach ($results['chart'] as $result) {; ?>
            dataset.push(<?php echo $result; ?>);
          <?php }; ?>

          function formatFloatToCurrency(float) {
            float = float.toString();
            if (!float.includes('.')) {
              float = float.concat('.00');
            }
            var substrings = float.split('.');
            substrings[1] = substrings[1].padEnd(2, '0');

            if (substrings[0].length > 3) {
              tmp = substrings[0].slice(-3);
              substrings[0] = substrings[0].slice(0, -3) + tmp.padStart(4, '.');
            }
            float = substrings[0] + ',' + substrings[1] + ' €';
            return float;
          }

          if (dataset.length < 12) {
            iterator = 12 - dataset.length;
            for (; iterator < 12; iterator++) {
              dataset.push(0);
            }
          }

          var ctx = document.getElementById('chart').getContext('2d');
          var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
              datasets: [{
                data: [
                  dataset[0],
                  dataset[1],
                  dataset[2],
                  dataset[3],
                  dataset[4],
                  dataset[5],
                  dataset[6],
                  dataset[7],
                  dataset[8],
                  dataset[9],
                  dataset[10],
                  dataset[11]
                ],
                backgroundColor: 'rgba(191, 191, 191, 1)',
                borderWidth: 0.5
              }]
            },
            options: {
              legend: {
                display: false
              },
              tooltips: {
                enabled: false
              },
              scales: {
                yAxes: [{
                  gridLines: {
                    display: false
                  }
                }],
                xAxes: [{
                  gridLines: {
                    display: false
                  }
                }]
              },
              onClick: function(evt) {
                var activeElement = this.getElementAtEvent(evt);
                var selectedIndex = activeElement[0]['_index'];
                var month = document.getElementById('month');
                var sum = document.getElementById('sum');
                switch (selectedIndex) {
                  case 0:
                    month.innerHTML = 'Januar';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 1:
                    month.innerHTML = 'Februar';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 2:
                    month.innerHTML = 'März';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 3:
                    month.innerHTML = 'April';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 4:
                    month.innerHTML = 'Mai';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 5:
                    month.innerHTML = 'Juni';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 6:
                    month.innerHTML = 'Juli';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 7:
                    month.innerHTML = 'August';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 8:
                    month.innerHTML = 'September';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 9:
                    month.innerHTML = 'Oktober';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 10:
                    month.innerHTML = 'November';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  case 11:
                    month.innerHTML = 'Dezember';
                    sum.innerHTML = formatFloatToCurrency(dataset[selectedIndex]);
                    break;
                  default:
                    month.innerHTML = '';
                    sum.innerHTML = '';
                    break;
                }
              }
            }
          });
        </script>

        <div class="info-container">
          <div id="month" class="month"></div>
          <div id="sum" class="sum"></div>
        </div>

      </div>

    </div>
    <div class="sold-container">
      <div class="d-flex">
        <div>
          <h3 class="dashboard">Meist Verkauft</h3>
        </div>

        <div class="sort-container">
          <h4 id="descBtn" class="active">Absteigend</h4>
          <h4 id="ascBtn" class="">Aufsteigend</h4>
        </div>
      </div>

      <ol id="soldList" class="list-unstyled">
        <?php $index = 0 ?>
        <?php foreach ($results['sold'] as $result) {; ?>
          <li class="list-item sold-list-item" id="soldListItem">
            <div id="soldPrice-<?php echo $index  ?>" class="price"><?php echo ($result->sales <= 0) ? '-' : number_format($result->sales, 2, ',', '.') . ' €'; ?></div>
            <div id="soldName-<?php echo $index  ?>" class="name"><?php echo $result->name . ' (' . $result->amount . ')'; ?></div>
          </li>
        <?php $index++;
        }; ?>
      </ol>
      <div class="btn-container" id="btnContainer">
        <button id="page1" class="btn active">1</button>
        <button id="page2" class="btn">2</button>
      </div>

    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>