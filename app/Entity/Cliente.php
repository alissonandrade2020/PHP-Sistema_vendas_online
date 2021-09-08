<?php

namespace App\Entity;

use \App\DB\Database;
use \PDO;

class Cliente{

  /**
   * Identificador único do cliente
   * @var integer
   */
  public $id;

  /**
   * Nome do cliente
   * @var string
   */
  public $nome_cliente;

  /**
   * Nome do cliente
   * @var string
   */
  public $cpf_cnpj;

  /**
   * Data da postagem do cliente
   * @var string
   */
  public $data;

  /**
   * Método responsável por cadastrar um novo cliente no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERE O CLIENTE NO BANCO
    $obDatabase = new Database('clientes');
    $this->id = $obDatabase->insert([
                                      'nome_cliente' => $this->nome_cliente,
                                      'cpf_cnpj'     => $this->cpf_cnpj,
                                      'data'         => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o cliente no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('clientes'))->update('id = '.$this->id,[
                                                                'nome_cliente' => $this->nome_cliente,
                                                                'cpf_cnpj'     => $this->cpf_cnpj,
                                                                'data'         => $this->data
                                                              ]);
  }

  /**
   * Método responsável por excluir o cliente do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('clientes'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter os clientes do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getClientes($where = null, $order = null, $limit = null){
    return (new Database('clientes'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um cliente com base em seu ID
   * @param  integer $id
   * @return Cliente
   */
  public static function getCliente($id){
    return (new Database('clientes'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}