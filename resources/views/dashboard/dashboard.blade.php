@extends('include/mainlayout')
@section('title', 'Dashboard')
@section('content')
    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div>

     <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
          <div class="col-xxl-4 col-md-3">
    <div class="card info-card revenue-card">

        <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                </li>
                <li><a class="dropdown-item filter-link" href="#" data-filter="today">Today</a></li>
                <li><a class="dropdown-item filter-link" href="#" data-filter="this_month">This Month</a></li>
                <li><a class="dropdown-item filter-link" href="#" data-filter="this_year">This Year</a></li>
            </ul>
        </div>

       <div class="card-body">
    <h5 class="card-title">Jumlah Pelatihan</h5>

    <div class="d-flex align-items-center">
        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
            <i class="bi bi-people"></i>
        </div>
        <div class="ps-3">
            <h6 id="filteredData">Loading...</h6>
            <p>Filter: <span id="filterLabel">Loading...</span></p>
        </div>
    </div>
</div>

    </div>
</div>

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-3">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jumlah Karyawan ADMP</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-3">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jumlah Karyawan Coaching</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>                     
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-3">

              <div class="card info-card cost-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Jumlah Biaya Training</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cash-stack"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>                     
                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

          
          
     
        </div>

      </div>
    </section> 

 
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.filter-link').forEach(function (item) {
        item.addEventListener('click', function (event) {
            event.preventDefault();
            var filter = this.getAttribute('data-filter');

            // Use AJAX to fetch filtered data
            fetch("{{ route('dashboard.countpelatihan') }}?filter=" + filter)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    // Update the displayed data and filter label
                    document.getElementById('filteredData').innerText = data.count;
                    document.getElementById('filterLabel').innerText = filter;
                })
                .catch(error => console.error('Error:', error));
        });
    });
});



// Handle filter change for Pelatihan
$('#statusFilterPelatihan').on('change', function () {
    var statusValue = $(this).val();
    pelatihanTable.column(9).search(statusValue).draw();
});

// Handle filter change for ADMP
$('#statusFilterADMP').on('change', function () {
    var statusValue = $(this).val();
    admpTable.column(9).search(statusValue).draw();
});

$('#statusFilterCoaching').on('change', function () {
    var statusValue = $(this).val();
    coachingTable.column(9).search(statusValue).draw();
});
</script>

@endsection