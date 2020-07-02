<?php
if(isset($_POST["ar"])){
    $numero=$_POST["ar"];
    function fun1($val){
        $divisible=0;
        if ($val>0) {
            for ($i=$val;$i>0;$i--) { 
                if ($val%$i==0) {
                    $divisible++;
                }
            }
        }

        if ($divisible==2) {
            echo ("{$val} es Primo");
        }else{
            echo ("{$val} es No es Primo");
        }
    }


    fun1($numero);
}
else{

?>
<form action="" method="POST">
        <h1>Problema 1</h1>
        <input type="text" name="ar"/>
        <input type="submit" name="ENVIAR">
</form>
    
<?php
}
?>  