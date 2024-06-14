<div class="w-3/4 p-16 bg-white ">
  <h1 class="text-4xl  font-bold mb-4 ">Input Masyrakat</h1>

  <form id="data-masyarakat-form" class="space-y-4">
    <h1 class="text-2xl font-semibold mb-2">Biodata</h1>
    <div>
      <label for="kecamatan" class="block text-sm font-medium text-gray-700">Kecamatan</label>
      <select id="kecamatan"
        class="mt-1 block w-64 py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      </select>
    </div>
    <div>
      <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
      <input type="text" id="nama"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
        required>
    </div>
    <div>
      <label for="umur" class="block text-sm font-medium text-gray-700">Umur</label>
      <select id="umur"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="20-29">20-29</option>
        <option value="30-39">30-39</option>
        <option value="40-49">40-49</option>
        <option value="50-59">50-59</option>
        <option value="60-64">60-64</option>
      </select>
    </div>
    <div>
      <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
      <select id="jenis_kelamin"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Pria">Pria</option>
        <option value="Wanita">Wanita</option>
      </select>
    </div>
    <div>
      <label for="suku_bangsa" class="block text-sm font-medium text-gray-700">Suku / Bangsa</label>
      <input type="text" id="suku_bangsa"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
        required>
    </div>
    <div>
      <label for="agama" class="block text-sm font-medium text-gray-700">Agama</label>
      <select id="agama"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Islam">Islam</option>
        <option value="Kristen Protestan">Kristen Protestan</option>
        <option value="Kristen Katolik">Kristen Katolik</option>
        <option value="Budha">Budha</option>
        <option value="Hindu">Hindu</option>
        <option value="Kong Hu Cu">Kong Hu Cu</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="agama_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan Agama Lainnya">
    </div>
    <div>
      <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
      <select id="status"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Kawin">Kawin</option>
        <option value="Duda">Duda</option>
        <option value="Janda">Janda</option>
        <option value="Single">Single</option>
      </select>
    </div>
    <div>
      <label for="pendidikan" class="block text-sm font-medium text-gray-700">Pendidikan</label>
      <select id="pendidikan"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Tidak sekolah">Tidak sekolah</option>
        <option value="SD /MI atau sederajat">SD /MI atau sederajat</option>
        <option value="SMP/ MTs atau sederajat">SMP/ MTs atau sederajat</option>
        <option value="SMA/ MAN atau sederajat">SMA/ MAN atau sederajat</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
      </select>
    </div>
    <div>
      <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
      <select id="pekerjaan"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Tidak bekerja">Tidak bekerja</option>
        <option value="Buruh">Buruh</option>
        <option value="Tani">Tani</option>
        <option value="Nelayan">Nelayan</option>
        <option value="Pedagang">Pedagang</option>
        <option value="PNS">PNS</option>
        <option value="TNI/Polri">TNI/Polri</option>
        <option value="Swasta">Swasta</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="pekerjaan_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan Pekerjaan Lainnya">
    </div>
    <div>
      <label for="suku" class="block text-sm font-medium text-gray-700">Suku</label>
      <select id="suku"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Banjar">Banjar</option>
        <option value="Dayak">Dayak</option>
        <option value="Jawa">Jawa</option>
        <option value="Bugis">Bugis</option>
        <option value="Madura">Madura</option>
        <option value="Batak">Batak</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="suku_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan Suku Lainnya">
    </div>
    <h1 class="text-2xl font-semibold mb-2">Kesehatan Masyarakat</h1>

    <div>

      <label for="q1" class="block text-sm font-medium text-gray-700">1. Bagaimana Gambaran Kesehatan Keluarga Anda
        menurut persepsi anda:</label>
      <select id="q1" name="q1"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Sempurna">Sempurna</option>
        <option value="Baik">Baik</option>
        <option value="Kurang Baik">Kurang Baik</option>
        <option value="Jelek">Jelek</option>
      </select>
    </div>
    <div>
      <label for="q2" class="block text-sm font-medium text-gray-700">2. Apakah ada anggota keluarga yang sakit/punya
        penyakit tertentu sekarang ini?</label>
      <select id="q2" name="q2"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Ada">Ada</option>
        <option value="Tidak ada">Tidak ada</option>
      </select>
    </div>
    <div>
      <label for="q3" class="block text-sm font-medium text-gray-700">3. Siapa Anggota Keluarga Anda yang sakit saat
        ini:</label>
      <select id="q3" name="q3"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Ayah">Ayah</option>
        <option value="Ibu">Ibu</option>
        <option value="Suami">Suami</option>
        <option value="Istri">Istri</option>
        <option value="Anak">Anak</option>
        <option value="Saudara">Saudara</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="q3_lainnya" name="q3_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan anggota keluarga lainnya">
    </div>
    <div>
      <label for="q4" class="block text-sm font-medium text-gray-700">4. Bila pertanyaan no 3 dijawab “Ada”, masalah
        kesehatan dan atau penyakit apa saja yang keluarga Anda alami “SAAT INI” (boleh pilih lebih dari satu):</label>
      <select id="q4" name="q4"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Cancer">Cancer</option>
        <option value="Diabetes">Diabetes / Kencing Manis</option>
        <option value="Penyakit paru">Penyakit paru</option>
        <option value="Tekanan Darah Tinggi">Tekanan Darah Tinggi</option>
        <option value="Stroke">Stroke</option>
        <option value="Encok / Radang Tulang dan Sendi">Encok / Radang Tulang dan Sendi</option>
        <option value="Gangguan Jiwa">Gangguan Jiwa</option>
        <option value="Penyakit Jantung">Penyakit Jantung</option>
        <option value="Kecanduan Minuman Keras">Kecanduan Minuman Keras</option>
        <option value="Kecanduan Obat">Kecanduan Obat</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="q4_lainnya" name="q4_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan penyakit lainnya">
    </div>
    <div>
      <label for="q5" class="block text-sm font-medium text-gray-700">5. Apa keluhan kesehatan yang keluarga Anda alami
        saat ini (boleh pilih lebih dari satu):</label>
      <select id="q5" name="q5"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Sakit kepala">Sakit kepala</option>
        <option value="Mual">Mual</option>
        <option value="Pusing">Pusing</option>
        <option value="Mudah Lelah">Mudah Lelah</option>
        <option value="Gatal pada mata, hidung, tenggorokan">Gatal pada mata, hidung, tenggorokan</option>
        <option value="Sesak nafas">Sesak nafas</option>
        <option value="Batuk">Batuk</option>
        <option value="Bersin-bersin">Bersin-bersin</option>
        <option value="Suara nafas asma/mengi">Suara nafas asma/mengi</option>
        <option value="Nafas pendek">Nafas pendek</option>
        <option value="Penglihatan Kabur">Penglihatan Kabur</option>
        <option value="Hidung tersumbat">Hidung tersumbat</option>
        <option value="Sulit berkonsentrasi">Sulit berkonsentrasi</option>
        <option value="Nyeri pada punggung">Nyeri pada punggung</option>
        <option value="Nyeri pada leher">Nyeri pada leher</option>
        <option value="Nyeri pada telapak tangan">Nyeri pada telapak tangan</option>
        <option value="Nyeri pada pergelangan tangan">Nyeri pada pergelangan tangan</option>
        <option value="Nyeri pada bahu">Nyeri pada bahu</option>
        <option value="Keluhan lainnya">Keluhan lainnya</option>
      </select>
      <input type="text" id="q5_lainnya" name="q5_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan keluhan lainnya">
    </div>
    <div>
      <label for="q6" class="block text-sm font-medium text-gray-700">6. Kapan keluhan tersebut mulai muncul?</label>
      <select id="q6" name="q6"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Saat ini">Saat ini</option>
        <option value="Mulai 1 hari kemaren">Mulai 1 hari kemaren</option>
        <option value="Mulai 1 minggu kemaren">Mulai 1 minggu kemaren</option>
        <option value="Mulai 1 bulan kemaren">Mulai 1 bulan kemaren</option>
        <option value="Sudah lebih 1 bulan">Sudah lebih 1 bulan</option>
      </select>
    </div>
    <div>
      <label for="q7" class="block text-sm font-medium text-gray-700">7. Bagaimana pola keluhan penyakit tersebut
        muncul?</label>
      <select id="q7" name="q7"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Perlahan-lahan">Perlahan-lahan</option>
        <option value="Mendadak/tiba-tiba">Mendadak/tiba-tiba</option>
      </select>
    </div>
    <div>
      <label for="q8" class="block text-sm font-medium text-gray-700">8. Berapa lama durasi keluhan tersebut
        dirasakan?</label>
      <select id="q8" name="q8"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Kurang dari 1 jam">Kurang dari 1 jam</option>
        <option value="2-4 jam">2-4 jam</option>
        <option value="> 4 jam">> 4 jam</option>
        <option value="1 hari">1 hari</option>
        <option value="Setiap hari">Setiap hari</option>
      </select>
    </div>
    <div>
      <label for="q9" class="block text-sm font-medium text-gray-700">9. Kapan keluhan tersebut
        menghilang/berkurang?</label>
      <select id="q9" name="q9"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Siang hari">Siang hari</option>
        <option value="Malam hari">Malam hari</option>
        <option value="Jarang / tidak pernah hilang">Jarang / tidak pernah hilang</option>
      </select>
    </div>
    <div>
      <label for="q10" class="block text-sm font-medium text-gray-700">10. Apakah keluhan tersebut muncul saat melakukan
        aktifitas/bekerja?</label>
      <select id="q10" name="q10"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>
      </select>
    </div>
    <div>
      <label for="q11" class="block text-sm font-medium text-gray-700">11. Perkiraan penyebab masalah kesehatan/penyakit
        yang ada di keluarga diakibatkan karena apa?</label>
      <select id="q11" name="q11"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Air tidak bersih">Air tidak bersih</option>
        <option value="Lingkungan kotor dan berbau">Lingkungan kotor dan berbau</option>
        <option value="Lingkungan bising/rebut">Lingkungan bising/rebut</option>
        <option value="Kurangnya gizi keluarga">Kurangnya gizi keluarga</option>
        <option value="Stress dalam keluarga">Stress dalam keluarga</option>
        <option value="Pencemaran lingkungan">Pencemaran lingkungan</option>
        <option value="Kurang pengetahuan keluarga tentang Kesehatan">Kurang pengetahuan keluarga tentang Kesehatan
        </option>
        <option value="Ekonomi keluarga kurang mencukupi">Ekonomi keluarga kurang mencukupi</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="q11_lainnya" name="q11_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan penyebab lainnya">
    </div>
    <div>
      <label for="q12" class="block text-sm font-medium text-gray-700">12. Riwayat Penyakit “TERDAHULU” yang sebelumnya
        pernah dialami keluarga adalah (boleh pilih lebih dari satu):</label>
      <select id="q12" name="q12"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Cancer">Cancer</option>
        <option value="Diabetes">Diabetes / Kencing Manis</option>
        <option value="Penyakit paru">Penyakit paru</option>
        <option value="Tekanan Darah Tinggi">Tekanan Darah Tinggi</option>
        <option value="Stroke">Stroke</option>
        <option value="Encok / Radang Tulang dan Sendi">Encok / Radang Tulang dan Sendi</option>
        <option value="Gangguan Jiwa">Gangguan Jiwa</option>
        <option value="Penyakit Jantung">Penyakit Jantung</option>
        <option value="Kecanduan Minuman Keras">Kecanduan Minuman Keras</option>
        <option value="Kecanduan Obat">Kecanduan Obat</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="q12_lainnya" name="q12_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan penyakit lainnya">
    </div>
    <div>
      <label for="q13" class="block text-sm font-medium text-gray-700">13. Pernahkah anggota keluarga memeriksakan diri
        ke laboratorium Kesehatan?</label>
      <select id="q13" name="q13"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Pernah">Pernah</option>
        <option value="Tidak pernah sama sekali">Tidak pernah sama sekali</option>
      </select>
    </div>
    <div>
      <label for="q14" class="block text-sm font-medium text-gray-700">14. Berdasarkan hasil pemeriksaan laboratorium,
        hasil pemeriksaan keluarga terkait masalah Kesehatan yang dialami saat ini adalah?</label>
      <select id="q14" name="q14"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Semua normal">Semua normal</option>
        <option value="Tinggi kolesterol">Tinggi kolesterol</option>
        <option value="Tinggi gula darah">Tinggi gula darah</option>
        <option value="Tinggi asam urat">Tinggi asam urat</option>
        <option value="Rendah gula darah">Rendah gula darah</option>
        <option value="Ada infeksi saluran cerna/perut">Ada infeksi saluran cerna/perut</option>
        <option value="Ada infeksi saluran nafas">Ada infeksi saluran nafas</option>
        <option value="Ada batu ginjal">Ada batu ginjal</option>
        <option value="Ada infeksi saluran kemih">Ada infeksi saluran kemih</option>
        <option value="Demam berdarah">Demam berdarah</option>
        <option value="Malaria">Malaria</option>
        <option value="Tifus">Tifus</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="q14_lainnya" name="q14_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan hasil pemeriksaan lainnya">
    </div>
    <div>
      <label for="q15" class="block text-sm font-medium text-gray-700">15. Kemana Anda biasa pergi kalau ada masalah
        kesehatan:</label>
      <select id="q15" name="q15"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white text-black rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        <option value="Kyai/Ulama">Kyai/Ulama</option>
        <option value="Orang Pintar/Dukun">Orang Pintar/Dukun</option>
        <option value="Rumah Sakit">Rumah Sakit</option>
        <option value="Puskesmas">Puskesmas</option>
        <option value="Praktik Dokter">Praktik Dokter</option>
        <option value="Praktik Perawat">Praktik Perawat</option>
        <option value="Bidan">Bidan</option>
        <option value="Lainnya">Lainnya</option>
      </select>
      <input type="text" id="q15_lainnya" name="q15_lainnya"
        class="mt-1 block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm hidden"
        placeholder="Sebutkan tempat lainnya">
    </div>
    <div>
      <label for="penderita" class="block text-gray-700 font-bold mb-2">Apakah penderita hipertensi?</label>
      <input type="checkbox" id="penderita" name="penderita" class="mr-2 leading-tight">
      <span class="text-gray-700">Ya</span>
    </div>
    <div class="pt-4">
      <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md">Submit</button>
    </div>
  </form>
