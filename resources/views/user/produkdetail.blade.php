@extends('user.app')
@section('content')
<div class="bg-light py-3">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Produk Detail</strong></div>
    </div>
    </div>
</div>

<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="{{ url('uploads')}}/{{ $produk->image }}">
													<div class="thumb-image"> <img src="{{ url('uploads')}}/{{ $produk->image }}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>{{ $produk->name }}</h3>
									<p><span class="item_price">Rp. {{ $produk->price }}</span>
									</p>
									 Stok : {{ $produk->stok }}<br>
									<div><br></div>
									<div class="color-quantity">
										<div class="color-quality-right">
											<h5>Jumlah :</h5>
										</div>
									</div>
									<div class="occasion-cart">
											<div class="googles single-item singlepage">
													<form action="{{ route('user.keranjang.simpan') }}" method="post">
                                                    @csrf
                                                    @if(Route::has('login'))
                                                        @auth
                                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                                        @endauth
                                                    @endif
                                                    <input type="hidden" name="products_id" value="{{ $produk->id }}">
                                                    <input type="text" name="qty" class="form-control " value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1"><br>
														<button type="submit" class="btn btn-dark">
															Keranjang
														</button>
														
													</form>
		
												</div>
									</div>
								
								<div class="clearfix"> </div>
								<!--/tabs-->
								<div class="responsive_tabs">
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											<li>Description</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
												<div class="single_page">	
													<p>{{ $produk->description }}</p>
												</div>
											</div>
											<!--//tab_one-->
											<!-- <div class="tab2">
					
											</div>
											<div class="tab3">
					
												
											</div> -->
										</div>
									</div>
								</div>
								<!--//tabs-->
					
					</div>
				</div>
			</div>
</div>
@endsection