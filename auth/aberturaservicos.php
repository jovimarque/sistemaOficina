<?php 


include('conexao.php');

/**
 * 
 */
class Abertura 
{
	
	public $sql;
	public $nome;
	public $telefone;
	public $email;
	public $cpf;
	public $endereco;
	public $placa;
	public $marca;
	public $modelo;
	public $ano;
	public $combustivel;
	public $cor;
	public $km;
	public $responsavel;
	public $servico;
	public $peca_adicional;
	public $observacoes;
	public $peca;



	


	public function aberturaservico($conn){

		if(isset($_POST['cadastrar'])){
		$this->placa = $_POST['placa'];	
		$this->marca = $_POST['marca'];
		$this->modelo = $_POST['modelo'];
		$this->servico = $_POST['servico'];
		$this->peca = $_POST['peca'];
		$this->observacoes = $_POST['observacoes'];
		$this->peca_adicional = $_POST['peca_adicional'];
		$this->sql = $conn->prepare("INSERT INTO aberturaservico (id,placa,marca,modelo,servico,observacoes,peca,peca_adicional) VALUES(default,:placa,:marca,:modelo,:servico,:observacoes,:peca, :peca_adicional)");

			$this->sql->bindValue(':placa',$this->placa);
			$this->sql->bindValue(':marca',$this->marca);
			$this->sql->bindValue(':modelo',$this->modelo);
			$this->sql->bindValue(':servico',$this->servico);
			$this->sql->bindValue(':observacoes',$this->observacoes);
			$this->sql->bindValue(':peca',$this->peca);
			$this->sql->bindValue(':peca_adicional',$this->peca_adicional);
			
			$this->sql->execute();

			header('Location: ../pages/servicosteste.php');
		}	
	}

	public function cadastroCliente($conn){
		if(isset($_POST['cadastrocliente'])){
			/* informações cliente*/
			$this->nome = $_POST['nome'];
			$this->telefone = $_POST['telefone'];
			$this->email = $_POST['email'];
			$this->cpf = $_POST['cpf'];
			$this->placa = $_POST['placa'];
			//$this->endereco = $_POST['endereco'];
				$this->sql = $conn->prepare("INSERT INTO clientes (id, nome,telefone,email,cpf, id_placa) VALUES(default,:nome,:telefone,:email,:cpf, :placa)");
				$this->sql->bindParam(':placa',$this->placa);
				$this->sql->bindParam(':nome',$this->nome);
				$this->sql->bindParam(':telefone',$this->telefone);
				$this->sql->bindParam(':email',$this->email);
				$this->sql->bindParam(':cpf',$this->email);
				//$this->sql->bindParam(':endereco',$this->endereco);
				$this->sql->execute();



				$this->nome = $_POST['nome'];
				$this->placa = $_POST['placa'];
				$this->marca = $_POST['marca'];
				$this->modelo = $_POST['modelo'];
				$this->ano = $_POST['ano'];
				$this->combustivel = $_POST['combustivel'];
				$this->cor = $_POST['cor'];
				$this->km = $_POST['km'];

				$this->sql = $conn->prepare("INSERT INTO veiculos (id, placa,marca,modelo,ano,cor,km, cliente_id) VALUES(default,:placa,:marca,:modelo,:ano,:cor,:km, :nome)");
				$this->sql->bindParam(':nome',$this->nome);
				$this->sql->bindParam(':placa',$this->placa);
				$this->sql->bindParam(':marca',$this->marca);
				$this->sql->bindParam(':modelo',$this->modelo);
				$this->sql->bindParam(':ano',$this->ano);
				//$this->sql->bindParam(':combustivel',$this->combustivel);
				$this->sql->bindParam(':cor',$this->cor);
				$this->sql->bindParam(':km',$this->km);				
				$this->sql->execute();
			
			header('Location: ../pages/servicosteste.php?sucesso');
				
		}else{

			header('../login.phg?erro');
		}
	}



}

$servico =  new Abertura;

$servico->aberturaservico($conn);	
$servico->cadastroCliente($conn);