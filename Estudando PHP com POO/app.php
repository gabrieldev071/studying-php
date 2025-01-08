<?php 

/* carregameno do arquivo da classe PessoaFisica */
require_once __DIR__ . '/vendor/autoload.php';

use Gabrielsouza\CursoPooPhp\PessoaFisica;

$pessoaFisica = new PessoaFisica();

/* Setando manual, pois está public:
$pessoaFisica->name = "Fernanda";
 */


 $pessoaFisica->setName(name: "Fernanda");
 $pessoaFisica->setEmail(email: "teste@gmail.com");
 $pessoaFisica->setAge(age: 35);


 $pessoaFisica->setEmail(email: "testndonovodado@gmail.com");


dump($pessoaFisica);