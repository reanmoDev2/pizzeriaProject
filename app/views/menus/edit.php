<?php require APPROOT . '/views/inc/header.php'; ?>
<?php require APPROOT . '/views/inc/sidebar.php'; ?>
<?php require APPROOT . '/views/inc/navbar.php'; ?>

<div class="content-container">
  <div class="header-container">
    <img src="<?php echo $results->image; ?>" alt="">
    <h2><?php echo $results->name; ?></h2>
    <div class="btn-container">
      <input type="submit" id="save" class="btn btn-dark mr-4" value="SPEICHERN" form="myform"></input>
      <a href="<?php echo URLROOT; ?>/menus/delete/<?php echo $results->id; ?>" id="delete" class="btn btn-danger">LÖSCHEN</a>
    </div>
  </div>
  <div class="subheading">
    <div class="heading">Informationen</div>
    <div class="title-border"></div>
  </div>

  <form id="myform" action="<?php echo URLROOT; ?>/menus/update/<?php echo $results->id; ?>" method="post" enctype="multipart/form-data" runat="server">
    <div class="row">
      <div class="form-group col picture-container">
        <svg id="cloud-up_1_" data-name="cloud-up (1)" xmlns="http://www.w3.org/2000/svg" width="20.877" height="13.684" viewBox="0 0 20.877 13.684">
          <path id="cloud-up_1_2" data-name="cloud-up (1)" d="M14.366,13.68a.7.7,0,1,1,0-1.408h3.045a2.047,2.047,0,1,0-1.329-3.61l0,0a.706.706,0,1,1-.915-1.075h0A3.456,3.456,0,0,1,16.8,6.821l.021,0A5.468,5.468,0,0,0,6.834,3.8l-.012.019a5.08,5.08,0,0,1,1.476.82l-.01-.008a.705.705,0,1,1-.884,1.1h0a3.632,3.632,0,0,0-2.289-.8h-.01a3.673,3.673,0,1,0,0,7.345H6.731a.7.7,0,1,1,0,1.408H5.1a5.082,5.082,0,1,1,0-10.163c.079,0,.157.006.237.01a6.886,6.886,0,0,1,12.9,3.33v.014a3.453,3.453,0,0,1-.824,6.81Zm-4.634-.7V9.736l-.8.8a.706.706,0,1,1-1-1l2.006-2a.71.71,0,0,1,.148-.11l0,0c.013-.008.026-.014.04-.02a.679.679,0,0,1,.16-.061H10.3a.686.686,0,0,1,.124-.011l.059,0h.005a.162.162,0,0,1,.039,0h0a.675.675,0,0,1,.185.047l0,0a.737.737,0,0,1,.11.059l0,0c.011.006.019.014.03.02a.775.775,0,0,1,.076.062l.017.014,2.008,2a.7.7,0,0,1-.5,1.2.71.71,0,0,1-.5-.206l-.8-.8V12.98a.707.707,0,0,1-1.414,0Z" transform="translate(-0.002)" fill="#909090" />
        </svg>
        <label for="uploadImg" class="mb-0">BILD HOCHLADEN</label>
        <div class="form-group col d-flex">
          <input class="<?php echo (!empty($data['img_err'])) ? 'is-invalid' : ''; ?>" type="file" name="uploadImg" id="uploadImg" hidden>
          <img class="previewImg" src="<?php echo $results->image; ?>" alt="" id="previewImg">
          <span class="invalid-feedback"><?php echo $data['img_err']; ?></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="form-group col">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $results->name; ?>">
        <span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
      </div>
    </div>
    <div class="row">
      <div class="form-group col">
        <label for="mealCategory">Gericht Art</label>
        <select name="mealCategory" class="form-control <?php echo (!empty($data['course_err'])) ? 'is-invalid' : ''; ?>" id="mealCategory">
          <option value="<?php echo $results->course; ?>"><?php echo $results->course; ?></option>
          <option value="Hauptspeise">Hauptspeise</option>
          <option value="Sonstiges">Sonstiges</option>
        </select>
        <span class="invalid-feedback"><?php echo $data['course_err']; ?></span>
      </div>
      <div class="form-group col">
        <label for="price1">Preis Kategorie 1 (klein) [€]</label>
        <input name="price1" type="number" step="0.01" class="form-control" id="price1" value="<?php echo number_format($results->price_small, 2); ?>">
      </div>
    </div>
    <div class="row">
      <div class="form-group col">
        <label for="price2">Preis Kategorie 2 (medium) [€]</label>
        <input name="price2" type="number" step="0.01" class="form-control" id="price2" value="<?php echo number_format($results->price_medium, 2); ?>">
      </div>
      <div class="form-group col">
        <label for="price3">Preis Kategorie 3 (groß) [€]</label>
        <input name="price3" type="number" step="0.01" class="form-control" id="price3" value="<?php echo number_format($results->price_large, 2); ?>">
      </div>
    </div>
    <div class="row">
      <div class="form-group col">
        <label for="comment">Bemerkung</label>
        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control"><?php echo $results->description; ?></textarea>
      </div>
    </div>
  </form>

</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>