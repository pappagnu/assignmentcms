<?php require VIEW_ROOT . '/templates/header.php'; ?>


<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-8">
      <form action="<?php echo BASE_URL; ?>/app/add_user.php" method="POST">
        <div class="form-group">
          <label for="username">Username: </label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label for="email">Email: </label>
          <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group">
          <label for="password">Password: </label>
          <input type="text" class="form-control" name="password">
        </div>
        <?php if(!empty($_POST['error_reg'])): ?>
          <?php echo $_POST['error_reg']; ?></br>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary">OK</button>
      </form>
    </div>
  </div>
</div>


<?php require VIEW_ROOT . '/templates/footer.php'; ?>
