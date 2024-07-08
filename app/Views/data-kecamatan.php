<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="main-container py-16 px-16 w-1/2">
  <div class="flex gap-x-4 items-center ">
    <h1 class="text-4xl font-bold mb-4">Data Kecamatan</h1>
    <?php if ($is_admin) : ?>
      <a href="<?= base_url('DataKecamatan/edit_kecamatan'); ?>" class="px-3 py-2 text-white text-xs font-semibold h-fit bg-blue-500 rounded-md text-center hover:bg-blue-500/80">Edit Kecamatan</a>
    <?php endif; ?>
  </div>
  <table id="kecamatanTable" class="display">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Nama Kecamatan</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Jumlah Populasi</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Jumlah Penderita</th>
      </tr>
    </thead>
    <tbody id="table-body">
      <!-- Data rows will be dynamically added here -->
    </tbody>
  </table>
</div>

<script>
  function formatedNama(nama) {
    return nama.replaceAll('-', ' ').replace(/\b\w/g, function(char) {
      return char.toUpperCase();
    });
  }

  document.addEventListener('DOMContentLoaded', function() {
    fetch('<?= base_url('DataKecamatan/get_kecamatan'); ?>')
      .then(response => response.json())
      .then(data => {
        const tableBody = document.getElementById('table-body');
        data.forEach(item => {
          const row = `
            <tr>
              <td class="border border-gray-300 px-4 py-2">${formatedNama(item.nama)}</td>
              <td class="border border-gray-300 px-4 py-2">${item.populasi}</td>
              <td class="border border-gray-300 px-4 py-2">${item.penderita}</td>
            </tr>`;
          tableBody.insertAdjacentHTML('beforeend', row);
        });
        $('#kecamatanTable').DataTable({
          responsive: true,
          autoWidth: false,
          dom: '<"flex justify-between items-center mb-4"<"flex gap-x-4"<"text-gray-600 font-medium"l><"text-gray-600 font-medium"f>>><t><"flex justify-between items-center mt-4"<"text-gray-600 font-medium"i><"text-gray-600 font-medium"p>>',
          language: {
            search: "Cari:",
            lengthMenu: "Tampilkan _MENU_ data per halaman",
            zeroRecords: "Tidak ditemukan data yang sesuai",
            info: "Menampilkan halaman _PAGE_ dari _PAGES_",
            infoEmpty: "Tidak ada data tersedia",
            infoFiltered: "(difilter dari _MAX_ total data)",
            paginate: {
              first: "Pertama",
              last: "Terakhir",
              next: ' <p class="bg-gray-200 flex py-1 px-2 text-center border border-gray-400 hover:bg-gray-300 cursor-pointer text-xs rounded-md">Selanjutnya</p>',
              previous: ' <p class="bg-gray-200 flex py-1 px-2 text-center border border-gray-400 hover:bg-gray-300 cursor-pointer text-xs rounded-md">Sebelumnya</p>',
            }
          }
        });
      })
      .catch(error => {
        console.error('Error fetching data:', error);
      });
  });
</script>

<?= $this->endSection() ?>
