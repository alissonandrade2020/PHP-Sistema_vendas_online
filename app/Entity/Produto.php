<?php

namespace App\Entity;

use \App\DB\Database;
use \PDO;

class Produto{

  /**
   * Identificador único do produto
   * @var integer
   */
  public $id;

  /**
   * Nome do produto
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
   * Define se o produto tá disponivel ou indisponivel 
   * @var string(s/n)
   */
  public $ativo;

  /**
   * Data da postagem do produto
   * @var string
   */
  public $data;

  /**
   * Método responsável por cadastrar um novo produto no banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    //INSERE O PRODUTO NO BANCO
    $obDatabase = new Database('produtos');
    $this->id = $obDatabase->insert([
                                      'produto'    => $this->produto,
                                      'quantidade' => $this->quantidade,
                                      'preco'      => $this->preco,
                                      'ativo'      => $this->ativo,
                                      'data'       => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**
   * Método responsável por atualizar o produto no banco
   * @return boolean
   */
  public function atualizar(){
    return (new Database('produtos'))->update('id = '.$this->id,[
                                                                'produto'    => $this->produto,
                                                                'quantidade' => $this->quantidade,
                                                                'preco'      => $this->preco,
                                                                'ativo'      => $this->ativo,
                                                                'data'       => $this->data
                                                              ]);
  }

  /**
   * Método responsável por excluir o produto do banco
   * @return boolean
   */
  public function excluir(){
    return (new Database('produtos'))->delete('id = '.$this->id);
  }

  /**
   * Método responsável por obter os produtos do banco de dados
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getProdutos($where = null, $order = null, $limit = null){
    return (new Database('produtos'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * Método responsável por buscar um produto com base em seu ID
   * @param  integer $id
   * @return Produto
   */
  public static function getProduto($id){
    return (new Database('produtos'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}