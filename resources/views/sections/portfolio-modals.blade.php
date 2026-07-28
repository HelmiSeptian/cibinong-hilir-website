@php
    $portfolioModals = [
        [
        'id' => 1, 
        'img' => 'potoSungai.jpg', 
        'title' => 'Organisasi', 
        'subtitle' => 'Organitation Structural', 
        'desc' => 'struktur organisasi KKN merupakan salah satu bentuk kegiatan pengenalan yang dilakukan oleh mahasiswa KKN kepada perangkat desa dan masyarakat setempat, dengan tujuan memberikan pemahaman mengenai susunan kepengurusan serta pembagian tugas dan tanggung jawab dalam kelompok KKN. Kegiatan ini biasanya dilaksanakan pada tahap awal masa KKN, bersamaan dengan kegiatan perkenalan atau pemaparan program kerja.', 
        'client' => 'Anggota KKN', 
        'category' => 'Team KKN'],

        [
        'id' => 2, 
        'img' => 'paud.jpg', 
        'title' => 'Mengajar SD', 
        'subtitle' => 'Kegiatan KKN', 
        'desc' => 'merupakan salah satu bentuk kegiatan KKN di bidang pendidikan yang bertujuan untuk mendukung proses tumbuh kembang dan pembelajaran anak usia dini di lingkungan lokasi KKN. Kegiatan ini dilaksanakan dengan cara mahasiswa turut mendampingi guru PAUD dalam kegiatan belajar sambil bermain, mengingat karakteristik anak usia dini yang lebih efektif belajar melalui aktivitas yang menyenangkan dan interaktif.', 
        'client' => 'Murid dan guru Paud', 
        'category' => 'Kegiatan KKN'],

        ['id' => 3, 
        'img' => 'pkbm.jpg', 
        'title' => 'PKBM', 
        'subtitle' => 'Kegiatan KKN', 
        'desc' => 'merupakan salah satu bentuk kegiatan KKN di bidang pendidikan nonformal yang bertujuan untuk mendukung proses belajar mengajar bagi masyarakat yang mengikuti program kesetaraan, seperti Paket A, Paket B, maupun Paket C. Kegiatan ini dilaksanakan dengan cara mahasiswa KKN turut membantu tutor atau pengelola PKBM dalam menyampaikan materi pembelajaran, mendampingi peserta didik yang rata-rata merupakan warga belajar dari berbagai kalangan usia, mulai dari anak putus sekolah hingga orang dewasa yang ingin melanjutkan pendidikan.', 
        'client' => 'Murid dan guru PKBM', 
        'category' => 'kegiatan KKN'],

        ['id' => 4, 
        'img' => 'SD.jpg', 
        'title' => 'Mengajar di SD', 
        'subtitle' => 'Kegiatan KKN', 
        'desc' => 'salah satu bentuk kegiatan KKN di bidang pendidikan yang bertujuan untuk membantu proses belajar mengajar di sekolah dasar setempat. Kegiatan ini dilaksanakan dengan cara mahasiswa KKN terjun langsung ke dalam kelas untuk mendampingi guru dalam menyampaikan materi pelajaran, memberikan metode pembelajaran yang lebih variatif dan menarik, serta membantu siswa yang mengalami kesulitan dalam memahami pelajaran.', 
        'client' => 'Siswa Siswi SDN Cibinong Hilir', 
        'category' => 'Kegiatan KKN'],
        
        ['id' => 5, 
        'img' => 'aula.jpg', 
        'title' => 'Pemaparan Program Kerja', 
        'subtitle' => 'Kegiatan KKN', 
        'desc' => 'Pemaparan proker merupakan kegiatan penyampaian rencana program kerja mahasiswa KKN kepada perangkat desa, tokoh masyarakat, dan warga setempat. Kegiatan ini bertujuan untuk memperkenalkan berbagai program yang telah dirancang, baik dari segi latar belakang, tujuan, sasaran, maupun mekanisme pelaksanaannya, sehingga masyarakat dan perangkat desa memiliki gambaran yang jelas mengenai kegiatan yang akan dijalankan selama masa KKN berlangsung.', 
        'client' => 'Masyarakat dan Perangkat desa', 
        'category' => 'Kegiatan KKN'],

        ['id' => 6, 
        'img' => 'jumsih.jpg', 
        'title' => 'JUMSIH', 
        'subtitle' => 'Kegiatan KKN', 
        'desc' => 'Jumat Bersih adalah kegiatan gotong royong yang dilaksanakan secara rutin oleh warga setiap hari Jumat untuk menjaga kebersihan dan kerapian lingkungan tempat tinggal. Kegiatan ini biasanya dilakukan pada pagi hari sebelum warga memulai aktivitas masing-masing, dengan melibatkan seluruh elemen masyarakat mulai dari anak-anak, remaja, hingga orang dewasa.', 
        'client' => 'Masyarakat Desa', 
        'category' => 'Kegiatan KKN'],


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