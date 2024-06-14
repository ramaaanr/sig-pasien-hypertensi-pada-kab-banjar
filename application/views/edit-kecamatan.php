<div class="main-container py-16 px-16">
  <a href='<?= base_url(); ?>index.php/DataKecamatan'
    class="text-xs border border-gray-700 hover:bg-gray-200/80 bg-gray-200 px-2 py-2 rounded-md">Kembali</a>
  <h1 class="text-4xl font-bold mt-2 mb-4">Input Data</h1>
  <label for="kecamatan" class="block text-sm font-medium text-gray-700 mb-2">Pilih Kecamatan:</label>
  <select id="kecamatan"
    class="mt-1 block w-64 py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    <option value="">Pilih Kecamatan</option>
  </select>
  <div id="edit-fields" class="mt-4 hidden flex items-center gap-x-4">
    <label for="jumlah_populasi" class="block text-sm font-medium text-gray-700 ">Jumlah Populasi:</label>
    <input type="text" id="jumlah_populasi"
      class="block w-32 py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />

    <label for="jumlah_penderita" class="block text-sm font-medium text-gray-700 ">Jumlah Penderita:</label>
    <input type="text" id="jumlah_penderita"
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
          $('#jumlah_populasi').val(data.jumlah_populasi);
          $('#jumlah_penderita').val(data.jumlah_penderita);
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
      $('#jumlah_populasi').val('');
      $('#jumlah_penderita').val('');
      $('#update-btn').addClass('hidden');
    }
  });

  $('#update-btn').click(function() {
    var kecamatanId = $(this).data('id');
    var jumlah_populasi = $('#jumlah_populasi').val();
    var jumlah_penderita = $('#jumlah_penderita').val();

    let warna;
    const rasio = jumlah_penderita / jumlah_populasi; // 300 / 1000 = 0.3 ===> 30%

    if (rasio >= 0.5) {
      warna = 'red'
    } else if (rasio >= 0.3) {
      warna = 'orange'
    } else {
      warna = 'green';
    }

    $.ajax({
      url: '<?= base_url(); ?>index.php/data/update',
      type: 'POST',
      contentType: 'application/json',
      data: JSON.stringify({
        id: kecamatanId,
        data: {
          jumlah_populasi: jumlah_populasi,
          jumlah_penderita: jumlah_penderita,
          warna: warna,
        }
      }),
      success: function(response) {
        Swal.fire({
          title: 'Berhasil!',
          text: 'Update Sukses',
          icon: 'success',
        });
      },
      error: function(xhr, status, error) {
        Swal.fire({
          title: 'Gagal!',
          text: 'Update Gagal',
          icon: 'error',
        });
      }
    });
  });
});
</script>