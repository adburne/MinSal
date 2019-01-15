<?php

$codefe = $_GET["codefe"];

$efector = EfectorData::getByCodEstByUserId($codefe, $_SESSION["user_id"]);
if (!isset($efector)){
 echo "<p class='alert alert-warning'>El efector es inexistente <a href='index.php?view=rrhhefector'>Ir a RRHH por Efector</a></p>";
 exit();
}
?>

<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newRRHH" class="btn btn-default pull-right"><i class='fa fa-th-list'></i> Nuevo RRHH</a>
	<h1><?php echo $efector->nomest; ?></h1>
	<p><b>Ingrese el nombre o documento del agente a incorporar al <?php echo $efector->nomest; ?>:</b></p>
		<form id="searchrh">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="rrhh">
				<input type="hidden" name="codefe" value="<?php echo $codefe; ?>">
				<input type="text" id="rrhh_id" name="rrhh" class="form-control">
			</div>
			<div class="col-md-3">
			  <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i> Buscar</button>
			</div>
		</div>
		</form>
	</div>
</div>
<div id="show_search_results"></div>
<script>
//jQuery.noConflict();

$(document).ready(function(){
	$("#searchrh").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchrrhhefector",$("#searchrh").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#rrhh_id").val("");

	});
	});

$(document).ready(function(){
    $("#user_id").keydown(function(e){
        if(e.which==17 || e.which==74){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});
</script>

