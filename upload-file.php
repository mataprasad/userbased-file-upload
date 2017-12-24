<?php
require_once('config.php');
require_once(ABSPATH . '/code/post/upload-file-post.php');
include_once("code/template/header.php");
?>
    <!-- Main content -->
    <section class="content">

  <!-- general form elements -->
  <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Upload a file here</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" action="<?php HREF('/upload-file.php'); ?>" method="post" enctype="multipart/form-data">
    <div class="box-body">
    <?php
    if($success_message  != ""){ ?>
    <div class="callout callout-success">
    <?php echo $success_message; ?>
              </div>
   <?php } ?>
    <?php
    if($error_message != ""){ ?>
    <div class="callout callout-danger">
    <?php echo $error_message; ?>
              </div>
   <?php } ?>
      <div class="form-group">
        <label for="description">File description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
      </div>
      <div class="form-group">
        <label for="upload">File input</label>
        <input type="file" id="upload" name="upload"/>

        
      </div>
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
<!-- /.box -->


    </section>
    <!-- /.content -->
    <?php
include_once("code/template/footer.php");
?>
 