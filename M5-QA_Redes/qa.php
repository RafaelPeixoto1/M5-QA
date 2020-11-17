<?php
if(isset($_POST['dimensao'])&& 
isset($_POST['inicio']) && isset($_POST['fim'])  &&
isset($_POST['pesquisa']) ) {

    if(is_numeric($_POST['dimensao'])&&
       is_numeric($_POST['inicio'])&&
       is_numeric($_POST['fim'])&&
       is_numeric($_POST['pesquisa']) ) {
	
$inicio = $_POST["inicio"];
$fim = $_POST["fim"];
$dimensao = $_POST["dimensao"];
$pesquisa = $_POST["pesquisa"];

    
    $dimensao=$_POST['dimensao'];
    for($i=0;$i<$dimensao;$i++){
       $meuarray[$i]=rand($inicio,$fim); 
        echo $meuarray[$i] .'';
	}
    echo "Valores gerados para a Array:" .$dimensao. "<br>";
echo "O valor" .$pesquisa."encontra-se na posicao " .$inicio. " <br>";
echo "O valor" .$pesquisa."encontra-se na posicao " .$fim. " <br>";    
echo  $pesquisa. "<br>";
	}
}

	?>