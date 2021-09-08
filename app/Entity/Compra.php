<?php

namespace App\Entity;

use \App\DB\Database;
use \PDO;

class Compra{

  /**
   * Identificador único da compra
   * @var integer
   */
  public $id;

  /**
   * ID do cliente 
   * @var string
   */
  public $id_cliente;

    /**
   * ID do cliente 
   * @var string
   */
  public $id_produto;

   /**
   * Quantidade do produto 
   * @var string
   */
  public $produto;

  /**
   * Quantidade do produto 
   * @var string
   */
  public $quantidade;

    /**
   * Valor do produto
   * @var string
   */
  public $preco;

  /**
   * Data da postagem do produto
   * @var string
   */
  public $data;

  /**
   * Método responsável por cadastrar uma nova compra no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERE A COMPRA DO PRODUTO NO BANCO
    $obDatabase = new Database('compras');
    $this->id = $obDatabase->insert([
                                      'id_cliente' => $this->id_cliente,
                                      'id_produto' => $this->id_produto,
                                      'produto'    => $this->produto,
                                      'quantidade' => $this->quantidade,
                                      'preco'      => $this->preco,                                      
                                      'data'       => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar a compra do produto no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('compras'))->update('id = '.$this->id,[
                                                                'id_cliente' => $this->id_cliente,
                                                                'id_produto' => $this->id_produto,
                                                                'produto' => $this->produto,
                                                                'quantidade' => $this->quantidade,
                                                                'preco'      => $this->preco,
                                                                'data'       => $this->data
                                                              ]);
  }

  /**
   * Método responsável por excluir a compra do cliente/produto do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('compras'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter as compras do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getProdutos($where = null, $order = null, $limit = null){
    return (new Database('compras'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar uma compra com base em seu ID
   * @param  integer $id
   * @return Compra
   */
  public static function getProduto($id){
    return (new Database('compras'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}