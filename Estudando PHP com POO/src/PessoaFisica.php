<?php 

/* força tipagem no projeto/documento, evita bugs em produção */
declare(strict_types=1);

namespace Gabrielsouza\CursoPooPhp;

    // class é uma forma de um objeto
class PessoaFisica 
{
    //aqui ficas propriedades e métodos
    private string $name;
    private string $email;
    private string $phone;
    private string $cpf;
    private int $age;

    public function setName(string $name): void
    {
        //this->name se referete a propriedade da classe e que será igual ao parametro da function, ou seja, do $name
        $this->name = $name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function setCpf(string $cpf): void
    {
        $this->name = $cpf;
    }
    public function setAge(int $age): void
    {

        $this->age = $age;
    }
}


?>