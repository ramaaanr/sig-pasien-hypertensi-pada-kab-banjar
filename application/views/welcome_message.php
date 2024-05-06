<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>

  <style type="text/css">
  ::selection {
    background-color: #E13300;
    color: white;
  }

  ::-moz-selection {
    background-color: #E13300;
    color: white;
  }

  body {
    background-color: #fff;
    margin: 40px;
    font: 13px/20px normal Helvetica, Arial, sans-serif;
    color: #4F5155;
  }

  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
    text-decoration: none;
  }

  a:hover {
    color: #97310e;
  }

  h1 {
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 19px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 10px 15px;
  }

  code {
    font-family: Consolas, Monaco, Courier New, Courier, monospace;
    font-size: 12px;
    background-color: #f9f9f9;
    border: 1px solid #D0D0D0;
    color: #002166;
    display: block;
    margin: 14px 0 14px 0;
    padding: 12px 10px 12px 10px;
  }

  #body {
    margin: 0 15px 0 15px;
    min-height: 96px;
  }

  p {
    margin: 0 0 10px;
    padding: 0;
  }

  p.footer {
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }

  #container {
    margin: 10px;
    border: 1px solid #D0D0D0;
    box-shadow: 0 0 8px #D0D0D0;
  }

  #map {
    height: 480px;
  }
  </style>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body>

  <div id="container">
    <div id="map"></div>
  </div>

  <script>
  var map = L.map('map').setView([-3.402485, 115.007871], 13);
  L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

  // Penanda
  var marker = L.marker([-3.402485, 115.007871]).addTo(map);

  // Area
  var polygon = L.polygon([
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
  ]).addTo(map);
  </script>

</body>

</html>