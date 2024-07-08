<?php

namespace App\Models;

use CodeIgniter\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'populasi', 'penderita']; // Add all the fields you are using in your table

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
     * Update a record in the table.
     *
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function updateRecord(array $data, int $id): bool
    {
        return $this->update($id, $data);
    }

    /**
     * Increment the jumlah populasi and penderita fields.
     *
     * @param int $id
     * @param bool $penderita
     * @return bool
     */
    public function tambahJumlahPopulasi(int $id, bool $penderita): bool
    {
        $this->set('populasi', 'populasi+1', false);
        if ($penderita) {
            $this->set('penderita', 'penderita+1', false);
        }
        return $this->update($id);
    }
    public function kurangJumlahPopulasi(int $id, bool $penderita): bool
    {
        $this->set('populasi', 'populasi-1', false);
        if ($penderita) {
            $this->set('penderita', 'penderita-1', false);
        }
        return $this->update($id);
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
     * Find a record by ID.
     *
     * @param int $id
     * @return array|null
     */
    public function findRecordById(int $id): ?array
    {
        return $this->find($id);
    }
}
?>
