<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="content-container">
  <div class="header-container">
    <h2>Bestellungen</h2>
    <div class="btn-container">
      <a href="#" id="newOrder" class="btn btn-dark btn-order">NEUE BESTELLUNG</a>
    </div>
  </div>
  <div class="order-request-container">
    <div class="order request">
      <div class="notifier">
        <svg xmlns="http://www.w3.org/2000/svg" width="62" height="29" viewBox="0 0 62 29">
          <g id="Gruppe_79" data-name="Gruppe 79" transform="translate(-265 -165)">
            <path id="Pfad_54" data-name="Pfad 54" d="M14.5,0h33a14.752,14.752,0,0,1,6.551,1.561A14.5,14.5,0,0,1,47.5,29h-33a14.5,14.5,0,0,1,0-29Z" transform="translate(265 165)" fill="#009046" />
            <text id="NEU" transform="translate(282 185)" fill="#fff" font-size="14" font-family="SegoeUI, Segoe UI">
              <tspan x="0" y="0">NEU</tspan>
            </text>
          </g>
        </svg>
      </div>
      <div class="new-line">
        <div class="pic-container">
          <img class="pizza-pic" src="<?php echo URLROOT; ?>/img/pizza_margherita.png" alt="">
        </div>
        <div class="description">
          <div class="product-name">1x Pizza Margherita Gouda (medium)</div>
          <div class="price">10,50€</div>
        </div>
        <div class="customer">
          <div class="name">André Schlüß</div>
          <div class="number">02871 2372427</div>
        </div>
        <div class="btn-container">
          <a href="#" class="btn btn-danger mr-5">ABLEHNEN</a>
          <a href="#" class="btn btn-success">ANNEHMEN</a>
        </div>
      </div>
      <div class="border-bottom border-lightgrey"></div>
    </div>
  </div>
  <div class="order-in-progress-container">
    <h3>In Bearbeitung</h3>
    <div class="order in-progress">
      <div class="new-line">
        <div class="pic-container">
          <img class="pizza-pic" src="<?php echo URLROOT; ?>/img/pizza_margherita.png" alt="">
        </div>
        <div class="description">
          <div class="product-name">1x Pizza Margherita Gouda (medium)</div>
          <div class="price">10,50€</div>
        </div>
        <div class="customer">
          <div class="name">Peter Schlüß</div>
          <div class="number">02871 2372427</div>
        </div>
        <div class="btn-container">
          <a href="#" class="btn btn-danger mr-5">STORNIEREN</a>
          <a href="#" class="btn btn-success">BEZAHLT</a>
        </div>
        <div class="delivery">
          <i class="far fa-clock"></i>
          <div class="delivery-time">18:45 Uhr</div>
          <div class="timer">Noch 10 Minuten</div>
        </div>
      </div>
      <div class="border-bottom border-lightgrey"></div>
    </div>
    <div class="order in-progress">
      <div class="new-line">
        <div class="pic-container">
          <img class="pizza-pic" src="<?php echo URLROOT; ?>/img/pizza_margherita.png" alt="">
        </div>
        <div class="description">
          <div class="product-name">1x Pizza Margherita Gouda (medium)</div>
          <div class="price">10,50€</div>
        </div>
        <div class="customer">
          <div class="name">Günther Schlüß</div>
          <div class="number">02871 2372427</div>
        </div>
        <div class="btn-container">
          <a href="#" class="btn btn-danger mr-5">STORNIEREN</a>
          <a href="#" class="btn btn-success">BEZAHLT</a>
        </div>
        <div class="delivery">
          <i class="far fa-clock"></i>
          <div class="delivery-time">18:50 Uhr</div>
          <div class="timer">Noch 15 Minuten</div>
        </div>
      </div>
      <div class="new-line">
        <div class="pic-container">
          <img class="bruschetta-pic" src="<?php echo URLROOT; ?>/img/bruschetta.png" alt="">
        </div>
        <div class="description">
          <div class="product-name">1x Bruschetta</div>
          <div class="price">4,50€</div>
        </div>
      </div>
      <div class="border-bottom border-lightgrey"></div>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>