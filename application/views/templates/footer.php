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
<script>
$('.date-picker').datepicker();

$(".date-picker").on("change", function () {
    var id = $(this).attr("id");
    var val = $("label[for='" + id + "']").text();
    $("#msg").text(val + " changed");

</script>
	
    </body>
    
<script>
$(document).ready(function () {
    toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
    //this will call our toggleFields function every time the selection value of our underAge field changes
    $("#propOfferStatus").change(function () {
        toggleFields();
    });

});

function toggleFields() {
    if ($("#propOfferStatus").val() === "Awarded")
        $("#awardTerm").show();
    else{
        $("#awardTerm").hide();
        $("#awardTerm").val("");
}   }
</script>

</html>

