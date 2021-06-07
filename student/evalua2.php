<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$resp1 = $_POST['q1'];
	$resp2 = $_POST['q2'];
	$resp3 = $_POST['q3'];
	$resp4 = $_POST['q4'];
	$resp5 = $_POST['q5'];
	$resp6 = $_POST['q6'];
	$resp7 = $_POST['q7'];
	$resp8 = $_POST['q8'];  
	$resp9 = $_POST['q9'];
	$resp10 = $_POST['q10'];
	$resp11 = $_POST['q11'];
	$resp12 = $_POST['q12'];
	$resp13 = $_POST['q13'];
	$resp14 = $_POST['q14'];
	$resp15 = $_POST['q15'];
	$resp16 = $_POST['q16'];
	$resp17 = $_POST['q17'];
	$resp18 = $_POST['q18'];
	$resp19 = $_POST['q19'];
	$resp20 = $_POST['q20'];
	$cont = 0;
	$total_pts = 0;

	for ($i = 0; $i < 1; $i++) {

  		if ($resp1 == "r1") { $cont++; }
  		if ($resp2 == "r2") { $cont++; }
		if ($resp3 == "r1") { $cont++; }
		if ($resp4 == "r2") { $cont++; }
		if ($resp5 == "r2") { $cont++; }
		if ($resp6 == "r4") { $cont++; }
		if ($resp7 == "r4") { $cont++; }
		if ($resp8 == "r1") { $cont++; }
		if ($resp9 == "r2") { $cont++; }
		if ($resp10 == "r3") { $cont++; }
		if ($resp11 == "r1") { $cont++; }
		if ($resp12 == "r3") { $cont++; }
		if ($resp13 == "r2") { $cont++; }
		if ($resp14 == "r4") { $cont++; }
		if ($resp15 == "r2") { $cont++; }
		if ($resp16 == "r4") { $cont++; }
		if ($resp17 == "r1") { $cont++; }
		if ($resp18 == "r3") { $cont++; }
		if ($resp19 == "r1") { $cont++; }
		if ($resp20 == "r2") { $cont++; }

	}
}
?>
<?php

