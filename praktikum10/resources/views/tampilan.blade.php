@extends('layouts.app')
@section('content')
    <div class="container">
      <h1 class="text-center">Selamat Berbelanja</h1>
      <div class="d-flex justify-content-center">
        <div class="input-group mb-3 mt-3 position-relative w-50">
          <i class="fas fa-search position-absolute left-0 top-0" style="width:24px; z-index:10; margin: 10px 8px"></i>
          <input type="text" class="form-control rounded" style="padding-left: 42px" placeholder="Cari kebutuhan anda" aria-label="Example text with button addon" aria-describedby="button-addon1">
        </div>
      </div>
      <div class="container-fluid pt-sm-4 pt-2">
        <div class="row">
          @php $no = 1; @endphp
            @foreach ($produk as $p)
            <div class="col-sm-4 mb-4">
              <div class="card shadow border-0" style="width: 18rem;">
                <img src="{{ asset('img/tesla.jpg') }}" class="card-img-top" alt="tesla">
                <div class="card-body">
                  <h5 class="card-title">{{ $p->nama }}</h5>
                  <p class="card-text">{{ $p->nama_kategori }}</p>
                  <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center gap-2">
                    <i class="fa-solid fa-cart-shopping"></i>
                    Beli
                  </a>
                </div>
              </div>
            </div>
            @php $no++; @endphp
          @endforeach
        </div>
      </div>
    </div>
@endsection