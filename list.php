<?php
require_once('config.php');
$user = getUserFromSession(); 
$data = db_getUploadsByUserId($user->id);

include_once("code/template/header.php");
?>
    <!-- Main content -->
    <section class="content">

    <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Uploaded file list</h3>

              
            </div>
            <!-- /.box-header -->
            <?php if($data) { ?>
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Type</th>
                  <th>Size</th>
                  <th>Uploaded On</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
                <?php foreach($data as $item) { ?>
                <tr>
                  <td><?php echo $item->id; ?></td>
                  <td><?php echo $item->file_name; ?></td>
                  <td><?php echo getFileTypeIcon($item->file_type); ?></td>
                  <td><?php echo $item->size; ?> bytes</td>
                  <td><?php echo $item->creation_date; ?></td>
                  <td><?php echo $item->description; ?></td>
                  <td>
                  <a href="javascript:void(0);" onclick="window.location.href='<?php HREF('/download.php?id='.$item->db_file_name); ?>';" data-file-id="<?php echo $item->db_file_name; ?>" class="btn btn-social btn-dropbox">
                  <i class="fa fa-download"></i>Download</a>
              </td>
                </tr>
                <?php } ?>
              </table>
            </div>
            <?php } ?>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>
    <!-- /.content -->
    <?php
include_once("code/template/footer.php");
?>
 