@extends('include/mainlayout')
@section('title', 'ADMP')
@section('content')
    <div class="pagetitle">
      <h1> ADMP</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          P<li class="breadcrumb-item active">ADMP</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fa-solid fa-square-poll-vertical">  ADMP</i></h5>
              <button type="button" class="btn bi bi-plus btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#admpModal"> Add ADMP</button>
              <br><br>

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

              <!-- Modal Add -->
                <div class="modal fade modal_add" id="admpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mode="add">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="btn-add">Add ADMP</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> --}}
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="action_flag" id="action_flag" />
                        <input type="hidden" name="tgl_mulai" id="tgl_mulai" />
                        {{-- <input type="hidden" name="last_seq" id="last_seq" value="{{{$last_seq}}}" /> --}}

                        <form class="row g-3 needs-validation" method="POST" action="/admp/create">
                        @csrf
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Identitas Peserta</h6>
                            </div>
                            </div>
                            <div class="col-4">
                            <div class="form-floating">
                                <select class="form-control" id="nrp-dropdown" name="nrp-dropdown">
                                    <option value="" selected>Select NRP</option>
                                    @foreach ($nrpOptions as $nrp)
                                        <option value="{{ $nrp->nrp }}">{{ $nrp->nrp }}</option>
                                    @endforeach
                                </select>
                                <label for="nrp">NRP <span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" readonly class="form-control" id="name-add" name="name-add" placeholder="name-add">
                                <label for="message-text">Nama Peserta</label> 
                            </div>
                            </div>
                            <div class="col-md-4">
                             <div class="form-floating">
                                <input type="text" readonly class="form-control" id="jabatan-add" name="jabatan-add" placeholder="Jabatan">
                                <label for="message-text">Jabatan </label>
                            </div>
                            </div>
                            <div class="col-md-4">
                             <div class="form-floating">
                                <input type="text" readonly class="form-control" id="departemen-add" name="departemen-add" placeholder="Password">
                                <label for="message-text">Departemen </label>
                            </div>
                            </div>
                            <div class="col-md-4">
                             <div class="form-floating">
                                <input type="text" readonly class="form-control" id="divisi-add" name="divisi-add" placeholder="Password">
                                <label for="message-text">Divisi</label>
                              </div>
                            </div>
                            <div class="col-md-4">
                             <div class="form-floating">
                                <input type="text" readonly class="form-control" id="distrik-add" name="distrik-add" placeholder="Password">
                                <label for="message-text">Distrik</label>
                              </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Informasi ADMP JA</h6>
                            </div>
                            </div>
                            <div class="col-12">
                             <label for="jenis_admp">Apakah ADMP yang Diajukan Masuk Plan ADMP Job Assignment di Tahun Ini?<span style="color:red">*</span></label>
                            <div>
                                <span style="display: inline-block; margin-top: 10px;">
                                    <input type="radio" id="admp1" name="plan_admp_add" value="admp1">
                                    <label for="admp1">Ya</label>
                                </span>
                                <span style="display: inline-block; margin-left: 10px;">
                                    <input type="radio" id="admp2" name="plan_admp_add" value="admp2">
                                    <label for="admp2">Tidak</label>
                                </span>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Silahkan  Pilih ADMP yang Diajukan</h6>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nama_admp_add" name="nama_admp_add" placeholder="nama_admp_add" required>
                                <label for="nama_admp_add"> Nama Program ADMP JA <span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-6">
                            <div class="form-floating">
                                <select class="form-control" id="kode-pengembangan" name="kode-pengembangan">
                                    <option value="" selected>Select Kode Pengembangan</option>
                                    @foreach ($kodeOptions as $kode)
                                        <option value="{{ $kode }}">{{ $kode }}</option>
                                    @endforeach
                                </select>
                                <label>Kode Pengembangan <span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text"  class="form-control" id="name-kompetensi" name="name-kompetensi" placeholder="Name">
                                <label for="message-text">Nama Kompetensi</label> 
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Silahkan Pilih Kapan Waktu Job Asignment Diadakan?</h6>
                            </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="waktu_awal_admp" name="waktu_awal_admp" placeholder="Nama admp" required>
                                <label for="nama admp">Tanggal Mulai Penugasan : <span style="color:red">*</span></label>
                            </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="waktu_akhir_admp" name="waktu_akhir_admp" placeholder="Nama admp" required>
                                <label for="nama admp">Tanngal Berakhir Penugasan :<span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Tuliskan Deskripsi Singkat dan Hasil Terkait Penugasan yang Dilaksanakan</h6>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="deskripsi_admp" name="deskripsi_admp" style="height: 100px;"></textarea>
                                <label for="message-text">Deskripsi Singkat </span></label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="target_admp" name="target_admp" style="height: 100px;"></textarea>
                                <label for="message-text">Target yang diharapkan/sasaran </span></label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="hasil_admp" name="hasil_admp" style="height: 100px;"></textarea>
                                <label for="message-text">Hasil Implementasi </span></label>
                            </div>
                            </div>
                           
                         </form>             
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="btn-yes-add">Save</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
              {{-- End Modal Add --}}

              <!--begin::Modal Revisi-->
              <div class="modal fade modal_revisi" id="revisiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Revisi admp</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_revisi" action="{{ route('revisi.admp') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group">
                                      <label for="message-text" class="form-control-label">Pesan Revisi admp <span style="color:red">*</span></label>
                                      <textarea class="form-control" id="revisi" name="revisi" rows="8"></textarea>
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" id="btn-yes-revisi">Kirim</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!--end::Modal Revisi-->

              <!--begin::Modal SEND-->
              <div class="modal fade modal_send" id="sendModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Approve ADMP</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_send" action="{{ route('send.admp') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group">
                                      <label for="message-text" class="form-control-label">KETERANGAN APPROVAL<span style="color:red">*</span></label>
                                      <textarea class="form-control" id="send-link" name="send-link" rows="8"></textarea>
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" id="btn-yes-send">Kirim</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!--end::Modal SEND-->
              

              <!--begin::Modal Reject-->
              <div class="modal fade modal_reject" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Reject admp</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_reject" action="{{ route('reject.admp') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group">
                                      <label for="message-text" class="form-control-label">Pesan Reject admp <span style="color:red">*</span></label>
                                      <textarea class="form-control" id="reject" name="reject" rows="8"></textarea>
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary" id="btn-yes-reject">Kirim</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!--end::Modal Revisi-->
              
              <!-- Table with stripped rows -->
              <div class="container">
              <table class="table dt_admp" id="datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama ADMP</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Akhir</th>
                    <th scope="col">Kompetensi</th>
                    <th scope="col">Deskripsi</th>
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
                    <td class="truncate-text">{{ $admp->NAMA_ADMP}}</td>
                    <td>{{ $admp->ADMP_JA_START_DATE}}</td>
                    <td>{{ $admp->ADMP_JA_FINISH_DATE }}</td>
                    <td>{{ $admp->KOMPETENSI }}</td>
                    {{-- <td class="truncate-text">{{ $admp->informasi}}</td> --}}
                    <td class="truncate-text">{{ $admp->JA_RESULT_DESCRIPTION }}</td>
                    <td>
                        @if($admp->status == 1)
                            <span class="badge rounded-pill text-bg-primary">Create</span>
                        @elseif($admp->status == 2)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>ATASAN</span>
                        @elseif($admp->status == 3)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>HR</span>
                        @elseif($admp->status == 4)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>HR MANAGER</span>
                        @elseif($admp->status == 5)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>DIRECTOR</span>
                        @elseif($admp->status == 6)
                            <span class="badge rounded-pill text-bg-success text-start">DONE</span>
                        @elseif($admp->status == 8)
                            <span class="badge rounded-pill bg-danger text-start">Reject</span>
                        @elseif($admp->status == 9)
                            <span class="badge rounded-pill text-bg-warning text-start">Revisi Atasan</span>
                        @elseif($admp->status == 10)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi HR</span>
                        @elseif($admp->status == 11)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>HR Manager</span>
                        @elseif($admp->status == 12)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>Director</span>
                        @else
                            <span class="badge rounded-pill bg-danger">Unknown status</span>
                        @endif
                    </td>
                    <td>  
                     
                <div class="dropdown">
                <a class="btn btn-sm btn-outline-secondary dropdown-toggle btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                @if(auth()->user()->id_role == 0)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                    <li><a class="dropdown-item send" href="#" data-id="{{ $admp->PID }}"><i class="fa-regular fa-paper-plane"></i> Send</a></li>
                    <li><a class="dropdown-item send-link" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                    <li><a class="dropdown-item bi bi-file-pdf export" data-id="{{ $admp->PID }}" href="#"> Export PDF</a></li>               
                </ul>
                @elseif($admp->status == 1 && auth()->user()->id_role == 1)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                    <li><a class="dropdown-item send-link" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $admp->PID }}"><i class="fa-regular fa-paper-plane"></i> Send</a></li>
                </ul>
                @elseif($admp->status == 9 && auth()->user()->id_role == 1)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($admp->status == 10 && auth()->user()->id_role == 2)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($admp->status == 11 && auth()->user()->id_role == 3)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                 @elseif($admp->status == 12 && auth()->user()->id_role == 4)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                 @elseif($admp->status == 13 && auth()->user()->id_role == 5)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($admp->status == 11 && auth()->user()->id_role == 3)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#admpModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $admp->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($admp->status == 2 && auth()->user()->id_role == 2)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#"href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>                </ul>
                @elseif($admp->status == 3 && auth()->user()->id_role == 3)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($admp->status == 4 && auth()->user()->id_role == 4)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($admp->status == 5 && auth()->user()->id_role == 5)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link"  href="#" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $admp->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($admp->status == 6 && auth()->user()->id_role == 6)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $admp->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                   <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $admp->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($admp->status == 7)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewadmpModal" data-id="{{ $admp->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item" href="/admp_pdf"><i class="fa-solid fa-square-poll-vertical"></i> Export PDF</a></li>
                </ul>
                @else
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#"><i class="fa fa-expand"></i>View</a></li>
                @endif
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
  
    {{-- <script src="app/javascript/admp.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>

<script>

$(document).ready(function() {

    $('#nrp-dropdown').on('change', function() {
        var selectedNrp = $(this).val();
    
        $.ajax({
            type: 'POST',
            url: 'admp/get_user_info',
            data: { nrp: selectedNrp, _token: '{{ csrf_token() }}' },
            success: function(response) {
    
                $('#name-add').val(response.nama);
                $('#jabatan-add').val(response.jabatan);
                $('#departemen-add').val(response.departemen);
                $('#divisi-add').val(response.divisi);
                $('#distrik-add').val(response.distrik);
            },
            error: function(error) {
                console.log('Ajax Error:', error);
            }
        });
    });
});

$(document).ready(function() {

    $('#kode-pengembangan').on('change', function() {
        var selectedKode = $(this).val();
    
        $.ajax({
            type: 'POST',
            url: 'admp/get_kompetensi',
            data: { kode: selectedKode, _token: '{{ csrf_token() }}' },
            success: function(response) {
                $('#name-kompetensi').val(response.nama);
              
            },
            error: function(error) {
                console.log('Ajax Error:', error);
            }
        });
    });
});


// Jumlah karakter data tabel
$(document).ready(function() {
    $('.truncate-text').each(function() {
        var maxLength = 15; 
        var originalText = $(this).text();

        if (originalText.length > maxLength) {
            var truncatedText = originalText.substring(0, maxLength) + '...';
            $(this).text(truncatedText);
        }
    });
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


//EDIT
var admpId; 
$('.edit').click(function() {
    admpId = $(this).data('id');
     $('#admpModal').attr('data-mode', 'edit');
    
    $.ajax({
        type: 'GET',
        url: '{{ url('/admp/get') }}/' + admpId,
        success: function(response) {
           
            $('#admpModal').find('#nrp-dropdown').val(response.NRP)
            $('#admpModal').find('#nama_admp_add').val(response.NAMA_ADMP);
            $('#admpModal').find('#kode-pengembangan').val(response.KODE);
            $('#admpModal').find('#name-kompetensi').val(response.KOMPETENSI);

            $('#admpModal').find('#waktu_awal_admp').val(response.ADMP_JA_START_DATE);
            $('#admpModal').find('#waktu_akhir_admp').val(response.ADMP_JA_FINISH_DATE);
            $('#admpModal').find('#deskripsi_admp').val(response.JA_RESULT_DESCRIPTION);
            $('#admpModal').find('#target_admp').val(response.JA_TARGET_DESCRIPTION);
            $('#admpModal').find('#hasil_admp').val(response.JA_SHORT_DESCRIPTION);
        
            $('#admpModal').attr('data-mode', 'edit');
            $('#admpModal').modal('show');
        },
        error: function(error) {
            // Tampilkan pesan kesalahan jika diperlukan
        }
    });
});

$(document).ready(function() {
$('input[name="plan_admp_add"]').change(function() {
    var selectedValue = $('input[name="plan_admp_add"]:checked').val();
    
    if (selectedValue === 'admp1') {
        console.log('User memilih Ya');
        $('#is_plan_admp_input').val(true);
    } else if (selectedValue === 'admp2') {
        console.log('User memilih Tidak');
        $('#is_plan_admp_input').val(false);
    }
});

$('#btn-yes-add').click(function() {
    var mode = $('#admpModal').data('mode');    
    
    if (mode === 'add') {
        $.ajax({
            type: 'POST',
            url: '{{ url('/admp/create') }}',
            data: $('form').serialize(),
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'admp berhasil di tambahkan!',
                    }).then(() => {
                       location.reload()
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'admp gagal di tambahkan.',
                    });
                }
            },
        });
    } else if (mode === 'edit') {  
        $.ajax({
            type: 'PUT',
            url: '{{ url('/admp/myedit') }}/' + admpId,
            data: $('form').serialize() + '&admp_id=' + admpId,
            success: function(response) {
                if (response.status === 'success') {
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'admp berhasil di edit!',
                    }).then(() => {
                        location.reload()
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'admp gagal di edit.',
                    });
                }
            },
        });
    }

    $('#admpModal').modal('hide');
    
});
});

