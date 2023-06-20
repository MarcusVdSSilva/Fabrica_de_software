<?php
	require_once('conexao.php');
	Class Login extends conexao{
		private $usuario;
		private $senha;
		private $tabela = 'alunos';
		
		public function __construct(){
			parent::__construct();
		}
		
		
		public function getUsuario(){
			return $this->usuario;
		}

		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}

		public function getSenha(){
			return $this->senha;
		}

		public function setSenha($senha){
			$this->senha = $senha;
		}
		
		
		
		// logar usuário
		public function logar($user, $pass){
			$sql = "SELECT username,password FROM $this->tabela 
			WHERE username = ? AND password = ?";
			$stmt = $this->conn->prepare($sql);
			$stmt->bind_param('ss',$user, $pass);
			$stmt->execute();
			$stmt->store_result();
			
			if($stmt->num_rows == 1){
				session_start();
				$_SESSION['logado'] = true;
				header('Location: ../jogo/index.php');
			}else{
				header('Location: ../index.php');
			}
			$stmt->close();
			$this->conn->close();

		}
			//cadastro
			public function cadastrar($nome,$email,$senha){
				$sql = "INSERT INTO $this->tabela(username,email,password) VALUES(?,?,?)";
				$stmt = $this->conn->prepare($sql);
				$stmt->bind_param('sss',$nome,$email,$senha);
				$stmt->execute();
				
				if($stmt == true){
					//echo 'Cadastrado com sucesso';
					header("Location: ../index.php?msg=cadastrado com sucesso");
				}else{
					die("Falha no cadastro!");
				}
				$stmt->close();
				$this->conn->close();
			}
	}