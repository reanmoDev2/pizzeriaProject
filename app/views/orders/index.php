<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>
<!-- Modals -->
<?php include APPROOT . '/views/orders/newOrderModal.php'; ?>
<?php include APPROOT . '/views/orders/acceptOrderModal.php'; ?>

<div class="content-container">
  <div class="header-container">
    <h2>Bestellungen</h2>
    <div class="btn-container">
      <a href="#" id="newOrder" class="btn btn-dark btn-order" data-toggle="modal" data-target="#newOrderModal">NEUE BESTELLUNG</a>
    </div>
  </div>
  <div class="order-request-container">
    <?php foreach ($results['new'] as $index => $order) {; ?>
      <div id="order-<?php echo $index ?>">
        <?php foreach ($order as $key => $item) {; ?>
          <div class="order request">
            <?php if ($key === 0) : ?>
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
                  <img class="pizza-pic" src="<?php echo $item->image; ?>" alt="">
                </div>
                <div class="description">
                  <div class="product-name"><?php echo $item->meals_name; ?></div>
                  <div class="price"><?php echo ($item->sales <= 0) ? '-' : number_format($item->sales, 2, ',', '.') . ' €'; ?></div>
                </div>
                <div class="customer">
                  <div class="name"><?php echo $item->customers_name; ?></div>
                  <div class="number"><?php echo $item->tel_nr; ?></div>
                </div>
                <div class="btn-container">
                  <a id="denyBtn" data-id="<?php echo $item->id; ?>" href="#" class="btn btn-danger mr-5">ABLEHNEN</a>
                  <a id="acceptBtn" data-id="<?php echo $item->id; ?>" href="#" class="btn btn-success" id="acceptOrder" data-toggle="modal" data-target="#acceptOrderModal">ANNEHMEN</a>
                </div>
              </div>
            <?php else : ?>
              <div class="new-line">
                <div class="pic-container">
                  <img class="pizza-pic" src="<?php echo $item->image; ?>" alt="">
                </div>
                <div class="description">
                  <div class="product-name"><?php echo $item->meals_name; ?></div>
                  <div class="price"><?php echo ($item->sales <= 0) ? '-' : number_format($item->sales, 2, ',', '.') . ' €'; ?></div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        <?php
        } ?>
        <div class="border-bottom border-lightgrey"></div>
      </div>
    <?php } ?>
  </div>
  <div class="order-in-progress-container">
    <h3>In Bearbeitung</h3>
    <?php foreach ($results['inProgress'] as $index => $order) {; ?>
      <div id="order-<?php echo $index ?>">
        <?php foreach ($order as $key => $item) {; ?>
          <div class="order in-progress">
            <?php if ($key === 0) : ?>
              <div class="new-line">
                <div class="pic-container">
                  <img class="pizza-pic" src="<?php echo $item->image; ?>" alt="">
                </div>
                <div class="description">
                  <div class="product-name"><?php echo $item->meals_name; ?></div>
                  <div class="price"><?php echo ($item->sales <= 0) ? '-' : number_format($item->sales, 2, ',', '.') . ' €'; ?></div>
                </div>
                <div class="customer">
                  <div class="name"><?php echo $item->customers_name; ?></div>
                  <div class="number"><?php echo $item->tel_nr; ?></div>
                </div>
                <div class="btn-container">
                  <a id="cancelBtn" data-id="<?php echo $item->id; ?>" href="#" class="btn btn-danger mr-5">STORNIEREN</a>
                  <a id="payBtn" data-id="<?php echo $item->id; ?>" href="#" class="btn btn-success">BEZAHLT</a>
                </div>
                <div class="delivery">
                  <i class="far fa-clock"></i>
                  <div class="delivery-time">18:45 Uhr</div>
                  <div class="timer">Noch 10 Minuten</div>
                </div>
              </div>
            <?php else : ?>
              <div class="new-line">
                <div class="pic-container">
                  <img class="pizza-pic" src="<?php echo $item->image; ?>" alt="">
                </div>
                <div class="description">
                  <div class="product-name"><?php echo $item->meals_name; ?></div>
                  <div class="price"><?php echo ($item->sales <= 0) ? '-' : number_format($item->sales, 2, ',', '.') . ' €'; ?></div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        <?php } ?>
        <div class="border-bottom border-lightgrey"></div>
      </div>
    <?php
    } ?>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>