// Function untuk mengganti status di tabel
function replaceStatusInTable() {
    var rows = document.querySelectorAll('.dt_admp tbody tr');
    rows.forEach(function(row) {
        var kodeStatus = row.querySelector('td:nth-child(9)').textContent; // Ambil STATUS dari kolom ke-8
        var statusText = getStatusText(kodeStatus); // Dapatkan teks status
        row.querySelector('td:nth-child(8)').innerHTML = statusText; // Ganti isi kolom dengan teks status yang sesuai
    });
}

// Panggil fungsi untuk mengganti status setelah tabel dimuat
document.addEventListener('DOMContentLoaded', function() {
    replaceStatusInTable();
});

//SEND FIRST
document.querySelectorAll('.send').forEach(function(link) {
   link.addEventListener('click', function(event) {
       event.preventDefault();
       var admpId = this.getAttribute('data-id');

       Swal.fire({
           title: 'Konfirmasi',
           text: 'Yakin ingin mengirim data?',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Ya, Kirim!',
           cancelButtonText: 'Batal'
       }).then((result) => {
           if (result.isConfirmed) {
               axios.post('{{ route('send.admp') }}', {
                   admp_id: admpId
               })
               .then(function (response) {
                   Swal.fire({
                       icon: 'success',
                       title: 'Sukses!',
                       text: response.data.message
                   }).then(() => {
                       location.reload();
                   });
               })
               .catch(function (error) {
                   Swal.fire({
                       icon: 'error',
                       title: 'Gagal!',
                       text: 'Terjadi kesalahan saat mengirim data.'
                   });
               });
           }
       });
   });
});


