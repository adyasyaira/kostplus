@extends('pelanggan.layouts.pelanggan')
@section('content')
  <style>
    /* Custom CSS to add border-bottom on hover */
    .col-6 {
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      border-bottom: 3px solid #D3D3D3;
      border
    }

    .col-6:hover,
    .col-6.active {
      border-bottom-color: black;
    }

    .position-relative {
      position: relative;
    }

    .label {
      text-align: center;
      position: absolute;
      top: 0;
      left: 0;
      width: 90px;
      height: 35px;
      border-radius: 5px 0px 0px 0px;
      background-color: #d25c5d;
      color: white;
      padding: 5px 10px;
    }
  </style>
  <div class="container d-flex flex-column gap-3">
    <span class="border border-1 w-100"></span>
    <div class="row text-center">
      <div class="col-6 pb-3 active">
        <span class="fw-semibold fs-3">Difavoritkan</span>
      </div>
      <div class="col-6 pb-3">
        <span class="fw-semibold fs-3">Pernah Dilihat</span>
      </div>
    </div>
    <div class="d-flex gap-3 my-4">
      <div class="card">
        <div class="position-relative">
          <span class="label">Putri</span>
           <img src="{{ asset('images/produk1.jpg') }}" class="card-img-top" alt="Produk 1">
        </div>
        <div class="card-body">
          <h5 class="card-title">Kost Ibani</h5>
          <p class="card-text fw-semibold">Condong Catur</p>
          <p class="card-text text-truncate">K.Mandi Dalam - Wifi - Kasur - Lemari - Air Conditioner</p>
          <p class="card-text fw-semibold">Rp 1.500.000 / bulan</p>
        </div>
      </div>
      <div class="card">
        <div class="position-relative">
          <span class="label">Putri</span>
          <img src="{{ asset('images/produk4.JPEG') }}" class="card-img-top" alt="Produk 1">
        </div>
        <div class="card-body">
          <h5 class="card-title">Kost Ibani</h5>
          <p class="card-text fw-semibold">Condong Catur</p>
          <p class="card-text text-truncate">K.Mandi Dalam - Wifi - Kasur - Lemari - Air Conditioner</p>
          <p class="card-text fw-semibold">Rp 1.500.000 / bulan</p>
        </div>
      </div>
      <div class="card">
        <div class="position-relative">
          <span class="label">Putri</span>
          <img src="{{ asset('images/produk3.JPEG') }}" class="card-img-top" alt="Produk 1">
        </div>
        <div class="card-body">
          <h5 class="card-title">Kost Ibani</h5>
          <p class="card-text fw-semibold">Condong Catur</p>
          <p class="card-text text-truncate">K.Mandi Dalam - Wifi - Kasur - Lemari - Air Conditioner</p>
          <p class="card-text fw-semibold">Rp 1.500.000 / bulan</p>
        </div>
      </div>
    </div>
    <div class="mx-auto text-center">
      <span class="fs-5 fw-semibold">Halaman 1 / 1</span>
      <div class="mx-auto my-2" aria-label="Page navigation example">
        <ul class="pagination pagination-lg">
          <li class="page-item">
            <a class="page-link text-body" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link text-body" href="#">1</a></li>
          <li class="page-item"><a class="page-link text-body" href="#">2</a></li>
          <li class="page-item"><a class="page-link text-body" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link text-body" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
