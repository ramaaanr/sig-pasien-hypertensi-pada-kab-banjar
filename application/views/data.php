<div class="main-container py-16 px-16">
  <h1 class="text-4xl font-bold mb-4">Input Data</h1>
  <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-2">Pilih Kecamatan:</label>
  <select id="kecamatan"
    class="mt-1 block w-64 py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <option value="">Pilih Kecamatan</option>
  </select>
  <div id="edit-fields" class="mt-4 hidden flex items-center gap-x-4">
    <label for="warna" class="block text-sm font-medium text-gray-700">Warna:</label>
    <select id="warna"
      class="block w-32 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      <option value="red">Red</option>
      <option value="blue">Blue</option>
      <option value="green">Green</option>
    </select>
    <label for="populasi" class="block text-sm font-medium text-gray-700 ">Populasi:</label>
    <input type="text" id="populasi"
      class="block w-32 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />

  </div>
  <button id="update-btn" class="mt-4 hidden w-full bg-blue-500 text-white py-2 px-4 rounded-md">Update</button>
  <div id="response-message" class="mt-4 text-sm"></div>
</div>
<script>
function formatedNama(nama) {
  return nama.replace(/-/g, ' ').replace(/\b\w/g, function(char) {
    return char.toUpperCase();
  })
}
$(document).ready(function() {
  $.ajax({
    url: '<?= base_url(); ?>index.php/data/get_kecamatan', // route akses ke controller
    type: 'GET',
    dataType: 'json',
    success: function(data) {
      // Loop through the JSON data and create option elements
      data.forEach(function(item) {
        $('#kecamatan').append(
          `<option value="${item.id}">${formatedNama(item.nama)}</option>`
        );
      });
    },
    error: function(xhr, status, error) {
      console.error('Error fetching data:', error);
    }
  });


  // Handle onchange event for the select element
  $('#kecamatan').change(function() {
    var kecamatanId = $(this).val();
    $('#response-message').html('')
    if (kecamatanId) {
      $.ajax({
        url: '<?= base_url(); ?>index.php/data/get_kecamatan_by_id/' + kecamatanId,
        type: 'GET',
        dataType: 'json',
        success: function(data) {
          $('#warna').val(data.warna);
          $('#populasi').val(data.populasi);
          $('#edit-fields').removeClass('hidden');
          $('#update-btn').removeClass('hidden');
          $('#update-btn').data('id', kecamatanId); // Store the ID in the button's data attribute

        },
        error: function(xhr, status, error) {
          console.error('Error fetching data:', error);
        }
      });
    } else {
      $('#edit-fields').addClass('hidden');
      $('#warna').val('');
      $('#populasi').val('');
      $('#update-btn').addClass('hidden');
    }
  });


  $('#update-btn').click(function() {
    var kecamatanId = $(this).data('id');
    var warna = $('#warna').val();
    var populasi = $('#populasi').val();

    $.ajax({
      url: '<?= base_url(); ?>index.php/data/update',
      type: 'POST',
      contentType: 'application/json',
      data: JSON.stringify({
        id: kecamatanId,
        data: {
          warna: warna,
          populasi: populasi
        }
      }),
      success: function(response) {

        Swal.fire({
          title: 'Berhasil!',
          text: 'Update Sukses',
          icon: 'success',
        })
      },
      error: function(xhr, status, error) {
        Swal.fire({
          title: 'Gagal!',
          text: 'Update Gagal',
          icon: 'error',
        })
      }
    });
  });
});
</script>