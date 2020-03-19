<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="content-container">
  <h2>Einstellungen</h2>
  <div class="inner-container">
    <div class="wrapper">

      <div class="section">
        <h3 class="heading">Öffnungszeiten</h3>
        <div class="border-bottom border-lightgrey"></div>
      </div>
      <form action="<?php echo URLROOT; ?>/settings/updateOpeningHours" class="opening-hours" method="post">
        <div class="weekday">
          <div class="abbreviation">Mo</div>
          <div class="time">
            <div class="input-group">
              <input name="mo_start" type="time" class="form-control" value="<?php echo $results->mo_start; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input name="mo_end" type="time" class="form-control" value="<?php echo $results->mo_end; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="weekday">
          <div class="abbreviation">Di</div>
          <div class="time">
            <div class="input-group">
              <input name="di_start" type="time" class="form-control" value="<?php echo $results->di_start; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input name="di_end" type="time" class="form-control" value="<?php echo $results->di_end; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="weekday">
          <div class="abbreviation">Mi</div>
          <div class="time">
            <div class="input-group">
              <input name="mi_start" type="time" class="form-control" value="<?php echo $results->mi_start; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input name="mi_end" type="time" class="form-control" value="<?php echo $results->mi_end; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="weekday">
          <div class="abbreviation">Do</div>
          <div class="time">
            <div class="input-group">
              <input name="do_start" type="time" class="form-control" value="<?php echo $results->do_start; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input name="do_end" type="time" class="form-control" value="<?php echo $results->do_end; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="weekday">
          <div class="abbreviation">Fr</div>
          <div class="time">
            <div class="input-group">
              <input name="fr_start" type="time" class="form-control" value="<?php echo $results->fr_start; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input name="fr_end" type="time" class="form-control" value="<?php echo $results->fr_end; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="weekday">
          <div class="abbreviation">Sa</div>
          <div class="time">
            <div class="input-group">
              <input name="sa_start" type="time" class="form-control" value="<?php echo $results->sa_start; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input name="sa_end" type="time" class="form-control" value="<?php echo $results->sa_end; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="weekday mb-0">
          <div class="abbreviation">So</div>
          <div class="time">
            <div class="input-group">
              <input name="so_start" type="time" class="form-control" value="<?php echo $results->so_start; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input name="so_end" type="time" class="form-control" value="<?php echo $results->so_end; ?>">
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
        <input type="submit" class="btn btn-dark mt-5" value="Ändern"></input>
      </form>
      <!-- User Credentials -->
      <div class="section">
        <h3 class="heading">Benutzerkonto</h3>
        <div class="border-bottom border-lightgrey"></div>
      </div>
      <div class="acc">Account</div>
      <form action="<?php echo URLROOT; ?>/settings/updateUser" class="user-settings" method="post">
        <div class="row">
          <div class="form-group col">
            <label for="email">E-Mail</label>
            <input name="email" type="email" class="form-control" id="email" value="<?php echo $results->email; ?>">
          </div>
          <div class="form-group col">
            <label for="firstName">Vorname</label>
            <input name="first_name" type="text" class="form-control" id="firstName" value="<?php echo $results->first_name; ?>">
          </div>
          <div class="form-group col">
            <label for="lastName">Nachname</label>
            <input name="last_name" type="text" class="form-control" id="lastName" value="<?php echo $results->last_name; ?>">
          </div>
          <div class="form-group col">
            <label for="password">Passwort</label>
            <input name="password" type="password" class="form-control" id="password" value="">
          </div>
        </div>
        <input type="submit" class="btn btn-dark mt-2" value="Ändern"></input>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>