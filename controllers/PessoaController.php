<?php

    $PessoaFisica = new PessoaFisica();
    $pessoa = new Pessoa();


    if ($_POST['cpf'] != '') {
        $pessoaFisica = new PessoaFisica();
        $pessoaFisica->CPF = $_POST['cpf'];
        $pessoa->salvar($pessoaFisica);
    } else {
        $pessoaJuridica = new PessoaJuridica();
        $pessoaJuridica->CNPJ = $_POST['CNPJ'];
        $pessoa->salvar($pessoaJuridica);

    }
