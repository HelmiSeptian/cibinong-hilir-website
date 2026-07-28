@php
    $portfolioModals = [
        ['id' => 1, 'img' => 'potoSungai.jpg', 'title' => 'Struktur Organisasi', 'subtitle' => 'Organitation Structural', 'desc' => 'Susunan struktur organisasi kelompok KKN Universitas Suryakencana di Desa Cibinong Hilir, menampilkan pembagian tugas dan tanggung jawab setiap anggota kelompok selama masa pengabdian.', 'client' => 'Threads', 'category' => 'Illustration'],
        ['id' => 2, 'img' => 'paud.jpg', 'title' => 'PAUD', 'subtitle' => 'Graphic Design', 'desc' => 'Kegiatan mengajar di Sekolah Dasar sebagai bagian dari program kerja KKN, membantu proses belajar mengajar dan berbagi ilmu pengetahuan dengan siswa-siswi setempat.', 'client' => 'Explore', 'category' => 'Graphic Design'],
        ['id' => 3, 'img' => 'pkbm.jpg', 'title' => 'PKBM', 'subtitle' => 'Identity', 'desc' => 'Perancangan identitas visual kelompok KKN, termasuk logo dan elemen branding lain yang mencerminkan citra kelompok selama kegiatan di Desa Cibinong Hilir.', 'client' => 'Finish', 'category' => 'Identity'],
        ['id' => 4, 'img' => 'SD.jpg', 'title' => 'Mengajar di SD', 'subtitle' => 'Branding', 'desc' => 'Studi kasus branding produk sebagai bahan latihan desain grafis kelompok, mempelajari elemen visual dan identitas merek yang kuat dan mudah dikenali.', 'client' => 'COLA COLA', 'category' => 'Branding'],
        ['id' => 5, 'img' => 'aula.jpg', 'title' => 'Pemaparan Proker KKN', 'subtitle' => 'Website Design', 'desc' => 'Proses perancangan dan pengembangan tampilan situs web desa, mulai dari tata letak, navigasi, hingga tampilan responsif untuk perangkat mobile dan desktop.', 'client' => 'Southwest', 'category' => 'Website Design'],
        ['id' => 6, 'img' => 'jumsih.jpg', 'title' => 'jumsih', 'subtitle' => 'Photography', 'desc' => 'Dokumentasi fotografi kegiatan KKN di Desa Cibinong Hilir, menangkap momen-momen penting selama proses pengabdian masyarakat berlangsung.', 'client' => 'Window', 'category' => 'Photography'],
    ];
@endphp

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">KKN Universitas Suryakencana</h2>
            <h3 class="section-subheading text-muted">Kelompok KKN Desa Cibinong Hilir 2026</h3>
        </div>
        <div class="row">
            @foreach ($portfolioModals as $modal)
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal{{ $modal['id'] }}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="{{ asset('assets/img/portfolio/' . $modal['img']) }}" alt="{{ $modal['title'] }}" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{ $modal['title'] }}</div>
                            <div class="portfolio-caption-subheading text-muted">{{ $modal['subtitle'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>