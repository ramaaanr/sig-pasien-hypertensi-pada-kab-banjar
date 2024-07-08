<?php

namespace App\Models;

use CodeIgniter\Model;

class Masyarakat extends Model
{
    protected $table = 'penduduk';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id_kecamatan', 'nama', 'umur', 'jenis_kelamin', 'suku_bangsa', 'agama', 'status', 'pendidikan', 'penderita', 'pekerjaan', 'suku', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'q15'
    ]; // Add all the fields you are using in your table

    /**
     * Insert a new record into the table.
     *
     * @param array $data
     * @return bool
     */
    public function insertRecord(array $data): bool
    {
        return $this->insert($data);
    }

    /**
     * Delete a record from the table.
     *
     * @param int $id
     * @return bool
     */
    public function deleteRecord(int $id): bool
    {
        return $this->delete($id);
    }

    /**
     * Get all records from the table.
     *
     * @return array
     */
    public function getRecords(): array
    {
        return $this->findAll();
    }

    /**
     * Get masyarakat records with kecamatan names.
     *
     * @return array
     */
    public function getMasyarakatWithKecamatan(): array
    {
        return $this->select('penduduk.id, penduduk.id_kecamatan, penduduk.penderita, penduduk.nama, penduduk.umur, penduduk.jenis_kelamin, penduduk.suku_bangsa, penduduk.agama, penduduk.status, penduduk.pendidikan, penduduk.pekerjaan, penduduk.suku, kecamatan.nama AS nama_kecamatan')
                    ->join('kecamatan', 'penduduk.id_kecamatan = kecamatan.id')
                    ->findAll();
    }
}
?>
