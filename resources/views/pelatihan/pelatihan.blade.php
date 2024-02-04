@extends('include/mainlayout')
@section('title', 'pelatihan')
@section('content')
    <div class="pagetitle">
      <h1> pelatihan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
          P<li class="breadcrumb-item active">Pelatihan</li>
        </ol>
      </nav>
    </div>

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><i class="fa-solid fa-square-poll-vertical">  Pelatihan</i></h5>
              <button type="button" class="btn bi bi-plus btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#pelatihanModal"> Add Pelatihan</button>
              <br><br>

              <!-- Modal View -->
                <div class="modal fade modal-view" id="viewpelatihanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-6" id="btn-view">View pelatihan</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="pelatihan-details">
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
                                        <label for="divisi">Divisi:</label>
                                        <span id="divisi"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="distrik">Distrik:</label>
                                        <span id="distrik"></span>
                                    </div>
                                    {{-- <div class="detail">
                                        <label for="nama_pelatihan">Nama Program Pelatihan JA: </label>
                                        <span id="name_pelatihan"></span>
                                    </div> --}}
                                    <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">INFORMASI PELATIHAN</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="kode-pengembangan">Kode dan Nama Pelatihan:</label>
                                        <span id="kode"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="narasumber">Pelatihan Sudah Berjalan:</label>
                                        <span id="done1"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="narasumber">Training Masuk Plan ATMP Tahun Ini:</label>
                                        <span id="pelatihan1"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="narasumber">Narasumber:</label>
                                        <span id="narasumber"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="penyelenggara">Nama Penyelenggara:</label>
                                        <span id="penyelenggara"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="area">Area:</label>
                                        <span id="area"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="jobsite">Jobsite:</label>
                                        <span id="jobsite"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="currency">Currency:</label>
                                        <span id="currency"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="biaya">Biaya:</label>
                                        <span id="biaya"></span>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">WAKTU PELAKSANAAN</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="waktu_awal_pelatihan">Tanggal Mulai Pelatihan:</label>
                                       <span id="waktu_awal"></span>
                                    </div>
                                    <div class="detail">
                                        <label for="waktu_akhir_pelatihan">Tanggal Akhir Pelatihan:</label>
                                        <span id="waktu_akhir"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="waktu_berangkat">Tanggal Berangkat Pelatihan:</label>
                                        <span id="waktu_berangkat"></span>
                                    </div>
                                     <div class="detail">
                                        <label for="waktu_pulang">Tanggal Pulang Pelatihan:</label>
                                        <span id="waktu_pulang"></span>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                    <div class="form-floating">
                                        <h6 class="labelku">MANFAAT PELATIHAN</h6>
                                    </div>
                                    </div>
                                    <hr>
                                    <div class="detail">
                                        <label for="manfaat_karyawan">Manfaat Bagi Karyawan :</label>
                                        <span id="manfaat_karyawan"> </span>
                                    </div>
                                     <div class="detail">
                                        <label for="manfaat_perusahaan">Manfaat Bagi Perusahaan:</label>
                                        <span id="manfaat_perusahaan"> </span>
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
                <div class="modal fade modal_add" id="pelatihanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mode="add">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="btn-add">Add Pelatihan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> --}}
                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="action_flag" id="action_flag" />
                        <input type="hidden" name="tgl_mulai" id="tgl_mulai" />
                        {{-- <input type="hidden" name="last_seq" id="last_seq" value="{{{$last_seq}}}" /> --}}

                        <form class="row g-3 needs-validation" method="POST" action="/pelatihan/create">
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
                                 <h6 class="labelku">Informasi Pelatihan</h6>
                            </div>
                            </div>
                            <div class="col-6">
                             <label for="jenis_pelatihan">Apakah Pelatihan ini Sudah Berjalan?<span style="color:red">*</span></label>
                            <div>
                                <span style="display: inline-block; margin-top: 10px;">
                                    <input type="radio" id="done1" name="done_pelatihan_add" value="done1">
                                    <label for="pelatihan1">Ya</label>
                                </span>
                                <span style="display: inline-block; margin-left: 10px;">
                                    <input type="radio" id="done2" name="done_pelatihan_add" value="done2">
                                    <label for="pelatihan2">Tidak</label>
                                </span>
                            </div>
                            </div>
                            <div class="col-6">
                             <label for="jenis_pelatihan">Apakah Training yang Diajukan Masuk Plan ATMP Tahun Ini?<span style="color:red">*</span></label>
                            <div>
                                <span style="display: inline-block; margin-top: 10px;">
                                    <input type="radio" id="pelatihan1" name="plan_pelatihan_add" value="pelatihan1">
                                    <label for="pelatihan1">Ya</label>
                                </span>
                                <span style="display: inline-block; margin-left: 10px;">
                                    <input type="radio" id="pelatihan2" name="plan_pelatihan_add" value="pelatihan2">
                                    <label for="pelatihan2">Tidak</label>
                                </span>
                            </div>
                            </div>
                            <div class="col-3">
                            <div class="form-floating">
                                <select class="form-control" id="kode-pengembangan" name="kode-pengembangan">
                                    <option value="" selected>Select Pelatihan</option>
                                    @foreach ($kodeOptions as $kode)
                                        <option value="{{ $kode }}">{{ $kode }}</option>
                                    @endforeach
                                </select>
                                <label>Kode dan Nama Pelatihan <span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text"  class="form-control" id="name-kompetensi" name="name-kompetensi" placeholder="Name">
                                <label for="message-text">Jenis Kompetensi</label> 
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text"  class="form-control" id="narasumber" name="narasumber" placeholder="Name">
                                <label for="message-text">Narasumber</label> 
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text"  class="form-control" id="penyelenggara" name="penyelenggara" placeholder="Name">
                                <label for="message-text">Nama Penyelenggara</label> 
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text"  class="form-control" id="area" name="area" placeholder="Name">
                                <label for="message-text">Area</label> 
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <select class="form-control" id="jobsite" name="jobsite">
                                    <option value="" disabled selected>Select option</option>
                                    <option value="ya">Ya</option>
                                    <option value="tidak">Tidak</option>
                                </select>
                                <label for="jobsite">Jobsite</label>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text"  class="form-control" id="currency" name="currency" placeholder="Name">
                                <label for="message-text">Currency</label> 
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text"  class="form-control" id="biaya" name="biaya" placeholder="Name">
                                <label for="message-text">Biaya</label> 
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Waktu Pelatihan</h6>
                            </div>
                            </div>
                             <div class="col-md-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="waktu_awal_pelatihan" name="waktu_awal_pelatihan" placeholder="Nama pelatihan" required>
                                <label for="nama pelatihan">Tanggal Mulai Pelatihan  : <span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="waktu_akhir_pelatihan" name="waktu_akhir_pelatihan" placeholder="Nama pelatihan" required>
                                <label for="nama pelatihan">Tanngal Akhir Pelatihan :<span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="waktu_berangkat" name="waktu_berangkat" placeholder="Nama pelatihan" required>
                                <label for="nama pelatihan">Tanggal Berangkat  : <span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="waktu_pulang" name="waktu_pulang" placeholder="Nama pelatihan" required>
                                <label for="nama pelatihan">Tanngal Pulang :<span style="color:red">*</span></label>
                            </div>
                            </div>
                            <div class="col-12">
                            <div class="form-floating">
                                 <h6 class="labelku">Manfaat Pelatihan</h6>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="manfaat_karyawan" name="manfaat_karyawan" style="height: 100px;"></textarea>
                                <label for="message-text">Manfaat Bagi Karyawan </span></label>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Address" id="manfaat_perusahaan" name="manfaat_perusahaan" style="height: 100px;"></textarea>
                                <label for="message-text">Manfaat Bagi Perusahaan </span></label>
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
                              <h5 class="modal-title" id="exampleModalLabel">Revisi pelatihan</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_revisi" action="{{ route('revisi.pelatihan') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group">
                                      <label for="message-text" class="form-control-label">Pesan Revisi pelatihan <span style="color:red">*</span></label>
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
                              <h5 class="modal-title" id="exampleModalLabel">Approve pelatihan</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_send" action="{{ route('send.pelatihan') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
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
                              <h5 class="modal-title" id="exampleModalLabel">Reject pelatihan</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="kt-form kt-form--label-right form_reject" action="{{ route('reject.pelatihan') }}"  method="POST" enctype="multipart/form-data" autocomplete="off">
                                  @csrf
                                  <div class="form-group">
                                      <label for="message-text" class="form-control-label">Pesan Reject pelatihan <span style="color:red">*</span></label>
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
              <table class="table dt_pelatihan" id="datatable">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">NRP</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Akhir</th>
                    <th scope="col">Kompetensi</th>
                    <th scope="col">Manfaat Bagi Karyawan</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                {{-- //sekar --}}
                @foreach($pelatihanData as $no => $pelatihan)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $pelatihan->NRP }}</td>
                    <td>{{ $pelatihan->NAMA}}</td>
                    <td>{{ $pelatihan->MULAI_TRAINING}}</td>
                    <td>{{ $pelatihan->SELESAI_TRAINING }}</td>
                    <td class="truncate-text">{{ $pelatihan->KOMPETENSI_DESC}}</td>
                    {{-- <td class="truncate-text">{{ $pelatihan->informasi}}</td> --}}
                    <td class="truncate-text">{{ $pelatihan->MANFAAT_BAGI_KARYAWAN }}</td>
                    <td>
                        @if($pelatihan->STATUS == 1)
                            <span class="badge rounded-pill text-bg-primary">Create</span>
                        @elseif($pelatihan->STATUS == 2)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>ATASAN</span>
                        @elseif($pelatihan->STATUS == 3)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>HR</span>
                        @elseif($pelatihan->STATUS == 4)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>HR MANAGER</span>
                        @elseif($pelatihan->STATUS == 5)
                            <span class="badge rounded-pill text-bg-info text-start">NEED APPROVE<br>DIRECTOR</span>
                        @elseif($pelatihan->STATUS == 6)
                            <span class="badge rounded-pill text-bg-success text-start">DONE</span>
                        @elseif($pelatihan->STATUS == 8)
                            <span class="badge rounded-pill bg-danger text-start">Reject</span>
                        @elseif($pelatihan->STATUS == 9)
                            <span class="badge rounded-pill text-bg-warning text-start">Revisi Atasan</span>
                        @elseif($pelatihan->STATUS == 10)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi HR</span>
                        @elseif($pelatihan->STATUS == 11)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>HR Manager</span>
                        @elseif($pelatihan->STATUS == 12)
                        <span class="badge rounded-pill text-bg-warning text-start">Revisi<br>Director</span>
                        @else
                            <span class="badge rounded-pill bg-danger">Unknown STATUS</span>
                        @endif
                    </td>
                    <td>  
                     
                <div class="dropdown">
                <a class="btn btn-sm btn-outline-secondary dropdown-toggle btn-sm" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
                @if(auth()->user()->id_role == 0)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                    <li><a class="dropdown-item send" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-paper-plane"></i> Send</a></li>
                    <li><a class="dropdown-item send-link" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                    <li><a class="dropdown-item bi bi-file-pdf export" data-id="{{ $pelatihan->PID }}" href="#"> Export PDF</a></li>               
                </ul>
                @elseif($pelatihan->STATUS == 1 && auth()->user()->id_role == 1)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                    <li><a class="dropdown-item send-link" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-paper-plane"></i> Send</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 9 && auth()->user()->id_role == 1)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 10 && auth()->user()->id_role == 2)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 11 && auth()->user()->id_role == 3)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                 @elseif($pelatihan->STATUS == 12 && auth()->user()->id_role == 4)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                 @elseif($pelatihan->STATUS == 13 && auth()->user()->id_role == 5)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 11 && auth()->user()->id_role == 3)
                 <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item edit" href="#" data-bs-toggle="modal" data-bs-target="#pelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-pen-to-square"></i>Edit</a></li>
                    <li><a class="dropdown-item delete" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-solid fa-trash"></i>Delete</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 2 && auth()->user()->id_role == 2)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#"href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>                </ul>
                @elseif($pelatihan->STATUS == 3 && auth()->user()->id_role == 3)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 4 && auth()->user()->id_role == 4)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 5 && auth()->user()->id_role == 5)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link"  href="#" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                    <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 6 && auth()->user()->id_role == 6)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item send-link" href="#" data-bs-toggle="modal" data-bs-target="#sendModal" href="#" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-square-check"></i> Approve</a></li>
                    <li><a class="dropdown-item revisi" href="#" data-bs-toggle="modal" data-bs-target="#revisiModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-message"></i>Revisi</a></li>
                   <li><a class="dropdown-item reject" href="#" data-bs-toggle="modal" data-bs-target="#rejectModal" data-id="{{ $pelatihan->PID }}"><i class="fa-regular fa-circle-xmark"></i>Reject</a></li>
                </ul>
                @elseif($pelatihan->STATUS == 7)
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item view" href="#" data-bs-toggle="modal" data-bs-target="#viewpelatihanModal" data-id="{{ $pelatihan->PID }}"><i class="fa fa-expand"></i>View</a></li>
                    <li><a class="dropdown-item" href="/pelatihan_pdf"><i class="fa-solid fa-square-poll-vertical"></i> Export PDF</a></li>
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
  
    {{-- <script src="app/javascript/pelatihan.js"></script> --}}
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
            url: 'pelatihan/get_user_info',
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
            url: 'pelatihan/get_kompetensi',
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
var pelatihanId; 
$('.view').click(function() {
    pelatihanId = $(this).data('id');
    $('#viewpelatihanModal').attr('data-mode', 'edit');
    
    $.ajax({
        type: 'GET',
        url: '{{ url('/pelatihan/get') }}/' + pelatihanId,
        success: function(response) {
       
            function hideIfNull(elementId, value) {
                var element = $('#viewpelatihanModal').find('#' + elementId);
                var detailElement = element.closest('.detail');
                
                if (value === null || value === 'null') {
                    detailElement.hide();
                } else {
                    element.text(value);
                    detailElement.show();
                }
            }

            $('#viewpelatihanModal').find('#nrp-peserta').text(response.NRP);
            $('#viewpelatihanModal').find('#name').text(response.name);
            $('#viewpelatihanModal').find('#jabatan').text(response.jabatan);
            $('#viewpelatihanModal').find('#departemen').text(response.departemen);
            $('#viewpelatihanModal').find('#divisi').text(response.divisi);
            $('#viewpelatihanModal').find('#distrik').text(response.distrik);
            $('#viewpelatihanModal').find('#done1').text(response.TRAINING_DONE == 1 ? 'Ya' : 'Tidak');
            $('#viewpelatihanModal').find('#pelatihan1').text(response.IS_PLAN_ATMP == 1 ? 'Ya' : 'Tidak');    
            $('#viewpelatihanModal').find('#narasumber').text(response.NARASUMBER);
            $('#viewpelatihanModal').find('#penyelenggara').text(response.NAMA_PENYELENGGARA);
            $('#viewpelatihanModal').find('#area').text(response.AREA);
            $('#viewpelatihanModal').find('#jobsite').text(response.IS_JOBSITE == 1 ? 'Ya' : 'Tidak');
            $('#viewpelatihanModal').find('#currency').text(response.CURRENCY);
            $('#viewpelatihanModal').find('#biaya').text(response.BIAYA);
            $('#viewpelatihanModal').find('#kode').text(response.KODE_KOMPETENSI);
            $('#viewpelatihanModal').find('#kompetensi').text(response.KOMPETENSI_DESC);
            $('#viewpelatihanModal').find('#waktu_awal').text(response.MULAI_TRAINING);
            $('#viewpelatihanModal').find('#waktu_akhir').text(response.SELESAI_TRAINING);
            $('#viewpelatihanModal').find('#waktu_berangkat').text(response.BERANGKAT_TRAINING);
            $('#viewpelatihanModal').find('#waktu_pulang').text(response.KEMBALI_TRAINING);
            $('#viewpelatihanModal').find('#manfaat_karyawan').text(response.MANFAAT_BAGI_KARYAWAN);
            $('#viewpelatihanModal').find('#manfaat_perusahaan').text(response.MANFAAT_BAGI_PERUSAHAAN);
            hideIfNull('keterangan_atasan', response.KETERANGAN);
            hideIfNull('keterangan_hr', response.KETERANGAN_HR);
            hideIfNull('keterangan_hr_mng', response.KETERANGAN_HR_MNG);
            hideIfNull('keterangan_director', response.KETERANGAN_DRC);
            hideIfNull('revisi_by', response.REVISI_NAME);
            hideIfNull('revisi_desc', response.REVISI_DESC);
            hideIfNull('reject_by', response.REJECT_NAME);
            hideIfNull('reject_desc', response.REJECT_DESC);

            $('#viewpelatihanModal').modal('show');
        },
        error: function(error) {
            // Tampilkan pesan kesalahan jika diperlukan
        }
    });
});


//EDIT
var pelatihanId; 
$('.edit').click(function() {
    pelatihanId = $(this).data('id');
     $('#pelatihanModal').attr('data-mode', 'edit');
    
    $.ajax({
        type: 'GET',
        url: '{{ url('/pelatihan/get') }}/' + pelatihanId,
        success: function(response) {
           
            $('#pelatihanModal').find('#nrp-dropdown').val(response.NRP)
            $('#pelatihanModal').find('#kode-pengembangan').val(response.KODE_KOMPETENSI);
            $('#pelatihanModal').find('#name-kompetensi').val(response.KOMPETENSI_DESC);
            $('#pelatihanModal').find('#done1').val(response.TRAINING_DONE);
            $('#pelatihanModal').find('#pelatihan1').val(response.IS_PLAN_ATMP);
            $('#pelatihanModal').find('#narasumber').val(response.NARASUMBER);
            $('#pelatihanModal').find('#penyelenggara').val(response.NAMA_PENYELENGGARA);
            $('#pelatihanModal').find('#area').val(response.AREA);
            $('#pelatihanModal').find('#jobsite').val(response.IS_JOBSITE);
            $('#pelatihanModal').find('#currency').val(response.CURRENCY);
            $('#pelatihanModal').find('#biaya').val(response.BIAYA);
            $('#pelatihanModal').find('#waktu_awal_pelatihan').val(response.MULAI_TRAINING);
            $('#pelatihanModal').find('#waktu_akhir_pelatihan').val(response.SELESAI_TRAINING);
            $('#pelatihanModal').find('#waktu_berangkat').val(response.BERANGKAT_TRAINING);
            $('#pelatihanModal').find('#waktu_pulang').val(response.KEMBALI_TRAINING);
            $('#pelatihanModal').find('#manfaat_karyawan').val(response.MANFAAT_BAGI_KARYAWAN);
            $('#pelatihanModal').find('#manfaat_perusahaan').val(response.MANFAAT_BAGI_PERUSAHAAN);
            
        
            $('#pelatihanModal').attr('data-mode', 'edit');
            $('#pelatihanModal').modal('show');
        },
        error: function(error) {
            // Tampilkan pesan kesalahan jika diperlukan
        }
    });
});

$(document).ready(function() {
$('input[name="plan_pelatihan_add"]').change(function() {
    var selectedValue = $('input[name="plan_pelatihan_add"]:checked').val();
    
    if (selectedValue === 'pelatihan1') {
        console.log('User memilih Ya');
        $('#is_plan_pelatihan_input').val(true);
    } else if (selectedValue === 'pelatihan2') {
        console.log('User memilih Tidak');
        $('#is_plan_pelatihan_input').val(false);
    }
});

$('#btn-yes-add').click(function(e) {
 
    var mode = $('#pelatihanModal').data('mode');    
    
    if (mode === 'add') {
        $.ajax({
            type: 'POST',
            url: '{{ url('/pelatihan/create') }}',
            data: $('form').serialize(),
            success: function(response) {
                if (response.status === 'success') {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'pelatihan berhasil di tambahkan!',
                    }).then(() => {
                       location.reload()
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'pelatihan gagal di tambahkan.',
                    });
                }
            },
        });
    } else if (mode === 'edit') {  
        $.ajax({
            type: 'PUT',
            url: '{{ url('/pelatihan/myedit') }}/' + pelatihanId,
            data: $('form').serialize() + '&pelatihan_id=' + pelatihanId,
            success: function(response) {
                if (response.status === 'success') {
                    
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'pelatihan berhasil di edit!',
                    }).then(() => {
                        location.reload()
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'pelatihan gagal di edit.',
                    });
                }
            },
        });
    }

    $('#pelatihanModal').modal('hide');
    
});
});



