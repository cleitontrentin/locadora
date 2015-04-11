<?php

/*incluindo o arquivo com as configurações do BD*/
include_once("conexao.inc");

/*Classe de acesso a dados do Veiculo*/
class DaoVeiculo {

	/*construtor da classe*/
	public function DaoVeiculo(){
		
	}
	
	/* função para gravar os dados */
	public function Gravar($model) {
		/*Monta o Sql*/
		$sql = "insert into VEICULO (MARCA, MODELO, PLACA, ANO_FABRICACAO, ANO_MODELO, COMBUSTIVEL, FOTO) values ('"
                      . $model->getMarca()
					  . "', '"
						. $model->getModelo()
                      . "', '"
						. $model->getPlaca()
                      . "', '"
						. $model->getAnoFabricacao()
                      . "', '"
						. $model->getAnoModelo()
                      . "', '"
						. $model->getCombustivel()
                      . "', '"
                      . $model->getFoto(). "')";
					  
		/*Executando a consulta SQL*/
		$this->executaSQL($sql);
		
		/*Obtém o ID gerado pela operação INSERT anterior*/
		return mysql_insert_id();
	}

	public function Excluir($model) {
		/*Monta o Sql*/
		$sql = "delete from VEICULO where IDVEICULO = " . $model->getIdVeiculo();
		$this->executaSQL($sql);
		
		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Alterar($model) {
		/*Monta o Sql*/
		$sql = "update VEICULO set MARCA = '" . $model->getMarca() . "', MODELO = '" 
 											  . $model->getModelo() . "', PLACA = '" 
 											  . $model->getPlaca() . "', ANO_FABRICACAO = '" 
 											  . $model->getAnoFabricacao() . "', ANO_MODELO = '" 
 											  . $model->getAnoModelo() . "', COMBUSTIVEL = '" 
 											  . $model->getCombustivel() . "', FOTO = '" 
 											  . $model->getFoto() . " ' where IDVEICULO = " 
 											  . $model->getIdVeiculo();
											  
		$this->executaSQL($sql);

		/*Retorna quantos registros foram afetados com a instrução anterior*/
		return mysql_affected_rows();
	}

	public function Detalhe($model) {
		/*Monta o Sql*/
		$sql = "select * from VEICULO where IDVEICULO = " . $model->getIdVeiculo();
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
		$sql = "select * from VEICULO order by IDVEICULO "; 
		
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

	public function ListarOpcional($model) {

		/*Monta o Sql*/
		$sql = "SELECT "
				. "	OPCIONAL_VEICULO.IDVEICULO "
				. "	, OPCIONAL.IDOPCIONAL "
				. "	, OPCIONAL.DESCRICAO "
				. "	, CASE WHEN OPCIONAL_VEICULO.IDVEICULO IS NOT NULL THEN 'SIM' ELSE 'NÃO' END AS POSSUI "
				. "FROM "
				. "	OPCIONAL AS OPCIONAL "
				. "	LEFT JOIN OPCIONAL_VEICULO AS OPCIONAL_VEICULO ON "
				. "	OPCIONAL_VEICULO.IDOPCIONAL = OPCIONAL.IDOPCIONAL "
				. "	AND OPCIONAL_VEICULO.IDVEICULO = '" . $model->getIdVeiculo(). "' ORDER BY OPCIONAL.DESCRICAO ";
	
			
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
	
	public function ListarTabela($model) {

		/*Monta o Sql*/
		$sql = "SELECT DISTINCT "
				. "	TABELA_VEICULO.IDVEICULO "
				. "	, TABELA.IDTABELA "
				. "	, TABELA.DESCRICAO "
				. "	, TABELA.VALOR "
				. "	, CASE WHEN TABELA_VEICULO.IDVEICULO IS NOT NULL THEN 'SIM' ELSE 'NÃO' END AS POSSUI "
				. "FROM "
				. "	TABELA AS TABELA "
				. "	LEFT JOIN TABELA_VEICULO AS TABELA_VEICULO ON "
				. "	TABELA_VEICULO.IDTABELA = TABELA.IDTABELA "
				. "	AND TABELA_VEICULO.IDVEICULO = '" . $model->getIdVeiculo(). "' ORDER BY TABELA.TIPO, TABELA.DESCRICAO ";
	
			
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
