<div class=''>
  <?php if(isset($_SESSION['is_logged_in'])) : ?>
  <a class='btn btn-success mb-4 mt-4' href="<?php echo ROOT_PATH; ?>shares/add">Share something</a>
<?php endif; ?>
  <div class='row'>
  <div class='card-columns'>
  <?php foreach ($viewmodel as $item) : ?>
    <div class="card mt-4">

  <div class="card-body">
    <h5 class="card-title float-left"><?php echo $item['title']; ?></h5>
    <small class='float-right'><?php echo $item['create_date']; ?></small>
    <br /><br />
    <p class="card-text"><?php echo $item['body']; ?></p>
    <a href="<?php echo $item['link']; ?>" class="btn btn-warning">View</a>
  </div>
</div>

  <?php endforeach; ?>
    </div>
      </div>
</div>