//SEND FIRST
document.querySelectorAll('.send').forEach(function(link) {
   link.addEventListener('click', function(event) {
       event.preventDefault();
       var pelatihanId = this.getAttribute('data-id');

       Swal.fire({
           title: 'Konfirmasi',
           text: 'Yakin ingin mengirim data?',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Ya, Kirim!',
           cancelButtonText: 'Batal'
       }).then((result) => {
           if (result.isConfirmed) {
               axios.post('{{ route('send.pelatihan') }}', {
                   pelatihan_id: pelatihanId
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
    var pelatihanId = $(this).data('id'); 
    $('#btn-yes-send').click(function() {
    
        var data = $('.form_send').serialize();
        $.ajax({
            type: 'POST',
            url: '{{ route('send.pelatihan') }}?pelatihan_id=' + pelatihanId, 
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


//DELETE
document.querySelectorAll('.delete').forEach(function(link) {
   link.addEventListener('click', function(event) {
       event.preventDefault();
       var pelatihanId = this.getAttribute('data-id');

       Swal.fire({
           title: 'Konfirmasi',
           text: 'Apakah Anda yakin akan menghapus data ini?',
           icon: 'warning',
           showCancelButton: true,
           confirmButtonText: 'Ya, Kirim!',
           cancelButtonText: 'Batal'
       }).then((result) => {
           if (result.isConfirmed) {
               axios.post('{{ route('delete.pelatihan') }}', {
                   pelatihan_id: pelatihanId
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
    var pelatihanId = $(this).data('id'); 

    $('#btn-yes-reject').click(function() {
        var data = $('.form_reject').serialize();

        $.ajax({
            type: 'POST',
            url: '{{ route('reject.pelatihan') }}?pelatihan_id=' + pelatihanId, 
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
    var pelatihanId = $(this).data('id'); // Ambil ID pelatihan dari atribut data-id
    
    $('#btn-yes-revisi').click(function() {
        // Ambil data dari formulir, termasuk pesan revisi
        var data = $('.form_revisi').serialize();

        // Kirim data dengan permintaan AJAX
        $.ajax({
            type: 'POST',
            url: '{{ route('revisi.pelatihan') }}?pelatihan_id=' + pelatihanId, 
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

