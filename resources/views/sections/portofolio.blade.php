@php
    $portfolioModals = [
        ['id' => 1, 'img' => 'potoSungai.jpg', 'title' => 'Struktur Organisasi', 'subtitle' => 'Organitation Structural', 'desc' => 'struktur organisasi KKN merupakan salah satu bentuk kegiatan pengenalan yang dilakukan oleh mahasiswa KKN kepada perangkat desa dan masyarakat setempat, dengan tujuan memberikan pemahaman mengenai susunan kepengurusan serta pembagian tugas dan tanggung jawab dalam kelompok KKN. Kegiatan ini biasanya dilaksanakan pada tahap awal masa KKN, bersamaan dengan kegiatan perkenalan atau pemaparan program kerja.', 'client' => 'Threads', 'category' => 'Illustration'],
        ['id' => 2, 'img' => 'paud.jpg', 'title' => 'PAUD', 'subtitle' => 'Kegiatan KKN', 'desc' => 'merupakan salah satu bentuk kegiatan KKN di bidang pendidikan yang bertujuan untuk mendukung proses tumbuh kembang dan pembelajaran anak usia dini di lingkungan lokasi KKN. Kegiatan ini dilaksanakan dengan cara mahasiswa turut mendampingi guru PAUD dalam kegiatan belajar sambil bermain, mengingat karakteristik anak usia dini yang lebih efektif belajar melalui aktivitas yang menyenangkan dan interaktif.', 'client' => 'Explore', 'category' => 'Graphic Design'],
        ['id' => 3, 'img' => 'pkbm.jpg', 'title' => 'PKBM', 'subtitle' => 'Kegiatan KKN', 'desc' => 'merupakan salah satu bentuk kegiatan KKN di bidang pendidikan nonformal yang bertujuan untuk mendukung proses belajar mengajar bagi masyarakat yang mengikuti program kesetaraan, seperti Paket A, Paket B, maupun Paket C. Kegiatan ini dilaksanakan dengan cara mahasiswa KKN turut membantu tutor atau pengelola PKBM dalam menyampaikan materi pembelajaran, mendampingi peserta didik yang rata-rata merupakan warga belajar dari berbagai kalangan usia, mulai dari anak putus sekolah hingga orang dewasa yang ingin melanjutkan pendidikan.', 'client' => 'Finish', 'category' => 'Identity'],
        ['id' => 4, 'img' => 'SD.jpg', 'title' => 'Mengajar di SD', 'subtitle' => 'Kegiatan KKN', 'desc' => 'salah satu bentuk kegiatan KKN di bidang pendidikan yang bertujuan untuk membantu proses belajar mengajar di sekolah dasar setempat. Kegiatan ini dilaksanakan dengan cara mahasiswa KKN terjun langsung ke dalam kelas untuk mendampingi guru dalam menyampaikan materi pelajaran, memberikan metode pembelajaran yang lebih variatif dan menarik, serta membantu siswa yang mengalami kesulitan dalam memahami pelajaran.', 'client' => 'COLA COLA', 'category' => 'Branding'],
        ['id' => 5, 'img' => 'aula.jpg', 'title' => 'Pemaparan Proker KKN', 'subtitle' => 'Kegiatan KKN', 'desc' => 'Pemaparan proker merupakan kegiatan penyampaian rencana program kerja mahasiswa KKN kepada perangkat desa, tokoh masyarakat, dan warga setempat. Kegiatan ini bertujuan untuk memperkenalkan berbagai program yang telah dirancang, baik dari segi latar belakang, tujuan, sasaran, maupun mekanisme pelaksanaannya, sehingga masyarakat dan perangkat desa memiliki gambaran yang jelas mengenai kegiatan yang akan dijalankan selama masa KKN berlangsung.', 'client' => 'Southwest', 'category' => 'Website Design'],
        ['id' => 6, 'img' => 'jumsih.jpg', 'title' => 'jumsih', 'subtitle' => 'Kegiatan KKN', 'desc' => 'Jumat Bersih adalah kegiatan gotong royong yang dilaksanakan secara rutin oleh warga setiap hari Jumat untuk menjaga kebersihan dan kerapian lingkungan tempat tinggal. Kegiatan ini biasanya dilakukan pada pagi hari sebelum warga memulai aktivitas masing-masing, dengan melibatkan seluruh elemen masyarakat mulai dari anak-anak, remaja, hingga orang dewasa.', 
        ],
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