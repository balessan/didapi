<?php include("header.php") ?>

<div class="row">
	<div class="span3">
	</div>
	<div class="span9">
	</div>
</div>

<script type="text/javascript">
	$(function(){
		refreshRucheTable();
	});
	
	function refreshContactTable(){
		$('#ruche_table_wrapper').load('load_ruche_list.php', function(){
		   setTimeout(refreshRucheTable, 5000);
		});
	}
</script>
<?php include("footer.php") ?>