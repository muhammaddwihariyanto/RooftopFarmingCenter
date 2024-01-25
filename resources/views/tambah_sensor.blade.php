<title>RFC - App | {{$title}}</title>
  @extends('partials.headerFooter')
  @include('partials.sidebar')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Sensor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tambah Sensor</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Form Tambah Sensor</h5>
              <!-- form start -->
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Sensor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <!-- <div id="emailHelp" class="form-text">Nama Sensor.</div> -->
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Sensor</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <!-- <div id="emailHelp" class="form-text">Nama Sensor.</div> -->
                </div>
                <br>
                <label for="exampleInputEmail1" class="form-label">Koordinat</label>
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Latitude</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Y</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Insert Latitude Here">
                      </div>
                      <!-- <div id="emailHelp" class="form-text">Nama Sensor.</div> -->
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Longitude</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">X</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Insert Longitude Here">
                      </div>
                      <!-- <div id="emailHelp" class="form-text">Nama Sensor.</div> -->
                    </div>
                  </div>
                <!-- <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
                <a href="#">
                  <button class="btn btn-primary">Submit</button>
                </a>
              </form>
              <!-- Form End -->
            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection