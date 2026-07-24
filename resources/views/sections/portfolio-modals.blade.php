@php
    $portfolioModals = [
        [
        'id' => 1, 
        'img' => 'keluarga.jpg', 
        'title' => 'Organisasi', 
        'subtitle' => 'Organitation Structural', 
        'desc' => 'struktur organisasi kelompok KKN Universitas Suryakencana di Desa Cibinong Hilir, menampilkan pembagian tugas dan tanggung jawab setiap anggota kelompok selama masa pengabdian.', 
        'client' => 'Threads', 
        'category' => 'Illustration'],

        [
        'id' => 2, 
        'img' => '2.jpg', 
        'title' => 'Mengajar SD', 
        'subtitle' => 'Graphic Design', 
        'desc' => 'Kegiatan mengajar di Sekolah Dasar sebagai bagian dari program kerja KKN, membantu proses belajar mengajar dan berbagi ilmu pengetahuan dengan siswa-siswi setempat.', 
        'client' => 'Explore', 
        'category' => 'Graphic Design'],

        ['id' => 3, 
        'img' => '3.jpg', 
        'title' => 'Finish', 
        'subtitle' => 'Identity', 
        'desc' => 'Perancangan identitas visual kelompok KKN, termasuk logo dan elemen branding lain yang mencerminkan citra kelompok selama kegiatan di Desa Cibinong Hilir.', 
        'client' => 'Finish', 
        'category' => 'Identity'],

        ['id' => 4, 
        'img' => '4.jpg', 
        'title' => 'COLA COLA', 
        'subtitle' => 'Branding', 
        'desc' => 'Studi kasus branding produk sebagai bahan latihan desain grafis kelompok, mempelajari elemen visual dan identitas merek yang kuat dan mudah dikenali.', 
        'client' => 'COLA COLA', 
        'category' => 'Branding'],
        
        ['id' => 5, 
        'img' => '5.jpg', 
        'title' => 'Southwest', 
        'subtitle' => 'Website Design', 
        'desc' => 'Proses perancangan dan pengembangan tampilan situs web desa, mulai dari tata letak, navigasi, hingga tampilan responsif untuk perangkat mobile dan desktop.', 
        'client' => 'Southwest', 
        'category' => 'Website Design'],

        ['id' => 6, 
        'img' => '6.jpg', 
        'title' => 'Window', 
        'subtitle' => 'Photography', 
        'desc' => 'Dokumentasi fotografi kegiatan KKN di Desa Cibinong Hilir, menangkap momen-momen penting selama proses pengabdian masyarakat berlangsung.', 
        'client' => 'Window', 
        'category' => 'Photography'],
    ];
@endphp

<!-- Portfolio Modals-->
@foreach ($portfolioModals as $modal)
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <h2 class="text-uppercase">{{ $modal['title'] }}</h2>
                                <p class="item-intro text-muted">{{ $modal['subtitle'] }}</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/' . $modal['img']) }}" alt="{{ $modal['title'] }}" />
                                <p>{{ $modal['desc'] }}</p>
                                <ul class="list-inline">
                                    <li>
                                        <strong>Client:</strong>
                                        {{ $modal['client'] }}
                                    </li>
                                    <li>
                                        <strong>Category:</strong>
                                        {{ $modal['category'] }}
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach