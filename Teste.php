<?php

$listaDados['pedido']['listPedItem'][0]['codPedido']=123;
$listaDados['pedido']['listPedItem'][0]['codItem']['codEmpresa']=45;
$listaDados['pedido']['listPedItem'][0]['codItem']['codItem']=89;
$listaDados['pedido']['listPedItem'][0]['descricao']='123 AD 054227 PROMOCAO';

$listaDados['pedido']['listPedItem'][1]['codPedido']=456;
$listaDados['pedido']['listPedItem'][1]['codItem']['codEmpresa']=45;
$listaDados['pedido']['listPedItem'][1]['codItem']['codItem']=86;
$listaDados['pedido']['listPedItem'][1]['descricao']='AD 018239 NORMAL';

include("ArrayToXml.php");
$tempConv = new ArrayToXml($listaDados['pedido'],'pedido');
echo '<br>=========NOVOARRAY=========<br>';
var_dump($tempConv);

?>