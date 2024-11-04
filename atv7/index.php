<?php
$bebida= 1;
switch ($bebida) {

    case 1:
        $preco= 8.90;
        $nomebebida= "Soda Italiana";
        break;

    case 2:
        $preco= 5.30;
        $nomebebida= "Suco de abacaxi com hortelã";
        break;

    case 3:
        $preco= 2.90;
        $nomebebida= "Pepsi";
        break;
    default:
    echo "Opção inválida";
    exit;
}

echo "<p>Você escolheu: $nomebebida</p>";
echo "Preço: "  . number_format($preco, 2,',');

?>