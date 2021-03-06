<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tabela_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function all_individual()
    {
        $this->db->select('t.id, t.acomodacao, o.name as operadora, p.name as plano');
        $this->db->from('tabelas_individuais as t');
        $this->db->join('operadoras as o', 't.operadora_id = o.id');
        $this->db->join('planos as p', 't.plano_id = p.id');
        return $this->db->get()->result();
    }

    public function find_individual($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tabelas_individuais')->result();
    }

    public function save_individual($dados)
    {
        $dados['criado']  = date('Y-m-d H:i:s');
        $dados['editado'] = date('Y-m-d H:i:s');

        $this->db->insert('tabelas_individuais', $dados);
        return $this->db->insert_id();
    }

    public function update_individual($dados, $id)
    {
        $dados['editado'] = date('Y-m-d H:i:s');

        $this->db->where('id', $id);
        $this->db->update('tabelas_individuais', $dados);
        return true;
    }

    public function delete_individual($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tabelas_individuais');
        return true;
    }

    public function all_empresarial()
    {
        $this->db->select('t.id, t.acomodacao, t.categoria, o.name as operadora, p.name as plano');
        $this->db->from('tabelas_empresariais as t');
        $this->db->join('operadoras as o', 't.operadora_id = o.id');
        $this->db->join('planos as p', 't.plano_id = p.id');
        return $this->db->get()->result();
    }

    public function find_empresarial($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('tabelas_empresariais')->result();
    }

    public function save_empresarial($dados)
    {
        $dados['criado']  = date('Y-m-d H:i:s');
        $dados['editado'] = date('Y-m-d H:i:s');

        $this->db->insert('tabelas_empresariais', $dados);
        return $this->db->insert_id();
    }

    public function update_empresarial($dados, $id)
    {
        $dados['editado'] = date('Y-m-d H:i:s');

        $this->db->where('id', $id);
        $this->db->update('tabelas_empresariais', $dados);
        return true;
    }

    public function delete_empresarial($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tabelas_empresariais');
        return true;
    }

    /**
     * TABELAS ESPECIAIS
     */
     public function all_especial()
     {
         $this->db->select('t.id, t.acomodacao, t.categorias, o.name as operadora, p.name as plano');
         $this->db->from('tabelas_especiais as t');
         $this->db->join('operadoras as o', 't.operadora_id = o.id');
         $this->db->join('planos as p', 't.plano_id = p.id');
         return $this->db->get()->result();
     }

     public function find_especial($id)
     {
         $this->db->where('id', $id);
         return $this->db->get('tabelas_especiais')->result();
     }

     public function save_especial($dados)
     {
         $dados['criado']  = date('Y-m-d H:i:s');
         $dados['editado'] = date('Y-m-d H:i:s');

         $this->db->insert('tabelas_especiais', $dados);
         return $this->db->insert_id();
     }

     public function update_especial($dados, $id)
     {
         $dados['editado'] = date('Y-m-d H:i:s');

         $this->db->where('id', $id);
         $this->db->update('tabelas_especiais', $dados);
         return true;
     }

     public function delete_especial($id)
     {
         $this->db->where('id', $id);
         $this->db->delete('tabelas_especiais');
         return true;
     }


















    // public function find($id)
    // {
    //     $this->db->where($this->id, $id);
    //     return $this->db->get($this->tabela)->result();
    // }
    //
    //
    //
    // public function update($dados, $id)
    // {
    //     $dados['editado'] = date('Y-m-d H:i:s');
    //
    //     $this->db->where($this->id, $id);
    //     $this->db->update($this->tabela, $dados);
    //     return true;
    // }
    //
    // public function delete_individual($id)
    // {
    //     $this->db->where($this->id, $id);
    //     $this->db->delete('tabelas_individuais');
    //     return true;
    // }
}
