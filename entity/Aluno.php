<?php
class Aluno {
    private $matricula;
    private $nome;
    private $disciplina;
   
    // Implemente o array de discplinas que será utilizado pela entidade Aluno

    public function __construct($matricula, $nome, $disciplina) {
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->disciplina = $disciplina;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Implemente os getters e setters para as ler e inserir um array de discplinas no objeto aluno
    public function getDisciplina() {
        return $this->disciplina;
    }

    public function setDisciplinas($disciplina) {
        $this->disciplina = $disciplina;
    }

    
}
?>

