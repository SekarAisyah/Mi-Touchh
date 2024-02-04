@extends('include/mainlayout')
@section('title', 'Pelatihan')
@section('content')
    <div class="pagetitle">
      <h1>Laporan Pelatihan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Laporan Pelatihan</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fa-solid fa-square-poll-vertical"></i>  Laporan Pelatihan</h5>

              <!-- Modal View -->
                <div class="modal fade modal-view" id="viewPelatihanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-6" id="btn-view">View Pelatihan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pelatihan-details">
                                    <div class="detail">
                                        <label for="nrp">NRP :</label>
                                        <span id="nrp"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="name">Nama:</label>
                                        <span id="name"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="jabatan">Jabatan:</label>
                                        <span id="jabatan"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="departemen">Departemen:</label>
                                        <span id="departemen"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="perusahaan">Perusahaan:</label>
                                        <span id="perusahaan"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="nama_pelatihan">Nama Pelatihan </label>
                                        <span id="nama_pelatihan"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="jenis_pelatihan">Jenis Pelatihan:</label>
                                        <span id="jenis_pelatihan"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="informasi_pelatihan">Informasi Pelatihan:</label>
                                        <span id="informasi_pelatihan"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="narasumber">Narasumber:</label>
                                        <span id="narasumber">d</span>
                                    </div>
                                    <div class="detail">
                                        <label for="alasan_pelatihan">Alasan Pelatihan:</label>
                                        <span id="alasan_pelatihan">d</span>
                                    </div>
                                    <div class="detail">
                                        <label for="sharing_pelatihan">Sharing Pelatihan:</label>
                                       <span id="sharing_pelatihan" class="info-text"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="waktu_pelatihan">Waktu Pelatihan :</label>
                                       <span id="waktu_pelatihan"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="tempat_pelatihan">Tempat Pelatihan :</label>
                                        <span id="tempat_pelatihan"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="biaya_pelatihan">Biaya Pelatihan:</label>
                                        <span id="biaya_pelatihan">Rp. </span>
                                    </div>
                                    <div class="detail">
                                        <label for="aprroval">Aprroval by :</label>
                                        <span id="approval"> </span>
                                    </div>
                                     <div class="detail">
                                        <label for="revisi_by">Revisi by:</label>
                                        <span id="revisi_by"> </span>
                                    </div>
                                    <div class="detail">
                                        <label for="revisi_desc">Keterangan Revisi :</label>
                                        <span id="revisi_desc"> </span>
                                    </div>
                                    <div class="detail">
                                        <label for="reject_by">Reject by :</label>
                                        <span id="reject_by"> </span>
                                    </div>
                                    <div class="detail">
                                        <label for="reject_desc">Keterangan Reject :</label>
                                        <span id="reject_desc"> </span>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal View -->
              
              <!-- Table with stripped rows -->
              <div class="container">
               <form id="filterForm">
                    <div class="row" method="GET" action="report-pelatihan/search">
                        <div class="col-md-3 mb-2">
                            <label for="start_date">Start Date:</label>
                            <input type="date" id="start_date" name="start_date" class="form-control" value="{{ $startDate ?? '' }}">
                        </div>

                        <div class="col-md-3 mb-2">
                            <label for="end_date">End Date:</label>
                            <input type="date" id="end_date" name="end_date" class="form-control" value="{{ $endDate ?? '' }}">
                        </div>

                        <div class="col-md-4 mb-2">
                        <label for="end_date"></label><br>
                            <button type="submit" id="searchBtn" class="btn btn-primary btn-sm">
                              <i class="fas fa-filter"></i> Filter
                          </button>
                        </div>
                    </div>
                </form>
                  <div class = "">
                  <div class= "col-md-3 mb-4">
                  <label for="statusFilter">Status:</label>
                  <select id="statusFilter" class="form-select">
                      <option value="">All</option>
                      <option value="Create">Create</option>
                      <option value="Pending Atasan">Pending Atasan</option>
                      <option value="Pending HR:PD">Pending HR:PD</option>
                      <option value="Pending Manager">Pending Manager</option>
                      <option value="Pending Direksi">Pending Direksi</option>
                      <option value="Pending HRGA">Pending HRGA</option>
                      <option value="Revisi Atasan">Revisi Atasan</option>
                      <option value="Revisi HR:PD">Revisi HR:PD</option>
                      <option value="Revisi Manager">Revisi Manager</option>
                      <option value="Revisi Direksi">Revisi Direksi</option>
                      <option value="Revisi HRGA">Revisi HRGA</option>
                      <option value="Aprroved">Approved</option>
                  </select>
                  </div>
              
              <table class="table dt_pelatihan" id="datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Pelatihan</th>
                    <th scope="col">Kompetensi</th>
                    <th scope="col">Awal Pelatihan</th>
                    <th scope="col">Akhir Pelatihan</th>
                    <th scope="col">Manfaat Bagi Karyawan</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                {{-- //sekar --}}
                @foreach($pelatihanData as $no => $pelatihan)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $pelatihan->NRP}}</td>
                    <td>{{ $pelatihan->NAMA}}</td>
                    <td>{{ $pelatihan->KODE_KOMPETENSI}}</td>
                    <td>{{ $pelatihan->KOMPETENSI_DESC }}</td>
                    <td>{{ $pelatihan->MULAI_TRAINING }}</td>
                    {{-- <td class="truncate-text">{{ $pelatihan->informasi}}</td> --}}
                    <td>{{ $pelatihan->SELESAI_TRAINING}}</td>
                    <td class="truncate-text">{{ $pelatihan->MANFAAT_BAGI_KARYAWAN }}</td>
                    <td>{{ $pelatihan->BIAYA}}</td>
                    <td>
                        @if($pelatihan->STATUS == 1)
                            <span class="badge rounded-pill text-bg-primary">Create</span>
                        @elseif($pelatihan->STATUS == 2)
                            <span class="badge rounded-pill text-bg-info text-start">Pending Atasan</span>
                        @elseif($pelatihan->STATUS == 3)
                            <span class="badge rounded-pill text-bg-info text-start">Pending HR:PD</span>
                        @elseif($pelatihan->STATUS == 4)
                            <span class="badge rounded-pill text-bg-info text-start">Pending<br>Manager</span>
                        @elseif($pelatihan->STATUS == 5)
                            <span class="badge rounded-pill text-bg-info text-start">Pending<br>Direksi</span>
                        @elseif($pelatihan->STATUS == 6)
                            <span class="badge rounded-pill text-bg-info text-start">Pending<br>HRGA</span>
                        @elseif($pelatihan->STATUS == 7)
                            <span class="badge rounded-pill bg-success text-light">Aprroved</span>
                        @elseif($pelatihan->STATUS == 8)
                            <span class="badge rounded-pill bg-danger text-start">Reject</span>
                        @elseif($pelatihan->STATUS == 9)
                            <span class="badge rounded-pill text-bg-warning text-start">Revisi Atasan</span>
                        @elseif($pelatihan->STATUS == 10)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi HR:PD</span>
                        @elseif($pelatihan->STATUS == 11)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>Manager</span>
                        @elseif($pelatihan->STATUS == 12)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>Direksi</span>
                        @elseif($pelatihan->STATUS == 13)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>HRGA</span>
                        @else
                            <span class="badge rounded-pill bg-danger">Unknown Status</span>
                        @endif
                    </td>
                    <td>   
                    <div class="dropdown">
                    <a class="btn btn-sm btn-outline-secondary dropdown-toggle btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    </ul>
                    </td>
              </tr>
              @endforeach
              </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->
              <div id="chartContainer" style="width: 100%; height: 400px;"></div>


            </div>
          </div>

        </div>
      </div>
    </section>

 
