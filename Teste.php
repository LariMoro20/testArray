<?php
$listaDados['pedido']['codPedido'] = 0;
$listaDados['pedido']['data'] = date('Y-m-d');
$listaDados['pedido']['hora'] = date('H:i:s', time());

$listaDados['pedido']['listPedItem'][0]['codPedido']=123;
$listaDados['pedido']['listPedItem'][0]['codItem']['codEmpresa']=45;
$listaDados['pedido']['listPedItem'][0]['codItem']['codItem']=89;
$listaDados['pedido']['listPedItem'][0]['descricao']='123 AD 054227 PROMOCAO';

$listaDados['pedido']['listPedItem'][1]['codPedido']=456;
$listaDados['pedido']['listPedItem'][1]['codItem']['codEmpresa']=45;
$listaDados['pedido']['listPedItem'][1]['codItem']['codItem']=86;
$listaDados['pedido']['listPedItem'][1]['descricao']='AD 018239 NORMAL';


include("ArrayToXml.php");



$root = [
    'rootElementName' => 'soapenv:Envelope',
    '_attributes' => [
        'xmlns:soapenv' => 'http://www.w3.org/2003/05/soap-envelope/',
    ],
];
$array = [
    'soapenv:Header' => [],
    'soapenv:Body' => [
		'web:addPedidoSite' =>
			$listaDados
    ],
];

$tempConv = new ArrayToXml($array,$root);

echo $tempConv->prettify()->dropXmlDeclaration()->toXML(); //mostra na tela
