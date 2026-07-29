<style>
    #kegiatan-kkn-section {
        padding: 6rem 0;
        background-color: #f8f9fc;
    }
    #kegiatan-kkn-section .kegiatankkn-heading {
        text-align: center;
        margin-bottom: 3rem;
    }
    #kegiatan-kkn-section .kegiatankkn-heading h2 {
        font-size: 1.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
        color: #212529;
    }
    #kegiatan-kkn-section .kegiatankkn-heading h3 {
        font-size: 1rem;
        font-style: italic;
        color: #6c757d;
        font-weight: 400;
        margin-top: 0.25rem;
    }
    #kegiatan-kkn-section .kegiatankkn-item {
        max-width: 25rem;
        margin: 0 auto 2rem auto;
    }
    #kegiatan-kkn-section .kegiatankkn-link {
        position: relative;
        display: block;
        overflow: hidden;
        cursor: pointer;
    }
    #kegiatan-kkn-section .kegiatankkn-link img {
        width: 100%;
        display: block;
    }
    #kegiatan-kkn-section .kegiatankkn-hover {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(253, 191, 24, 0.9);
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #kegiatan-kkn-section .kegiatankkn-link:hover .kegiatankkn-hover {
        opacity: 1;
    }
    #kegiatan-kkn-section .kegiatankkn-hover span {
        color: #fff;
        font-size: 2rem;
        font-weight: 300;
        line-height: 1;
    }
    #kegiatan-kkn-section .kegiatankkn-caption {
        background-color: #fff;
        text-align: center;
        padding: 1.25rem 1rem;
    }
    #kegiatan-kkn-section .kegiatankkn-caption-heading {
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        color: #212529;
        margin-bottom: 0.15rem;
    }
    #kegiatan-kkn-section .kegiatankkn-caption-subheading {
        font-size: 0.9rem;
        font-style: italic;
        color: #6c757d;
    }

    /* Modal styling */
    .kegiatankkn-modal .modal-content {
        border-radius: 0;
        padding: 3rem;
    }
    .kegiatankkn-modal .close-modal {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 2rem;
        height: 2rem;
        cursor: pointer;
    }
    .kegiatankkn-modal .close-modal img {
        width: 100%;
    }
    .kegiatankkn-modal h2 {
        font-weight: 700;
        text-transform: uppercase;
        text-align: center;
    }
    .kegiatankkn-modal .item-intro {
        text-align: center;
        font-style: italic;
    }
    .kegiatankkn-modal img.modal-img {
        max-width: 100%;
        margin: 1.5rem auto;
        display: block;
    }
    .kegiatankkn-modal .galeri-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
        justify-content: center;
        margin: 1.5rem 0;
    }
    .kegiatankkn-modal .galeri-item {
        text-align: center;
    }
    .kegiatankkn-modal .galeri-item img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #e9ecef;
        display: block;
    }
    .kegiatankkn-modal .galeri-nama {
        margin-top: 0.4rem;
        font-size: 0.9rem;
        font-weight: 600;
        color: #212529;
    }
    .kegiatankkn-modal ul.list-inline {
        text-align: center;
        margin-top: 1.5rem;
    }
    .kegiatankkn-modal ul.list-inline li {
        display: inline-block;
        margin: 0 1rem;
    }
    .kegiatankkn-modal .btn-close-project {
        display: block;
        margin: 1.5rem auto 0 auto;
    }
</style>

