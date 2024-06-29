<div class="main-container py-16 px-16 w-full mx-auto">
  <div class="flex gap-x-4 items-center ">
    <h1 class="text-4xl font-bold mb-4 ">Data Masyarakat</h1>
  </div>
  <table class="table-auto border-collapse border border-gray-300 w-full">
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
      </tr>
    </thead>
    <tbody id="table-body">
    </tbody>
  </table>
</div>

<script>
  function formatedNama(nama) {
    return nama.replace(/-/g, ' ').replace(/\b\w/g, function(char) {
      return char.toUpperCase();
    });
  }

  $(document).ready(function() {
    $.ajax({
      url: '<?= base_url(); ?>index.php/DataMasyarakat/get_masyarakat', // route akses ke controller
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        // Loop through the JSON data and create table rows
        data.forEach(function(item) {
          $('#table-body').append(
            `<tr>
                            <td class="border border-gray-300 px-4 py-2">${item.nama}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.umur}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.jenis_kelamin}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.suku_bangsa}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.agama}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.status}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.pendidikan}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.pekerjaan}</td>
                            <td class="border border-gray-300 px-4 py-2">${item.suku}</td>
                            <td class="border border-gray-300 px-4 py-2">${formatedNama(item.nama_kecamatan)}</td>
                        </tr>`
          );
        });
      },
      error: function(xhr, status, error) {
        console.error('Error fetching data:', error);
      }
    });
  });
</script>