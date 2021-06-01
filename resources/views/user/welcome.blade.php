@extends('user.app')
@section('content')

 <!-- Latest Product -->
 <div class="col-12">
	 
                        <div class="row">
                            <div class="col-12 py-3">
                                <div class="row">
                                    <div class="col-12 text-center text-uppercase">
                                        <h3>Latest Products</h3>
                                    </div>
                                </div>
								
                                <div class="row">

                                    <!-- Product -->
									@foreach($produks as $produk)
                                    <div class="col-lg-3 col-sm-6 my-3">
                                        <div class="col-12 bg-white text-center h-100 product-item">
										<span class="product-new-top">New</span>
                                            <div class="row h-100">
                                                <div class="col-12 p-0 mb-3">
                                                    <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                                                        <img src="{{ url('uploads')}}/{{ $produk->image }}" class="img-fluid">
                                                    </a>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}" class="product-name">{{ $produk->name }}</a>
                                                </div>
                                                <div class="col-12 mb-3">
												<div class="grid-price mt-2">
													<span class="money ">Rp. {{ $produk->price }}"</span>
												</div>
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
                                                    <button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus me-2"></i>Add to cart</button>
                                                </div>
												
                                            </div>
                                        </div>
										
                                    </div>
									@endforeach
                                    <!-- Product -->
									

                              

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Products -->

    @endsection