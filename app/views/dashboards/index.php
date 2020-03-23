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