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
      <div class="opening-hours">
        <div class="weekday">
          <div class="abbreviation">Mo</div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
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
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
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
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
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
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
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
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
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
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
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
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
          <div class="time">
            <div class="input-group">
              <input type="time" class="form-control" value="08:30" required>
              <div class="input-group-append">
                <i class="far fa-clock"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <h3 class="heading">Benutzerkonto</h3>
        <div class="border-bottom border-lightgrey"></div>
      </div>
      <div class="acc">Account</div>
      <form action="" class="user-settings">
        <div class="row">
          <div class="form-group col">
            <label for="text">E-Mail</label>
            <input type="email" class="form-control" id="email" value="p@p.de">
          </div>
          <div class="form-group col">
            <label for="text">Name</label>
            <input type="text" class="form-control" id="name" value="Peter">
          </div>
          <div class="form-group col">
            <label for="text">Passwort</label>
            <input type="password" class="form-control" id="password" value="************">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>