require 'includes/funciones.php';
incluirTemplate('header', $inicio = true, $login = true);
?>

	<main id="main">
		<!-- ======= Breadcrumbs ======= -->
	    <div class="breadcrumbs" data-aos="fade-in">
	      <div class="container">
	        <h2>UNIDAD 2 - Evaluacion 2</h2>
	        <p> Respecto al contenido de la<a href="unidad2.php" class="ml-2" style="color: blue;">Unidad 2</a> se realizara un breve cuestionario para reforzar el contenido aprendido. </p>
	        <p> (Constara de 20 preguntas - opcion multiple)</p>
	      </div>
	    </div><!-- End Breadcrumbs -->


	    <!-- =========== Carousel =========== -->
	    <form action="evalua2.php" method="post">
	    	
	    

		    <section id="courses about" class="courses about">
			   	<div class="container" data-aos="fade-up">
					<h2> Evaluacion </h2>
					<p> La evaluacion tiene un valor sobre 100, cada pregunta vale 5 puntos. </p>
			        <div class="row" data-aos="zoom-in" data-aos-delay="100">

			          	
			            	<div class="course-item">
							    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
									<ol class="carousel-indicators">
									    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"><br>1</li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="4"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="5"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="6"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="7"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="8"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="9"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="10"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="11"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="12"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="13"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="14"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="15"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="16"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="17"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="18"> </li>
									    <li data-target="#carouselExampleIndicators" data-slide-to="19"><br>20</li>
								    </ol>
								    <div class="row">
								    	<!-- ================== Slide 1 ================== --> 
								    	<div class="carousel-inner  " >

									    	<div class="carousel-item active">
									    		<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
									    			<h3> 1. ¿En que consiste un pull up y de que otra manera se le conoce? </h3>
									    			<br>

													<label class="container2">Se denomina dominada y consiste en levantar el cuerpo mientras este pende de una barra de dominadas.
													  <input type="radio" name="q1" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Es un ejercicio en el cual la gimnasta se sostendra de la villa con su cabeza por encima, se denomina sostencion de villa estatica.
													  <input type="radio" name="q1" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Indica colgarse de la barra e intentar realizar una dominada.
													  <input type="radio" name="q1" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Son el ejercicio perfecto para fortalecer la parte superior del cuerpo, se les conoce como dominadas.
													  <input type="radio" name="q1" value="r4">
													  <span class="checkmark"></span>
													</label>

													<br>

													
											    	
										    	</div>
										    </div>
										<!-- ================== Slide 2 ================== --> 
										    								    
									    	<div class="carousel-item">
									    		
									    		<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
									    			<h3> 2. ¿Que es la Sostencion de villa estatica? </h3>
									    			<br>

													<label class="container2"> Consiste en levantar el cuerpo mientras este pende de una barra de dominadas.
													  <input type="radio" name="q2" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Es un ejercicio en el cual la gimnasta se sostendra de la villa con su cabeza por encima.
													  <input type="radio"  name="q2" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Indica colgarse de la barra.
													  <input type="radio" name="q2" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Son el ejercicio perfecto para fortalecer la parte superior del cuerpo.
													  <input type="radio" name="q2" value="r4">
													  <span class="checkmark"></span>
													</label>

													<br>
											    	
										    	</div>
										    </div>
										    <!-- ================== Slide 3 ================== --> 
										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 3. A que ejercicio pertenece la siguiente frase: Indica colgarse de la barra e intentar realizar una dominada. </h3>
									    		
									    			<br>
													<label class="container2"> Colgada de Barra sin mecida.
													  <input type="radio"  name="q3" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Sostencion de Villa Estatica.
													  <input type="radio" name="q3" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Pull Up.
													  <input type="radio" name="q3" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Lagartijas.
													  <input type="radio" name="q3" value="r4">
													  <span class="checkmark"></span>
													</label>

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 4 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 4. Es una de las reglas para realizar el ejercicio correctamente: "Guarda la espalda recta y baja hasta que tu torso casi toque el suelo." ¿A que ejercicio se refiere? </h3>
									    		
									    			<br>
													<label class="container2"> Sostencion de Villa Estatica.
													  <input type="radio" name="q4" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Lagartijas.
													  <input type="radio"  name="q4" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Pull Up.
													  <input type="radio" name="q4" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Colgada de Barra sin mecida.
													  <input type="radio" name="q4" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>
									    

										    <!-- ================== Slide 5 ================== --> 
										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 5. En las barras asimetricas, ¿cual es la primera practica para comenzar a involucrarse con esta rutina? </h3>
									    		
									    			<br>
													<label class="container2"> Sostencion de Villa Estatica.
													  <input type="radio" name="q5" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Subida de Estomago.
													  <input type="radio"  name="q5" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Realizar el pino.
													  <input type="radio" name="q5" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Flik Flak.
													  <input type="radio" name="q5" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 6  ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 6. En las barras asimetricas, existen dos ejercicios que van de la mano, ¿cuales son? </h3>
									    		
									    			<br>
													<label class="container2"> Impulso Atras, Salida empujando la barra.
													  <input type="radio" name="q6" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Vuelta Atras, Subida de Estomago.
													  <input type="radio" name="q6" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Cuclillas en barra de piso, Escuadra Abierta.
													  <input type="radio" name="q6" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Vuelta Atras, Impulso Atras.
													  <input type="radio"  name="q6" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 7 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 7. Defina la Subida de Estomago: </h3>
									    		
									    			<br>
													<label class="container2"> Con los hombros ligeramente al frente de la barra, balancear las piernas al frente, después atrás-arriba. Empujar la barra hacia abajo, extendiendo los hombros para despegar el cuerpo.
													  <input type="radio" name="q7" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Realiza un movimiento hacia atrás con tu cuerpo para después avanzar con un pie adelante y el resto de tu cuerpo.
													  <input type="radio" name="q7" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Corre hacia la mesa de salto de gimnasia y mueve los brazos hacia adelante desde atrás de la espalda.
													  <input type="radio" name="q7" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Tomar la barra inferior con toma dorsal, las manos colocadas a lo ancho de los hombros. Elevar ambas piernas arriba y sobre la barra inferior mientras se jala con los brazos flexionados.
													  <input type="radio"  name="q7" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 8 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 8. ¿Como se realiza el salto de caballo correctamente? </h3>
									    		
									    			<br>
													<label class="container2"> El gimnasta corre en una pista de 25 metros y después salta desde un reuther encima del caballo, donde realiza el bloqueo con las manos.
													  <input type="radio"  name="q8" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Colócate de pie y estira los brazos hacia arriba.
													  <input type="radio" name="q8" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Tomar la barra inferior con toma dorsal, las manos colocadas a lo ancho de los hombros. Elevar ambas piernas arriba y sobre la barra inferior mientras se jala con los brazos flexionados.
													  <input type="radio" name="q8" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Es un disciplina de gimnasia realizada por hombres y mujeres.
													  <input type="radio" name="q8" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 9 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 9. Antes de realizar un flik flak, ¿que debes dominar? </h3>
									    		
									    			<br>
													<label class="container2"> Solo la parada de manos.
													  <input type="radio" name="q9" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> La parada de manos y todos los ejercicios básicos para saltos frontales.
													  <input type="radio"  name="q9" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Los pull up.
													  <input type="radio" name="q9" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Ninguna de las anteriores.
													  <input type="radio" name="q9" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 10 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 10. ¿Que es el Flik Flak Adelante? </h3>
									    		
									    			<br>
													<label class="container2"> Hacer una parada de manos en colchonetas de gimnasia y dejate caer ( con el cuerpo totalmente extendido).
													  <input type="radio" name="q10" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Mantener tus brazos y piernas totalmente extendidos y no doblar los codos en el momento de bloquear.
													  <input type="radio" name="q10" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Es como la vuelta de manos solo que saltas con ambas piernas a la vez.
													  <input type="radio"  name="q10" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Dirigir los hombros hacia atrás, provocando que el cuerpo haga un círculo alrededor de la barra con una posición del cuerpo recta y ahuecada.
													  <input type="radio" name="q10" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 11 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 11. Define en que consta el Ejercicio 04 del salto de caballo. </h3>
									    		
									    			<br>
													<label class="container2"> Es la primera vez que solo tus manos tocaran el potro.
													  <input type="radio"  name="q11" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Es la primera vez que tus piernas no tocan la mesa.
													  <input type="radio" name="q11" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Es el primer ejercicio de salto gimnástico en el que realmente tocas la mesa.
													  <input type="radio" name="q11" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Es la primera vez en la que no se apoyan las rodillas en la mesa.
													  <input type="radio" name="q11" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 12 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 12. ¿De que otra forma se le conode al Salto de Caballo </h3>
									    		
									    			<br>
													<label class="container2"> Solamente como salto de caballo.
													  <input type="radio" name="q12" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Salto.
													  <input type="radio" name="q12" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Salto de Potro.
													  <input type="radio"  name="q12" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Ninguna de las anteriores.
													  <input type="radio" name="q12" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 13 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 13. Mano libres consta de 9 ejercicios, mencionalos: </h3>
									    		
									    			<br>
													<label class="container2"> Anillas de gimnasia invertidas, Balanceo en anillas, Balancín, Pino, Andar haciendo el Pino, Voltereta hacia adelante agrupada, Sostencion de Villa Estatica, Voltareta Lateral, Voltareta Lateral con salto.
													  <input type="radio" name="q13" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Balancín, Pino, Andar haciendo el Pino, Voltereta hacia adelante agrupada, Voltareta Lateral, Voltareta Lateral con salto, Anillas de gimnasia invertidas, Balanceo en anillas, Balanceo en barra.
													  <input type="radio"  name="q13" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Voltereta hacia adelante agrupada, Sostencion de Villa Estatica, Anillas de gimnasia invertidas, Balanceo en anillas, Balancín, Pino, Andar haciendo el Pino, Voltareta Lateral, Realizar el pino.
													  <input type="radio" name="q13" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Balancín, Subida de Estomago, Pino, Andar haciendo el Pino, Voltereta hacia adelante agrupada, Sostencion de Villa Estatica, Voltareta Lateral, Voltareta Lateral con salto, Realizar el pino, Flik Flak.
													  <input type="radio" name="q13" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 14 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 14. Menciona algunos de los pasos para ejecutar "el balancin" correctamente. </h3>
									    		
									    			<br>
													<label class="container2"> Seguidamente, estira los codos hacia arriba y realiza una pequeña flexión torácica (abdominal).
													  <input type="radio" name="q14" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Subida de Estomago.
													  <input type="radio" name="q14" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Túmbate en el suelo mirando hacia arriba con las piernas estiradas.
													  <input type="radio" name="q14" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Todos los anteriores
													  <input type="radio"  name="q14" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 15 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 15. ¿Cual es el ejercicio ideal para activar la musculatura toraco-lumbar? </h3>
									    		
									    			<br>
													<label class="container2"> Voltaretas.
													  <input type="radio" name="q15" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> El Pino.
													  <input type="radio"  name="q15" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Anillas.
													  <input type="radio" name="q15" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> El Balancin.
													  <input type="radio" name="q15" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 16 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 16. ¿Donde deberas realizar el siguiente ejercicio? "Andar haciendo el Pino" </h3>
									    		
									    			<br>
													<label class="container2"> Realizar el ejercicio al aire libre sin nada a tu alrededor.
													  <input type="radio" name="q16" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Deberás desplazar una mano hacia adelante tratando de avanzar.
													  <input type="radio" name="q16" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Realices el ejercicio no demasiado lento pero si de forma controlada.
													  <input type="radio" name="q16" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Realizar el ejercicio cerca de una pared y empezar progresando adelante atrás para tener contacto con la pared.
													  <input type="radio"  name="q16" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 17 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 17. ¿Cual ejercicio dinámico será beneficioso a la hora de mejorar la musculatura y la conciencia de la posición corporal?  </h3>
									    		
									    			<br>
													<label class="container2"> Voltereta hacia adelante agrupada.
													  <input type="radio"  name="q17" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Anillas.
													  <input type="radio" name="q17" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> El pino.
													  <input type="radio" name="q17" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Balancin.
													  <input type="radio" name="q17" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 18 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 18. ¿Que ejercicio puede ser realizado al aire libre? </h3>
									    		
									    			<br>
													<label class="container2"> Voltereta hacia adelante agrupada.
													  <input type="radio" name="q18" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Anillas.
													  <input type="radio" name="q18" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Voltareta Lateral.
													  <input type="radio"  name="q18" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Balancin.
													  <input type="radio" name="q18" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 19 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 19. Existe un ejercicio similar a la Voltareta Lateral, ¿Cual es? </h3>
									    		
									    			<br>
													<label class="container2"> Voltareta Latera con Salto.
													  <input type="radio"  name="q19" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Voltereta hacia adelante agrupada.
													  <input type="radio" name="q19" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Voltareta simple.
													  <input type="radio" name="q19" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Ninguna de las anteriores.
													  <input type="radio" name="q19" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>

										    <!-- ================== Slide 20 ================== --> 

										    <div class="carousel-item">
										    	<div class="col-lg pt-4 pt-lg-0 order-2 order-lg-1 content" style="margin-left: 20px;">
										    		<h3> 20. ¿Que se consigue o cual es el objetivo del balanceo en barra? </h3>
									    		
									    			<br>
													<label class="container2"> Es un ejercicio que requiere progresión debido al medio inestable.
													  <input type="radio" name="q20" value="r1">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Se consigue es mayor estabilidad en el hombro por lo que el ejercicio se puede centrar más en el control y el trabajo de los abdominales.
													  <input type="radio"  name="q20" value="r2">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Será necesario tener cautela y progresar poco a poco ya que requiere técnica y fuerza para no lesionarse los hombros.
													  <input type="radio" name="q20" value="r3">
													  <span class="checkmark"></span>
													</label>
													<label class="container2"> Este ejercicio dinámico será beneficioso a la hora de mejorar la musculatura y la conciencia de la posición corporal.
													  <input type="radio" name="q20" value="r4">
													  <span class="checkmark"></span>
													</label>
													

													<br>
											    	
										    	</div>
										    </div>
										    <!-- ================== Slide 4 ================== -->
										    
									    </div>
									    <input type="submit" name="submit" value="submit" class="get-started-btn" style="margin-left: 40px;" />

									    <?php echo @$cont; ?>
									    
								  	</div>
								  	
								</div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style=" background-color: #5fcf80; width: 20px;">
							    <span class="carousel-control-prev-icon" aria-hidden="true" ></span>
							    <span class="sr-only" >Previous</span>
						  	</a>
						    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style=" background-color: #5fcf80; width: 20px;">
							    <span class="carousel-control-next-icon" aria-hidden="true"></span>
							    <span class="sr-only">Next</span>
						    </a>


						</div>

					</div>
				</div>
			</section>
		</form>
	</main>

<!-- Footer -->
<?php
incluirTemplate('footer');
?>
<!-- End Footer -->

