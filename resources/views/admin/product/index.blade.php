@extends('admin.layout.app')
@section('content')

            <div class="col text-right">
                      
                      </div>
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Data Produk</h4>
                    <div class="col text-right">
                      <a href="{{ route('admin.product.tambah') }}" class="btn btn-primary">Tambah</a>
                  </div>
                  </div>
                
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped table-md">
                        <tr>
                          <th>#</th>
                          <th>Nama Produk</th>
                          <th>Harga</th>
                          <th>Berat</th>
                          <th>Kategori</th>
                          <th>Stok</th>
                          <th>Gambar</th>
                          
                          <th>Aksi</th>
                        </tr>
                        <tr>
                        <tbody>
                          @foreach($products as $product)
                            <tr>
                                <td style:align="center"></td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->weigth }}gr</td>
                                <td>{{ $product->nama_kategori }}</td>
                                <td>{{ $product->stok }}</td>
                                <td><img src="{{ url('uploads')}}/{{ $product->image }}" alt="" ></td>
                                <td style:align="center">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('admin.product.edit',['id'=>$product->id]) }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-tooltip-edit"></i>
                                  </a>
                                  <a href="{{ route('admin.product.delete',['id'=>$product->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                    <i class="mdi mdi-delete-forever"></i>
                                  </a>
                                </div>
                                </td>
            
                        </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
                  <div class="card-footer text-right">
                    <nav class="d-inline-block">
                      <ul class="pagination mb-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
          </div>
          
@endsection
