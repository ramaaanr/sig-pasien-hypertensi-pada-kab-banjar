<!-- file: application/views/partials/sidebar.php -->
<div class="flex w-100">
  <div class="sidebar">
    <div class="bg-zinc-900 h-screen w-48 flex flex-col ">
      <!-- Logo -->
      <div class="p-4">
        <img
          src="data:image/png;base64,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">
      </div>
      <!-- Menu -->
      <div class="py-4">
        <ul>
          <li class="py-2 px-4 text-white hover:bg-gray-800 flex items-center cursor-pointer">
            <span class="material-symbols-outlined">
              travel_explore
            </span>
            <span>Peta</span>
          </li>
          <li class="py-2 px-4 text-white hover:bg-gray-800 flex items-center cursor-pointer">
            <span class="material-symbols-outlined">
              edit_document
            </span>
            <span>Input Parameter</span>
          </li>
          <li class="py-2 px-4 text-white hover:bg-gray-800 flex items-center cursor-pointer">
            <span class="material-symbols-outlined">
              analytics
            </span>
            <span>Input Data</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="map w-full" id="map">
    <h1>Peta Banjar</h1>
  </div>
  <div class="toolbar hidden w-80 p-4">
    <h1 class="font-bold">Peta Hypertensi Kabupaten Banjar</h1>
    <hr class="my-2">
    <div>
      <div class="mb-4">
        <label for="kecamatan" class="block text-sm font-medium text-gray-700">Pilih Kecamatan:</label>
        <select name="kecamatan" id="kecamatan"
          class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </select>
      </div>

      <div class="mt-4">
        <button type="submit" id="submit-kecamatan"
          class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Submit</button>
      </div>
      </form>
    </div>
  </div>

  <script type="text/javascript">
  var map = L.map('map').setView([-3.3200, 114.9991], 13);
  $(document).ready(function() {
    $.ajax({
      url: "<?= base_url(); ?>index.php/home/get_kecamatan",
      type: "GET",
      dataType: "json",
      success: function(response) {
        const kecamatan = response;

        $.each(kecamatan, function(index, kec) {
          const formatedName = kec["nama"].replace(/-/g, ' ').replace(/\b\w/g, function(char) {
            return char.toUpperCase();
          });
          var polygon = L.polygon(kec["koordinat"], {
            color: kec['warna']
          }).addTo(map);
          map.fitBounds(polygon.getBounds());

          polygon.on('mouseover', function(e) {
            var tooltip = L.tooltip({
                permanent: false,
                direction: 'top'
              })
              .setLatLng(e.latlng)
              .setContent(formatedName)
              .openOn(map);
            polygon.bindTooltip(tooltip).openTooltip();
          });

          // Remove tooltip on mouseout
          polygon.on('mouseout', function(e) {
            polygon.unbindTooltip().closeTooltip();
          });
        });
      },
      error: function(xhr, status, error) {
        console.error(xhr.responseText);
      }
    });
  });

  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

  var latlngs = [
    [-3.5329, 114.5969],
    [-3.5333, 114.5822],
    [-3.5436, 114.5169],
    [-3.5337, 114.518],
    [-3.5335, 114.515],
    [-3.5246, 114.5157],
    [-3.5162, 114.5184],
    [-3.5151, 114.5168],
    [-3.5111, 114.5165],
    [-3.5057, 114.5185],
    [-3.503, 114.5176],
    [-3.4792, 114.5204],
    [-3.4645, 114.5164],
    [-3.4586, 114.5191],
    [-3.46, 114.5202],
    [-3.4608, 114.5226],
    [-3.4605, 114.5234],
    [-3.4559, 114.5217],
    [-3.4542, 114.524],
    [-3.455, 114.5212],
    [-3.4535, 114.5201],
    [-3.4391, 114.5233],
    [-3.4203, 114.5195],
    [-3.4111, 114.5118],
    [-3.4014, 114.5105],
    [-3.3733, 114.5233],
    [-3.3681, 114.5264],
    [-3.3677, 114.5281],
    [-3.3594, 114.5269],
    [-3.3485, 114.538],
    [-3.3475, 114.5344],
    [-3.3528, 114.5237],
    [-3.3417, 114.5338],
    [-3.3519, 114.5732],
    [-3.3591, 114.5928],
    [-3.3682, 114.6114],
    [-3.366, 114.626],
    [-3.359, 114.638],
    [-3.3487, 114.6499],
    [-3.3399, 114.6568],
    [-3.3347, 114.658],
    [-3.3226, 114.6369],
    [-3.3131, 114.6285],
    [-3.287, 114.6366],
    [-3.2843, 114.6242],
    [-3.2791, 114.6271],
    [-3.2778, 114.6326],
    [-3.2728, 114.6354],
    [-3.2748, 114.6395],
    [-3.2559, 114.6913],
    [-3.2536, 114.7044],
    [-3.2347, 114.7534],
    [-3.2325, 114.7634],
    [-3.2271, 114.7675],
    [-3.2302, 114.7757],
    [-3.2297, 114.7796],
    [-3.2253, 114.7822],
    [-3.2203, 114.7895],
    [-3.2143, 114.7864],
    [-3.2016, 114.79],
    [-3.1777, 114.792],
    [-3.2011, 114.8109],
    [-3.1993, 114.8226],
    [-3.189, 114.8217],
    [-3.1287, 114.8314],
    [-3.0151, 114.8275],
    [-3.0181, 114.8317],
    [-3.0178, 114.8352],
    [-3.0219, 114.8446],
    [-3.1222, 115.0023],
    [-3.1571, 115.0475],
    [-3.1835, 115.089],
    [-3.1935, 115.1127],
    [-3.2015, 115.1436],
    [-3.1883, 115.1437],
    [-3.1896, 115.1619],
    [-3.1925, 115.172],
    [-3.2081, 115.1856],
    [-3.2095, 115.1973],
    [-3.2124, 115.2037],
    [-3.2023, 115.2036],
    [-3.1905, 115.2102],
    [-3.1865, 115.2151],
    [-3.1829, 115.2243],
    [-3.1752, 115.2274],
    [-3.1682, 115.2357],
    [-3.1625, 115.2397],
    [-3.1506, 115.2387],
    [-3.1355, 115.242],
    [-3.1359, 115.2343],
    [-3.1331, 115.2258],
    [-3.1273, 115.218],
    [-3.1245, 115.1993],
    [-3.1157, 115.1689],
    [-3.0763, 115.2026],
    [-3.0586, 115.2084],
    [-3.0385, 115.2197],
    [-3.0498, 115.2378],
    [-3.0441, 115.2469],
    [-3.0198, 115.2668],
    [-3.0097, 115.2702],
    [-3.0035, 115.2758],
    [-2.9967, 115.279],
    [-2.9967, 115.2817],
    [-2.9933, 115.2847],
    [-2.9912, 115.2905],
    [-2.9913, 115.2967],
    [-2.9887, 115.2984],
    [-2.9831, 115.31],
    [-2.9814, 115.3126],
    [-2.9742, 115.3136],
    [-2.969, 115.3217],
    [-2.9678, 115.3328],
    [-2.9652, 115.34],
    [-2.966, 115.3447],
    [-2.9796, 115.3446],
    [-2.9796, 115.3504],
    [-2.9829, 115.3513],
    [-2.9848, 115.3563],
    [-2.979, 115.3684],
    [-2.9773, 115.3762],
    [-2.9782, 115.3879],
    [-2.9797, 115.3895],
    [-2.9888, 115.3918],
    [-2.9953, 115.3989],
    [-2.9927, 115.4047],
    [-2.9829, 115.4117],
    [-2.9828, 115.4206],
    [-2.977, 115.4297],
    [-2.9766, 115.4346],
    [-2.9617, 115.4423],
    [-2.956, 115.4478],
    [-2.9521, 115.4537],
    [-2.9511, 115.4585],
    [-2.9431, 115.4654],
    [-2.9411, 115.4768],
    [-2.9252, 115.4844],
    [-2.9164, 115.4852],
    [-2.9102, 115.4949],
    [-2.9041, 115.4971],
    [-2.902, 115.5004],
    [-2.8892, 115.5053],
    [-2.8864, 115.5076],
    [-2.8845, 115.5126],
    [-2.875, 115.518],
    [-2.872, 115.5227],
    [-2.8603, 115.5272],
    [-2.8475, 115.5399],
    [-2.8395, 115.5413],
    [-2.8325, 115.5448],
    [-2.8295, 115.55],
    [-2.8295, 115.556],
    [-2.8255, 115.5575],
    [-2.8224, 115.5611],
    [-2.8289, 115.5674],
    [-2.8441, 115.5748],
    [-2.8532, 115.5815],
    [-2.8726, 115.6092],
    [-2.8771, 115.6097],
    [-2.8862, 115.605],
    [-2.8955, 115.5922],
    [-2.9219, 115.5908],
    [-2.927, 115.5884],
    [-2.9297, 115.5837],
    [-2.9307, 115.5779],
    [-2.9297, 115.5547],
    [-2.9326, 115.5466],
    [-2.939, 115.5441],
    [-2.9376, 115.5391],
    [-2.971, 115.5299],
    [-2.9713, 115.5332],
    [-2.973, 115.5323],
    [-2.9817, 115.5255],
    [-2.9958, 115.5066],
    [-3.0026, 115.504],
    [-3.0327, 115.5068],
    [-3.0463, 115.5027],
    [-3.0492, 115.5002],
    [-3.0674, 115.4996],
    [-3.0823, 115.4932],
    [-3.0914, 115.4868],
    [-3.1111, 115.4604],
    [-3.1412, 115.4247],
    [-3.1583, 115.4144],
    [-3.1669, 115.4141],
    [-3.1775, 115.4164],
    [-3.1956, 115.4124],
    [-3.2298, 115.4118],
    [-3.2347, 115.4093],
    [-3.238, 115.4049],
    [-3.2441, 115.379],
    [-3.2574, 115.3729],
    [-3.2794, 115.4193],
    [-3.2955, 115.4279],
    [-3.2995, 115.4267],
    [-3.3093, 115.4186],
    [-3.3155, 115.4158],
    [-3.328, 115.4191],
    [-3.336, 115.4169],
    [-3.3386, 115.4055],
    [-3.3405, 115.403],
    [-3.3471, 115.4023],
    [-3.3617, 115.3962],
    [-3.3698, 115.3988],
    [-3.3774, 115.3956],
    [-3.3818, 115.3985],
    [-3.3924, 115.3981],
    [-3.4358, 115.3903],
    [-3.443, 115.3933],
    [-3.4455, 115.4024],
    [-3.4501, 115.4103],
    [-3.4527, 115.41],
    [-3.4581, 115.402],
    [-3.4633, 115.399],
    [-3.4772, 115.3803],
    [-3.4909, 115.3878],
    [-3.5017, 115.3908],
    [-3.5083, 115.3735],
    [-3.5097, 115.3607],
    [-3.5086, 115.3494],
    [-3.5097, 115.3426],
    [-3.5138, 115.3337],
    [-3.5202, 115.3256],
    [-3.5316, 115.3181],
    [-3.5497, 115.3114],
    [-3.5624, 115.2964],
    [-3.5723, 115.2735],
    [-3.5776, 115.2693],
    [-3.5811, 115.2716],
    [-3.5801, 115.2658],
    [-3.5897, 115.2597],
    [-3.5978, 115.2445],
    [-3.6036, 115.2371],
    [-3.6076, 115.2193],
    [-3.6078, 115.197],
    [-3.6102, 115.1884],
    [-3.6202, 115.1717],
    [-3.6338, 115.1535],
    [-3.635, 115.1496],
    [-3.6343, 115.1221],
    [-3.6457, 115.1059],
    [-3.6643, 115.0899],
    [-3.6683, 115.0835],
    [-3.687, 115.0322],
    [-3.693, 115.0117],
    [-3.7028, 114.9989],
    [-3.7001, 114.9834],
    [-3.7123, 114.9772],
    [-3.7275, 114.9655],
    [-3.7307, 114.9568],
    [-3.729, 114.9438],
    [-3.7226, 114.9368],
    [-3.7022, 114.9345],
    [-3.6879, 114.9353],
    [-3.6677, 114.9446],
    [-3.6389, 114.9682],
    [-3.6318, 114.9687],
    [-3.6219, 114.9643],
    [-3.6142, 114.9573],
    [-3.6098, 114.9304],
    [-3.6103, 114.9206],
    [-3.6083, 114.9173],
    [-3.5877, 114.9213],
    [-3.5744, 114.9146],
    [-3.558, 114.9288],
    [-3.5524, 114.931],
    [-3.5415, 114.9318],
    [-3.5275, 114.9411],
    [-3.5141, 114.9454],
    [-3.4965, 114.9427],
    [-3.4822, 114.9376],
    [-3.4569, 114.9231],
    [-3.4416, 114.9246],
    [-3.4342, 114.9216],
    [-3.4234, 114.9065],
    [-3.4156, 114.8925],
    [-3.4169, 114.883],
    [-3.4355, 114.8727],
    [-3.4351, 114.8675],
    [-3.4341, 114.8685],
    [-3.4323, 114.8668],
    [-3.4291, 114.867],
    [-3.4227, 114.8616],
    [-3.4226, 114.8596],
    [-3.4288, 114.8564],
    [-3.427, 114.8553],
    [-3.4248, 114.8497],
    [-3.4261, 114.8492],
    [-3.4252, 114.8248],
    [-3.4218, 114.8235],
    [-3.4181, 114.8146],
    [-3.4194, 114.8097],
    [-3.4185, 114.8068],
    [-3.4143, 114.8009],
    [-3.4068, 114.7956],
    [-3.3713, 114.7409],
    [-3.4323, 114.7121],
    [-3.4713, 114.6965],
    [-3.4844, 114.7003],
    [-3.5134, 114.7044],
    [-3.5331, 114.6113],
    [-3.5329, 114.5969],
  ];

  var polyline = L.polyline(latlngs, {
    color: '#4b5563'
  }).addTo(map);

  // zoom the map to the polyline
  map.fitBounds(polyline.getBounds());

  // Penanda
  var marker = L.marker([-3.3200, 114.9991]).addTo(map);



  // document.getElementById('submit-kecamatan').addEventListener('click', (event) => {
  //   event.preventDefault();
  //   console.info($('#kecamatan').val());
  // })
  </script>