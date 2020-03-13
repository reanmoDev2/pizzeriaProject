<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="content-container">
  <h2>Dashboard</h2>
  <div class="inner-container">
    <div class="sales-container">
      <h3 class="dashboard">Umsatz</h3>
      <ol class="list-unstyled">
        <li class="list-item">
          <div class="price">2.553,90€</div>
          <div class="name">Pizza Magherita</div>
        </li>
        <li class="list-item">
          <div class="price">1.504,80€</div>
          <div class="name">Pizza Salami</div>
        </li>
        <li class="list-item">
          <div class="price">701,60€</div>
          <div class="name">Salat Mista</div>
        </li>
        <li class="list-item">
          <div class="price">130,50€</div>
          <div class="name">Pizza Brötchen</div>
        </li>
        <li class="list-item">
          <div class="price">10,80€</div>
          <div class="name">Spaghetti</div>
        </li>
        <li class="list-item">
          <div class="price">6,80€</div>
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
          <h4 class="active">Absteigend</h4>
          <h4>Aufsteigend</h4>
        </div>
      </div>

      <ol id="salesList" class="list-unstyled">
        <li class="list-item">
          <div class="price">2.553,90€</div>
          <div class="name">Pizza Magherita</div>
        </li>
        <li class="list-item">
          <div class="price">1.504,80€</div>
          <div class="name">Pizza Salami</div>
        </li>
        <li class="list-item active">
          <div class="price">701,60€</div>
          <div class="name">Salat Mista</div>
        </li>
        <li class="list-item">
          <div class="price">130,50€</div>
          <div class="name">Pizza Brötchen</div>
        </li>
        <li class="list-item">
          <div class="price">10,80€</div>
          <div class="name">Spaghetti</div>
        </li>
      </ol>
      <div class="btn-container">
        <button class="btn active">1</button>
        <button class="btn">2</button>
      </div>

    </div>
  </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>