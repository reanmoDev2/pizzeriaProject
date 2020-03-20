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
        <div class="chart"></div>
        <div class="info-container">
          <div class="month">November</div>
          <div class="sum">4,853,90€</div>
        </div>

      </div>

    </div>
    <div class="sold-container">
      <div class="d-flex">
        <div>
          <h3 class="dashboard">Meist Verkauft</h3>
        </div>

        <div class="sort-container">
          <form action="<?php echo URLROOT; ?>/dashboards/index" method="post" class="d-flex">
            <label for="desc">
              <h4 class="<?php echo ($data['setDirection'] === 'DESC') ? 'active' : ''; ?>">Absteigend</h4>
            </label>
            <input id="desc" type="submit" name="orderDirection" value="" hidden>
            <label for="asc">
              <h4 class="<?php echo ($data['setDirection'] === 'ASC') ? 'active' : ''; ?>">Aufsteigend</h4>
            </label>
            <input id="asc" type="submit" name="orderDirection" value="ASC" hidden>
          </form>
        </div>
      </div>

      <ol id="soldList" class="list-unstyled">
        <?php foreach ($results['sold'] as $result) {; ?>
          <li class="list-item sold-list-item" id="soldListItem">
            <div class="price"><?php echo ($result->sales <= 0) ? '-' : number_format($result->sales, 2, ',', '.') . ' €'; ?></div>
            <div class="name"><?php echo $result->name . ' (' . $result->amount . ')'; ?></div>
          </li>
        <?php }; ?>
      </ol>
      <div class="btn-container" id="btnContainer">
        <button onclick="showListItems(0,4)" class="btn active">1</button>
        <button onclick="showListItems(4,8)" class="btn ">2</button>
      </div>

    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>