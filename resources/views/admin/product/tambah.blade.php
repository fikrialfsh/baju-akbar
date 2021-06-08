@extends('admin.layout.app')
@section('content')

            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row mb-3">
                      <div class="col">
                      <h4 class="card-title">Tambah Produk</h4>
                      </div>
                      <div class="col text-right">
                      <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-primary">Kembali</a>
                      </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="exampleInputUsername1">Nama Produk</label>
                                <input required type="text" class="form-control" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect2">Pilih Kategori</label>
                                    <select class="form-control" name="categories_id" id="exampleFormControlSelect2">
                                    @foreach($categories as $categorie)
                                        <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputUsername1">Berat (gram)</label>
                                <input required type="number" class="form-control" name="weigth">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputUsername1">Harga</label>
                                <input required type="number" class="form-control" name="price">
                                </div>
                                <div class="form-group">
                                <label for="exampleInputUsername1">Stok</label>
                                <input required type="number" class="form-control" name="stok">
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input required type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group">
                                <label>Deskripsi</label>
                                <input name="description" id="" cols="20" rows="5" class="form-control" required>
                                </input>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-success text-right">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
@endsection
