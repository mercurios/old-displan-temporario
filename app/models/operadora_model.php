<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operadora_model extends CI_Model
{
    private $table  = 'operadoras';
    private $id     = 'id';
    private $logo   = 'logo';
    private $name   = 'name';
    private $slug   = 'slug';

    public function __construct()
    {
        parent::__construct();
    }

    public function all()
    {
        return $this->db->get($this->table)->result();
    }

    public function find($slug)
    {
        $this->db->where($this->slug, $slug);
        return $this->db->get($this->table)->result();
    }
}