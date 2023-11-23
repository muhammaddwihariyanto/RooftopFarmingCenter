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
<<<<<<< HEAD
              <h5 class="card-title">Data Sensor</h5>
              <p>Information Regarding the Sensors Information</p>
=======
              <h5 class="card-title">Tabel Data Sensor</h5>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sensor</th>
                    <th scope="col">Nilai</th>
                    <!-- <th scope="col" disabled>Start Date</th> -->
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
<<<<<<< HEAD
                    <td>Nitrogen (N)</td>
                    <td>-</td>
                    <td>28</td>
=======
                    <td>Nitrogen</td>
                    <td>7</td>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436
                    <!-- <td>2016-05-25</td> -->
                  </tr>
                  <tr>
                    <th scope="row">2</th>
<<<<<<< HEAD
                    <td>Phosphrus (P)</td>
                    <td>-</td>
                    <td>35</td>
=======
                    <td>Fosfor</td>
                    <td>9</td>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436
                    <!-- <td>2014-12-05</td> -->
                  </tr>
                  <tr>
                    <th scope="row">3</th>
<<<<<<< HEAD
                    <td>Kalium (K)</td>
                    <td>-</td>
                    <td>45</td>
=======
                    <td>Kalium</td>
                    <td>5</td>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436
                    <!-- <td>2011-08-12</td> -->
                  </tr>
                  <tr>
                    <th scope="row">4</th>
<<<<<<< HEAD
                    <td>Soil Ph</td>
                    <td>-</td>
                    <td>34</td>
=======
                    <td>Ph</td>
                    <td>6.85</td>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436
                    <!-- <td>2012-06-11</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
<<<<<<< HEAD
                    <td>Electrical Conductivity (EC)</td>
                    <td>-</td>
=======
                    <td>Kelembaban</td>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436
                    <td>47</td>
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
<<<<<<< HEAD
                    <td>Soil Temprature (SH)</td>
                    <td>-</td>
                    <td>47</td>
=======
                    <td>konduktivitas</td>
                    <td>18</td>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436
                    <!-- <td>2011-04-19</td> -->
                  </tr>
                  <tr>
                    <th scope="row">5</th>
<<<<<<< HEAD
                    <td>Humidity</td>
                    <td>-</td>
                    <td>47</td>
=======
                    <td>Tempratur</td>
                    <td>30</td>
>>>>>>> 758eef8f6c7ccada3bccfe13f9f113d6a8c54436
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