@php
    $kegiatanKknModals = [
        [
            'id' => 1,
            'folder' => 'kegiatan-kkn',
            'img' => 'potoSungai.jpg',
            'title' => 'Anggota KKN Universitas Suryakencana 2026 di Desa Cibinong Hilir',
            'subtitle' => '-',
            'desc' => 'Kuliah Kerja Nyata (KKN) Universitas Suryakancana Tahun 2026 di Desa Cibinong Hilir merupakan bentuk pengabdian kepada masyarakat yang dilaksanakan oleh mahasiswa sebagai bagian dari pelaksanaan Tri Dharma Perguruan Tinggi. Selama kegiatan berlangsung, mahasiswa berkolaborasi dengan pemerintah desa dan masyarakat dalam merancang serta melaksanakan berbagai program kerja yang bertujuan memberikan manfaat nyata bagi lingkungan sekitar.

Beragam program telah dilaksanakan, meliputi pengembangan website profil desa, kegiatan pendidikan di sekolah dasar, sosialisasi bahaya narkotika kepada pelajar, kegiatan Jumat Bersih, pendampingan UMKM, serta partisipasi dalam berbagai kegiatan kemasyarakatan seperti pawai obor, karnaval, dan kegiatan olahraga desa. Seluruh program disusun berdasarkan kebutuhan masyarakat serta dilaksanakan dengan mengedepankan semangat gotong royong, kolaborasi, dan pemberdayaan.

Melalui pelaksanaan KKN ini, diharapkan tercipta hubungan yang baik antara mahasiswa dan masyarakat, meningkatnya partisipasi warga dalam pembangunan desa, serta terwujudnya inovasi yang dapat memberikan dampak positif dan berkelanjutan bagi kemajuan Desa Cibinong Hilir. Selain memberikan manfaat bagi masyarakat, kegiatan ini juga menjadi sarana bagi mahasiswa untuk mengembangkan kemampuan kepemimpinan, komunikasi, kerja sama tim, serta penerapan ilmu pengetahuan secara langsung di tengah kehidupan bermasyarakat.',
            'galeri_images' => [
                ['img' => 'awa.JPG', 'nama' => 'Ahwa'],
                ['img' => 'bew.JPG', 'nama' => 'Rifqi'],
                ['img' => 'helmi.JPG', 'nama' => 'Helmi'],
                ['img' => 'farid.JPG', 'nama' => 'Farid'],
                ['img' => 'intan.JPG', 'nama' => 'Intan'],
                ['img' => 'oji.JPG', 'nama' => 'Piqri'],
                ['img' => 'agis.JPG', 'nama' => 'Agista'],
                ['img' => 'andin.JPG', 'nama' => 'Andini'],
                ['img' => 'bangsat.JPG', 'nama' => 'Satria'],
                ['img' => 'dev.JPG', 'nama' => 'Devina'],
                ['img' => 'cit.JPG', 'nama' => 'Citra'],
                ['img' => 'eki.JPG', 'nama' => 'Rifki'],
                ['img' => 'harir.JPG', 'nama' => 'Harir'],
                ['img' => 'jul.JPG', 'nama' => 'Zulfikar'],
                ['img' => 'tiklot.JPG', 'nama' => 'Rafli'],
                ['img' => 'kahfi.jpg', 'nama' => 'Kahfi'],
                // tambahkan anggota lain dengan pola yang sama
            ],
            'tanggal' => '15 Juni - 23 Agustus 2026',
            'lokasi' => 'Desa Cibinong Hilir'
        ],
        [
            'id' => 2,
            'folder' => 'kegiatan-kkn',
            'img' => 'bnnSMP.jpeg',
            'title' => 'Sosialisasi Narkotika',
            'subtitle' => 'Kesehatan',
            'desc' => 'Kegiatan Sosialisasi Bahaya Narkotika di SMP At-Taqwa Cibinong Hilir merupakan upaya edukatif untuk meningkatkan pengetahuan dan kesadaran siswa mengenai bahaya penyalahgunaan narkotika, psikotropika, dan zat adiktif lainnya. Melalui kegiatan ini, para peserta diberikan pemahaman tentang jenis-jenis narkotika, dampak buruk terhadap kesehatan fisik dan mental, konsekuensi hukum, serta pentingnya menjauhi segala bentuk penyalahgunaan narkoba.

                        Sosialisasi disampaikan secara interaktif melalui pemaparan materi, diskusi, dan sesi tanya jawab sehingga siswa dapat memahami cara mengenali, menghindari, serta menolak ajakan yang mengarah pada penyalahgunaan narkotika. Kegiatan ini juga bertujuan membentuk karakter generasi muda yang sehat, berprestasi, dan memiliki kesadaran untuk menjaga diri dari pengaruh negatif pergaulan.

                        Melalui kegiatan sosialisasi ini, diharapkan seluruh siswa SMP At-Taqwa Cibinong Hilir semakin memahami pentingnya menerapkan pola hidup sehat, menjunjung tinggi nilai-nilai moral, serta berperan aktif dalam menciptakan lingkungan sekolah dan masyarakat yang aman, nyaman, dan bebas dari penyalahgunaan narkotika.',
            'galeri_images' => [
                'bnn1.jpg',
                'bnn.jpg',
            ],
            'tanggal' => '29 Juli 2026',
            'lokasi' => 'SMP At-Taqwa Desa Cibinong Hilir'
        ],
        [
            'id' => 3,
            'folder' => 'kegiatan-kkn',
            'img' => 'jumsih.jpg',
            'title' => 'Jumat Bersih',
            'subtitle' => 'Sosial',
            'desc' => 'Kegiatan Jumat Bersih merupakan program rutin yang dilaksanakan oleh masyarakat Desa Cibinong Hilir sebagai bentuk kepedulian terhadap kebersihan lingkungan dan upaya menciptakan desa yang sehat, nyaman, serta asri. Kegiatan ini melibatkan berbagai unsur masyarakat, mulai dari perangkat desa, RT/RW, karang taruna, hingga warga yang secara bersama-sama bergotong royong membersihkan lingkungan.

                        Berbagai aktivitas dilakukan dalam kegiatan ini, seperti membersihkan jalan desa, saluran drainase, fasilitas umum, tempat ibadah, serta area lingkungan permukiman. Selain menjaga kebersihan, Jumat Bersih juga menjadi sarana untuk mempererat kebersamaan, meningkatkan rasa tanggung jawab terhadap lingkungan, dan menumbuhkan semangat gotong royong di tengah masyarakat.

                        Melalui kegiatan Jumat Bersih, diharapkan kesadaran masyarakat akan pentingnya menjaga kebersihan lingkungan semakin meningkat sehingga tercipta Desa Cibinong Hilir yang bersih, sehat, indah, dan nyaman untuk dihuni. Program ini juga menjadi wujud nyata komitmen masyarakat dalam menciptakan lingkungan yang mendukung kualitas hidup yang lebih baik bagi seluruh warga.',
            'galeri_images' => [
                'jumsih.jpg',
            ],
            'tanggal' => 'Jumat',
            'lokasi' => 'Desa Cibinong Hilir'
        ],
        [
            'id' => 4,
            'folder' => 'kegiatan-kkn',
            'img' => 'SD.jpg',
            'title' => 'Mengajar SDN Cibinong Hilir',
            'subtitle' => 'Pendidikan',
            'desc' => 'Kegiatan Mengajar di Sekolah Dasar (SD) merupakan salah satu bentuk pengabdian kepada masyarakat yang bertujuan untuk mendukung proses pembelajaran sekaligus meningkatkan motivasi belajar siswa. Dalam kegiatan ini, para pengajar memberikan materi pembelajaran secara interaktif, kreatif, dan menyenangkan sehingga siswa dapat lebih mudah memahami pelajaran yang disampaikan.

                        Selain menyampaikan materi sesuai dengan jenjang pendidikan, kegiatan ini juga diisi dengan berbagai aktivitas edukatif, seperti permainan pembelajaran, diskusi, tanya jawab, serta pemberian motivasi untuk menumbuhkan semangat belajar dan rasa percaya diri siswa. Melalui pendekatan yang komunikatif, diharapkan tercipta suasana belajar yang aktif, nyaman, dan menyenangkan.

                        Kegiatan mengajar ini tidak hanya bertujuan meningkatkan pengetahuan akademik siswa, tetapi juga menanamkan nilai-nilai karakter seperti disiplin, tanggung jawab, kerja sama, dan saling menghargai. Dengan adanya kegiatan ini, diharapkan dapat memberikan pengalaman belajar yang bermanfaat serta berkontribusi dalam mendukung peningkatan kualitas pendidikan di sekolah dasar.',
            'galeri_images' => [
                'ngajar1.jpg',
                'ngajar2.jpg',
                'ngajar3.jpg',
            ],
            'tanggal' => '28 Juli 2026',
            'lokasi' => 'SDN Cibinong Hilir'
        ],
    ];
