<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container d-flex justify-content-center align-items-center">
    <div>
        <div class="pl-5">
            <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" id="logo">
            <div class="pt-2">
                <span class="brand-name pl-3">Mamma's</span>
                <span class="brand-subtitle d-flex align-self-bottom pl-3">SIMPLE FOOD</span>
            </div>
        </div>


        <div class="text-center pt-5">
            <h2>Anmeldung</h2>
        </div>
        <form>
            <div class="form-group pt-4">
                <label>E-Mail</label>
                <input type="email" class="form-control" />
            </div>
            <div class="form-group">
                <label>Passwort</label>
                <input type="password" class="form-control" />
            </div>
            <div class="form-group pt-5 text-center">
                <input type="submit" value="WEITER" class="btn btn-dark">
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>