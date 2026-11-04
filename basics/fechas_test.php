<?php
	//IMPRIMIR EN PHP
	echo "Fecha Actual "."</br>";
	echo date('Y-m-d H:i:s'); // 2026-10-26 12:22:15
	echo "</br>";
	echo date('Y-m-d'); // 2026-10-26
	echo "</br>";         
	echo date('d-m-Y H:i:s'); // 26-10-2026 12:22:15
	echo "</br>";    
	echo date('l, j F \o\f Y');     // Monday, 26 October of 2026
	echo "</br>";
	echo date('d/m/y');       // 26/10/26
	echo "</br>";
	echo date('j/n/Y');       // 26/10/2026
	echo "</br>";
	echo date('D, M j, Y');   // Mon, Oct 26, 2026 
	echo "</br>";
	echo date('g:i a');       // 12:19 pm 
	echo "</br>";
	echo date('h:i:s A');     // 12:19:15 PM
	echo "</br>";
	echo date('H:i:s.v');     // 12:19:15.000
	echo "</br>";
	echo date('F Y');         // October 2026 
	echo "</br>";
	echo date('\W\e\e\k W');  // Week 44 
	echo "</br>";
	echo date('\D\i\a z \d\e\l\ \a\ñ\o'); // DIA 298 DEL AÑO
	echo "</br>";
	$en = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday','January','February','March','April','May','June','July','August','September','October','November','December'];
	$es = ['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

	echo str_replace($en, $es, date('\H\o\y \e\s l d \d\e F \d\e Y \y \s\o\n \l\a\s g:i a'));

?>