<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="content-container">
  <div class="header-container">
    <h2>Speisekarte</h2>
    <div class="btn-container">
      <button id="import" class="btn btn-dark mr-4">IMPORT EXCEL</button>
      <button id="add" class="btn btn-dark">ANLEGEN</button>
    </div>
  </div>

  <div class="filter-container">
    <img src="<?php echo URLROOT; ?>/img/scope_icon.png" alt="" id="scope">
    <input type="text" placeholder="Filter">
  </div>
  <div class="table-container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Verkauft</th>
          <th scope="col">Preis Kategorie 1</th>
          <th scope="col">Preis Kategorie 2</th>
          <th scope="col">Preis Kategorie 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="name">
            <img src="<?php echo URLROOT; ?>/img/pizza_margherita.png" alt="">
            <div class="info">
              <div class="heading">Pizza Margherita Gouda</div>
              <div class="category">Pizza - Hauptspeise</div>
            </div>
          </td>
          <td class="value">1.500</td>
          <td class="value">5,30€</td>
          <td class="value">7,50€</td>
          <td class="value">14,50€</td>
        </tr>
        <tr>
          <td class="name">
            <img src="<?php echo URLROOT; ?>/img/pizza_margherita.png" alt="">
            <div class="info">
              <div class="heading">Pizza Margherita Gouda</div>
              <div class="category">Pizza - Hauptspeise</div>
            </div>
          </td>
          <td>1.500</td>
          <td>5,30€</td>
          <td>7,50€</td>
          <td>14,50€</td>
        </tr>
        <tr>
          <td class="name">
            <img src="<?php echo URLROOT; ?>/img/pizza_margherita.png" alt="">
            <div class="info">
              <div class="heading">Pizza Margherita Gouda</div>
              <div class="category">Pizza - Hauptspeise</div>
            </div>
          </td>
          <td>1.500</td>
          <td>5,30€</td>
          <td>7,50€</td>
          <td>14,50€</td>
        </tr>
      </tbody>
    </table>
  </div>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>