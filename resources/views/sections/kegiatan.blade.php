<style>
    #kegiatan-section {
        padding: 6rem 0;
        background-color: #f8f9fc;
    }
    #kegiatan-section .kegiatan-heading {
        text-align: center;
        margin-bottom: 3rem;
    }
    #kegiatan-section .kegiatan-heading h2 {
        font-size: 1.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
        color: #212529;
    }
    #kegiatan-section .kegiatan-heading h3 {
        font-size: 1rem;
        font-style: italic;
        color: #6c757d;
        font-weight: 400;
        margin-top: 0.25rem;
    }
    #kegiatan-section .kegiatan-item {
        max-width: 25rem;
        margin: 0 auto 2rem auto;
    }
    #kegiatan-section .kegiatan-link {
        position: relative;
        display: block;
        overflow: hidden;
        cursor: pointer;
    }
    #kegiatan-section .kegiatan-link img {
        width: 100%;
        display: block;
    }
    #kegiatan-section .kegiatan-hover {
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
    #kegiatan-section .kegiatan-link:hover .kegiatan-hover {
        opacity: 1;
    }
    #kegiatan-section .kegiatan-hover span {
        color: #fff;
        font-size: 2rem;
        font-weight: 300;
        line-height: 1;
    }
    #kegiatan-section .kegiatan-caption {
        background-color: #fff;
        text-align: center;
        padding: 1.25rem 1rem;
    }
    #kegiatan-section .kegiatan-caption-heading {
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        color: #212529;
        margin-bottom: 0.15rem;
    }
    #kegiatan-section .kegiatan-caption-subheading {
        font-size: 0.9rem;
        font-style: italic;
        color: #6c757d;
    }

    /* Modal styling */
    .kegiatan-modal .modal-content {
        border-radius: 0;
        padding: 3rem;
    }
    .kegiatan-modal .close-modal {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 2rem;
        height: 2rem;
        cursor: pointer;
    }
    .kegiatan-modal .close-modal img {
        width: 100%;
    }
    .kegiatan-modal h2 {
        font-weight: 700;
        text-transform: uppercase;
        text-align: center;
    }
    .kegiatan-modal .item-intro {
        text-align: center;
        font-style: italic;
    }
    .kegiatan-modal img.modal-img {
        max-width: 100%;
        margin: 1.5rem auto;
        display: block;
    }
    .kegiatan-modal .galeri-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        justify-content: center;
        margin: 1.5rem 0;
    }
    .kegiatan-modal .galeri-gallery img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #e9ecef;
    }
    .kegiatan-modal ul.list-inline {
        text-align: center;
        margin-top: 1.5rem;
    }
    .kegiatan-modal ul.list-inline li {
        display: inline-block;
        margin: 0 1rem;
    }
    .kegiatan-modal .btn-close-project {
        display: block;
        margin: 1.5rem auto 0 auto;
    }
</style>

