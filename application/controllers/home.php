<?php

class Home extends CI_Controller
{

  public
    $data_kecamatan = [
      [
        "nama" => "aluh-aluh",
        "warna" => 'red',
        "koordinat" => [
          [-3.5329, 114.6051],
          [-3.5328, 114.5859],
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
          [-3.3628, 114.5995],
          [-3.3982, 114.5893],
          [-3.4072, 114.588],
          [-3.4141, 114.5895],
          [-3.4158, 114.5952],
          [-3.4138, 114.6053],
          [-3.417, 114.6104],
          [-3.4306, 114.619],
          [-3.4349, 114.6156],
          [-3.4492, 114.6094],
          [-3.4574, 114.6113],
          [-3.4608, 114.6027],
          [-3.4659, 114.6061],
          [-3.4786, 114.6108],
          [-3.4916, 114.6145],
          [-3.5024, 114.6153],
          [-3.5245, 114.6158],
          [-3.5331, 114.6113],
          [-3.5329, 114.6051],
        ],
      ],
      [
        "nama" => "aranio",
        "warna" => '', "koordinat" => [
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
          [-3.7306, 114.9503],
          [-3.729, 114.9438],
          [-3.7226, 114.9368],
          [-3.7022, 114.9345],
          [-3.6879, 114.9353],
          [-3.6677, 114.9446],
          [-3.6389, 114.9682],
          [-3.6336, 114.9686],
          [-3.6194, 114.9924],
          [-3.6047, 115.0003],
          [-3.5929, 115.0041],
          [-3.5534, 115.002],
          [-3.5363, 115.0102],
          [-3.5103, 115.0012],
          [-3.4997, 115.005],
          [-3.4909, 115.0152],
          [-3.4827, 115.0371],
          [-3.4711, 115.0475],
          [-3.4426, 115.0634],
          [-3.4301, 115.0746],
          [-3.4244, 115.0862],
          [-3.4251, 115.0942],
          [-3.4281, 115.0999],
          [-3.4249, 115.1121],
          [-3.4166, 115.1241],
          [-3.4057, 115.1297],
          [-3.396, 115.1276],
          [-3.3863, 115.1214],
          [-3.383, 115.134],
          [-3.385, 115.1489],
          [-3.382, 115.1603],
          [-3.3837, 115.1763],
          [-3.3802, 115.187],
          [-3.3735, 115.1991],
          [-3.3632, 115.2105],
          [-3.3604, 115.2174],
          [-3.3628, 115.2261],
          [-3.3692, 115.2352],
          [-3.3725, 115.2443],
          [-3.3705, 115.2726],
          [-3.3664, 115.2819],
          [-3.3657, 115.2911],
          [-3.3805, 115.3241],
          [-3.3849, 115.3389],
          [-3.3837, 115.3552],
          [-3.3803, 115.3723],
          [-3.3754, 115.3869],
          [-3.3755, 115.3959],
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
        ]
      ],
      [

        "nama" => "astambul",
        "warna" => '', "koordinat" => [
          [-3.3977, 114.9314],
          [-3.4001, 114.9273],
          [-3.4004, 114.9222],
          [-3.3922, 114.9227],
          [-3.3705, 114.9119],
          [-3.3607, 114.9027],
          [-3.3512, 114.8807],
          [-3.3392, 114.8679],
          [-3.3267, 114.8606],
          [-3.3108, 114.8578],
          [-3.2495, 114.8651],
          [-3.2478, 114.8839],
          [-3.2495, 114.8962],
          [-3.2479, 114.9251],
          [-3.2436, 114.9547],
          [-3.2677, 114.956],
          [-3.2753, 114.9594],
          [-3.2837, 114.966],
          [-3.2891, 114.9635],
          [-3.2874, 114.9611],
          [-3.2883, 114.9545],
          [-3.2894, 114.9559],
          [-3.3063, 114.9564],
          [-3.3159, 114.9596],
          [-3.3177, 114.9681],
          [-3.3157, 114.9735],
          [-3.3159, 114.9793],
          [-3.326, 114.9981],
          [-3.3343, 115.0034],
          [-3.3558, 115.0096],
          [-3.3625, 115.0094],
          [-3.3687, 115.0043],
          [-3.3752, 114.9944],
          [-3.3815, 114.9881],
          [-3.3866, 114.9865],
          [-3.3859, 114.9661],
          [-3.3878, 114.9511],
          [-3.3977, 114.9314],
        ],
      ],
      [
        "nama" => "beruntung-baru",
        "warna" => '', "koordinat" => [
          [-3.4916, 114.6145],
          [-3.5024, 114.6153],
          [-3.4786, 114.6108],
          [-3.4659, 114.6061],
          [-3.4608, 114.6027],
          [-3.4574, 114.6113],
          [-3.4608, 114.6174],
          [-3.4586, 114.6287],
          [-3.4593, 114.6345],
          [-3.4716, 114.6415],
          [-3.4723, 114.656],
          [-3.475, 114.6621],
          [-3.4737, 114.6796],
          [-3.4769, 114.6943],
          [-3.4713, 114.6965],
          [-3.4844, 114.7003],
          [-3.5134, 114.7044],
          [-3.5331, 114.6113],
          [-3.5245, 114.6158],
          [-3.5024, 114.6153],
        ],
      ],
      [
        "nama" => "gambut",
        "warna" => '', "koordinat" => [
          [-3.4747, 114.6615],
          [-3.4723, 114.656],
          [-3.4716, 114.6415],
          [-3.4593, 114.6345],
          [-3.4586, 114.6287],
          [-3.4608, 114.6174],
          [-3.457, 114.6106],
          [-3.4492, 114.6094],
          [-3.4349, 114.6156],
          [-3.4283, 114.6209],
          [-3.4242, 114.6305],
          [-3.4032, 114.6599],
          [-3.3754, 114.6915],
          [-3.3668, 114.6959],
          [-3.3596, 114.6973],
          [-3.3485, 114.7043],
          [-3.3671, 114.7446],
          [-3.3717, 114.7419],
          [-3.3713, 114.7409],
          [-3.4323, 114.7121],
          [-3.4769, 114.6943],
          [-3.4737, 114.6796],
          [-3.4747, 114.6615],
        ],
      ], [
        "nama" => "karang-intan",
        "warna" => 'red', "koordinat" => [
          [-3.3862, 114.9637],
          [-3.3857, 114.9825],
          [-3.3893, 114.9979],
          [-3.4005, 115.0219],
          [-3.4019, 115.0501],
          [-3.4054, 115.0599],
          [-3.4098, 115.0669],
          [-3.4116, 115.0758],
          [-3.4173, 115.0829],
          [-3.4251, 115.0848],
          [-3.4301, 115.0746],
          [-3.4426, 115.0634],
          [-3.4711, 115.0475],
          [-3.4827, 115.0371],
          [-3.4909, 115.0152],
          [-3.4997, 115.005],
          [-3.5103, 115.0012],
          [-3.5363, 115.0102],
          [-3.5534, 115.002],
          [-3.5929, 115.0041],
          [-3.6047, 115.0003],
          [-3.6194, 114.9924],
          [-3.6336, 114.9686],
          [-3.6284, 114.9681],
          [-3.6142, 114.9573],
          [-3.6098, 114.9304],
          [-3.6098, 114.9187],
          [-3.6065, 114.917],
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
          [-3.4282, 114.9127],
          [-3.4155, 114.9189],
          [-3.4004, 114.9222],
          [-3.4001, 114.9273],
          [-3.3878, 114.9511],
          [-3.3862, 114.9637],
        ]
      ], [
        "nama" => "kertak-hanyar",
        "warna" => 'orange', "koordinat" => [
          [-3.4088, 114.6473],
          [-3.388, 114.6444],
          [-3.3875, 114.6361],
          [-3.3898, 114.6251],
          [-3.3667, 114.6234],
          [-3.359, 114.638],
          [-3.3487, 114.6499],
          [-3.3399, 114.6568],
          [-3.333, 114.6585],
          [-3.3441, 114.6762],
          [-3.343, 114.6823],
          [-3.3396, 114.6887],
          [-3.3415, 114.6953],
          [-3.3485, 114.7043],
          [-3.3596, 114.6973],
          [-3.3668, 114.6959],
          [-3.3754, 114.6915],
          [-3.4032, 114.6599],
          [-3.4111, 114.6479],
          [-3.4088, 114.6473],
        ]
      ], [

        "nama" => "martapura",
        "warna" => 'green', "koordinat" => [
          [-3.4353, 114.8698],
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
          [-3.418, 114.8144],
          [-3.4194, 114.8097],
          [-3.4185, 114.8068],
          [-3.4143, 114.8024],
          [-3.4029, 114.8127],
          [-3.3902, 114.819],
          [-3.3883, 114.8225],
          [-3.3898, 114.832],
          [-3.3862, 114.8376],
          [-3.3804, 114.8402],
          [-3.3656, 114.8424],
          [-3.3706, 114.8493],
          [-3.3802, 114.8535],
          [-3.3819, 114.8586],
          [-3.3791, 114.8596],
          [-3.3766, 114.8634],
          [-3.3785, 114.8652],
          [-3.3769, 114.867],
          [-3.3798, 114.8705],
          [-3.3787, 114.8716],
          [-3.3809, 114.8838],
          [-3.3657, 114.8966],
          [-3.3611, 114.903],
          [-3.3705, 114.9119],
          [-3.3922, 114.9227],
          [-3.4052, 114.9218],
          [-3.4155, 114.9189],
          [-3.4282, 114.9127],
          [-3.4156, 114.8925],
          [-3.4169, 114.883],
          [-3.4355, 114.8727],
          [-3.4353, 114.8698],
        ]
      ], [
        "nama" => "martapura-barat",
        "warna" => '', "koordinat" => [
          [-3.4143, 114.8009],
          [-3.4068, 114.7956],
          [-3.3717, 114.7419],
          [-3.3332, 114.7596],
          [-3.3194, 114.7674],
          [-3.3084, 114.7795],
          [-3.2991, 114.7839],
          [-3.2822, 114.7783],
          [-3.2541, 114.781],
          [-3.2541, 114.8374],
          [-3.2495, 114.8651],
          [-3.3108, 114.8578],
          [-3.3272, 114.8609],
          [-3.3324, 114.8564],
          [-3.3383, 114.8457],
          [-3.3433, 114.8428],
          [-3.3468, 114.8478],
          [-3.3587, 114.8578],
          [-3.3634, 114.8462],
          [-3.3664, 114.8434],
          [-3.3656, 114.8424],
          [-3.3804, 114.8402],
          [-3.3862, 114.8376],
          [-3.3898, 114.832],
          [-3.3883, 114.8225],
          [-3.3902, 114.819],
          [-3.4029, 114.8127],
          [-3.4143, 114.8024],
          [-3.4143, 114.8009],
        ],
      ],
      [
        "nama" => "martapura-timur",
        "warna" => '', "koordinat" => [
          [-3.3793, 114.8737],
          [-3.3793, 114.8737],
          [-3.3798, 114.8705],
          [-3.3769, 114.867],
          [-3.3785, 114.8652],
          [-3.3766, 114.8634],
          [-3.3791, 114.8596],
          [-3.3819, 114.8586],
          [-3.3802, 114.8535],
          [-3.3706, 114.8493],
          [-3.3664, 114.8434],
          [-3.3634, 114.8462],
          [-3.3587, 114.8578],
          [-3.3468, 114.8478],
          [-3.3433, 114.8428],
          [-3.3383, 114.8457],
          [-3.3324, 114.8564],
          [-3.3272, 114.8609],
          [-3.3392, 114.8679],
          [-3.3512, 114.8807],
          [-3.3611, 114.903],
          [-3.3657, 114.8966],
          [-3.3809, 114.8838],
        ],
      ],
      [
        "nama" => "mataraman",
        "warna" => '', "koordinat" => [
          [-3.4281, 115.0999],
          [-3.4251, 115.0942],
          [-3.4251, 115.0848],
          [-3.4173, 115.0829],
          [-3.4116, 115.0758],
          [-3.4098, 115.0669],
          [-3.4054, 115.0599],
          [-3.4019, 115.0501],
          [-3.4005, 115.0219],
          [-3.3893, 114.9979],
          [-3.3866, 114.9865],
          [-3.3815, 114.9881],
          [-3.3752, 114.9944],
          [-3.3687, 115.0043],
          [-3.3625, 115.0094],
          [-3.3558, 115.0096],
          [-3.3343, 115.0034],
          [-3.326, 114.9981],
          [-3.3159, 114.9793],
          [-3.3157, 114.9735],
          [-3.3177, 114.9681],
          [-3.3159, 114.9596],
          [-3.3142, 114.9587],
          [-3.3063, 114.9564],
          [-3.2894, 114.9559],
          [-3.2883, 114.9545],
          [-3.2874, 114.9611],
          [-3.2891, 114.9635],
          [-3.2837, 114.966],
          [-3.2753, 114.9594],
          [-3.2677, 114.956],
          [-3.2436, 114.9547],
          [-3.2396, 114.9821],
          [-3.2314, 115.0102],
          [-3.2321, 115.0207],
          [-3.2457, 115.0372],
          [-3.2504, 115.0388],
          [-3.2561, 115.0352],
          [-3.2643, 115.036],
          [-3.2753, 115.0402],
          [-3.2878, 115.028],
          [-3.2981, 115.0075],
          [-3.3025, 115.0034],
          [-3.3111, 115.0054],
          [-3.3175, 115.0149],
          [-3.3224, 115.018],
          [-3.3241, 115.0242],
          [-3.3226, 115.0348],
          [-3.3236, 115.0697],
          [-3.3254, 115.073],
          [-3.3274, 115.0715],
          [-3.3362, 115.0726],
          [-3.3455, 115.081],
          [-3.3552, 115.0951],
          [-3.3637, 115.1041],
          [-3.3676, 115.1131],
          [-3.3882, 115.1222],
          [-3.396, 115.1276],
          [-3.4057, 115.1297],
          [-3.4166, 115.1241],
          [-3.4249, 115.1121],
          [-3.4281, 115.0999],
        ],
      ],

      [
        "nama" => "paramasan",
        "warna" => '', "koordinat" => [
          [-3.1333, 115.4351],
          [-3.1382, 115.4278],
          [-3.1448, 115.4223],
          [-3.148, 115.3965],
          [-3.1478, 115.384],
          [-3.1414, 115.3677],
          [-3.1385, 115.3395],
          [-3.1299, 115.3347],
          [-3.113, 115.3191],
          [-3.0901, 115.3034],
          [-3.0785, 115.2998],
          [-3.0748, 115.2999],
          [-3.0751, 115.2777],
          [-3.057, 115.2517],
          [-3.0469, 115.2424],
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
          [-2.8526, 115.5809],
          [-2.8705, 115.6072],
          [-2.8741, 115.6099],
          [-2.878, 115.6094],
          [-2.8876, 115.6038],
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
          [-3.1333, 115.4351],
        ],
      ],

      [
        "nama" => "pengaron",
        "warna" => '', "koordinat" => [
          [-3.3552, 115.0951],
          [-3.3455, 115.081],
          [-3.3362, 115.0726],
          [-3.3274, 115.0715],
          [-3.3204, 115.0768],
          [-3.3116, 115.0907],
          [-3.303, 115.0954],
          [-3.2673, 115.1022],
          [-3.27, 115.1122],
          [-3.2707, 115.1247],
          [-3.2674, 115.1255],
          [-3.2513, 115.138],
          [-3.2423, 115.1427],
          [-3.2404, 115.1466],
          [-3.2185, 115.1668],
          [-3.2215, 115.1754],
          [-3.2472, 115.1689],
          [-3.2516, 115.1701],
          [-3.2548, 115.1733],
          [-3.2559, 115.183],
          [-3.2538, 115.1899],
          [-3.2435, 115.1926],
          [-3.2363, 115.1904],
          [-3.2222, 115.2047],
          [-3.2322, 115.213],
          [-3.2362, 115.2292],
          [-3.2585, 115.2524],
          [-3.2657, 115.2545],
          [-3.2811, 115.251],
          [-3.298, 115.2541],
          [-3.3065, 115.2496],
          [-3.3145, 115.2419],
          [-3.345, 115.2243],
          [-3.3607, 115.2186],
          [-3.3632, 115.2105],
          [-3.3735, 115.1991],
          [-3.3802, 115.187],
          [-3.3837, 115.1763],
          [-3.382, 115.1603],
          [-3.385, 115.1489],
          [-3.383, 115.134],
          [-3.3863, 115.1214],
          [-3.3676, 115.1131],
          [-3.3637, 115.1041],
          [-3.3552, 115.0951],
        ],
      ],

      [
        "nama" => "sambung-makmur",
        "warna" => '', "koordinat" => [
          [-3.268, 115.1046],
          [-3.2673, 115.1022],
          [-3.2051, 115.1129],
          [-3.1937, 115.1135],
          [-3.2015, 115.1436],
          [-3.1883, 115.1437],
          [-3.1896, 115.1619],
          [-3.1925, 115.172],
          [-3.2085, 115.1859],
          [-3.2142, 115.1994],
          [-3.2222, 115.2047],
          [-3.2363, 115.1904],
          [-3.2435, 115.1926],
          [-3.2538, 115.1899],
          [-3.2559, 115.1765],
          [-3.2516, 115.1701],
          [-3.2472, 115.1689],
          [-3.2413, 115.1699],
          [-3.2215, 115.1754],
          [-3.2185, 115.1668],
          [-3.2404, 115.1466],
          [-3.2423, 115.1427],
          [-3.2513, 115.138],
          [-3.2674, 115.1255],
          [-3.2707, 115.1247],
          [-3.268, 115.1046],
        ],
      ],

      [
        "nama" => "simpang-empat",
        "warna" => '', "koordinat" => [
          [-3.3227, 115.0411],
          [-3.3241, 115.0242],
          [-3.3224, 115.018],
          [-3.3175, 115.0149],
          [-3.3111, 115.0054],
          [-3.3025, 115.0034],
          [-3.2981, 115.0075],
          [-3.2878, 115.028],
          [-3.2753, 115.0402],
          [-3.2643, 115.036],
          [-3.2561, 115.0352],
          [-3.2504, 115.0388],
          [-3.2457, 115.0372],
          [-3.2321, 115.0207],
          [-3.2314, 115.0102],
          [-3.2396, 114.9821],
          [-3.2479, 114.9251],
          [-3.2495, 114.8962],
          [-3.2478, 114.8839],
          [-3.2541, 114.8374],
          [-3.2541, 114.781],
          [-3.2293, 114.7799],
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
          [-3.1749, 115.0748],
          [-3.1835, 115.089],
          [-3.1937, 115.1135],
          [-3.2051, 115.1129],
          [-3.2874, 115.0988],
          [-3.303, 115.0954],
          [-3.3116, 115.0907],
          [-3.3204, 115.0768],
          [-3.3254, 115.073],
          [-3.3236, 115.0697],
          [-3.3227, 115.0411],
        ],
      ],

      [
        "nama" => "sungai-pinang",
        "warna" => '', "koordinat" => [
          [-3.3632, 115.2267],
          [-3.3607, 115.2186],
          [-3.345, 115.2243],
          [-3.3145, 115.2419],
          [-3.3065, 115.2496],
          [-3.298, 115.2541],
          [-3.2811, 115.251],
          [-3.2657, 115.2545],
          [-3.2585, 115.2524],
          [-3.2362, 115.2292],
          [-3.2322, 115.213],
          [-3.2142, 115.1994],
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
          [-3.1348, 115.2555],
          [-3.1302, 115.2628],
          [-3.0916, 115.2797],
          [-3.0824, 115.2814],
          [-3.0751, 115.2777],
          [-3.0748, 115.2999],
          [-3.0785, 115.2998],
          [-3.0901, 115.3034],
          [-3.113, 115.3191],
          [-3.1299, 115.3347],
          [-3.1385, 115.3395],
          [-3.1414, 115.3677],
          [-3.1478, 115.384],
          [-3.148, 115.3965],
          [-3.1448, 115.4223],
          [-3.1583, 115.4144],
          [-3.1669, 115.4141],
          [-3.1775, 115.4164],
          [-3.1956, 115.4124],
          [-3.2298, 115.4118],
          [-3.2347, 115.4093],
          [-3.238, 115.4049],
          [-3.2441, 115.379],
          [-3.2582, 115.3727],
          [-3.2794, 115.4193],
          [-3.2873, 115.4246],
          [-3.2967, 115.4279],
          [-3.3093, 115.4186],
          [-3.3155, 115.4158],
          [-3.328, 115.4191],
          [-3.336, 115.4169],
          [-3.339, 115.4044],
          [-3.342, 115.4023],
          [-3.3471, 115.4023],
          [-3.3617, 115.3962],
          [-3.372, 115.3989],
          [-3.3755, 115.3959],
          [-3.3754, 115.3869],
          [-3.3803, 115.3723],
          [-3.3837, 115.3552],
          [-3.3849, 115.3389],
          [-3.3805, 115.3241],
          [-3.3657, 115.2911],
          [-3.3664, 115.2819],
          [-3.3705, 115.2726],
          [-3.3725, 115.2443],
          [-3.3692, 115.2352],
          [-3.3632, 115.2267],
        ],
      ],

      [
        "nama" => "sungai-tabuk",
        "warna" => '', "koordinat" => [
          [-3.3485, 114.7043],
          [-3.3415, 114.6953],
          [-3.3396, 114.6887],
          [-3.343, 114.6823],
          [-3.3441, 114.6762],
          [-3.3416, 114.6706],
          [-3.3349, 114.6629],
          [-3.333, 114.6585],
          [-3.3347, 114.658],
          [-3.3205, 114.6343],
          [-3.3123, 114.6283],
          [-3.287, 114.6366],
          [-3.2855, 114.6257],
          [-3.2843, 114.6242],
          [-3.281, 114.6255],
          [-3.2789, 114.6274],
          [-3.2778, 114.6326],
          [-3.2728, 114.6354],
          [-3.2748, 114.6395],
          [-3.2559, 114.6913],
          [-3.2536, 114.7044],
          [-3.2347, 114.7534],
          [-3.2325, 114.7634],
          [-3.2271, 114.7675],
          [-3.2302, 114.7757],
          [-3.2293, 114.7799],
          [-3.261, 114.7809],
          [-3.2822, 114.7783],
          [-3.2991, 114.7839],
          [-3.3084, 114.7795],
          [-3.3194, 114.7674],
          [-3.3332, 114.7596],
          [-3.3671, 114.7446],
          [-3.3485, 114.7043],
        ],
      ],

      [
        "nama" => "tatah-makmur",
        "warna" => '', "koordinat" => [
          [-3.4306, 114.619],
          [-3.417, 114.6104],
          [-3.4138, 114.6053],
          [-3.4158, 114.5952],
          [-3.4141, 114.5895],
          [-3.4072, 114.588],
          [-3.3982, 114.5893],
          [-3.3628, 114.5995],
          [-3.3682, 114.6114],
          [-3.3667, 114.6234],
          [-3.3898, 114.6251],
          [-3.3875, 114.6361],
          [-3.388, 114.6444],
          [-3.4005, 114.6452],
          [-3.4111, 114.6479],
          [-3.4242, 114.6305],
          [-3.4283, 114.6209],
          [-3.4306, 114.619],
        ],
      ],

      [
        "nama" => "telaga-bauntung",
        "warna" => '', "koordinat" => [
          [-3.1138, 115.2706],
          [-3.1302, 115.2628],
          [-3.134, 115.2583],
          [-3.1359, 115.2343],
          [-3.1331, 115.2258],
          [-3.1273, 115.218],
          [-3.1245, 115.1993],
          [-3.1157, 115.1689],
          [-3.0763, 115.2026],
          [-3.0586, 115.2084],
          [-3.0385, 115.2197],
          [-3.0498, 115.2378],
          [-3.0469, 115.2424],
          [-3.057, 115.2517],
          [-3.0726, 115.2755],
          [-3.0769, 115.2793],
          [-3.0824, 115.2814],
          [-3.0916, 115.2797],
          [-3.1138, 115.2706],

        ],
      ],
    ];


  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data['title'] = 'Home Page';
    $data['kecamatan'] = $this->data_kecamatan;
    $data['content'] = $this->load->view('home', $data, TRUE);
    $this->load->view('layouts/main', $data);
  }
  public function get_kecamatan()
  {
    // return json_encode($koordinat_kecamatan);
    $this->output->set_content_type('application/json')->set_output(json_encode($this->data_kecamatan));
  }

  public function get_kecamatan_by_name($nama)
  {
    $koordinat_kecamatan = null;

    foreach ($this->data_kecamatan as $kecamatan) {
      // Jika nama kecamatan cocok
      if ($kecamatan['nama'] === $nama) {
        // Simpan koordinat kecamatan
        $koordinat_kecamatan = $kecamatan['koordinat'];
        break; // Keluar dari loop karena sudah ditemukan
      }
    }
    // return json_encode($koordinat_kecamatan);
    $this->output->set_content_type('application/json')->set_output(json_encode($koordinat_kecamatan));
  }
}