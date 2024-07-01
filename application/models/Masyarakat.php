
<?php

/**
 * Crud Model
 */
class Masyarakat extends CI_Model
{

  public $table_name = 'penduduk';

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

  public function get_records()
  {
    $result = $this->db->get($this->table_name)->result();
    return $result;
  }

  public function get_masyarakat_with_kecamatan()
  {
    // Kolom yang akan diambil dari tabel masyarakat
    $columns = [
      'penduduk.id',
      'penduduk.id_kecamatan',
      'penduduk.nama',
      'penduduk.umur',
      'penduduk.jenis_kelamin',
      'penduduk.suku_bangsa',
      'penduduk.agama',
      'penduduk.status',
      'penduduk.pendidikan',
      'penduduk.pekerjaan',
      'penduduk.suku'
    ];

    // Menambahkan kolom nama kecamatan dari tabel kecamatan
    $columns[] = 'kecamatan.nama AS nama_kecamatan';

    // Menyiapkan query
    $this->db->select($columns);
    $this->db->from('penduduk');
    $this->db->join('kecamatan', 'penduduk.id_kecamatan = kecamatan.id', 'inner');

    // Eksekusi query dan ambil hasilnya
    $query = $this->db->get();
    return $query->result();
  }

  // public function find_record_by_id($id)
  // {
  //   $result = $this->db->get_where($this->table_name, ['id' => $id])->row();
  //   return $result;
  // }
}
