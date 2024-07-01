
<?php

/**
 * Crud Model
 */
class Kecamatan extends CI_Model
{

  public $table_name = 'kecamatan';

  public function insert($data)
  {
    $result = $this->db->insert($this->table_name, $data);
    return $result;
  }

  public function update($data, $id)
  {
    $result = $this->db->where('id', $id)->update($this->table_name, $data);
    return $result;
  }
  public function increment_jumlah_populasi($id, $penderita)
  {
    $this->db->set('populasi', 'populasi+1', FALSE);
    if ($penderita === 'true') {
      $this->db->set('penderita', 'penderita+1', FALSE);
    }
    $this->db->where('id', $id); // Adjust the condition as needed
    $result = $this->db->update($this->table_name);
    return $result;
  }

  public function get_records()
  {
    $result = $this->db->get($this->table_name)->result();
    return $result;
  }

  public function find_record_by_id($id)
  {
    $result = $this->db->get_where($this->table_name, ['id' => $id])->row();
    return $result;
  }
}
