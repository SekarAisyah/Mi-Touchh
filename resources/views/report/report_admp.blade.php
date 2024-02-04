@extends('include/mainlayout')
@section('title', 'ADMP')
@section('content')
    <div class="pagetitle">
      <h1> Laporan ADMP</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Laporan ADMP</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fa-solid fa-square-poll-vertical"></i>  Laporan ADMP</h5>
              
              <!-- Modal View -->
                <div class="modal fade modal-view" id="viewadmpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-6" id="btn-view">View admp</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="admp-details">
                                    <div class="col-12">
                                    <div class="form-floating">
                                        <h6 class="labelku">IDENTITAS PESERTA</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="nrp-peserta">NRP Peserta :</label>
                                        <span id="nrp-peserta"></span>
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
                                        <label for="perusahaan">Divisi:</label>
                                        <span id="divisi"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="distrik">Distrik:</label>
                                        <span id="distrik"></span>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">INFORMASI ADMP</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="nama_admp">Nama Program ADMP JA: </label>
                                        <span id="name_admp"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="kode-pengembangan">Kode Pengembangan:</label>
                                        <span id="kode"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="name-kompetensi">Nama Kompetensi:</label>
                                        <span id="kompetensi"></span>
                                    </div>
                                   <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">WAKTU PELAKSANAAN</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="waktu_awal_admp">Tanggal Mulai Penugasan:</label>
                                       <span id="waktu_awal"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="waktu_akhir_admp">Tanggal Berakhir Penugasan:</label>
                                        <span id="waktu_akhir"></span>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">MANFAAT ADMP</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="deskripsi">Deskripsi Singkat :</label>
                                        <span id="deskripsi"> </span>
                                    </div>
                                     <div class="detail">
                                        <label for="target">Target yang Diharapkan/Sasaran:</label>
                                        <span id="target"> </span>
                                    </div>
                                    <div class="detail">
                                        <label for="hasil">Hasil dari Implementasi:</label>
                                        <span id="hasil"> </span>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">KETERANGAN</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="keterangan_atasan">Keterangan Atasan :</label>
                                        <span id="keterangan_atasan"> </span>
                                    </div>
                                     <div class="detail">
                                        <label for="keterangan_hr">Keterangan HR :</label>
                                        <span id="keterangan_hr"> </span>
                                    </div>
                                     <div class="detail">
                                        <label for="keterangan_hr_mng">Keterangan HR MNG :</label>
                                        <span id="keterangan_hr_mng"> </span>
                                    </div>
                                     <div class="detail">
                                        <label for="keterangan_director">Keterangan Director :</label>
                                        <span id="keterangan_director"> </span>
                                    </div>
                                    <div class="detail">
                                        <label for="revisi_by">Revisi by :</label>
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
                <div class="row" method="GET" action="report-admp/search">
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
                      <option value="6">Pending HRGA</option>
                       <option value=6>Pending HRGA</option>
                      <option value="Pending HRGA">Pending HRGA</option>
                      <option value="Revisi Atasan">Revisi Atasan</option>
                      <option value="Revisi HR:PD">Revisi HR:PD</option>
                      <option value="Revisi Manager">Revisi Manager</option>
                      <option value="Revisi Direksi">Revisi Direksi</option>
                      <option value="Revisi HRGA">Revisi HRGA</option>
                      <option value="Aprroved">Approved</option>
                  </select>
                  </div>
              <table class="table dt_admp" id="datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">KODE KOMPETENSI</th>
                    <th scope="col">KOMPETENSI</th>
                    <th scope="col">Waktu Awal Penugasan</th>
                    <th scope="col">Waktu Akhir Penugasan</th>
                    <th scope="col">Deskripsi Singkat</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                {{-- //sekar --}}
                @foreach($admpData as $no => $admp)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $admp->NRP }}</td>
                    <td>{{ $admp->NAMA}}</td>
                    <td>{{ $admp->KODE}}</td>
                    <td>{{ $admp->KOMPETENSI }}</td>
                    <td>{{ $admp->ADMP_JA_START_DATE}}</td>
                    <td>{{ $admp->ADMP_JA_FINISH_DATE }}</td>
                    {{-- <td class="truncate-text">{{ $admp->informasi}}</td> --}}
                    <td class="truncate-text">{{ $admp->JA_RESULT_DESCRIPTION }}</td>
                    <td>
                        @if($admp->status == 1)
                            <span class="badge rounded-pill text-bg-primary">Create</span>
                        @elseif($admp->status == 2)
                            <span class="badge rounded-pill text-bg-info text-start">Pending Atasan</span>
                        @elseif($admp->status == 3)
                            <span class="badge rounded-pill text-bg-info text-start">Pending HR:PD</span>
                        @elseif($admp->status == 4)
                            <span class="badge rounded-pill text-bg-info text-start">Pending<br>Manager</span>
                        @elseif($admp->status == 5)
                            <span class="badge rounded-pill text-bg-info text-start">Pending<br>Direksi</span>
                        @elseif($admp->status == 6)
                            <span class="badge rounded-pill text-bg-info text-start">Pending<br>HRGA</span>
                        @elseif($admp->status == 7)
                            <span class="badge rounded-pill bg-success text-light">Done</span>
                        @elseif($admp->status == 8)
                            <span class="badge rounded-pill bg-danger text-start">Reject</span>
                        @elseif($admp->status == 9)
                            <span class="badge rounded-pill text-bg-warning text-start">Revisi Atasan</span>
                        @elseif($admp->status == 10)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi HR:PD</span>
                        @elseif($admp->status == 11)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>Manager</span>
                        @elseif($admp->status == 12)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>Direksi</span>
                        @elseif($admp->status == 13)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>HRGA</span>
                        @else
                            <span class="badge rounded-pill bg-danger">Unknown Status</span>
                        @endif
                    </td>
                    <td>  
                     
                <div class="dropdown">
                <a class="btn btn-sm btn-outline-secondary dropdown-toggle btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>          
                </ul>
                </div>
              </td>
              </tr>
              @endforeach
              </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
  

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script>

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
var admpId; 
$('.view').click(function() {
    admpId = $(this).data('id');
    $('#viewadmpModal').attr('data-mode', 'edit');
    
    $.ajax({
        type: 'GET',
        url: '{{ url('/admp/get') }}/' + admpId,
        success: function(response) {
       
            function hideIfNull(elementId, value) {
                var element = $('#viewadmpModal').find('#' + elementId);
                var detailElement = element.closest('.detail');
                
                if (value === null || value === 'null') {
                    detailElement.hide();
                } else {
                    element.text(value);
                    detailElement.show();
                }
            }

            $('#viewadmpModal').find('#nrp-peserta').text(response.NRP);
            $('#viewadmpModal').find('#name').text(response.name);
            $('#viewadmpModal').find('#jabatan').text(response.jabatan);
            $('#viewadmpModal').find('#departemen').text(response.departemen);
            $('#viewadmpModal').find('#divisi').text(response.divisi);
            $('#viewadmpModal').find('#distrik').text(response.distrik);
            $('#viewadmpModal').find('#name_admp').text(response.NAMA_ADMP);
            $('#viewadmpModal').find('#kode').text(response.KODE);
            $('#viewadmpModal').find('#kompetensi').text(response.KOMPETENSI);
            $('#viewadmpModal').find('#waktu_awal').text(response.ADMP_JA_START_DATE);
            $('#viewadmpModal').find('#waktu_akhir').text(response.ADMP_JA_FINISH_DATE);
            $('#viewadmpModal').find('#deskripsi').text(response.JA_RESULT_DESCRIPTION);
            $('#viewadmpModal').find('#target').text(response.JA_TARGET_DESCRIPTION);
            $('#viewadmpModal').find('#hasil').text(response.JA_SHORT_DESCRIPTION);
            hideIfNull('keterangan_atasan', response.keterangan);
            hideIfNull('keterangan_hr', response.KETERANGAN_HR);
            hideIfNull('keterangan_hr_mng', response.KETERANGAN_HR_MNG);
            hideIfNull('keterangan_director', response.KETERANGAN_DRC);
            hideIfNull('revisi_by', response.REVISI_NAME);
            hideIfNull('revisi_desc', response.REVISI_DESC);
            hideIfNull('reject_by', response.REJECT_NAME);
            hideIfNull('reject_desc', response.REJECT_DESC);

            $('#viewadmpModal').modal('show');
        },
        error: function(error) {
            // Tampilkan pesan kesalahan jika diperlukan
        }
    });
});

</script>
   

@endsection

