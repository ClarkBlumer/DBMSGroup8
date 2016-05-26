<?php 
$cols = array_keys($reports[0]);
?>

<div class="container">
    <h3> <?php echo $title; ?></h3>
    <div class="col-lg-12" id="tb">
        <table class="datatable table table-bordered table-hover" style="width:100%">
            <thead>
            <tr>

                <?php 
                foreach ($cols as $col) {?>
                <th><?php echo $col;?></th>
                <?php    
                }
                ?>
            </tr>
            </thead>
                <?php 
                foreach ($reports as $val) { ?>
                  <tr>  
                   <?php foreach ($val as $key => $val) {?>
                        <td><?php echo $val;?></td>
                    <?php } ?>
                  </tr>
                  <?php
                }
                ?>
        </table>
    </div>
</div>