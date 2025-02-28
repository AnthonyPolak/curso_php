<?php

$pessoa = ['nome' => 'Larissa Grobe',
    'altura' => '1,70',
    'profissao' => 'técnico em enfermagem',
    'idade' => 22
];
$idade = $pessoa['idade'];
$maioridade = 18;

if($idade >= $maioridade) {
    echo "A " . $pessoa['nome'] . " é maior de idade.";
}