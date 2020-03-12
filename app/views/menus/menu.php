<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="content-container">
  <div class="header-container">
    <h2>Speisekarte</h2>
    <div class="btn-container">
      <a href="#" id="import" class="btn btn-dark mr-4">IMPORT EXCEL</a>
      <a href="<?php echo URLROOT; ?>/menus/mealinfo" id="add" class="btn btn-dark">ANLEGEN</a>
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
          <th scope="col"></th>
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
          <td class="dots">
            <div class="dropdown show">
              <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg id="Gruppe_28" data-name="Gruppe 28" xmlns="http://www.w3.org/2000/svg" width="15" height="3" viewBox="0 0 15 3">
                  <circle id="Ellipse_6" data-name="Ellipse 6" cx="1.5" cy="1.5" r="1.5" fill="#353535" />
                  <circle id="Ellipse_7" data-name="Ellipse 7" cx="1.5" cy="1.5" r="1.5" transform="translate(6)" fill="#353535" />
                  <circle id="Ellipse_8" data-name="Ellipse 8" cx="1.5" cy="1.5" r="1.5" transform="translate(12)" fill="#353535" />
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a href="<?php echo URLROOT; ?>/menus/mealinfo" class="dropdown-item">Bearbeiten</a>
                <a href="#" class="dropdown-item">Löschen</a>
              </div>
            </div>


          </td>

        </tr>
        <tr>
          <td class="name">
            <img src="<?php echo URLROOT; ?>/img/pizza_salami.png" alt="">
            <div class="info">
              <div class="heading">Pizza Salami</div>
              <div class="category">Pizza - Hauptspeise</div>
            </div>
          </td>
          <td class="value">13.560</td>
          <td class="value">6,90€</td>
          <td class="value">8,90€</td>
          <td class="value">-</td>
          <td class="dots">
            <div class="dropdown show">
              <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg id="Gruppe_28" data-name="Gruppe 28" xmlns="http://www.w3.org/2000/svg" width="15" height="3" viewBox="0 0 15 3">
                  <circle id="Ellipse_6" data-name="Ellipse 6" cx="1.5" cy="1.5" r="1.5" fill="#353535" />
                  <circle id="Ellipse_7" data-name="Ellipse 7" cx="1.5" cy="1.5" r="1.5" transform="translate(6)" fill="#353535" />
                  <circle id="Ellipse_8" data-name="Ellipse 8" cx="1.5" cy="1.5" r="1.5" transform="translate(12)" fill="#353535" />
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a href="<?php echo URLROOT; ?>/menus/mealinfo" class="dropdown-item">Bearbeiten</a>
                <a href="#" class="dropdown-item">Löschen</a>
              </div>
            </div>

          </td>
        </tr>
        <tr>
          <td class="name">
            <img src="<?php echo URLROOT; ?>/img/pizza_schinken.png" alt="">
            <div class="info">
              <div class="heading">Pizza Schinken</div>
              <div class="category">Pizza - Hauptspeise</div>
            </div>
          </td>
          <td class="value">4.230</td>
          <td class="value">4,20€</td>
          <td class="value">6,50€</td>
          <td class="value">16,50€</td>
          <td class="dots">
            <div class="dropdown show">
              <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg id="Gruppe_28" data-name="Gruppe 28" xmlns="http://www.w3.org/2000/svg" width="15" height="3" viewBox="0 0 15 3">
                  <circle id="Ellipse_6" data-name="Ellipse 6" cx="1.5" cy="1.5" r="1.5" fill="#353535" />
                  <circle id="Ellipse_7" data-name="Ellipse 7" cx="1.5" cy="1.5" r="1.5" transform="translate(6)" fill="#353535" />
                  <circle id="Ellipse_8" data-name="Ellipse 8" cx="1.5" cy="1.5" r="1.5" transform="translate(12)" fill="#353535" />
                </svg>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                <a href="<?php echo URLROOT; ?>/menus/mealinfo" class="dropdown-item">Bearbeiten</a>
                <a href="#" class="dropdown-item">Löschen</a>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

  </div>

</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>