//SEND
$('.send-link').click(function() {
    var admpId = $(this).data('id'); 
    $('#btn-yes-send').click(function() {
    
        var data = $('.form_send').serialize();
        $.ajax({
            type: 'POST',
            url: '{{ route('send.admp') }}?admp_id=' + admpId, 
            data: data,
            success: function(response) {
                Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: response.message
                }).then(() => {
                       location.reload()
                });
            },
            error: function(error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat mengirim revisi.'
                });
            }
        });
    });
});


//EXPORT
document.querySelectorAll('.export').forEach(function(link) {
   link.addEventListener('click', function(event) {
       event.preventDefault();
       var id = this.getAttribute('data-id');

       Swal.fire({
           title: 'Konfirmasi',
           text: 'Export data?',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Ya, Kirim!',
           cancelButtonText: 'Batal'
       }).then((result) => {
           if (result.isConfirmed) {
               axios.post('{{ route('export.admp') }}', {
                   id: id
               })
               .then(function (response) {
                   Swal.fire({
                       icon: 'success',
                       title: 'Sukses!',
                       text: response.data.message
                   });
               })
               .catch(function (error) {
                   Swal.fire({
                       icon: 'error',
                       title: 'Gagal!',
                       text: 'Terjadi kesalahan saat mengirim data.'
                   });
               });
           }
       });
   });
});

