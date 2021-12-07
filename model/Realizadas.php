<?php
class Realizadas{

    private $id;
    private $nome;
    private $telefone;

    private $con;

    public function __construct(){
        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){
        $sql = $this->con->prepare("SELECT * FROM chamadas_realizadas");
        $sql->execute();
        $rows = $sql->fetchAll(PDO::FETCH_CLASS);
        return $rows;
    }

    public function create(){
        $sql = $this->con->prepare("INSERT INTO chamadas_realizadas (nome, telefone) VALUES (?,?)");
        $sql->execute([$this->getNome(), $this->getTelefone()]);

        if($sql->errorCode()!='00000'){
            echo $sql->errorInfo()[2];
        }else{
			header("Location: ./");
   	 	}
    }

	/**
	 * Get the value of id
	 *
	 * @return  mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @param   mixed  $id  
	 *
	 * @return  self
	 */
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of nome
	 *
	 * @return  mixed
	 */
	public function getNome()
	{
		return $this->nome;
	}

	/**
	 * Set the value of nome
	 *
	 * @param   mixed  $nome  
	 *
	 * @return  self
	 */
	public function setNome($nome)
	{
		$this->nome = $nome;

		return $this;
	}

	/**
	 * Get the value of telefone
	 *
	 * @return  mixed
	 */
	public function getTelefone()
	{
		return $this->telefone;
	}

	/**
	 * Set the value of telefone
	 *
	 * @param   mixed  $telefone  
	 *
	 * @return  self
	 */
	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;

		return $this;
	}
}