@php
    $kegiatanModals = [
        [
            'id' => 1,
            'folder' => 'kegiatan',
            'img' => '17austus.jpg',
            'title' => 'Indonesia Independence Day',
            'subtitle' => 'Kegiatan HUT RI',
            'desc' => 'Dalam rangka memperingati Hari Ulang Tahun (HUT) ke-80 Republik Indonesia, kegiatan ini diselenggarakan sebagai bentuk penghormatan kepada para pahlawan yang telah memperjuangkan kemerdekaan bangsa. Selain menjadi momen untuk mengenang sejarah perjuangan, peringatan HUT RI juga bertujuan mempererat tali persaudaraan, menumbuhkan semangat nasionalisme, serta meningkatkan rasa cinta tanah air di kalangan masyarakat.

Berbagai kegiatan, seperti upacara bendera, perlombaan tradisional, pentas seni dan budaya, kegiatan gotong royong, serta acara hiburan rakyat. Melalui kegiatan ini diharapkan tercipta kebersamaan, kekompakan, dan semangat persatuan dalam mewujudkan Indonesia yang lebih maju, sejahtera, dan berdaya saing.',
            'galeri_images' => [
                // isi dengan nama file foto dokumentasi tambahan, contoh:
                '17doc1.jpg',
                '17doc2.jpg',
                '17doc3.jpg',
            ],
            'tanggal' => '10 Januari 2026',
            'lokasi' => 'Balai Desa Cibinong Hilir'
        ],
        [
            'id' => 2,
            'folder' => 'kegiatan',
            'img' => 'bola1.jpeg',
            'title' => 'Turnamen Sepak Bola Desa',
            'subtitle' => 'Olahraga',
            'desc' => 'Kegiatan Turnamen Sepak Bola Desa Cibinong Hilir merupakan ajang kompetisi olahraga yang diadakan untuk mempererat tali persaudaraan antarwarga desa. Turnamen ini melibatkan tim-tim sepak bola dari berbagai RT dan RW di desa, serta mengundang warga untuk menyaksikan pertandingan yang berlangsung selama beberapa hari.',
            'galeri_images' => [
                'bola2.jpeg',
                'bola3.jpeg',
                'bola4.jpeg',
                'bola5.jpeg',
            ],
                
            'tanggal' => '2026',
            'lokasi' => 'Warga Desa Cibinong Hilir'
        ],
        [
            'id' => 3,
            'folder' => 'kegiatan',
            'img' => 'senamm.jpg',
            'title' => 'Senam pagi',
            'subtitle' => 'Kesehatan Masyarakat',
            'desc' => 'Program senam pagi kepada warga desa mengenai olahraga dan pola hidup sehat.',
            'galeri_images' => [
            'senam.jpeg',
            'senam1.jpeg',
            ],
            'tanggal' => '20 Januari 2026',
            'lokasi' => 'Situ Asem'
        ],
        [
            'id' => 4,
            'folder' => 'kegiatan',
            'img' => 'obor.png',
            'title' => 'Pawai Obor',
            'subtitle' => 'Sosial',
            'desc' => 'Pawai Obor merupakan salah satu kegiatan yang diselenggarakan oleh masyarakat Desa Cibinong Hilir sebagai wujud kebersamaan, persatuan, dan semangat gotong royong. Kegiatan ini diikuti oleh berbagai lapisan masyarakat, mulai dari anak-anak, remaja, hingga orang dewasa yang berjalan bersama sambil membawa obor dengan tertib dan penuh semangat.

Selain menjadi tradisi yang telah lama dilestarikan, pawai obor juga menjadi sarana untuk mempererat tali silaturahmi antarwarga serta menumbuhkan rasa cinta terhadap budaya dan nilai-nilai kebersamaan. Cahaya obor yang menyala melambangkan semangat persatuan, harapan, dan tekad masyarakat dalam membangun Desa Cibinong Hilir yang aman, rukun, dan harmonis.

Melalui kegiatan ini, masyarakat tidak hanya merayakan sebuah tradisi, tetapi juga memperkuat rasa kekeluargaan, meningkatkan partisipasi warga dalam kegiatan desa, serta menciptakan suasana yang meriah dan penuh makna bagi seluruh masyarakat Desa Cibinong Hilir.',
            'galeri_images' => [
                'obor1.jpeg',
                'obor2.jpeg',
            ],
            'tanggal' => '2026',
            'lokasi' => 'Desa Cibinong Hilir'
        ],
        [
            'id' => 5,
            'folder' => 'kegiatan',
            'img' => 'pengajian.jpeg',
            'title' => 'Tabligh Akbar',
            'subtitle' => 'Keagamaan',
            'desc' => 'Kegiatan Tabligh Akbar yang di adakan di Desa Cibinong hilir sering dilakukan dalam rangka menyambut hari hari besar umat Islam.',
            'galeri_images' => [
                'pengajian1.jpeg',
                'pengajian2.jpeg',

            ],
            'tanggal' => '2026',
            'lokasi' => 'Desa Cibinong Hilir'
        ],
        [
            'id' => 6,
            'folder' => 'kegiatan',
            'img' => 'karnavall.png',
            'title' => 'Karnaval',
            'subtitle' => 'Sosial',
            'desc' => 'Karnaval Desa Cibinong Hilir merupakan salah satu kegiatan yang diselenggarakan untuk mempererat kebersamaan masyarakat sekaligus menampilkan keberagaman budaya, kreativitas, dan potensi yang dimiliki oleh setiap warga. Kegiatan ini diikuti oleh berbagai elemen masyarakat, mulai dari anak-anak, remaja, hingga orang dewasa yang berpartisipasi dengan menampilkan berbagai atraksi, kostum, serta kreasi unik yang mencerminkan semangat persatuan dan gotong royong.

Karnaval menjadi wadah bagi masyarakat untuk mengekspresikan kreativitas sekaligus melestarikan budaya lokal melalui penampilan seni, pakaian adat, kendaraan hias, dan berbagai pertunjukan yang menarik. Suasana yang meriah dan penuh semangat menjadikan kegiatan ini sebagai hiburan sekaligus sarana mempererat tali silaturahmi antarwarga.

Melalui Karnaval Desa Cibinong Hilir, diharapkan dapat menumbuhkan rasa bangga terhadap desa, meningkatkan partisipasi masyarakat dalam setiap kegiatan, serta memperkuat nilai-nilai kebersamaan, kekompakan, dan persatuan demi mewujudkan Desa Cibinong Hilir yang maju, harmonis, dan berbudaya.',
            'galeri_images' => [
                'karnaval.jpeg',
                'karnaval2.jpeg',
                'karnaval3.jpeg',
                'karnaval4.jpeg',
            ],
            'tanggal' => '2026',
            'lokasi' => 'Desa Cibinong Hilir'
        ],




        [
            'id' => 7,
            'folder' => 'kegiatan',
            'img' => 'pencak.png',
            'title' => 'Pencak Silat',
            'subtitle' => 'Kesenian Budaya',
            'desc' => 'Acara perpisahan dan penutupan kegiatan KKN sebagai bentuk terima kasih kepada seluruh warga Desa Cibinong Hilir.',
            'galeri_images' => [
                'silat1.jpeg',
            ],
            'tanggal' => '10 Februari 2026',
            'lokasi' => 'Balai Desa Cibinong Hilir'
        ],

        [
            'id' => 8,
            'folder' => 'kegiatan',
            'img' => '6.jpg',
            'title' => 'Pawai obor',
            'subtitle' => 'Penutupan',
            'desc' => 'Acara perpisahan dan penutupan kegiatan KKN sebagai bentuk terima kasih kepada seluruh warga Desa Cibinong Hilir.',
            'galeri_images' => [],
            'tanggal' => '10 Februari 2026',
            'lokasi' => 'Balai Desa Cibinong Hilir'
        ],

        [
            'id' => 9,
            'folder' => 'kegiatan',
            'img' => '6.jpg',
            'title' => 'Perpisahan KKN',
            'subtitle' => 'Penutupan',
            'desc' => 'Acara perpisahan dan penutupan kegiatan KKN sebagai bentuk terima kasih kepada seluruh warga Desa Cibinong Hilir.',
            'galeri_images' => [],
            'tanggal' => '10 Februari 2026',
            'lokasi' => 'Balai Desa Cibinong Hilir'
        ],

        
    ];
