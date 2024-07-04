<div class="main-container py-16 px-16 w-1/2">
  <div class="flex gap-x-4 items-center ">
    <h1 class="text-4xl  font-bold mb-4 ">Data Kecamatan</h1>
    <?php if ($is_admin) : ?>
      <a href='<?= base_url(); ?>index.php/DataKecamatan/edit_kecamatan' class="px-3 py-2 text-white text-xs font-semibold h-fit bg-blue-500 rounded-md text-center hover:bg-blue-500/80">Edit
      Kecamatan</a>
      
    <?php endif; ?>
    
  </div>
  <table class="table-auto border-collapse border border-gray-300 w-full">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Nama Kecamatan</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Jumlah Populasi</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Jumlah Penderita</th>
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
      url: '<?= base_url(); ?>index.php/DataKecamatan/get_kecamatan', // route akses ke controller
      type: 'GET',
      dataType: 'json',
      success: function(data) {
        // Loop through the JSON data and create table rows
        data.forEach(function(item) {
          $('#table-body').append(
            `<tr>
            <td class="border border-gray-300 px-4 py-2">${formatedNama(item.nama)}</td>
            <td class="border border-gray-300 px-4 py-2">${item.populasi}</td>
            <td class="border border-gray-300 px-4 py-2">${item.penderita}</td>
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