<script>
$('#datatable').css('display', 'none');
var myTable = $('#datatable').DataTable();
if (myTable) {
    myTable.destroy();
}

var dataTable = $('#datatable').DataTable({
    dom: 'Bfrtip',
    buttons: [
        {
            extend: 'copy',
            text: '<i class="fas fa-copy"></i> Copy',
            className: 'btn btn-secondary',
        },
        {
            extend: 'excel',
            text: '<i class="bi bi-file-earmark-excel"></i> Excel',
            className: 'btn btn-success',
        },
        {
            extend: 'pdf',
            text: '<i class="fas fa-file-pdf"></i> PDF',
            className: 'btn btn-danger',
        },
        {
            extend: 'print',
            text: '<i class="bi bi-printer"></i> print',
            className: 'btn btn-danger',
        }
       
    ]
});

$('#statusFilter').on('change', function () {
    var statusValue = $(this).val();
    dataTable.column(9).search(statusValue).draw();
});

//VIEW sekar
var pelatihanId; 
$('.view').click(function() {
    pelatihanId = $(this).data('id');
     $('#viewPelatihanModal').attr('data-mode', 'edit');
    
    $.ajax({
        type: 'GET',
        url: '{{ url('/pelatihan/get') }}/' + pelatihanId,
        success: function(response) {
            $('#viewPelatihanModal').find('#nrp').text(response.nrp);
            $('#viewPelatihanModal').find('#name').text(response.name);
            $('#viewPelatihanModal').find('#jabatan').text(response.jabatan);
            $('#viewPelatihanModal').find('#departemen').text(response.departemen);
            $('#viewPelatihanModal').find('#perusahaan').text(response.perusahaan);
            $('#viewPelatihanModal').find('#jenis_pelatihan').text(response.jenis);
            $('#viewPelatihanModal').find('#informasi_pelatihan').text(response.informasi);
            $('#viewPelatihanModal').find('#nama_pelatihan').text(response.nama);
            $('#viewPelatihanModal').find('#narasumber').text(response.narasumber);
            $('#viewPelatihanModal').find('#alasan_pelatihan').text(response.alasan);
            $('#viewPelatihanModal').find('#sharing_pelatihan').text(response.sharing);
            $('#viewPelatihanModal').find('#waktu_pelatihan').text(response.waktu);
            $('#viewPelatihanModal').find('#tempat_pelatihan').text(response.tempat);
            $('#viewPelatihanModal').find('#biaya_pelatihan').text(response.biaya);
            $('#viewPelatihanModal').find('#approval').text(response.send_name);
            $('#viewPelatihanModal').find('#revisi_desc').text(response.revisi_desc);
            $('#viewPelatihanModal').find('#revisi_by').text(response.revisi_name);
            $('#viewPelatihanModal').find('#reject_by').text(response.reject_name);
            $('#viewPelatihanModal').find('#reject_desc').text(response.reject_desc);
    
            $('#viewPelatihanModal').modal('show');
        },
        error: function(error) {
            // Tampilkan pesan kesalahan jika diperlukan
        }
    });
});


// Combined function to initialize DataTable and create Highcharts chart
// Extract data from DataTable
var data = [];
dataTable.rows().every(function () {
    var rowData = this.data();
    data.push({ nrp: rowData[1], biaya: parseFloat(rowData[8]) }); // Assuming the data is in the second and ninth columns
});

// Sort the data by Biaya in descending order
data.sort(function (a, b) {
    return b.biaya - a.biaya;
});

// Take the top five highest Biaya values
var topFiveData = data.slice(0, 6);

// Create arrays for Highcharts series data
var seriesData = topFiveData.map(function (item) {
    return { name: item.nrp, y: item.biaya };
});

// Create Highcharts chart
Highcharts.chart('chartContainer', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Top Five Biaya Pelatihan and Corresponding NRP'
    },
    xAxis: {
        type: 'category',
        title: {
            text: 'NRP'
        }
    },
    yAxis: {
        title: {
            text: 'Biaya'
        }
    },
    series: [{
        name: 'Biaya Pelatihan',
        data: seriesData
    }]
});






    </script>
   

@endsection