//DELETE
document.querySelectorAll('.delete').forEach(function(link) {
   link.addEventListener('click', function(event) {
       event.preventDefault();
       var admpId = this.getAttribute('data-id');

       Swal.fire({
           title: 'Konfirmasi',
           text: 'Apakah Anda yakin akan menghapus data ini?',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Ya, Kirim!',
           cancelButtonText: 'Batal'
       }).then((result) => {
           if (result.isConfirmed) {
               axios.post('{{ route('delete.admp') }}', {
                   admp_id: admpId
               })
               .then(function (response) {
                   Swal.fire({
                       icon: 'success',
                       title: 'Sukses!',
                       text: response.data.message
                   }).then(() => {
                       location.reload();
                   });
               })
               .catch(function (error) {
                   Swal.fire({
                       icon: 'error',
                       title: 'Gagal!',
                       text: 'Terjadi kesalahan saat mengirim data.'
                   });
               });
           }
       });
   });
});

//REJECT
$('.reject').click(function() {
    var admpId = $(this).data('id'); 

    $('#btn-yes-reject').click(function() {
        var data = $('.form_reject').serialize();

        $.ajax({
            type: 'POST',
            url: '{{ route('reject.admp') }}?admp_id=' + admpId, 
            data: data,
            success: function(response) {
                Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: response.message
                }).then(() => {
                       location.reload();
                   });
            },
            error: function(error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat mengirim revisi.'
                });
            }
        });
    });
});


//REVISI
$('.revisi').click(function() {
    var admpId = $(this).data('id'); // Ambil ID admp dari atribut data-id
    
    $('#btn-yes-revisi').click(function() {
        // Ambil data dari formulir, termasuk pesan revisi
        var data = $('.form_revisi').serialize();

        // Kirim data dengan permintaan AJAX
        $.ajax({
            type: 'POST',
            url: '{{ route('revisi.admp') }}?admp_id=' + admpId, 
            data: data,
            success: function(response) {
                Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: response.message
                }).then(() => {
                       location.reload()
                });
            },
            error: function(error) {
                // Tampilkan SweetAlert kesalahan
                Swal.fire({
                    icon: 'error',
                    title: 'Gagal!',
                    text: 'Terjadi kesalahan saat mengirim revisi.'
                });
            }
        });
    });
});

    </script>
   

@endsection

