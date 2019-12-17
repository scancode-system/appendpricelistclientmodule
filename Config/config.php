<?php

return [
    'name' => 'AppendPriceListClient', 
	'fields' => ['price_list_name'],
	'sample' => [
		[
			'name' => 'price_list_name',
			'observation' => 'O nome da tabela de preço que este cliente está vinculado. O sistema é case sensitive, colocar o nome da tabela de preço identica ao que o produto possui vinculo. Exemplo um cliente vinculado a tabela "ATACADO" irá buscar preços da plainilha de produtos da coluna price_list_ATACADO.',
			'sample_1' => 'ATACADO',
			'filled' => false
		]
	]
];
