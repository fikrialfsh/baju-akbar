@extends('user.app')
@section('content')

 <!-- Latest Product -->
 <div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="carousel-caption text-center">
							<h3>Men’s eyewear
								<span>Cool summer sale 50% off</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
					<div class="carousel-item item2">
						<div class="carousel-caption text-center">
							<h3>Women’s eyewear
								<span>Want to Look Your Best?</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item3">
						<div class="carousel-caption text-center">
							<h3>Men’s eyewear
								<span>Cool summer sale 50% off</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>

						</div>
					</div>
					<div class="carousel-item item4">
						<div class="carousel-caption text-center">
							<h3>Women’s eyewear
								<span>Want to Look Your Best?</span>
							</h3>
							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<!--//banner -->
		</div>
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
													<span class="money ">Rp. {{ $produk->price }},00</span>
												</div>
                                                </div>
                                                <div class="col-12 mb-3 align-self-end">
													<a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                                                    <button class="btn btn-outline-dark" type="button"><i class="fas fa-cart-plus me-2"></i>Detail</button>
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
                </div>
                   
                    

    @endsection