@extends('include/mainlayout')
@section('title', 'coaching')
@section('content')
    <div class="pagetitle">
      <h1> COACHING</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          P<li class="breadcrumb-item active">COACHING</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fa-solid fa-square-poll-vertical">  COACHING</i></h5>
              <button type="button" class="btn bi bi-plus btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#coachingModal"> Add Coaching</button>
              <br><br>

              <!-- Modal View -->
                <div class="modal fade modal-view" id="viewcoachingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-6" id="btn-view">View Coaching</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="coaching-details">
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
                                        <h6 class="labelku">INFORMASI COACHING</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="nama_coaching">Nama Program ADMP Coaching: </label>
                                        <span id="name_coaching"></span>
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
                                        <label for="waktu_awal_coaching">Tanggal Mulai Coaching:</label>
                                       <span id="waktu_awal"></span>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">MANFAAT COACHING</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="deskripsi">Performance Target :</label>
                                        <span id="deskripsi"> </span>
                                    </div>
                                     <div class="detail">
                                        <label for="target">Coaching Ojectives:</label>
                                        <span id="target"> </span>
                                    </div>
                                    <div class="detail">
                                        <label for="hasil">Competency:</label>
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
                <div class="modal fade modal_add" id="coachingModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mode="add">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="btn-add">Add Coaching</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> --}}
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="action_flag" id="action_flag" />
                        <input type="hidden" name="tgl_mulai" id="tgl_mulai" />
                        {{-- <input type="hidden" name="last_seq" id="last_seq" value="{{{$last_seq}}}" /> --}}

                        <form class="row g-3 needs-validation" method="POST" action="/coaching/create">
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
                                <label for="message-text">Distrik </label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Informasi ADMP Coaching</h6>
                            </div>
                            </div>
                            <div class="col-12">
                             <label for="jenis_coaching">Apakah ADMP yang Diajukan Masuk Plan ADMP Coaching di Tahun Ini?<span style="color:red">*</span></label>
                            <div>
                                <span style="display: inline-block; margin-top: 10px;">
                                    <input type="radio" id="coaching1" name="plan_coaching_add" value="coaching1">
                                    <label for="coaching1">Ya</label>
                                </span>
                                <span style="display: inline-block; margin-left: 10px;">
                                    <input type="radio" id="coaching2" name="plan_coaching_add" value="coaching2">
                                    <label for="coaching2">Tidak</label>
                                </span>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Silahkan  Pilih ADMP Coaching yang Diajukan</h6>
                            </div>
                            </div>
                            <div class="col-md-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="nama_coaching_add" name="nama_coaching_add" placeholder="nama_coaching_add" required>
                                <label for="nama_coaching_add"> Nama Program ADMP Coaching <span style="color:red">*</span></label>
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
                                 <h6 class="labelku">Silahkan Pilih Kapan Waktu ADMP Coaching Diadakan?</h6>
                            </div>
                            </div>
                             <div class="col-md-6">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="waktu_awal_coaching" name="waktu_awal_coaching" placeholder="Nama coaching" required>
                                <label for="nama coaching">Tanggal Mulai Penugasan : <span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Tuliskan Deskripsi Singkat dan Hasil Terkait Coaching yang Dilaksanakan</h6>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="deskripsi_coaching" name="deskripsi_coaching" style="height: 100px;"></textarea>
                                <label for="message-text">PERFORMANCE TARGET </span></label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="target_coaching" name="target_coaching" style="height: 100px;"></textarea>
                                <label for="message-text">COACHING OBJECTIVES  </span></label>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="hasil_coaching" name="hasil_coaching" style="height: 100px;"></textarea>
                                <label for="message-text">COMPETENCY </span></label>
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
                              <h5 class="modal-title" id="exampleModalLabel">Revisi Coaching</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_revisi" action="{{ route('revisi.coaching') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group">
                                      <label for="message-text" class="form-control-label">Pesan Revisi Coaching <span style="color:red">*</span></label>
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
                              <h5 class="modal-title" id="exampleModalLabel">Approve Coaching</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_send" action="{{ route('send.coaching') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
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
                              <h5 class="modal-title" id="exampleModalLabel">Reject Coaching</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_reject" action="{{ route('reject.coaching') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group">
                                      <label for="message-text" class="form-control-label">Pesan Reject Coaching <span style="color:red">*</span></label>
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
              <table class="table dt_coaching" id="datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Coaching</th>
                    <th scope="col">Tanggal Coaching</th>
                    <th scope="col">Kompetensi</th>
                    <th scope="col">Performance Target</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                {{-- //sekar --}}
                @foreach($coachingData as $no => $coaching)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $coaching->NRP }}</td>
                    <td>{{ $coaching->NAMA}}</td>
                    <td class="truncate-text">{{ $coaching->NAMA_COACHING}}</td>
                    <td>{{ $coaching->COACHING_DATE}}</td>
                    <td>{{ $coaching->KOMPETENSI_NAME }}</td>
                    {{-- <td class="truncate-text">{{ $coaching->informasi}}</td> --}}
                    <td class="truncate-text">{{ $coaching->TARGET_DESCRIPTION }}</td>
                    <td>
                        @if($coaching->status == 1)
                            <span class="badge rounded-pill text-bg-primary">Create</span>
                        @elseif($coaching->status == 2)
                            <span class="badge rounded-pill text-bg-info text-start">Need Approve<br>Atasan</span>
                        @elseif($coaching->status == 3)
                            <span class="badge rounded-pill text-bg-info text-start">Need Approve<br>HR</span>
                        @elseif($coaching->status == 4)
                            <span class="badge rounded-pill text-bg-info text-start">Need Approve<br>HR Manager</span>
                        @elseif($coaching->status == 5)
                            <span class="badge rounded-pill text-bg-info text-start">Need Approve<br>Director</span>
                        @elseif($coaching->status == 6)
                            <span class="badge rounded-pill text-bg-success text-start">DONE</span>
                        @elseif($coaching->status == 8)
                            <span class="badge rounded-pill bg-danger text-start">Reject</span>
                        @elseif($coaching->status == 9)
                            <span class="badge rounded-pill text-bg-warning text-start">Revisi Atasan</span>
                        @elseif($coaching->status == 10)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi HR</span>
                        @elseif($coaching->status == 11)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>HR Manager</span>
                        @elseif($coaching->status == 12)
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
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                    <li><a class="dropdown-item send" href="#" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-paper-plane"></i> Send</a></li>
                    <li><a class="dropdown-item send-link" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                    <li><a class="dropdown-item bi bi-file-pdf export" data-id="{{ $coaching->PID }}" href="#"> Export PDF</a></li>               
                </ul>
                @elseif($coaching->status == 1 && auth()->user()->id_role == 1)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                    <li><a class="dropdown-item send-link" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-paper-plane"></i> Send</a></li>
                </ul>
                @elseif($coaching->status == 9 && auth()->user()->id_role == 1)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($coaching->status == 10 && auth()->user()->id_role == 2)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($coaching->status == 11 && auth()->user()->id_role == 3)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                 @elseif($coaching->status == 12 && auth()->user()->id_role == 4)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                 @elseif($coaching->status == 13 && auth()->user()->id_role == 5)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($coaching->status == 11 && auth()->user()->id_role == 3)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#coachingModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $coaching->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($coaching->status == 2 && auth()->user()->id_role == 2)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#"href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>                </ul>
                @elseif($coaching->status == 3 && auth()->user()->id_role == 3)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($coaching->status == 4 && auth()->user()->id_role == 4)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($coaching->status == 5 && auth()->user()->id_role == 5)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link"  href="#" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($coaching->status == 6 && auth()->user()->id_role == 6)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                   <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $coaching->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($coaching->status == 7)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewcoachingModal" data-id="{{ $coaching->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item" href="/coaching_pdf"><i class="fa-solid fa-square-poll-vertical"></i> Export PDF</a></li>
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
  
    {{-- <script src="app/javascript/coaching.js"></script> --}}
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
            url: 'coaching/get_user_info',
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
            url: 'coaching/get_kompetensi',
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
var coachingId; 
$('.view').click(function() {
    coachingId = $(this).data('id');
    $('#viewcoachingModal').attr('data-mode', 'edit');
    
    $.ajax({
        type: 'GET',
        url: '{{ url('/coaching/get') }}/' + coachingId,
        success: function(response) {
       
            function hideIfNull(elementId, value) {
                var element = $('#viewcoachingModal').find('#' + elementId);
                var detailElement = element.closest('.detail');
                
                if (value === null || value === 'null') {
                    detailElement.hide();
                } else {
                    element.text(value);
                    detailElement.show();
                }
            }

            $('#viewcoachingModal').find('#nrp-peserta').text(response.NRP);
            $('#viewcoachingModal').find('#name').text(response.name);
            $('#viewcoachingModal').find('#jabatan').text(response.jabatan);
            $('#viewcoachingModal').find('#departemen').text(response.departemen);
            $('#viewcoachingModal').find('#divisi').text(response.divisi);
            $('#viewcoachingModal').find('#distrik').text(response.distrik);
            $('#viewcoachingModal').find('#name_coaching').text(response.NAMA_COACHING);
            $('#viewcoachingModal').find('#kode').text(response.KOMPETENSI_CODE);
            $('#viewcoachingModal').find('#kompetensi').text(response.KOMPETENSI_NAME);
            $('#viewcoachingModal').find('#waktu_awal').text(response.COACHING_DATE);
            $('#viewcoachingModal').find('#deskripsi').text(response.TARGET_DESCRIPTION);
            $('#viewcoachingModal').find('#target').text(response.OBJECTIVE_DESCRIPTION);
            $('#viewcoachingModal').find('#hasil').text(response.COMPETENCY_DESCRIPTION);
            hideIfNull('keterangan_atasan', response.keterangan);
            hideIfNull('keterangan_hr', response.KETERANGAN_HR);
            hideIfNull('keterangan_hr_mng', response.KETERANGAN_HR_MNG);
            hideIfNull('keterangan_director', response.KETERANGAN_DRC);
            hideIfNull('revisi_by', response.REVISI_NAME);
            hideIfNull('revisi_desc', response.REVISI_DESC);
            hideIfNull('reject_by', response.REJECT_NAME);
            hideIfNull('reject_desc', response.REJECT_DESC);

            $('#viewcoachingModal').modal('show');
        },
        error: function(error) {
    
        }
    });
});


//EDIT
var coachingId; 
$('.edit').click(function() {
    coachingId = $(this).data('id');
     $('#coachingModal').attr('data-mode', 'edit');
    
    $.ajax({
        type: 'GET',
        url: '{{ url('/coaching/get') }}/' + coachingId,
        success: function(response) {
           
            $('#coachingModal').find('#nrp-dropdown').val(response.NRP)
            $('#coachingModal').find('#nama_coaching_add').val(response.NAMA_COACHING);
            $('#coachingModal').find('#kode-pengembangan').val(response.KOMPETENSI_CODE);
            $('#coachingModal').find('#name-kompetensi').val(response.KOMPETENSI_NAME);

            $('#coachingModal').find('#waktu_awal_coaching').val(response.COACHING_DATE);
            $('#coachingModal').find('#deskripsi_coaching').val(response.TARGER_DESCRIPTION);
            $('#coachingModal').find('#target_coaching').val(response.OBJECTIVE_DESCRIPTION);
            $('#coachingModal').find('#hasil_coaching').val(response.COMPETENCY_DESCRIPTION);
        
            $('#coachingModal').attr('data-mode', 'edit');
            $('#coachingModal').modal('show');
        },
        error: function(error) {
           
        }
    });
});

$(document).ready(function() {
$('input[name="plan_coaching_add"]').change(function() {
    var selectedValue = $('input[name="plan_coaching_add"]:checked').val();
    
    if (selectedValue === 'coaching1') {
        console.log('User memilih Ya');
        $('#is_plan_coaching_input').val(true);
    } else if (selectedValue === 'coaching2') {
        console.log('User memilih Tidak');
        $('#is_plan_coaching_input').val(false);
    }
});

$('#btn-yes-add').click(function() {
    var mode = $('#coachingModal').data('mode');    
    
    if (mode === 'add') {
        $.ajax({
            type: 'POST',
            url: '{{ url('/coaching/create') }}',
            data: $('form').serialize(),
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'coaching berhasil di tambahkan!',
                    }).then(() => {
                       location.reload()
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'coaching gagal di tambahkan.',
                    });
                }
            },
        });
    } else if (mode === 'edit') {  
        $.ajax({
            type: 'PUT',
            url: '{{ url('/coaching/myedit') }}/' + coachingId,
            data: $('form').serialize() + '&coaching_id=' + coachingId,
            success: function(response) {
                if (response.status === 'success') {
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'coaching berhasil di edit!',
                    }).then(() => {
                        location.reload()
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'coaching gagal di edit.',
                    });
                }
            },
        });
    }

    $('#coachingModal').modal('hide');
    
});
});

