<div class="card">
  <div class="card-header">
      <h3>Log In</h3>
    </div>
  <div class="card-body">

    <form method='POST' action="<?php $_SERVER['PHP_SELF']; ?>">
  
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name='email' class="form-control" id="" aria-describedby="" placeholder="">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name='password' class="form-control" id="" aria-describedby="" placeholder="">
  </div>
  <button class="btn btn-primary" value='submit' name='submit' type="submit" >Submit</button>

</form>
  </div>
</div>
