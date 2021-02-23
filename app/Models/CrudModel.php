<?php namespace App\Models;

    use CodeIgniter\Model;

    class CrudModel extends Model {

        public function listarNombres(){
            //QueryBuilder
            
            $Nombres = $this->db->query("SELECT * FROM t_personas");
            return $Nombres->getResult();
        
        }

        public function insertar ($datos){
            $Nombres = $this->db->table('t_personas');
            $Nombres->insert($datos);


            //obtenemos el ultimo id generado
            return  $this->db->insertID();
        }


    }


