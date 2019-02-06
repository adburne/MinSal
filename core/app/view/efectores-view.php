<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=newefector" class="btn btn-default pull-right"><i class='fa fa-th-list'></i> Nuevo Efector</a>
	<h1>Nómina de Efectores</h1>
	<p><b>Buscar efectores por nombre o código:</b></p>
		<form id="searche">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="efector">
				<input type="text" id="efector_id" name="efector" class="form-control">
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
	$("#searche").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchefector",$("#searche").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#efector_id").val("");

	});
	});

$(document).ready(function(){
    $("#efector_id").keydown(function(e){
        if(e.which==17 || e.which==74){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});
</script>

