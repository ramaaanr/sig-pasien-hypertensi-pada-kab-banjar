<div class="main-container py-16 px-16">
  <h1 class="text-4xl font-bold mb-4">Data Kecamatan</h1>

  <table class="table-auto border-collapse border border-gray-300 w-full">
    <thead>
      <tr class="bg-gray-200">
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Nama Kecamatan</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Warna</th>
        <th class="border border-gray-300 px-4 py-2 text-left text-sm font-medium text-gray-700">Populasi</th>
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
    url: 'http://localhost/sig-putri/index.php/data/get_kecamatan', // route akses ke controller
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      // Loop through the JSON data and create table rows
      data.forEach(function(item) {
        $('#table-body').append(
          `<tr>
            <td class="border border-gray-300 px-4 py-2">${formatedNama(item.nama)}</td>
            <td class="border border-gray-300 px-4 py-2">${item.warna}</td>
            <td class="border border-gray-300 px-4 py-2">${item.populasi}</td>
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