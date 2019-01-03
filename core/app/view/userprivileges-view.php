<div class="row">
	<div class="col-md-12">
	<h1>Privilegios por usuario</h1>
	<p><b>Buscar usuario por nombre:</b></p>
		<form id="searchu">
		<div class="row">
			<div class="col-md-6">
				<input type="hidden" name="view" value="userprivileges">
				<input type="text" id="user_id" name="user" class="form-control">
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
	$("#searchu").on("submit",function(e){
		e.preventDefault();
		
		$.get("./?action=searchuser",$("#searchu").serialize(),function(data){
			$("#show_search_results").html(data);
		});
		$("#user_id").val("");

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

<!--- Privilegios del Usuario -->
<?php if(isset($_SESSION["userpriv"])):
$user = UserData::getById($_SESSION["userpriv"]);
echo '<div class="row">';
echo '<div class="col-md-12">';
echo "<br><h3>Lista de Privilegios - ".$user->lastname.", ".$user->name."</h3>";
echo '</div>';
echo '</div>';
?>

<form method="post" class="form-horizontal" id="processuserpriv" action="index.php?view=processuserpriv">

<table class="table table-bordered table-hover">
<thead>
	<th>Descripción</th>
	<th>Permiso</th>
</thead>

<?php $userprivileges = UserPrivilegeData::getAllPrivByUserId($_SESSION["userpriv"]);

foreach($userprivileges as $up):
?>
<tr >
	<td><?php echo $up->privilege_name; ?></td>
	<td><?php echo "<input type='checkbox' name=chk[] value=".$up->privilege_id." ".($up->userprivilege == 1 ? "checked":"")." />"; ?></td>
</tr>

<?php endforeach; ?>
</table>

<div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <div class="checkbox">
        <label>
				<a href="index.php?view=clearuserprivilege" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i> Cancelar</a>
        <button class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Registrar cambios</button>
        </label>
      </div>
    </div>
  </div>
</form>


<!-- <br/><br/><input type='submit' name='formSubmit' value='Submit' />
</form>
 -->
<?php endif; ?>

</div>