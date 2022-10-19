<?php
echo $_GET['nome'];
echo $_GET ['idade'];

echo $nome;
echo "<br>";

if($idade > 18){
    echo "{$idade} Velho";
}else{
    echo "{$idade} Novo";
}
?>