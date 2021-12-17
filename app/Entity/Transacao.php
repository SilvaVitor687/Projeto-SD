<?php

    namespace App\Entity;

    use \App\Db\Database;
    use \PDO;

    class Transacao {
        public $id;
        public $titulo;
        public $categoria;
        public $valor;
        public $tipo;
        public $registro;

        //Metodo responsavel por Cadastrar a vaga no Banco

        public function cadastrar(){

            $obDatabase = new Database('crud');
            $this->id = $obDatabase->insert([
                                            'titulo'    => $this->titulo,
                                            'categoria' => $this->categoria,
                                            'valor'     => $this->valor,
                                            'tipo'      => $this->tipo,
                                            'registro'  => $this->registro
                                            ]);
            return true;
        }

        //Metodo responsavel por atualizar o Cargo no Banco

        public function atualizar(){
            return (new Database('crud'))->update('id = '
            .$this->id,[
                        'titulo'        => $this->titulo,
                        'categoria'     => $this->categoria,
                        'valor'         => $this->valor,
                        'tipo'          => $this->tipo,
                        'registro'      => $this->registro
                                                                        
                        ]);
          }

        // Método responsável por excluir a vaga do banco 
   
        public function excluir(){
            return (new Database('crud'))->delete('id = '.$this->id);
            }


        public static function getTransacao($where = null, $order = null, $limit = null){
            return (new Database('crud'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
            }

        
        public static function getTransacoes($id){
            return (new Database('crud'))->select('id = '.$id)
                                          ->fetchObject(self::class);
            }
} 

?>