<div class="card">
  <div class="card-header">
      <h3>Share something!</h3>
    </div>
  <div class="card-body">
    
    <form method='POST' action="<?php $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label for="">Share title</label>
    <input type="text" name='title' class="form-control" id="" aria-describedby="" placeholder="">

  </div>
  <div class="form-group">
    <label for="Body">Share text</label>
    <textarea name='body' class='form-control'></textarea>
  </div>
  <div class="form-group">
    <label>Share link</label>
    <input type='text' name='link' class='form-control'/>
  </div>
  <button class="btn btn-primary" value='submit' name='submit' type="submit" >Submit</button>
  <a href='<?php echo ROOT_PATH; ?>shares' name='cancel' class="btn btn-danger">Cancel</a>
</form>
  </div>
</div>
