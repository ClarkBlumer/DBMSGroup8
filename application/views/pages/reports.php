<?php 
$cols = array_keys($reports[0]);
?>
<div class="container">
   
  <table>
        <th>
        
            <?php 
            foreach ($cols as $col) {?>
            <td><?php echo $col;?></td>
            <?php    
            }
            ?>
        </th>
        
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