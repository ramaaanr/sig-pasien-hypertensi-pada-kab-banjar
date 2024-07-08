<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<div class="main-container py-16 px-16 w-full mx-auto">
  <div class="flex gap-x-4 items-center">
    <h1 class="text-4xl font-bold mb-4">Daftar Penduduk</h1>
  </div>
  <table id="pendudukTable" class="table-auto border-collapse border border-gray-300 w-full">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Nama</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Umur</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Jenis Kelamin</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Suku Bangsa</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Agama</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Status</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Pendidikan</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Pekerjaan</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Suku</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Nama Kecamatan</th>
        <?php if ($is_admin) : ?>
          <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Hapus</th>
        <?php endif; ?>
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
    fetch('<?= base_url('DataMasyarakat/get_masyarakat'); ?>')
      .then(response => response.json())
      .then(data => {
        data.forEach(item => {
          const row = `
            <tr>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.nama}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.umur}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.jenis_kelamin}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.suku_bangsa}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.agama}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.status}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.pendidikan}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.pekerjaan}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${item.suku}</td>
              <td class="border border-gray-300 text-sm px-4 py-2">${formatedNama(item.nama_kecamatan)}</td>
              <?php if ($is_admin) : ?>
              <td class="border border-gray-300 text-sm text-red-500 px-4 py-2"><a href="<?= base_url('DataMasyarakat/remove_masyarakat/'); ?>${item.id}/${item.id_kecamatan}/${item.penderita}" class="text-red-600 hover:text-red-800">Hapus</a></td>
              <?php endif; ?>
            </tr>`;
          document.getElementById('table-body').insertAdjacentHTML('beforeend', row);
        });

        $('#pendudukTable').DataTable({
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
