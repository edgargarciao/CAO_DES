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
	<link href="css/cao-elements.css" rel="stylesheet"> 
	<link href="css/chips.css" rel="stylesheet"> 


	<!-- Nuevo -->

		<!--  jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

		<!-- Bootstrap Date-Picker Plugin -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


	<!-- fin de lo nuevo --> 
	
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    <link rel="stylesheet" href="assets/app.css">


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
			<li class="parent"><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Tipo de matricula <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="RegistrarTM.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Registrar tipo de matricula
					</a></li>
					<li><a class="" href="ActualizarTP.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Actualizar tipo de matricula
					</a></li>
					<li><a class="" href="EliminarTP.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Eliminar tipo de matricula
					</a></li>
				</ul>
			</li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-2">
				<em class="fa fa-navicon">&nbsp;</em> Matricula <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li><a class="" href="RegistrarM.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Registrar matricula
					</a></li>
					<li><a class="" href="ActualizarM.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Actualizar matricula
					</a></li>
					<li><a class="" href="EliminarM.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Eliminar matricula
					</a></li>
				</ul>
			</li>
			<li><a href="tableroAnual.php"><em class="fa fa-dashboard">&nbsp;</em> Tablero de control general anual</a></li>
			<li><a href="controlHistorico.php"><em class="fa fa-bar-chart">&nbsp;</em> Tablero de control histórico</a></li>
			<li><a href="generarCertificado.php"><em class="fa fa-file-archive-o">&nbsp;</em> Generar certificado</a></li>
			<li><a href="reporteColaborador.php"><em class="fa fa-users">&nbsp;</em> Consultar reporte de colaboradores</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-3">
				<em class="fa fa-navicon">&nbsp;</em> Reportes esporádicos <span data-toggle="collapse" href="#sub-item-3" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li><a class="" href="HorasModalidadVirtual.php">
						<span class="fa fa-dashboard">&nbsp;</span> Horas de formación por cursos virtuales
					</a></li>
					<li><a class="" href="matriculasCertifación.php">
						<span class="fa fa-dashboard">&nbsp;</span> Cantidad de matrículas con certificación
					</a></li>
					<li><a class="" href="participacion.php">
						<span class="fa fa-dashboard">&nbsp;</span> Registro de participación
					</a></li>
					<li><a class="" href="capacitacion.php">
						<span class="fa fa-dashboard">&nbsp;</span> Capacitación por area
					</a></li>

					<li><a class="" href="HorasModalidadCoaching.php">
						<span class="fa fa-dashboard">&nbsp;</span> Horas de formación por cursos de modalidad coaching
					</a></li>
					<li><a class="" href="actualidadFormacion.php">
						<span class="fa fa-dashboard">&nbsp;</span> Estado actual de formación
					</a></li>
				</ul>
			</li>

			</li>
			
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-9 col-lg-offset-3" id = "panelPrin">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="glyphicon glyphicon-pencil"></em>
				</a></li>
				<li class="active">Matrícula</li>
			</ol>
		</div><!--/.row-->
		

			<div class="col-md-12" >
				<div class="panel panel-default">
					<div class="panel-heading">Registrar matrícula</div>
						<div class="panel-body">
							<form role="form" onsubmit ="saveEnrol()">

								<div class="form-group">
									<label>Tipo de Matricula</label>
									<select id="TM" class="form-control" onchange="buscarTiposDeMatriculas(this.value);">
										<?php
							                include 'databaseCao.php';
							                $pdo = DatabaseCao::connect();
							                $sql = 'SELECT * FROM ca_tipo_registro';
							                foreach ($pdo->query($sql) as $row) 
							                {
							                   	$id = $row['id'];
        										$name = utf8_encode($row['nombre']);
												echo '<option value = '.$id.'>'.$name.'</option>';   
							            	}
							            	DatabaseCao::disconnect();
							            ?>
							        </select>    
								</div>
								<div class="form-group">
									<label>Nombre del tipo de matricula</label>

									<select id="tiposDeMatricula" class="form-control" onclick="cargarCursos(this.value)">
										
									</select>
								</div>
								<div class="form-group">
									<label>Rol</label>

									<select class="form-control" id="rol">

										<?php
									        include 'DatabaseMoodle.php';
									        $pdo = DatabaseMoodle::connect();
									        $sql = 'SELECT 	id id,
															name nombre
													FROM 	mdl_role';
									        foreach ($pdo->query($sql) as $row) 
									        {
												$id = $row['id'];
        										$name = utf8_encode($row['nombre']);
												echo '<option value = '.$id.'>'.$name.'</option>';   
									       	}
									      	DatabaseMoodle::disconnect();
									    ?>
									</select>
								</div>
								
								<div class="form-group">
									<label>Usuarios</label>
									<div class="col-sm-12">
								           <input type="text" class="autocomplete form-control" id="sampleAutocomplete" data-toggle="dropdown" />
								           <ul class="dropdown-menu" role="menu">
												<?php									                
									                $pdo = DatabaseMoodle::connect();
									                $sql = 'SELECT id,firstname,lastname FROM mdl_user ORDER BY id';
									                foreach ($pdo->query($sql) as $row) 
									                {
												        $id = $row['id'];
												        $firstname = $row['firstname'];
													    $lastname = $row['lastname'];
														echo '<li id = "usua-'.$id.'">';		
														echo '<a>'.$firstname.' '.$lastname.'</a>';
														echo '</li>';
									            	}
									            	DatabaseMoodle::disconnect();
									            ?>
								           </ul>
									</div>
								</div>

								
								<div class="form-group">
								<label>Seleccionados</label>
										<div class="col-sm-12 " >
											<div class="panel panel-default panel-body">											
												<div class="form-group" id="chipsUsers">
													
												</div>
											</div>
										</div>
								</div>	

								<!-- Tabla -->
									<div class="form-group">
											<div class="row">
												<div class="col-md-6" >
													<label>Cursos</label>
												</div>

													<!-- Filtro por categoria -->
													<div class="col-md-3">
														<select id="CAT" class="form-control" onchange="getState(this.value);">

														<?php
											               
											                $pdo = DatabaseMoodle::connect();
											                $sql = 'SELECT * FROM mdl_course_categories WHERE parent = 0 ORDER BY id';
											                foreach ($pdo->query($sql) as $row) 
											                {
														        $id = $row['id'];
														        $name = utf8_encode($row['name']);
																echo '<option value = '.$id.'>'.$name.'</option>';
											            	}
											            	DatabaseMoodle::disconnect();
											            ?>
												

												</select>
											</div>
												<div class="col-md-3" >
													<div class="form-group text-right">																	
														<input class="form-control" type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre">
							   						</div>
												</div>
											</div>

							   		<div class="table-responsive">
								      	<table id="Cursos" class="table table-bordred table-striped">
								         <thead>
								            <th>Identificación del curso</th>
											<th>Categoria del curso</th>
								            <th>Nombre completo del curso</th>
								            <th>Nombre corto del curso</th>
								            <th>Acción</th>
								         </thead>
								         <tbody id = "tboCourses">
	

								      </tbody>
								      </table>
							      	<div class="clearfix"></div>
										<ul class="pagination pull-right" id = "pags">

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


								<button id="submit" type="submit" class="btn btn-primary">Registrar tipo de matricula</button>
								<button type="reset" class="btn btn-default">Limpiar campos</button>
						</form>
					</div>
				</div><!-- /.panel-->
			</div>
		</div><!--/.row-->

	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/table.js"></script>
	<script src="js/registrarM.js"></script>	

		
</body>
</html>