@endphp

<!-- Kegiatan Grid-->
<section id="kegiatan-section">
    <div class="container">
        <div class="kegiatan-heading">
            <h2>Kegiatan Desa Cibinong Hilir</h2>
            <h3>Dokumentasi Kegiatan yang di selenggarakan di Desa Cibinong Hilir</h3>
        </div>
        <div class="row">
            @foreach ($kegiatanModals as $modal)
                <div class="col-lg-4 col-sm-6">
                    <div class="kegiatan-item">
                        <a class="kegiatan-link" data-bs-toggle="modal" href="#kegiatanModal{{ $modal['id'] }}">
                            <div class="kegiatan-hover">
                                <span>+</span>
                            </div>
                            <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $modal['img']) }}" alt="{{ $modal['title'] }}" />
                        </a>
                        <div class="kegiatan-caption">
                            <div class="kegiatan-caption-heading">{{ $modal['title'] }}</div>
                            <div class="kegiatan-caption-subheading">{{ $modal['subtitle'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Kegiatan Modals-->
@foreach ($kegiatanModals as $modal)
    <div class="kegiatan-modal modal fade" id="kegiatanModal{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                        @foreach ($modal['galeri_images'] as $galeriImg)
                                            <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $galeriImg) }}" alt="Dokumentasi {{ $modal['title'] }}" />
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