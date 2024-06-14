<?php

/**
 * Crud Model
 */
class Masyarakat extends CI_Model
{

  public $table_name = 'masyarakat';

  public function insert($data,)
  {
    $result = $this->db->insert($this->table_name, $data);
    return $result;
  }

  // public function update($data, $id)
  // {
  //   $result = $this->db->where('id', $id)->update($this->table_name, $data);
  //   return $result;
  // }

  // public function delete($id)
  // {
  //   $result = $this->db->delete($this->table_name, ['id' => $id]);
  //   return $result;
  // }

  // public function get_records()
  // {
  //   $result = $this->db->get($this->table_name)->result();
  //   return $result;
  // }

  // public function find_record_by_id($id)
  // {
  //   $result = $this->db->get_where($this->table_name, ['id' => $id])->row();
  //   return $result;
  // }
}