</div>

<script>
function formatedNama(nama) {
  return nama.replace(/-/g, ' ').replace(/\b\w/g, function(char) {
    return char.toUpperCase();
  })
}
document.addEventListener('DOMContentLoaded', function() {
  $.ajax({
    url: '<?= base_url(); ?>index.php/DataKecamatan/get_kecamatan', // route akses ke controller
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
  $('#data-masyarakat-form').on('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting traditionally

    // Collect form data
    var formData = {
      nama: $('#nama').val(),
      umur: $('#umur').val(),
      jenis_kelamin: $('#jenis_kelamin').val(),
      suku_bangsa: $('#suku_bangsa').val(),
      agama: $('#agama_lainnya').val() || $('#agama').val(),
      status: $('#status').val(),
      pendidikan: $('#pendidikan').val(),
      pekerjaan: $('#pekerjaan_lainnya').val() || $('#pekerjaan').val(),
      suku: $('#suku_lainnya').val() || $('#suku').val(),
      q1: $('#q1').val(),
      q2: $('#q2').val(),
      q3: $('#q3_lainnya').val() || $('#q3').val(),
      q4: $('#q4_lainnya').val() || $('#q4').val(),
      q5: $('#q5_lainnya').val() || $('#q5').val(),
      q6: $('#q6').val(),
      q7: $('#q7').val(),
      q8: $('#q8').val(),
      q9: $('#q9').val(),
      q10: $('#q10').val(),
      q11: $('#q11_lainnya').val() || $('#q11').val(),
      q12: $('#q12_lainnya').val() || $('#q12').val(),
      q13: $('#q13').val(),
      q14: $('#q14_lainnya').val() || $('#q14').val(),
      q15: $('#q15_lainnya').val() || $('#q15').val(),
      penderita: $('#penderita').prop('checked'),
      kecamatan: $('#kecamatan').val(),
    };

    // Post form data to server
    $.ajax({
      url: '<?= base_url(); ?>index.php/DataMasyarakat/insert', // route akses ke controller
      type: 'POST',
      data: formData,
      success: function(response) {
        console.log('Data successfully submitted:', response);
        // Handle success response here
      },
      error: function(xhr, status, error) {
        console.error('Error submitting data:', error);
        // Handle error response here
      }
    });
  });

  function toggleOtherInput(selectId, inputId) {
    const selectElement = document.getElementById(selectId);
    const inputElement = document.getElementById(inputId);

    selectElement.addEventListener('change', function() {
      inputElement.classList.toggle('hidden', this.value !== 'Lainnya');
    });
  }
  const lainnyaFields = ['q3', 'q4', 'q5', 'q11', 'q12', 'q14', 'q15'];
  const otherFields = [{
      select: 'agama',
      input: 'agama_lainnya'
    },
    {
      select: 'pekerjaan',
      input: 'pekerjaan_lainnya'
    },
    {
      select: 'suku',
      input: 'suku_lainnya'
    }
  ];

  lainnyaFields.forEach(field => {
    toggleOtherInput(field, `${field}_lainnya`);
  });

  otherFields.forEach(field => {
    toggleOtherInput(field.select, field.input);
  });
});
</script>