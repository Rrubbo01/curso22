<?php

    // $PessoaFisica = new PessoaFisica();
    // $pessoa = new Pessoa();


    // if ($_POST['cpf'] != '') {
    //     $pessoaFisica = new PessoaFisica();
    //     $pessoaFisica->CPF = $_POST['cpf'];
    //     $pessoa->salvar($pessoaFisica);
    // } else {
    //     $pessoaJuridica = new PessoaJuridica();
    //     $pessoaJuridica->CNPJ = $_POST['CNPJ'];
    //     $pessoa->salvar($pessoaJuridica);

    // }
$dadosPessoa = [
    "id" => 10,
    "nome" => "Aviaozinho",
    "status" => "Ativo",
    "email" => "aviaozinho@curso.com",
    "phone" => "54 912345678",
    "gender" => "M",
    "Type" => "CPF",
    "cep" => "95707110",
];
header('Content - type: application/json; charset=utf-8');
echo json_encode($dadosPessoa);
exit();


