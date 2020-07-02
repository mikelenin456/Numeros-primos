<?php
	echo "<br><h2>Problema 1</h2><br>";
	$par=array();
	$impar=array();

	$contp=0;
	$conti=0;
	for ($i=0; $i<=50;$i++) { 
		if ($i==0) {
			
		}elseif($i%2==0 and $i!=0) {
			$par[$contp]=$i;
			$contp++;
		}else{
			$impar[$conti]=$i;
			$conti++;
		}
	}
	echo "Pares.<br>";
	for ($i=0;$i<count($par); $i++) { 
		echo ($i+1).": ".$par[$i]."<br>";
	}
	echo "<br>Impares.<br>";
	for ($i=0;$i<count($impar); $i++) { 
		echo ($i+1).": ".$impar[$i]."<br>";
	}

	echo "<br><h2>Problema 2</h2><br>";
    echo "<table border='1'>";
    for ($i=1;$i<=5;$i++) {
    	for ($j=1;$j<=4;$j++) { 
    		echo "<tr><td>Piso ".$i."</td><td>Puerta ".$j."</td></tr>";

    	}
    }
    echo "</table>";
	echo "<br><h2>Problema 3</h2><br>";
	$ind=1;
	for ($i=19;1<=$i;$i--){ 
		echo $ind.". ".$i."<br>";
		$ind++;
	}
	echo "<br><h2>Problema 4</h2><br>";
	$edad=$_GET['edad_'];
	if ($edad>=18 and $edad<=67) {
		echo "El usuario esta en edad laboral";
	}else{
		echo "El usuario no esta en edad laboral";
	}
	echo "<br><h2>Problema 5</h2><br>";
	$edad2=$_GET['edad2_'];
	if($edad2>=0){
		if($edad2>=18){
			echo "<h2>El usuario es mayor de edad</h2>";
		}else{
			echo "<h2>El usuario NO es mayor de edad</h2>";
		}
	}else{
		echo "Error 404";
	}
	echo "<br><h2>Problema 6</h2><br>";
	$pais=$_GET['pres'];
	switch ($pais) {
		case 'Ingles':
				echo "El usuario es ".$pais;
			break;
		case 'Aleman':
				echo "El usuario es ".$pais;
			break;
		case 'Italiano':
				echo "El usuario es ".$pais;
			break;
		case 'Español':
				echo "El usuario es ".$pais;
			break;
		case 'Frances':
				echo "El usuario es ".$pais;
			break;
		default:
				echo "El usuario es de una nacionalidad no especificada en la lista";
			break;
	}
	echo "<br><h2>Problema 8</h2><br>";
	$edad3=$_GET['edad3_'];
	if($edad3>=0 and $edad3<=100){
		if($edad3>=0 and $edad3<=10){
			echo "La edad esta entre 0 y 10";
		}elseif ($edad3>=0 and $edad3<=10) {
			echo "La edad esta entre 0 y 10";
		}elseif ($edad3>10 and $edad3<=20) {
			echo "La edad esta entre 10 y 20";
		}elseif ($edad3>20 and $edad3<=30) {
			echo "La edad esta entre 20 y 30";
		}elseif ($edad3>30 and $edad3<=40) {
			echo "La edad esta entre 30 y 40";
		}elseif ($edad3>40 and $edad3<=50) {
			echo "La edad esta entre 40 y 50";
		}elseif ($edad3>50 and $edad3<=60) {
			echo "La edad esta entre 50 y 60";
		}elseif ($edad3>60 and $edad3<=70) {
			echo "La edad esta entre 60 y 70";
		}elseif ($edad3>70 and $edad3<=80) {
			echo "La edad esta entre 70 y 80";
		}elseif ($edad3>80 and $edad3<=90) {
			echo "La edad esta entre 80 y 90";
		}elseif ($edad3>90 and $edad3<=100) {
			echo "La edad esta entre 90 y 100";
		}
	}else{
		echo "Error la edad ingresada debe estar entre 0 y 100";
	}
	echo "<br><h2>Problema 9</h2><br>";
	$a=$_GET['a_'];
	$b=$_GET['b_'];
	$c=$_GET['c_'];
	$ar=array($a,$b,$c);
	echo "El mayor valor entre ".$a.",".$b." y ".$c;
	echo " es: ".max($ar);
	echo "<br><h2>Problema 10</h2><br>";

	define('EURO', 166.386);
	for ($i=50;$i<=1000;$i=$i+50) { 
		echo $i." pesetas son ".($i/constant('EURO'))."<br>";
	}
	echo "<br><h2>Problema 11</h2><br>";
	$i=50;
	while ($i<=1000) {
		echo $i." pesetas son ".($i/constant('EURO'))."<br>";
		$i=$i+50;
	}
	echo "<br><h2>Problema 12</h2><br>";
	$cont=0;
	$par=5;
	for ($i=0;$i<=1000;$i++){
		if ($i%2==0) {
			echo $i.",";
			$cont++;
		}
		if ($cont==$par and $i!=0) {
			echo "-> ".$cont."<br>";
			$cont=0;
			$par=$par+5;
		}
	}
	echo "<br><h2>Problema 13</h2><br>";
	$a2=$_GET['a2_'];
	$b2=$_GET['b2_'];
	if ($a2==$b2) {
		echo $a2." es igual que ".$b2;
	}elseif ($a2>$b2) {
		echo $a2." es mayor que ".$b2;
	}else{
		echo $a2." es menor que ".$b2;	
	}
	echo "<br><h2>Problema 14</h2><br>";
	$suma=0;
	for ($i=1;$i<=1000;$i++) { 
		if ($i%2==0) {
			$suma=$suma+$i;
		}
	}
	echo "La suma de todos los pares es: ".$suma;
	echo "<br><h2>Problema 15</h2><br>";
	$suma=0;
	$i=1;
	while($i<=1000) { 
		if ($i%2==0) {
			$suma=$suma+$i;
		}
		$i++;
	}
	echo "La suma de todos los pares es: ".$suma;
	echo "<br><h2>Problema 16</h2><br>";
	$hora=$_GET['hora_'];

	if ($hora>=8 and $hora<13) {
		echo "Buenos dias";
	}elseif($hora>=13 and $hora<15){
		echo "Que aproveche la comida";
	}elseif ($hora>=15 and $hora<17) {
		echo "Es la hora del cafe";
	}elseif ($hora>=17 and $hora<20) {
		echo "Es la hora de la merienda";
	}else{
		echo "Buenas noches";
	}
	echo "<br><h2>Problema 17</h2><br>";
	$numero=$_GET['numero_'];
    if($numero==1){
        echo "Domingo";
    }elseif($numero==2){
        echo "Lunes";
    }elseif($numero==3){
        echo "Martes";
    }elseif($numero==4){
        echo "Miercoles";
    }elseif($numero==5){
        echo "Jueves";
    }elseif($numero==6){
        echo "VIERNES";
    }elseif($numero==7){
        echo "Sabado";
    }else{
        echo "Valor no admitido";
    }
    echo "<br><h2>Problema 18</h2><br>";
    $x=1;
    $y=0;
    $sum=$x+$y;
    $x=$y;
    $y=$sum;
    while($sum<1000){ 
    	echo $sum.",";
    	$sum=$x+$y;
    	$x=$y;
    	$y=$sum;
    }
    echo "<br><h2>Problema 19</h2><br>";
    echo "<table border='1'>";
    $cont=1;
	for ($i=0;$i<10;$i++) {
		echo "<tr>";
		for ($j=0;$j<10;$j++) { 
			echo "<td>".$cont."</td>";
			$cont++;
		}
		echo "</tr>";
	}
    echo "</table>";
    echo "<br><h2>Problema 21</h2><br>";
    for ($i=0;$i<=6;$i++) { 
    	for ($j=0;$j<$i;$j++) { 
    		echo "+";
    	}
    	echo "<br>";
    }
    for ($i=0;$i<6;$i++) { 
    	for ($j=$i;$j<6;$j++) { 
    		echo "+";
    	}
    	echo "<br>";
    }
    echo "<br><h2>Problema 22</h2><br>";
    echo "<table border='1'>";
    for ($i=1;$i<=5;$i++) {
    	for ($j=1;$j<=4;$j++) { 
    		if ($j==1) {
    			$p='A';
    		}
    		if ($j==2) {
    			$p='B';
    		}
    		if ($j==3) {
    			$p='C';
    		}
    		if ($j==4) {
    			$p='D';
    		}
    		echo "<tr><td>Piso ".$i."</td><td>Puerta ".$p."</td></tr>";

    	}
    }
    echo "</table>";
    echo "<br><h2>Problema 23</h2><br>";
    $num1=$_GET['numero1_'];
    $num2=$_GET['numero2_'];
    $num3=$_GET['numero3_'];

    if (($num1+$num2)==$num3) {
    	echo $num3." es la suma de ".$num1." y ".$num2;
    }elseif (($num1+$num3)==$num2) {
    	echo $num2." es la suma de ".$num1." y ".$num3;

    }elseif (($num3+$num2)==$num1) {
    	echo $num1." es la suma de ".$num3." y ".$num2;

    }else{
    	echo "No se encontraron resultados";
    }
    echo "<br><h2>Problema 24</h2><br>";
    $fac=$_GET['fac_'];
    if ($fac>0) {
    	$sum=1;
    	for ($i=1;$i<=$fac; $i++) { 
    		$sum=$sum*$i;
    	}
    	echo "El factorial de ".$fac." es: ".$sum;
    }else{
    	echo "Error 404";
    }
    echo "<br><h2>Problema 25</h2><br>";
    $sum=0;
    for ($i=0;$i<=1000;$i++) { 
    	$sum=$sum+$i;
    }
    echo "El total de la suma es de ".$sum;
    echo "<br><h2>Problema 26</h2><br>";
    $caract=$_GET['caract_'];
    $nu1=$_GET['nu1_'];
    $nu2=$_GET['nu2_'];

    if ($caract=='+') {
    	echo "El caracter leido es una suma.<br>";
    	echo $nu1." + ".$nu2." = ".($nu1+$nu2);
    }elseif ($caract=='-') {
    	echo "El caracter leido es una resta.<br>";
    	echo $nu1." - ".$nu2." = ".($nu1-$nu2);
    }elseif ($caract=='/') {
    	echo "El caracter leido es una division.<br>";
    	echo $nu1." / ".$nu2." = ".($nu1/$nu2);    
    }elseif ($caract=='*') {
    	echo "El caracter leido es una multipicacion.<br>";
    	echo $nu1." * ".$nu2." = ".($nu1*$nu2);
    }else{
    	echo "Error!";
    }
    echo "<br><h2>Problema 27</h2><br>";
    $caract2=$_GET['caract2_'];
    $nu11=$_GET['nu11_'];
    $nu22=$_GET['nu22_'];
    switch ($caract) {
    	case '+':
    		echo "El caracter leido es una suma.<br>";
    		echo $nu11." + ".$nu22." = ".($nu11+$nu22);
    		break;
    	case '-':
    		echo "El caracter leido es una resta.<br>";
    		echo $nu11." - ".$nu22." = ".($nu11-$nu22);
    		break;
    	case '/':
    		echo "El caracter leido es una division.<br>";
    		echo $nu11." / ".$nu22." = ".($nu11/$nu22); 
    		break;
    	case '*':
    		echo "El caracter leido es una multipicacion.<br>";
    		echo $nu11." * ".$nu22." = ".($nu11*$nu22);
    		break;
    	default:
    		echo "Error!";
    		break;
    }
    echo "<br><h2>Problema 28</h2><br>";
    $pos=$_GET['pim_'];
    $contp=0;
    for ($i=$pos;1<=$i; $i--) { 
    	if($pos%$i==0){
    		$contp++;
    	}
    }
    if($contp==2){
    	echo $pos." es un numero primo";
    }else{
    	echo $pos." NO es un numero primo";
    }
    echo "<br><h2>Problema 29</h2><br>";
    for ($i=0;$i<=99;$i++) {
    	$contp=0;
    	for ($cont=$i;1<=$cont;$cont--) { 
    		if ($i%$cont==0) {
    			$contp++;
    		}
    	}
    	if ($contp==2) {
    		echo $i.",";    	}
    }
    echo "<br><h2>Problema 30</h2><br>";
    for ($i=100;1<=$i; $i--) { 
    	if ($i%3==0) {
    		echo $i.",";
    	}
    }
    echo "<br><h2>Problema 31</h2><br>";
    $lim=1;
    $limp=1;
    $i=0;
    $sump=0;
    echo "<p>Numeros Pares</p>";
    while ($lim<=20) {
    	if ($i%2==0) {
    		echo $i.",";
    		$sump=$sump+$i;
    		$lim++;
    	}
    	$i++;
    }
    echo "-> suma: ".$sump;
    $lim=1;
    $i=0;
    $sumi=0;
    echo "<p>Numeros Impares</p>";
    while ($lim<=20) {
    	if ($i%2!=0) {
    		echo $i.",";
    		$sumi=$sumi+$i;
    		$lim++;
    	}
    	$i++;
    }
    echo "-> suma: ".$sumi;
    echo "<br><h2>Problema 32</h2><br>";
    $limt=$_GET['limt_'];
    for ($i=0;$i<=$limt; $i++) { 
    	if ($i%4==0) {
    		echo $i.",";
    	}
    }
?>	