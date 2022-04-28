<ul class="nav pcoded-inner-navbar">
    @if ( Auth::user()->role == 'admin')
        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item {{ Request::path() == 'admin' ? 'active' : '' }}">
            <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
        </li>
        <li class="nav-item pcoded-menu-caption">
            <label>Management Website Public</label>
        </li>
        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item {{ Request::path() == 'admin/profile' ? 'active' : '' }} pcoded-hasmenu">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Profile Desa</span></a>
            <ul class="pcoded-submenu">
                <li class="{{ Request::path() == 'admin/profile/sejarah' ? 'active' : '' }}"><a href="bc_button.html" class="">Sejarah</a></li>
                <li class=""><a href="bc_badges.html" class="">Visi & Misi</a></li>
                <li class=""><a href="bc_breadcrumb-pagination.html" class="">Perangkat Desa</a></li>
                <li class=""><a href="bc_collapse.html" class="">Demograsi Penduduk</a></li>
                <li class=""><a href="bc_tabs.html" class="">Fasilitas Umum</a></li>
                <li class=""><a href="bc_typography.html" class="">Anggaran Desa</a></li>
            </ul>
        </li>
        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item">
            <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Potensi Desa</span></a>
        </li>
        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">informasi Pendidikan</span></a>
            <ul class="pcoded-submenu">
                <li class=""><a href="bc_button.html" class="">PAUD</a></li>
                <li class=""><a href="bc_badges.html" class="">TK</a></li>
                <li class=""><a href="bc_breadcrumb-pagination.html" class="">SD / MI</a></li>
                <li class=""><a href="bc_collapse.html" class="">SMP / MTS</a></li>
                <li class=""><a href="bc_tabs.html" class="">SMA / SMK / MA</a></li>
            </ul>
        </li>
        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">informasi</span></a>
            <ul class="pcoded-submenu">
                <li class=""><a href="bc_button.html" class="">Berita</a></li>
                <li class=""><a href="bc_badges.html" class="">Mekanisme Pengurusan Berkas</a></li>
                <li class=""><a href="bc_breadcrumb-pagination.html" class="">Layanan Pengaduan (Saran Kritik)</a></li>
            </ul>
        </li>
        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Galeri</span></a>
            <ul class="pcoded-submenu">
                <li class=""><a href="bc_button.html" class="">Desa</a></li>
                <li class=""><a href="bc_badges.html" class="">Kegiatan</a></li>
            </ul>
        </li>
        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
            <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Link Terkait</span></a>
            <ul class="pcoded-submenu">
                <li class=""><a href="bc_button.html" class="">BPD</a></li>
                <li class=""><a href="bc_badges.html" class="">BUMD</a></li>
                <li class=""><a href="bc_badges.html" class="">PKK</a></li>
                <li class=""><a href="bc_badges.html" class="">BKM</a></li>
                <li class=""><a href="bc_badges.html" class="">LINMAS</a></li>
                <li class=""><a href="bc_badges.html" class="">KPM</a></li>
                <li class=""><a href="bc_badges.html" class="">POSYANDU</a></li>
                <li class=""><a href="bc_badges.html" class="">POSYANDU LANSIA</a></li>
                <li class=""><a href="bc_badges.html" class="">POSBINDU</a></li>
                <li class=""><a href="bc_badges.html" class="">POSKESDES</a></li>
                <li class=""><a href="bc_badges.html" class="">KARANG TARUNA</a></li>
            </ul>
        </li>
        <li class="nav-item pcoded-menu-caption">
            <label>Kepengurusan RT</label>
        </li>
        <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item  {{ Request::segment(1) . '/'. Request::segment(2) == 'admin/pelayanan_grafik' || Request::segment(1) . '/'. Request::segment(2) == 'admin/pelayanan' ? 'active pcoded-trigger' : '' }} pcoded-hasmenu ">
            <a href="javascript:" class="nav-link"><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Pelayanan RT</span></a>
            <ul class="pcoded-submenu">
                <li class="{{ Request::segment(1) . '/'. Request::segment(2) == 'admin/pelayanan_grafik' ? 'active' : '' }}"><a href="{{ route('admin/pelayanan_grafik') }}" class="">Grafik Pelayanan dan Penilaian</a></li>
                <li class="{{ Request::segment(1) . '/'. Request::segment(2) == 'admin/pelayanan' ? 'active' : '' }}"><a href="{{ route('admin/pelayanan') }}" class="">Pengajuan Pelayanan</a></li>
            </ul>
        </li>
        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item {{ Request::segment(1) . '/'. Request::segment(2) == 'admin/master_warga' ? 'active' : '' }}">
            <a href="{{ route('admin/master_warga') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Master Data Warga</span></a>
        </li>
    @endif

    @if (Auth::user()->role  == 'rt')
        <li class="nav-item pcoded-menu-caption">
            <label>Pengajuan</label>
        </li>
        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item {{ Request::segment(1) . '/'. Request::segment(2) == 'rt/pelayanan' || Request::path() == 'rt' ? 'active' : '' }}">
            <a href="{{ ('/rt/pelayanan') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Pengajuan Pelayanan</span></a>
        </li>
        <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item  {{ Request::segment(1) . '/'. Request::segment(2) == 'rt/master_warga' ? 'active' : '' }}">
            <a href="{{ route('rt/master_warga') }}" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">Master Data Warga</span></a>
        </li>
    @endif
</ul>
