<?php

/*incluindo o arquivo com as configurações do BD*/
include_once("conexao.inc");

/*Classe de acesso a dados do Opcional*/
class DaoTabela {

	/*construtor da classe*/
	public function DaoTabela(){
		
	}
	
	/* função para gravar os dados */
	public function Gravar($model) {
		/*Monta o Sql*/
		$sql = "insert into TABELA (DESCRICAO, TIPO, VALOR) values ('"
                      . $model->getDescricao() . "', '"
                      . $model->getTipo() . "', '"
                      . $model->getValor()
					  . "')";
					  
		/*Executando a consulta SQL*/
		$this->executaSQL($sql);
		
		/*Obtém o ID gerado pela operação INSERT anterior*/
		return mysql_insert_id();
	}

	public function Excluir($model) {
		/*Monta o Sql*/
		$sql = "delete from TABELA where IDTABELA = " . $model->getIdTabela();
		$this->executaSQL($sql);
		
		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Alterar($model) {
		/*Monta o Sql*/
		$sql = "update TABELA set DESCRICAO = '" . $model->getDescricao() . "', TIPO = '"
								     			 . $model->getTipo() . "', VALOR = '" 
								     			 . $model->getValor() . "' where IDTABELA = " 
												 . $model->getIdTabela();
											  
		$this->executaSQL($sql);

		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Detalhe($model) {
		/*Monta o Sql*/
		$sql = "select * from TABELA where IDTABELA = " . $model->getIdTabela();
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
		$sql = "select * from TABELA order by IDTABELA "; 
		
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
