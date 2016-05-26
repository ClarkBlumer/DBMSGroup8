<!--Put footer info here-->
        <div class="container">
            <p style="padding-left: 30px;">Copyright &copy; 2003-<?php echo date("Y"); ?> The Curators of the University of Missouri. All rights reserved.</p>

            <p style="padding-left: 30px;"><a href="/ums/copyright/">DMCA Policy</a> | <a href="/help/help-accessibility">Accessibility</a> | <a href="/ums/rules/collected_rules/personnel/ch320/320.010_Equal_Employment_Opportunity_Program/">An equal opportunity/affirmative action institution</a></p>
        </div>        

		
		
		
        <script type="text/javascript" src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
        <!-- jQuery -->
         <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
         <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/morris/raphael.min.js"); ?>"></script>
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/morris/morris.min.js"); ?>"></script>
         
         <!--JavaScript data file for morris-charts-->
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/morris/morris-data.js"); ?>"></script>
         
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/flot/jquery.flot.js"); ?>"></script>
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/flot/jquery.flot.tooltip.min.js"); ?>"></script>
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/flot/jquery.flot.resize.js"); ?>"></script>
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/flot/jquery.flot.pie.js"); ?>"></script>
         
         <!--JavaScript data file for flot charts-->
         <script type="text/javascript" src="<?php echo base_url("assets/js/plugins/flot/flot-data.js"); ?>"></script>
		 
<script>
$('.multi-field-wrapper').each(function() {
    var $wrapper = $('.multi-fields', this);
    $(".add-field", $(this)).click(function(e) {
        $('.multi-field:first-child', $wrapper).clone(true).appendTo($wrapper).find('input').val('').focus();
    });
    $('.multi-field .remove-field', $wrapper).click(function() {
        if ($('.multi-field', $wrapper).length > 1)
            $(this).parent('.multi-field').remove();
    });
});
</script>

	
    </body>
    

<!--Date Picker javascript-->
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<!--date picker-->
<script>
    $(document).ready(function(){
        var date_input=$('input[name="submit_date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'dd-M-yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            startDate: "01-Jan-2010"
        })
    })
</script>

</html>


<script type="text/javascript" class="init">
  $(document).ready(function() {
    $('.datatable').dataTable();
  } );          
</script>



