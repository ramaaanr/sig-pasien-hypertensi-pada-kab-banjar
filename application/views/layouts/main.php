<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>SIG Hypertensi Kab.Banjar</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <!-- file: application/views/partials/sidebar.php -->
  <div class="flex w-100">
    <div class="sidebar fixed">
      <div class="bg-zinc-900 h-screen w-48 flex flex-col ">
        <!-- Logo -->
        <div class="p-4">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAACXBIWXMAAAsTAAALEwEAmpwYAAAVCUlEQVR4nO2dB1hUV9rHJ5vNbpLv2+zuZ/Lt8+wmu5us+ylFBEGsKDb6wAxNyapREOltKKH3ooJKRLGAigVFJcYWkxijxsIMxqwaS+wFuReQe8GCRo36/55zhjIDM9QBjHv/z/PKNO89c37nPfU9Z0QiQYIECRIkSJAgQYIECRIkSJAgQYIECRKk1Mn6639Q1DEWZXXMvxQcEyrnmY/lHBOi4FjXMq7KvKyi4o3GjwrqLcm5qhFynlmk4JnzCp5Fu8YxTxU8Uy7n2AQFd+tdgYqOBOBXcr5yqpxjT3UIQYvJOeaJgmNLyvnKUQKYHqi8ljVT8Oz33QWhGQ5bfOIe87YApqtewZGqhlQ7uoPRYkxNOV/lJkDphE4wzJtyjtndnYx+/OwpiC7c41H76CG4xw9x8X4dOql7AN4SIKnoaG3t7+QcW9Y7XqGlCuPZxQBeEb0kesVaT8/C1sgwQTp8WJ61oX6Mlb6+eXcutBeXfivnmQO6zOzKh/dp0f/5+TNc0uIpNx7cJVDyRL902enp/U1qPrz8wwlj7y9LS3hUuiYfK+alPvaYYHFfOsLsO+tBg/7elespOHZlX3pGG0+pY/1Fv1RZGRi8JzY1qd9auPTnp094PHta32zk+daCvKfiYSZ8Z6EoeMZDF5la+/hhpxqLZ3hO25bnAJ4+f44f7/GqbzcAGCD6BekVibnpma2rl/2sCqK1lRTkPXUZMfxo03+y0dMzsTLU87TSHzzXRl9/rJub6FXyury6+k9yjuX60ztU7PutAE3XL0ZWBoMmeFiOvf/05zqtMIj9/ITDNIsx960MBrkQgORxhizofnZ0+IPZdlPuOg03rbQ2GGTZ31WVBvMR/ZJkN3RIakFORrve0WR5qfGPbAz1n+7evPZZa4DHv/0S0hFmD9d/vqOXxhrdbEt49hbpYIheRJFqxcHYKFg6YvhNOyODJ84jh1+3MzI8u3NjYYcwiF08o4Di4N7n2t4/8/1huFta4HDl1X4HoWYc4yV6ESU1Ny0KcJM2/Hi6DA13GZwqP4BZNpMathYu7RSQjuznJzz8XCTwsJ4Me1NTanOmuiB//WqU1Vb2GYCymgqsKC5Cdt4ilNXcINMrZaIXTVYGBkPdx45qaLjHqmXi459u4/GjWvqYvXkem1d8gsNfbu80hAf3GGxamQtvsS1sjY1gbaAHG7PhcPUOw7/Sl8Fu5Cj6mu1QI8ywt8GC3GwcrrymcwjkmuTa5B7kXuSexKZOnkTfP3qn5h/9zUA02XCQmXSkaYnrKPNL4mHGNcszkx9ry9iyb3ajZNUSPLhf1SEEruoylmcmY8bkibAZMkSZ4WPGQ+yTBOe8b+C+h8OHCTlIqalHIlOPsBPXMHt5CRym2CqBDRkC94mWSE6Kx74Lp7sNgfzfpOQ4ei3VdDj6JNN0OIXnwtpQX9mWcExIv8KQmA9b4jp6xIPStcuf//hDGc7++wju1t/SmMFPHnMoXJjZLoSKK6exODEaU8eNhbWhgfLLW1rDMSATLku/hfueOrh/Xg/XzZchiSuExHka/FYWIu7cZQqGWHJ1HSLPsfDevA+SD+fQzLI20Iej+XCE+s3FZ/JDHUL4/GQ5YmMi4Gwxpt10EJMkrqXvK9sRdle/wXAyGxbrI7FvuHdHMwBi/O1rKMjJwLq8bGTHhOPovp1tPvPdkX2I9/GEk7mZMvMMDWBnPw1O0SvguvFc8xd323wJkqR1cIpcQmGQ58RDEi5dR2BxCebmLmmEc6kZTkp1PaIv34bvzqNw9g5VZq6hPsTmwxHoNQvFX+xqhkAek9fEw1vSYe/goUzHhvPN6aCFIbaAekZrIHKeYfsFxqTBgwc4mpo0VFX8qBHE9UuncGD3VuQmxTRXT8RzWntP2IxpynrYaCgc3LwhSd4It63XWyBsugin2AJaMslfAqHpPWJNVVaTtQunph5xN3kE7j+JadEZsBlqrCz5JsbUVNMhTVFPR5O5rD1FYZB0OIXmtPUQnkW/rJtY6elJombPuKsJxqaVS/DVpxtx4/IpVN260G4VRUqheG4C3HdUt5TA4ouQxK6CY2Am9QRSIt1bZYw2IGqZf+4SfFcUwDMzi/5VrdaIxVfUIejQOUi9wiH2S4Xzgh1q6aAeSQpD8Hy476xpc29tQBS1rGnfA9EfFL4sI+lJ6ww+ffygxmpJKxADPfqFaOkr/E4JIX413DZf0QrBvdFsU9ZgstgRPqXbtUJpgXO5FZwWzyFQ20AIyuqwMGgFwjFflHOM9ATwWt8BMRg8MznI576mQd2jhzXdAtKeuWw8C3HmFjjm7IQ4ZxcsvWUYsCgdAwO98F5mAj4qKFQDELL/IMaFBWFyTCScU5IRfkyhFY57cGynIXQKSNPonWNvynnGm6xk9jqQyYMG/dnRzOThHf5mjwZ5nQUy2jcMb+VlNNuvi/MhKi2kQMhfy/BQNSDixHiIthXQ917ZtgrjQvy1eo7LbP9OQ+gKkBaPYY+UcRV/6XUoUnOz/GivmQ+64hHdAWIpS8M7uVk0c5vsFZLZ2wooEL3EKAR/+Y1aRk+Mj1b7/NiIEK3VmWqV1StAlL2vquN8lWGvAjE1NX1NMsJ0j6e99f1Dn5eiuvIi7tZVdNrIyF0ViNtnVXBZJafW1Ia4lVyFfkS4Wub+astKjJzjD3OfAPzTbxakKcltMtn64wj8dk0uflO0BG+uWgjXzAy192NPn1cD4rzyGKw+Xgy7tPVqYwxdAWlsW24fv1P9Qa+vc5CpctdRIw87mZnw9sZDHrQ28TDjn6QjzdHacrMzm4G4bbmGkXP88G5KLDWDsFBMCkygr71aslwNyD9jIuFSdBKOC0ox0t4Ksv2H2gCJPXsBM/NXYObyFfhoWT6SKqqb35u5ciXGzPRA4rVKyI4qMMXBgd7ztQ1LMSA3E5Zzw+H26S3dA1FWX6f7tLFvLbJwo+CYHG0JbAIy3j8ab2cn4d20OPyqZCXN+Fc3r2huB0QqZhEQpcyUPTyks/yQzHId9rJUzSYhFgNTojE9MwuDE6IwMMBT7fqvbVyGoUFBMPcLabbRQVGYJMtQA9UtINSqIvsUwsHr11+Xc1Wz5DzzjYJn7reXuCYg4ty9sM8qgXPhcYydE4TfFn3SBoSosbqa7BkG+/QNcN/dMpelzWauKsDIUH9YRUfCJSMdLlmZGBYTTmG/syiVXvN/09TbG2323/nzYZ+5SQdAmPt9FqZaVlcpVnDM9c4mTmOjvqMa5r5BWjPm7YWpeGd+AuxSi9oFknDlJkwiQzqV2RptWwHeT4yGfmgw3ijIgbm3n9r4qPtA6IJWRq/DUHBslpxjnnclYapAyJxR05edGJLcbkYNloXAacVRjUBI2+C5Zi2swoLx5upFHWa8Ng95PyEakqUH6BSKTVw+3Eoret6GtDTwN3p1fKLgmfQuJUgTkMYvqASSojGTBuSmY5R3ICQrDtPPaQIiSUnCm6tyOu0JTWOZ1jbCP0z3jbqq1TEWvQKjjGdtuuoZHQGZFJra3Lir2jjfSLVM0QQkZP8hGMRH9AjI75ZnwyY+n97DNn09bBJX6hyInGdlvdOL4tkfuwOjPSAuxRcwfq4Mf8ybRzPo18XL8IfFaRjtH66WKbMKdmoe7OXk4PXVi7sF5IOEGFhHZMNtVy2tsv6aHIN3U+MgXX64XSAHrl3Aul2fYu1nW7D3hxOdqLbYAp0DUdQyTt2F0RoImfJuXQonBCVgVEAEpkRlwylnN6RrTqi9H3iyLYygr/ZjZGiARg/rDJDhgY3Q99RhzNxg2maR3t2k4GTNQOJWQWxiTMdWMb6eSAz0wdTxYxE61xP7L5/V7iEce1jnQOQcu0n1Jlca6mkYX82jB10G0h2bpcFD3OdldRpGayCvbF2FcQHRcPu0EmO8A/BW/oLmjsSEgLi2QMhYyNYJqSH+NKCjOYbgUS3WfrIAsx0dcPjWFW0e0hwQqDMpeLZSVx7iWnSqy0A+1NCGOMS2P654Y00uJslCMFoWrAQS4IkBOak00/VkYXBe/T0d5/zXikYYpYX404IkOJL1klZApJml8HNzoQF+mubq5sdEYP7CeVhWVIC5blK4jB6B6bZWyFyQgQM3Lx3ULQyOe+vUnds01rW1uuMhqm2INrNKLoD9gk+1Agn5cj/eT49rF4iZLBAJ127R3hh5biG2hzihEGYzpsN+3hZlG7buBwyMiWpuv8bNbdXj2lENp+AFcJvhj693bNY6eXrhjJx+x4jZM/DDiW9Rz93AuZNHkRTkhxk2Vg02Awfqbm/Jcb7yvZ54R1eBSJYfwd8SY/BeagKsIhfS8cGH8dlqQOYWb6Yjam0wjGIj4Ld9B/3snOJNGBQZCMfpnvT6reevJgTE4v34KIz1CqBzbRTU6u/hLHaFnYkx7IyNYDfMhEZTagNCAju2rV7WHAKlaumyoCdOZqb5Xc54APGd3U5E9lOQyHDiNefvcXj2XOk/5N8zd2t7BMTCN1w57V5aiN/nL4BeeBgm29vTKJPmZdnLN2AVEYbRsiD8PStBDcY7n6TDs6hILTpFtu+bttPvuzmM8w2Hia8fTHx9YEnalO0snY12HDsOX366kUbrk9K+MCmGxg90Z+nh5pVTcBxmfFdnHnIWZ38j55hnfeEhbiVX8X8ftx1bjJaIkXiD1dj1nZadjdfXtHR9LWWa10RIx0D1Xq7FF/BB/Mct7UdqFGxt7CGVeCDKx7tHC3Kq9uin2yS65ZmV4eAp3QIAYHejI0QBkAH48fSd2zc0tSGt1VMPcdtRDaPgYI1AVKfWVS2q7Dv8JTOuuR0gvS9NnyNd59b3G+8bgddXL8KI6e7wsJuCz9avwje7ttBSrQsYe7euw/qlOcgMD37uOmbET1Jz0y1NWy16JDK46as2xDo2D+8sTFcDYuko1jq5SIC8lxWvnHJZmIzQL75G7PkrsI+KoLO/Xps2a/SQpgJg4zIdITM8uhQj0Bljbp6jUTlNzx82VCN4mmuDvbFReI+BXG2o93qu0n70JhD3z+sx1lfWDIOMNawlUu2zvVdvYWiM8vMDspMQvu8g3NLS8Opm5YLXyPCgdpdwnSzG0VAmXcLQZpfOlkNibsbqam94t09L6CoQu6QCOhVOMnSYfyCmRqS0vxgVFYFXNy2nHhLyxT5IkpVdXWITI8PUgJBe1qSwNJiFRWOUvwy2RoboaIORroz0wmwM9Z/ppNqSc8wUXU8uam1LNl3EP+KiMGBxGhzmbelwgSr+0jVMCQ2COC4GSUwtDQkiMP64dB5mr1X2uMg17LJKMMw/iK7B0xH7tgLYmpvS6qUvgFy98D0czUzqewyjBQo7v0+AbGehHx4G08BQOm2hbXJRm/nt2IUhkUGwj5AhpYpvBkK8rXWHYYj3DET7e2sdhevKyPWjZs944GRqvEBnQMgmegXPftLbQFw3nMXfE6IxPjhe6+RiR0ZisZKrWtbhCRDzgJa2qcnIMq+l2Bp+bs7Y99kmnD91jI682zMSu1zDXKR/b7OXaeAg2RvTVC2R502fJdcj1/WRih9KzE2P2QwcqNstcQQK2bct55mG3gNyHiOnToVDtnL6pKseonGqPiEHlkHxzRAMZGEwCgmlYUR/WJIFu49C4erhDRc7CRzHWcDBchycrezhbDkRLnZSOE+cAqm5GeY4S7CxdBPmZSRjw7ZiLMzJwhxXCb7+7ijO363BgZPl9Dn5HDFvFylkvnPI/pXS8ePH/1rUWzpae/PPjVVYpa6BuLea4uioDeksEMnKMpj6BmCMVwBct1ylVePksDSMD4ilI3dSPY73DsNr6/PwRsFC2Kas7fmKYZNxzDJRX+l4beUgOc/akVN06Moiz67uKRD3DmZ7uwOkaeyhKcqdpi13L97OVnYI3lqaBfH87boDwjOlov4SgfOiAnFvxxwySuikJYkTNvfypfNaugIi55mi/j5crGdAdnNwzt0Hx5AFdEsbiWL3K1zbZnOOLoEQABY+4RjjEwbntcp1G91VWey8fgNSdqfif1THLF2Zy5Jm74Zj0Dw4+qXRx2TNu8lD4i9eQ8CGTfBMz8TcRZ8g8ohcp0CazGX1vyGJWkq3LkiztuvKQ7xF/SkFx1zpFJBGCOR1x+D56pstd1TTHU9ie1d45Rcj8uTV5mn4xJtVCNmxG3PmZ1OT7d1HB4XdArKHp8HfTpF5EPunN8chq6ZR7B1Pd4J1F8ix+kqTfgVCzi/UBoR8WUliES2BJBNIiWz2kq3X6R5EsgeQ7AVU7ksfSheJ6OPh5piesgghR84ikVHCSWZuI2zPF/DKmo+Yf5/pHJCd1bRKdJIthmNABi0Uqo29pnT4TPfornfI+xUGBcJXTtMIJDwXkpiV6jteN56jEY12Dh5d2kFrM9QIU0PjEPBlORIqlCNy1ekUr4ws+BdtoI8JELet12gm04IgWwyXFcfUtiW0m46v9vSk/XB9IY7kU/DsT62BqNbTZOuzva1bz/aYj23cYz7EAK6efvDd+jVirrSsnRCP8Vm2nHYMnKKXw3XdGZ2moxO2RvSiSM4z6ygQQ33qGeREBHIyAjkhQdenMCQnxaudwiBxngqvtTsQde4WklWrrD2c1nSQkxx6kg5NVdULdYp2WV31ENLbImeENJ0X0pfnlNg0nlPiaGML6Qx/OHwUQc9OoRB6OR0kHuvInZt/FL1okvPsdnKKDjlNh5yqQ07X0fmX5zUbuRc5PYicImRnYkLNy91ZeaJQb6WDYx+RbQgkFkH0IupYHfs3Oc8+6CsIil40cjRTeR07jmzJIB7QePzgQ7LZU8ExhxQcE9snO3F7KjnPhvd3Zip6XPKZ2y/Nwf10yp5nt/d9iWaeKzjmh57DYB+V11ZOEr1MIiGpuj48X9ExkGAaV9Zq9rmL17hDlq9FL6PK71YO6EmwhKLzmfhMUVsVoHpvBceGdbUtk3PMt2U1FQNFL/uv38g5Zk/vwWDryX4WTfc+Ucf8Vc4zS+U8c1d79cQ8pTuLaxmnl+nc986EFcWTulmnQDjmUGdOUSBHvSpqqyY0/gzSPGo8EyWvrXT8j/79kGO1zODu/vyEQr1quabg2Jn/MSW6Lxa0lA0vc79L7QTp+/OMR78eY/Ey6yA9HYKZouCZtMZu8gk5x1ylxjPn5Dz7FQlDIr++dvge+05/p1eQIEGCBAkSJEiQIEGCBAkSJEiQIEGCBAkSJEiQqMv6f3HsQjuSanVkAAAAAElFTkSuQmCC">
        </div>
        <!-- Menu -->
        <div class="py-4">
          <ul>
            <li class="py-2 px-4 text-white hover:bg-gray-800 flex items-center cursor-pointer">
              <span class="material-symbols-outlined">
                travel_explore
              </span>
              <a href="<?= base_url(); ?>index.php">Peta</a>

            </li>

            <li class="py-2 px-4 text-white hover:bg-gray-800 flex items-center cursor-pointer">
              <span class="material-symbols-outlined">
                dataset
              </span>
              <a href='<?= base_url(); ?>index.php/DataKecamatan'>Rekapitulasi</a>
            </li>
            <li class="py-2 px-4 text-white hover:bg-gray-800 flex items-center cursor-pointer">
              <span class="material-symbols-outlined">
                groups
              </span>
              <a href='<?= base_url(); ?>index.php/DataMasyarakat'>Data Penduduk</a>
            </li>
            <li class="py-2 px-4 text-white hover:bg-gray-800 flex items-center cursor-pointer">
              <span class="material-symbols-outlined">
                groups
              </span>
              <a href='<?= base_url(); ?>index.php/DataMasyarakat/showInputMasyarakat'>Input Penduduk</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="ml-48 w-full h-screen">
      <?php echo $content; ?>
    </div>
  </div>

</body>

</html>