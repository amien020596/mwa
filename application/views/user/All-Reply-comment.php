<div class="col-md-9">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">All Reply</h3>

              <div class="box-tools pull-right">
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Komenter</th>
                    <th>Judul Post</th>
                    <th>Komen Balasan</th>
                    <th>Tanggal Balas</th>
                    <th>Opsi</th>
                  </tr>
                  </thead>
                   <?php foreach ($data as $datas) {?>
                <tbody>
                  <tr>

                    
                    <td class="mailbox-name"><a href="<?php echo base_url('ViewReply/').$datas->id_reply; ?>"><?php echo $datas->nama; ?></a></td>
                    <td class="mailbox-subject">
                        <?=ucwords($datas->title);?>
                        <!--<a href="<?=base_url('berita/').$datas->slug?>" target="_blank"><?=ucwords($datas->title);?></a>-->
                        </td>
                    <td class="mailbox-subject"><?php echo strip_tags(word_limiter($datas->reply,4));  ?>
                    </td>
                    <td class="mailbox-date"><?= $datas->timestamp;?></td>
                    <td>
                        <a href="<?= base_url('DeleteReplyUser/').$datas->id_reply;?>" type="button" data-toggle="tooltip" data-placement="top" title="Delete Replay" class="btn btn-default"><i class="fa fa-trash-o"></i> </a>
                        <a href="<?= base_url('UpdateReplyUser/').$datas->id_reply;?>" type="button" data-toggle="tooltip" data-placement="top" title="Update Replay"  class="btn btn-default"><i class="fa fa-upload"></i> </a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
                <!-- /.table -->
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
              </div>
            </div>
          </div>
          <!-- /. box -->
        </div>