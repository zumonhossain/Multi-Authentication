
//Success and Error Message Timeout Code Start
setTimeout(function() {
    $('.alertsuccess').slideUp(1000);
 },5000);

setTimeout(function() {
    $('.alerterror').slideUp(1000);
 },10000);

 

$(document).ready(function(){
    $('input.timepicker').timepicker({});
});



//Data Table code start
$(document).ready(function(){
	$('#inexsummary').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
		"order": [[ 0, "desc" ]],
	});

	$('#seveendayreport').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"order": [[ 0, "desc" ]],
	});

	$('#allloanerinfo').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});

	$('#alltableinfo').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});

	$('#loanerstatus').DataTable({
		"paging": false,
		"lengthChange": false,
		"searching": false,
		"ordering": true,
		"info": false,
		"autoWidth": false,
		"order": [[ 0, "desc" ]],
	});

	$('#allTableDesc').DataTable({
		"paging": true,
		"lengthChange": true,
		"searching": true,
		"ordering": true,
		"order": [[ 0, "desc" ]],
		"info": true,
		"autoWidth": false
	});
});


//Datepicker setting code start
$(function(){
	$('#income_date').datepicker({
	   autoclose: true,
	   format: 'yyyy-mm-dd',
	   todayHighlight: true
   });

   $('#datepickerForm').datepicker({
	   autoclose: true,
	   format: 'yyyy-mm-dd',
	   todayHighlight: true
   });

   $('#datepickerTo').datepicker({
	   autoclose: true,
	   format: 'yyyy-mm-dd',
	   todayHighlight: true
   });

   $('#datepicker_one').datepicker({
	   autoclose: true,
	   format: 'yyyy-mm-dd',
	   todayHighlight: true
   });

   $('#datepicker_two').datepicker({
	   autoclose: true,
	   format: 'yyyy-mm-dd',
	   todayHighlight: true
   });

   $('.datepicker_date').datepicker({
	   autoclose: true,
	   format: 'yyyy-mm-dd',
	   todayHighlight: true
   });

   $('.datepicker_redate').datepicker({
	   autoclose: true,
	   format: 'yyyy-mm-dd',
	   todayHighlight: true
   });
});

//Modal code start
$(document).ready(function(){
	$(document).on("click", "#softDelete", function () {
		 var deleteID = $(this).data('id');
		 $(".modal-body #modal_id").val( deleteID );
	});

	$(document).on("click", "#restore", function () {
		var restoreID = $(this).data('id');
		$(".modal-body #modal_id").val( restoreID );
    });

   $(document).on("click", "#delete", function () {
	   var deleteID = $(this).data('id');
	   $(".modal-body #modal_id").val( deleteID );
   });

});
