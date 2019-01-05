<div class="row">
 <div class="col-md-12">
  <a href="index.php?view=newuser" class="btn btn-default pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo Usuario</a>
  <h1>Usuarios</h1>
  <br>
  <?php
  $page = 1;
  if(isset($_GET["page"])){
   $page=$_GET["page"];
  }
  
  $limit=10;
  if(isset($_GET["limit"]) && $_GET["limit"]!="" && $_GET["limit"]!=$limit){
   $limit=$_GET["limit"];
  }

  $totusers = UserData::getAll();
  if(count($totusers)>0){
   if($page==1){
	$users = UserData::getAllByPage($totusers[0]->id,$limit);
   }else{
	$users = UserData::getAllByPage($totusers[($page-1)*$limit]->id,$limit);
   }
	
   $npaginas = floor(count($totusers)/$limit);
   $spaginas = count($totusers)%$limit;

   if($spaginas>0){ $npaginas++;}

   ?>
   <h3>Pagina <?php echo $page." de ".$npaginas; ?></h3>
   <div class="btn-group pull-right">
    <?php
    $px=$page-1;
    if($px>0):
    ?>
    <a class="btn btn-sm btn-default" href="<?php echo "index.php?view=users&limit=$limit&page=".($px); ?>"><i class="glyphicon glyphicon-chevron-left"></i> Atras </a>
   <?php endif; ?>

   <?php 
   $px=$page+1;
   if($px<=$npaginas):
   ?>
   <a class="btn btn-sm btn-default" href="<?php echo "index.php?view=users&limit=$limit&page=".($px); ?>">Adelante <i class="glyphicon glyphicon-chevron-right"></i></a>
   <?php endif; ?>
   </div>
   <div class="clearfix"></div>

   <br>
   <table class="table table-bordered table-hover">
   <thead>
   <th>Id</th>
   <th>Nombre completo</th>
   <th>Nombre de usuario</th>
   <th>Email</th>
   <th>Activo</th>
   <th>Admin</th>
   <th></th>
   </thead>

	<?php foreach($users as $user): ?>
	<tr>
	<td><?php echo $user->id; ?></td>
	<td><?php echo $user->name." ".$user->lastname; ?></td>
	<td><?php echo $user->username; ?></td>
	<td><?php echo $user->email; ?></td>
	<td>
	<?php if($user->is_active):?>
     <i class="glyphicon glyphicon-ok"></i>
    <?php endif; ?>
	</td>
	<td>
	<?php if($user->is_admin):?>
	 <i class="glyphicon glyphicon-ok"></i>
	<?php endif; ?>
	</td>
	<td style="width:30px;"><a href="index.php?view=edituser&id=<?php echo $user->id;?>" class="btn btn-warning btn-xs">Editar</a></td>
	</tr>
	<?php endforeach;?>
	</table>

	<div class="btn-group pull-right">
    <?php
    for($i=0;$i<$npaginas;$i++){
	 echo "<a href='index.php?view=users&limit=$limit&page=".($i+1)."' class='btn btn-default btn-sm'>".($i+1)."</a> ";
    }
    ?>
    </div>

    <form class="form-inline">
	 <label for="limit">Limite</label>
	 <input type="hidden" name="view" value="users">
	 <input type="number" value=<?php echo $limit?> name="limit" style="width:60px;" class="form-control">
    </form>

    <div class="clearfix"></div>
    <?php
     }else{
	?>
	 <div class="jumbotron">
	  <h2>No hay usuario</h2>
	</div>
	<?php
	}
	?>
<br><br><br><br><br><br><br><br><br><br>

	</div>
</div>