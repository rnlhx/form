<?php

namespace App\Models;

use MF\Model\Model;

class Usuario extends Model {

	private $nome;
	private $email;
	private $end;
	private $fone;
	private $cpf;
	private $identidade;


	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}

	//salvar
	public function salvar() {

		$query = "insert into usuarios(nome, email, end, fone, cpf, identidade)values(:nome, :email, :end, :fone, :cpf, :identidade)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome', $this->__get('nome'));
		$stmt->bindValue(':email', $this->__get('email'));
		$stmt->bindValue(':end', $this->__get('end'));
		$stmt->bindValue(':fone', $this->__get('fone'));
		$stmt->bindValue(':cpf', $this->__get('cpf'));
		$stmt->bindValue(':identidade', $this->__get('identidade'));
		$stmt->execute();

		return $this;
	}

	public function getAll() {
		$query = "select nome, email, end, fone, cpf, identidade from usuarios where nome like :nome";

		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome', '%'.$this->__get('nome').'%');
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

}

?>