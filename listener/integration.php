<?php

$URL = ("https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial='09-01-2026'&@dataFinalCotacao='09-12-2026'&\$top=100&\$format=json&\$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao");

$json = file_get_contents($URL);

$data = json_decode($json);

$array = [$data[0]];

echo();

var_dump($data);