//SEND FIRST
document.querySelectorAll('.send').forEach(function(link) {
   link.addEventListener('click', function(event) {
       event.preventDefault();
       var coachingId = this.getAttribute('data-id');

       Swal.fire({
           title: 'Konfirmasi',
           text: 'Yakin ingin mengirim data?',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Ya, Kirim!',
           cancelButtonText: 'Batal'
       }).then((result) => {
           if (result.isConfirmed) {
               axios.post('{{ route('send.coaching') }}', {
                   coaching_id: coachingId
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
    var coachingId = $(this).data('id'); 
    $('#btn-yes-send').click(function() {
    
        var data = $('.form_send').serialize();
        $.ajax({
            type: 'POST',
            url: '{{ route('send.coaching') }}?coaching_id=' + coachingId, 
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
               axios.post('{{ route('export.coaching') }}', {
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
       var coachingId = this.getAttribute('data-id');

       Swal.fire({
           title: 'Konfirmasi',
           text: 'Apakah Anda yakin akan menghapus data ini?',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Ya, Kirim!',
           cancelButtonText: 'Batal'
       }).then((result) => {
           if (result.isConfirmed) {
               axios.post('{{ route('delete.coaching') }}', {
                   coaching_id: coachingId
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
    var coachingId = $(this).data('id'); 

    $('#btn-yes-reject').click(function() {
        var data = $('.form_reject').serialize();

        $.ajax({
            type: 'POST',
            url: '{{ route('reject.coaching') }}?coaching_id=' + coachingId, 
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
    var coachingId = $(this).data('id'); 
    
    $('#btn-yes-revisi').click(function() {
        var data = $('.form_revisi').serialize();

        $.ajax({
            type: 'POST',
            url: '{{ route('revisi.coaching') }}?coaching_id=' + coachingId, 
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

    </script>
   

@endsection

