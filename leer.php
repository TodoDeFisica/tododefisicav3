<?php
$archivo=fopen("archivo.txt","r") or die ("problemas al abrir el archivo");
$i = 0;
while(!feof($archivo)){
    $a =fgets($archivo);
    $salto = nl2br($a);
    if($i ==1){
        echo $salto;
        $i=0;
    }

    if(strcmp($_POST(['us']),$salto) === 0){
        $i=1;
    }
}

?>