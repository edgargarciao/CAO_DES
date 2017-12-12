<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CAO</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="css/font-awesome.min.css" rel="stylesheet"> 
	<link href="css/datepicker3.css" rel="stylesheet"> 
	<link href="css/styles.css" rel="stylesheet"> 
	<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html"><span>CA</span>O</a>

			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-3 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://wfarm2.dataknet.com/static/resources/icons/set108/b5cdab07.png" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Administrador</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="VerTM.php"><em class="fa fa-archive">&nbsp;</em>Gestionar tipos de matrícula</a></li>
			<li><a href="VerM.php"><em class="fa fa-book">&nbsp;</em>Consultar matrículas</a></li>
			<li><a href="RegistrarM.php"><em class="fa fa-pencil">&nbsp;</em>Registrar matrículas</a></li>
			<li><a href="ActualizarM.php"><em class="fa fa-refresh">&nbsp;</em>Actualizar matrícula</a></li>
			<li><a href="EliminarM.php"><em class="fa fa-trash-o">&nbsp;</em>Eliminar matrículas</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-9 col-lg-offset-3">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="glyphicon glyphicon-pencil"></em>
				</a></li>
				<li class="active">Tipo de matrícula</li>
			</ol>
		</div><!--/.row-->
		
		<!-- FORM --> 
		<div class="row">
			<div class="col-md-12" >
				<div class="panel panel-default">
					<div class="panel-heading">Actualizar tipo de matrícula</div>
						<div class="panel-body">
							<form role="form">
								<div class="form-group">
									<label>Tipo de Matricula</label>

									<select class="form-control">
											<option>Oferta</option>
											<option>Solicitud</option>
											<option>Plan de formación</option>											
									</select>
								</div>
								<div class="form-group">
									<label>Nombre del tipo de matricula</label>

									<select class="form-control">
											<option>Oferta I-2017</option>
											<option>Oferta II-2017</option>
											<option>Oferta III-2017</option>											
									</select>
								</div>


								<!-- Tabla -->

								<div class="form-group">

											<div class="row">
												<div class="col-md-6" >
													<label>Cursos</label>
												</div>
												<div class="col-md-6" >
													<div class="form-group text-right">																	
														<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre">
							   						</div>
												</div>
											</div>
									
							   		<div class="table-responsive">
								      	<table id="Cursos" class="table table-bordred table-striped">
								         <thead>
								            <th><input type="checkbox" id="checkall" /></th>
								            <th>Identificación del curso</th>
											<th>Categoria del curso</th>
								            <th>Nombre completo del curso</th>
								            <th>Nombre corto del curso</th>
								            <th>Editar</th>
								         </thead>
								         <tbody>
								            <tr>
								               <td><input type="checkbox" class="checkthis" /></td>
								               <td>1</td>
								               <td>0</td>
								               <td>Ordenes de Trabajo Versión 6.2</td>
								               <td>OTV6.2</td>
								               <td>
								                  <p data-placement="top" data-toggle="tooltip" title="Configurar">
													<button type="button" class="btn btn-primary btn-xs" data-title="edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
								                 	</button>
								                  </p>
								               </td>
								            </tr>
								            <tr>
								               <td><input type="checkbox" class="checkthis" /></td>
								               <td>2</td>
								               <td>17</td>
								               <td>Interfaz Contable V7.2</td>
								               <td>IC</td>
								               	<td>
								                  <p data-placement="top" data-toggle="tooltip" title="Configurar">
													<button type="button" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
								                 	</button>
								                  </p>
								               </td>
								            </tr>
								            <tr>
								               <td><input type="checkbox" class="checkthis" /></td>
								               <td>3</td>
								               <td>4</td>
								               <td>Framework de SmartFlex V 7.2</td>
								               <td>FW</td>
								               <td>
								                  <p data-placement="top" data-toggle="tooltip" title="Configurar">
													<button type="button" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
								                 	</button>
								                  </p>
								               </td>
								            </tr>
								            <tr>
								               <td><input type="checkbox" class="checkthis" /></td>
								               <td>4</td>
								               <td>2</td>
								               <td>Creación de Reportes Interactivos V7.2</td>
								               <td>GR</td>

								               <td>
								                  <p data-placement="top" data-toggle="tooltip" title="Configurar">
													<button type="button" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
								                 	</button>
								                  </p>
								               </td>
								            </tr>
								            <tr>
								               <td><input type="checkbox" class="checkthis" /></td>
								               <td>5</td>
								               <td>1</td>
								               <td>Mediación y Activación V7.6</td>
								               <td>MA</td>
								               <td>
								                  <p data-placement="top" data-toggle="tooltip" title="Configurar">
													<button type="button" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span>
								                 	</button>
								                  </p>
								               </td>
								            </tr>
								         </tbody>
								      </table>
							      	<div class="clearfix"></div>
							      		<ul class="pagination pull-right">
									         <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
									         <li class="active"><a href="#">1</a></li>
									         <li><a href="#">2</a></li>
									         <li><a href="#">3</a></li>
									         <li><a href="#">4</a></li>
									         <li><a href="#">5</a></li>
									         <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
							      		</ul>
							   		</div>

								</div>
								<!-- Fin de la tabla --> 
								<div class="row">
									<div class="col-md-6" >
									    <div class="form-group"> <!-- Date input -->
							        		<label class="control-label" for="date">Fecha inicial</label>
							        		<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
							      		</div>
									</div>
									<div class="col-md-6" >
							      		<div class="form-group"> <!-- Date input -->
							        		<label class="control-label" for="date">Fecha final</label>
							        		<input class="form-control" id="date" name="date" placeholder="MM/DD/YYY" type="text"/>
							      		</div>
									</div>
								</div>	









								<button type="submit" class="btn btn-primary">Actualizar tipo de matricula</button>
								<button type="reset" class="btn btn-default">Limpiar campos</button>
						</form>
					</div>
				</div><!-- /.panel-->
			</div>
		</div><!--/.row-->

	</div>	<!--/.main-->



  <!-- Modal -->
  <div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">



        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Configurar curso</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>

        <div class="modal-footer">



          	<button type="button" class="btn btn-primary" data-dismiss="modal">Configurar</button>
          	<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
        </div>




      </div>
      
    </div>
  </div>

	

	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/table.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>