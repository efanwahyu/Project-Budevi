@extends('layouts.master')

@section('title','About')

@section('container')

<section class="inner-page">
    <div class="slider-item py-5" style="background-image: url('frontend/img/slider-2.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center text-center">
          <div class="col-md-7 col-sm-12 element-animate">
            <h1 class="text-black">Liverpool F.C.</h1>
          </div>
        </div>
      </div>

    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-6 order-lg-3 mb-5">
          <img src="frontend/images/team_pertama_liverpool.jpg" alt="Team Awal Liverpool" class="img-fluid">
        </div>
        <div class="col-md-1 order-lg-2"></div>
        <div class="col-md-5 order-lg-1">
          <h2 class="text-uppercase heading mb-4">History</h2>
          <p class="mb-3">Liverpool didirikan pada tanggal 15 Maret 1892 sebagai akibat perseteruan antara Komite Everton FC dengan John Houlding sebagai Presiden Klub yang juga pemilik stadion Anfield. Sebelumnya pada tahun 1891 John Houlding, sebagai penyewa dari Stadion Anfield, membeli tanah tersebut secara langsung dan mengusulkan meningkatkan harga sewa dari £ 100 sampai £ 250 per tahun. Everton, yang telah bermain di Anfield selama tujuh tahun, menolaknya dan terjadi perseteruan.</p>
          <ul class="list-unstyled check">
          
          </ul>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6 order-lg-1 mb-5">
          <img src="frontend/images/Liverpool.png" alt="Image placeholder" class="img-fluid">
        </div>
        <div class="col-md-1 order-lg-2"></div>
        <div class="col-md-5 order-lg-3">
          <h2 class="text-uppercase heading mb-4">Liver Bird</h2>
          <p class="mb-3">Lambang 'Liver Bird' pertama kali muncul di seragam Liverpool FC pada partai final Piala FA tahun 1950. Lambang yang secara signifikan telah menjadi bagian dari perjalanan panjang Liverpool FC. Lambang Liverpool ini mengalami perubahan pertama pada musim kompetisi 1955-56 dimana gambar 'Liver Bird' berada di dalam lingkaran ouval dan tulisan L.F.C berada di bawah 'Liver Bird'. Lambang versi ini bertahan sampai tahun 1968.
            Pada tahun 1968 diambil keputusan untuk memperkenalkan lambang klub yang lebih modern. Lambang 'Liver Bird' langsung disulam ke seragam pemain dengan menyingkirkan garis pijakan pada kaki 'Liver Bird' dan menghilangkan lingkaran ouval. Lambang ini bertahan sampai tahun 1987, dimana pada tahun 1985 sponsor seragam berubah dari UMBRO kepada ADIDAS.</p>

          <ul class="list-unstyled check">
            
          </ul>
        </div>

      </div>
    </div>
  </section>
  @endsection