@endphp

<!-- Kegiatan KKN Grid-->
<section id="kegiatan-kkn-section">
    <div class="container">
        <div class="kegiatankkn-heading">
            <h2>Kegiatan KKN Universitas Suryakencana 2026</h2>
            <h3>Program Kerja Kelompok KKN Universitas Suryakencana di Desa Cibinong Hilir</h3>
        </div>
        <div class="row">
            @foreach ($kegiatanKknModals as $modal)
                <div class="col-lg-4 col-sm-6">
                    <div class="kegiatankkn-item">
                        <a class="kegiatankkn-link" data-bs-toggle="modal" href="#kegiatanKknModal{{ $modal['id'] }}">
                            <div class="kegiatankkn-hover">
                                <span>+</span>
                            </div>
                            <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $modal['img']) }}" alt="{{ $modal['title'] }}" />
                        </a>
                        <div class="kegiatankkn-caption">
                            <div class="kegiatankkn-caption-heading">{{ $modal['title'] }}</div>
                            <div class="kegiatankkn-caption-subheading">{{ $modal['subtitle'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Kegiatan KKN Modals-->
@foreach ($kegiatanKknModals as $modal)
    <div class="kegiatankkn-modal modal fade" id="kegiatanKknModal{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal">
                    <img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" onerror="this.style.display='none'; this.parentElement.innerHTML='&times;'; this.parentElement.style.fontSize='2rem'; this.parentElement.style.lineHeight='1'; this.parentElement.style.textAlign='center';" />
                </div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="modal-body">
                                <h2>{{ $modal['title'] }}</h2>
                                <p class="item-intro">{{ $modal['subtitle'] }}</p>
                                <img class="modal-img" src="{{ asset('assets/img/' . $modal['folder'] . '/' . $modal['img']) }}" alt="{{ $modal['title'] }}" />
                                <p>{{ $modal['desc'] }}</p>

                                @if(!empty($modal['galeri_images']))
                                    <div class="galeri-gallery">
                                        @foreach ($modal['galeri_images'] as $galeri)
                                            <div class="galeri-item">
                                                @if(is_array($galeri))
                                                    <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $galeri['img']) }}" alt="{{ $galeri['nama'] }}" />
                                                    <div class="galeri-nama">{{ $galeri['nama'] }}</div>
                                                @else
                                                    <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $galeri) }}" alt="Dokumentasi {{ $modal['title'] }}" />
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                <ul class="list-inline">
                                    <li>
                                        <strong>Tanggal:</strong>
                                        {{ $modal['tanggal'] }}
                                    </li>
                                    <li>
                                        <strong>Lokasi:</strong>
                                        {{ $modal['lokasi'] }}
                                    </li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase btn-close-project" data-bs-dismiss="modal" type="button">
                                    Tutup
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach