
<?php include('header.php'); ?>
  <br>
  <main role="main" class="container">
    <div class="card w-75 mx-auto">
      <h5 class="card-header">Standard Compression</h5>
      <div class="card-body">
        <p class="card-text">Compression for almost unnoticeable changes.</p>
        <form method="POST" action="<?= $php_self ?>" enctype="multipart/form-data">
        <div class="form-group">
          <?php
          if($fail || $fail_ERROR || $success) {
          ?>
          <div class="alert alert-<?php if($success){echo 'success';}else{echo 'danger';} ?>" role="alert"><?= $fail ?> <?= $fail_ERROR ?> <?= $success ?></div>
          <?php } ?>
          <b><label for="exampleFormControlFile1">Choose Images:</label></b>
          <input type="file" accept=".png, .jpg, .jpeg" name="photos[]" class="form-control-file" multiple>
          <br>
          <b><label for="exampleFormControlFile1">Quality:</label></b>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="90">
            <label class="form-check-label">
              90% - No changes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="80">
            <label class="form-check-label">
              80% - Almost no changes
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="70" checked>
            <label class="form-check-label">
              70% - Very low changes <b>(recommended)</b>
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="60">
            <label class="form-check-label">
              60% - Very low noise
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="50">
            <label class="form-check-label">
              50% - Low Noise
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="40">
            <label class="form-check-label">
              40% - Visible Noise
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="30">
            <label class="form-check-label">
              30% - Pixelated Noise
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="20">
            <label class="form-check-label">
              20% - Low Pixelated Quality
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="zstandard">
            <label class="form-check-label">
              Zstandard - Facebook-like image compression
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="rbtnQuality" value="smallest_file">
            <label class="form-check-label">
              Smallest file
            </label>
          </div>
        </div>
        <input name="btnStart" class="btn btn-primary" type="submit" value="Start">
      </form>
      </div>
    </div>
  </main>
<?php include('footer.php'); ?>
