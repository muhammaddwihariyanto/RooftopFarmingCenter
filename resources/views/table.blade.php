<title>RFC - App | {{$title}}</title>
  @extends('partials.headerFooter')
  @include('partials.sidebar')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Sensor</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Sensors</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Sensor</h5>
              <p>Information Regarding the Sensors Information</p>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sensor</th>
                    <th scope="col">Nilai</th>
                    <th scope="col">Satuan</th>
                    <!-- <th scope="col" disabled>Start Date</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Nitrogen (N)</td>
                    <td>-</td>
                    <td>28</td>
                    <!-- <td>2016-05-25</td> -->
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Phosphrus (P)</td>
                    <td>-</td>
                    <td>35</td>
                    <!-- <td>2014-12-05</td> -->
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Kalium (K)</td>
                    <td>-</td>
                    <td>45</td>
                    <!-- <td>2011-08-12</td> -->
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Soil Ph</td>
                    <td>-</td>
                    <td>34</td>
                    <!-- <td>2012-06-11</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Electrical Conductivity (EC)</td>
                    <td>-</td>
                    <td>47</td>
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Soil Temprature (SH)</td>
                    <td>-</td>
                    <td>47</td>
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Humidity</td>
                    <td>-</td>
                    <td>47</td>
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

@endsection