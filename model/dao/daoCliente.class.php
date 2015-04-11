<?php

/*incluindo o arquivo com as configurações do BD*/
include_once("conexao.inc");

/*Classe de acesso a dados do Funcionario*/
class DaoCliente {

	/*construtor da classe*/
	public function DaoCliente(){
		
	}
	
	/* função para gravar os dados */
	public function Gravar($model) {
		/*Monta o Sql*/
		$sql = "insert into CLIENTE (NOME, RUA, NUMERO, COMPLEMENTO, BAIRRO, CEP, CIDADE, ESTADO, FONE_RESIDENCIAL, FONE_CELULAR, FONE_REFERENCIA) values ('"
                      . $model->getNome()
					  . "', '"
						. $model->getRua()
                      . "', '"
						. $model->getNumero()
                      . "', '"
						. $model->getComplemento()
                      . "', '"
						. $model->getBairro()
                      . "', '"
						. $model->getCep()
                      . "', '"
						. $model->getCidade()
                      . "', '"
						. $model->getEstado()
                      . "', '"
						. $model->getFoneResidencial()
                      . "', '"
						. $model->getFoneCelular()
                      . "', '"
                      . $model->getFoneReferencia(). "')";
					  
		/*Executando a consulta SQL*/
		$this->executaSQL($sql);
		
		/*Obtém o ID gerado pela operação INSERT anterior*/
		return mysql_insert_id();
	}

	public function Excluir($model) {
		/*Monta o Sql*/
		$sql = "delete from CLIENTE where IDCLIENTE = " . $model->getIdCliente();
		$this->executaSQL($sql);
		
		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Alterar($model) {
		/*Monta o Sql*/
		$sql = "update CLIENTE set NOME= '" . $model->getNome() . "', RUA = '" 
											. $model->getRua() . "', NUMERO = '" 
											. $model->getNumero() . "', COMPLEMENTO = '" 
											. $model->getComplemento() . "', BAIRRO = '" 
											. $model->getBairro() . "', CEP = '" 
											. $model->getCep() . "', CIDADE = '" 
											. $model->getCidade() . "', ESTADO = '" 
											. $model->getEstado() . "', FONE_RESIDENCIAL = '" 
											. $model->getFoneResidencial() . "', FONE_CELULAR = '" 
											. $model->getFoneCelular() . "', FONE_REFERENCIA = '" 
											. $model->getFoneReferencia() . "' where IDCLIENTE = " 
											. $model->getIdCliente();
		$this->executaSQL($sql);

		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Detalhe($model) {
		/*Monta o Sql*/
		$sql = "select * from CLIENTE where IDCLIENTE = " . $model->getIdCliente();
		$result = $this->executaSQL($sql);

		/*Verifica se a consulta anterior retornou algum resultado*/
		if (mysql_fetch_assoc($result) == 0)
		{
			return -1;
		}
		else
		{
			/*Move o ponteiro do dataset para o inicio do resultado*/
			mysql_data_seek($result, 0);

			/*Retorna os dados do primeiro registro retornado pela consulta*/
			return mysql_fetch_assoc($result);
		}
	}

	public function Listar() {

		/*Monta o Sql*/
		$sql = "select * from CLIENTE order by IDCLIENTE "; 
		
		/*Executando a consulta SQL*/
		$result = $this->executaSQL($sql);

		/*Obtém um linha do resultado como uma matriz associativa*/
		if (mysql_fetch_assoc($result) == 0){
			
			return -1;
			
		}else{
			
			/*Move o ponteiro interno do resultado*/
			mysql_data_seek($result, 0);
			return $result;
			
		}

	}

	private function executaSQL($sql) {
		/*Executa o Sql*/
		//echo $sql;
		return mysql_query($sql);
		
	}
	 
}
?>
