
<div class="container">

    <div class="col-lg-12" id="tb">
      <h2>Proposals</h2>
      <table  class="datatable table table-striped table-bordered table-hover" style="width:100%">
        <thead>
          <tr>
            <th>Proposal ID</th>
            <th>Offered term</th>
            <th>Budget Requested</th>
            <th>Offer Status</th>
			
            <th>Submitted By</th>
            <th>Submitted date</th>
            <!--<th>Inserted By</th>
            <th>Inserted Date</th>
			
			 <th>Modified By</th>
            <th>Modified Date</th>
            <th>Details</th>-->			
          </tr>
        </thead>
        <tbody>
		

                                       
		<?php foreach ($proposals as $array) { ?>
          <tr>
              <td><a href="<?php echo site_url('/proposal/view/'.$array['PROPID']);?>"><?php echo $array['PROPID']; ?></a></td>
            <td><?php echo $array['PROP_OFFER_TERM']; ?></td>
            <td><?php echo $array['PROP_BUDGET_REQUESTED']; ?></td>
            <td><?php echo $array['PROP_OFFER_STATUS']; ?></td>
            <td><?php echo $array['SUBMITTED_BY']; ?></td>
            <td><?php echo $array['SUBMIT_DATE']; ?></td>
            <!--<td><?php/* echo $array['INSERT_BY']; ?></td>
            <td><?php echo $array['INSERT_DATE']; ?></td>
            <td><?php echo $array['MOD_BY']; ?></td>
            <td><?php echo $array['MOD_DATE']; ?></td>
			<td><?php //echo $array['PROP_DESCR'];*/ ?></td>-->	
			
          </tr>
		<?php
		} 
		?>
		
		
		

        </tbody>
      </table>

    </div>
    



    
</div>


