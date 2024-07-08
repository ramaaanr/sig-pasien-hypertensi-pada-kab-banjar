<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="main-container py-16 px-16">
  <a href="<?= base_url('DataKecamatan'); ?>"
    class="text-xs border border-gray-700 hover:bg-gray-200/80 bg-gray-200 px-2 py-2 rounded-md">Kembali</a>
  <h1 class="text-4xl font-bold mt-2 mb-4">Input Data</h1>
  <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-2">Pilih Kecamatan:</label>
  <select id="kecamatan"
    class="mt-1 block w-64 py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <option value="">Pilih Kecamatan</option>
    <!-- Options will be dynamically added here -->
  </select>
  <div id="edit-fields" class="mt-4 hidden flex items-center gap-x-4">
    <label for="populasi" class="block text-sm font-medium text-gray-700">Jumlah Populasi:</label>
    <input type="number" id="populasi"
      class="block w-32 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
  </div>
  <button id="update-btn" class="mt-4 hidden w-full bg-blue-500 text-white py-2 px-4 rounded-md">Update</button>
  <div id="response-message" class="mt-4 text-sm"></div>
</div>
<script>
  function formatedNama(nama) {
    return nama.replaceAll('-', ' ').replace(/\b\w/g, function(char) {
      return char.toUpperCase();
    });
  }

  document.addEventListener('DOMContentLoaded', function() {
    fetch('<?= base_url('Data/get_kecamatan'); ?>')
      .then(response => response.json())
      .then(data => {
        data.forEach(item => {
          const option = `<option value="${item.id}">${formatedNama(item.nama)}</option>`;
          document.getElementById('kecamatan').insertAdjacentHTML('beforeend', option);
        });
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  });

  // Handle onchange event for the select element
  document.getElementById('kecamatan').addEventListener('change', function() {
    var kecamatanId = this.value;
    document.getElementById('response-message').innerHTML = '';
    if (kecamatanId) {
      fetch(`<?= base_url('DataKecamatan/get_kecamatan_by_id/'); ?>${kecamatanId}`)
        .then(response => response.json())
        .then(data => {
          document.getElementById('populasi').value = data.populasi;
          document.getElementById('edit-fields').classList.remove('hidden');
          document.getElementById('update-btn').classList.remove('hidden');
          document.getElementById('update-btn').setAttribute('data-id', kecamatanId); // Store the ID in the button's data attribute
        })
        .catch(error => {
          console.error('Error fetching data:', error);
        });
    } else {
      document.getElementById('edit-fields').classList.add('hidden');
      document.getElementById('populasi').value = '';
      document.getElementById('update-btn').classList.add('hidden');
    }
  });

  document.getElementById('update-btn').addEventListener('click', function() {
    var kecamatanId = this.getAttribute('data-id');
    var populasi = document.getElementById('populasi').value;

    fetch(`<?= base_url('DataKecamatan/update'); ?>`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          id: kecamatanId,
          data: {
            populasi: populasi
          }
        })
      })
      .then(response => response.json())
      .then(response => {
        Swal.fire({
          title: 'Berhasil!',
          text: 'Update Sukses',
          icon: 'success',
        });
      })
      .catch(error => {
        console.error('Error updating data:', error);
        Swal.fire({
          title: 'Gagal!',
          text: 'Update Gagal',
          icon: 'error',
        });
      });
  });
</script>
<?= $this->endSection('content') ?>
