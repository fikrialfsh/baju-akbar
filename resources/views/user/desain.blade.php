@extends('user.app')
@section('content')
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->

        <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <!-- <a href="{{url('/')}}" class="btn btn-round btn-primary"><i class="fas fa-arrow-circle-left"> Kembali</i></a> -->
              </div>
              <div class="col-md-6 order_overview">
                            <h3>Ketentuan</h3>
                            <!-- <button id="view_ajax">CEK</button> -->
                            <div class="wrap-table">
                                <strong>** Proses pengeditan tidak dapat dilakukan apabila terdapat ketidaksesuaian seperti ukuran gambar (dalam pixel) yang terlalu kecil. Minimal Ukuran gambar sebesar 3000 pixel. Perhatikan kembali ukuran gambar yang akan diunggah.</strong><br><br>
                                <ul>
                                    <li>Format file gambar diunggah dalam bentuk PNG, JPEG dan PDF.</li>
                                    <li>Mohon agar tidak mengunggah gambar yang berbau SARA, kekerasan atau pornografi. Desain Kaos Online berhak menolak desain yang kami anggap melanggar aturan tersebut.</li>
                                    <li>Hak Cipta terhadap gambar yang diunggah tidak menjadi tanggung jawab Desain Kaos Online.</li>
                                    <li>Proses pengeditan tidak dapat dilakukan apabila terdapat ketidaksesuaian seperti ukuran gambar (dalam pixel) yang terlalu kecil.</li>
                                </ul>
                            </div>
                        </div>
                <div class="col-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <h5><i class="fa "></i>  UPLOAD DESAINMU SENDIRI</h5>
                        </div>
                        <div class="card-body">
                          @if ($errors->any())
                            <div class="alert alert-danger" align="left">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                          @endif
                            <form action="{{ route('upload.desain') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Tipe Kaos<em>*</em></label>
                                    <input type="text" class="form-control" name="tipe_kaos" style="text-transform: capitalize;">
                                </div>
                                <div class="form-group">
                                    <label>Warna<em>*</em></label>
                                    <input type="text" class="form-control" name="warna" >
                                </div>
                                <div class="form-group">
                                    <label>Ukuran<em>*</em></label> 
                                    <input type="text" class="form-control" name="ukuran"></span>
                                </div>
                                <div class="form-group">
                                  <label>Jumlah<em>*</em></label>
                                  <input type="number" class="form-control" name="jumlah" >
                              </div>
                              <div class="form-group">
                                <label>Upload Desain</label> <br>
                                <input type="file" name="listGambar[]" accept="image/*" multiple>
                             </div>
                             <div class="form-group">
                                    <label>Deskripsi<em>*</em></label> 
                                    <input type="text" class="form-control" name="description"></span>
                                </div>

                                <button class="btn btn-primary btn-flat btn-block btn-sm">Submit Desain</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
@endsection