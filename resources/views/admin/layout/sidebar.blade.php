<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Akbar Creative</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Home</li>
              <li class="nav-item dropdown active">
                <a href="/admin" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
               
              </li>
              <li class="menu-header">MASTER</li>
              <li class="nav-item dropdown">
                <a href="{{ route('admin.pelanggan') }}" class="nav-link"><i class="fas fa-th-large"></i> <span>Pelanggan</span></a>
               
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Master Data</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route('admin.product') }}">Master Produk</a></li>
                  <li><a class="nav-link {{ Request::path() === 'admin/categories' ? 'active' : '' }}" href="{{ route('admin.categories') }}">Master Kategori</a></li>
                  
                </ul>
              </li>
              <li class="menu-header">Orders</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Transaksi</span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('admin.transaksi') }}">Pesanan Baru</a></li>
                  <li><a href="{{ route('admin.transaksi.perludicek') }}">Perlu Dicek</a></li>
                  <li><a href="{{ route('admin.transaksi.perludikirim') }}">Perlu Dikirim</a></li>
                  <li><a href="{{ route('admin.transaksi.dikirim') }}"">Sedang Dikirim</a></li>
                  <li><a href="{{ route('admin.transaksi.selesai') }}">Selesai</a></li>
                  <li><a href="{{ route('admin.transaksi.dibatalkan') }}">Batal</a></li>
                </ul>
              </li>
            
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fa fa-pencil-ruler"></i> <span>Pengaturan</span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ route('admin.pengaturan.alamat') }}">Alamat Toko</a></li>
                  <li><a href="{{ route('admin.rekening') }}"">Atur Rekening</a></li>
                 
                </ul>
              </li>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
              </a>
            </div>
        </aside>
      </div>