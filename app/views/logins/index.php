<?php require APPROOT . '/views/inc/loginheader.php'; ?>
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
        <form action="<?php echo URLROOT; ?>/logins/index" method="post">
            <div class="form-group pt-4">
                <label for="email">E-Mail</label>
                <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>" />
                <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Passwort</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>" />
                <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
            </div>
            <div class="form-group pt-5 text-center">
                <input type="submit" value="WEITER" class="btn btn-dark">
            </div>
        </form>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>