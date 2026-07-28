<style>
    #umkm-section {
        padding: 6rem 0;
        background-color: #f8f9fc;
    }
    #umkm-section .umkm-heading {
        text-align: center;
        margin-bottom: 3rem;
    }
    #umkm-section .umkm-heading h2 {
        font-size: 1.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
        color: #212529;
    }
    #umkm-section .umkm-heading h3 {
        font-size: 1rem;
        font-style: italic;
        color: #6c757d;
        font-weight: 400;
        margin-top: 0.25rem;
    }
    #umkm-section .umkm-item {
        max-width: 25rem;
        margin: 0 auto 2rem auto;
    }
    #umkm-section .umkm-link {
        position: relative;
        display: block;
        overflow: hidden;
        cursor: pointer;
    }
    #umkm-section .umkm-link img {
        width: 100%;
        display: block;
    }
    #umkm-section .umkm-hover {
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
    #umkm-section .umkm-link:hover .umkm-hover {
        opacity: 1;
    }
    #umkm-section .umkm-hover span {
        color: #fff;
        font-size: 2rem;
        font-weight: 300;
        line-height: 1;
    }
    #umkm-section .umkm-caption {
        background-color: #fff;
        text-align: center;
        padding: 1.25rem 1rem;
    }
    #umkm-section .umkm-caption-heading {
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        color: #212529;
        margin-bottom: 0.15rem;
    }
    #umkm-section .umkm-caption-subheading {
        font-size: 0.9rem;
        font-style: italic;
        color: #6c757d;
    }

    /* Modal styling */
    .umkm-modal .modal-content {
        border-radius: 0;
        padding: 3rem;
    }
    .umkm-modal .close-modal {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 2rem;
        height: 2rem;
        cursor: pointer;
    }
    .umkm-modal .close-modal img {
        width: 100%;
    }
    .umkm-modal h2 {
        font-weight: 700;
        text-transform: uppercase;
        text-align: center;
    }
    .umkm-modal .item-intro {
        text-align: center;
        font-style: italic;
    }
    .umkm-modal img.modal-img {
        max-width: 100%;
        margin: 1.5rem auto;
        display: block;
    }
    .umkm-modal .produk-gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 0.75rem;
        justify-content: center;
        margin: 1.5rem 0;
    }
    .umkm-modal .produk-gallery img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #e9ecef;
    }
    .umkm-modal ul.list-inline {
        text-align: center;
        margin-top: 1.5rem;
    }
    .umkm-modal ul.list-inline li {
        display: inline-block;
        margin: 0 1rem;
    }
    .umkm-modal .btn-close-project {
        display: block;
        margin: 1.5rem auto 0 auto;
    }
</style>

@php
    $umkmModals = [
        [
            'id' => 1,
            'folder' => 'umkm',
            'img' => 'Sari.png',
            'title' => 'Aneka Makanan ringan dari Sari Jahe',
            'subtitle' => 'Makanan Ringan',
            'desc' => 'SJ Sari Jahe merupakan usaha rumahan yang bergerak di bidang kerajinan aneka kue dan makanan ringan yang berlokasi di Kampung Cidadap, Desa Cibinong Hilir, Kecamatan Cilaku, Kabupaten Cianjur. Usaha ini menyediakan berbagai jenis kue tradisional, camilan, dan makanan ringan yang dibuat dengan bahan-bahan berkualitas serta diolah secara higienis untuk menghasilkan cita rasa yang lezat dan berkualitas.

            SJ Sari Jahe telah memiliki Nomor Induk Berusaha (NIB), izin Dinas Kesehatan (DINKES), serta sertifikat Pangan Industri Rumah Tangga (PIRT) sebagai bentuk komitmen dalam menjaga mutu dan keamanan produk. Selain melayani pembelian langsung, usaha ini juga menerima pesanan untuk berbagai acara seperti rapat, arisan, pengajian, hajatan, ulang tahun, hingga kegiatan lainnya.

            Dengan mengutamakan kualitas, kebersihan, dan pelayanan yang ramah, SJ Sari Jahe terus berupaya menghadirkan produk yang mampu memenuhi kebutuhan masyarakat serta mendukung perkembangan pelaku UMKM di Desa Cibinong Hilir.',
            'produk_images' => [
                'SariJahe1.jpeg',
                'SariJahe2.jpeg',
                'SariJahe3.jpeg',
                'SariJahe4.jpeg',
            ],
            'pemilik' => 'Bapak Jenal Mutakin',
            'kontak' => '0877-1498-4222',
        ],

        [
            'id' => 2,
            'folder' => 'umkm',
            'img' => 'abonmaiah.png',
            'title' => 'Abon Maiah',
            'subtitle' => 'Makanan',
            'desc' => 'Abon Mak Iah merupakan usaha rumahan yang bergerak di bidang produksi makanan olahan berupa abon ayam yang berlokasi di Desa Cibinong Hilir, Kecamatan Cilaku, Kabupaten Cianjur. Usaha ini menghadirkan abon ayam dengan cita rasa khas yang gurih, lezat, dan dibuat menggunakan bahan-bahan berkualitas. Seluruh proses produksi dilakukan secara higienis serta memperhatikan standar kebersihan sehingga menghasilkan produk yang aman dan berkualitas untuk dikonsumsi.',
            'produk_images' => [],
            'pemilik' => 'Ibu iah',
            'kontak' => '-'
        ],
        [
            'id' => 3,
            'folder' => 'umkm',
            'img' => 'kicimpring.png',
            'title' => 'Kicimpring',
            'subtitle' => 'Makanan',
            'desc' => 'Kicipring dan Rengginang merupakan usaha rumahan yang bergerak di bidang produksi makanan ringan tradisional yang berlokasi di Kampung Cidadap, Desa Cibinong Hilir, Kecamatan Cilaku, Kabupaten Cianjur. Usaha ini memproduksi berbagai olahan camilan khas Indonesia, seperti kicipring dan rengginang, yang dibuat menggunakan bahan-bahan berkualitas serta diolah secara higienis untuk menghasilkan produk yang renyah, gurih, dan memiliki cita rasa khas.',
            'produk_images' => [],
            'pemilik' => 'Ibu Dewi',
            'kontak' => '0815-6789-0123'
        ],

    ];
@endphp

<!-- UMKM Grid-->
<section id="umkm-section">
    <div class="container">
        <div class="umkm-heading">
            <h2>UMKM Desa</h2>
            <h3>Produk Unggulan Usaha Mikro Kecil Menengah Desa Cibinong Hilir</h3>
        </div>
        <div class="row">
            @foreach ($umkmModals as $modal)
                <div class="col-lg-4 col-sm-6">
                    <div class="umkm-item">
                        <a class="umkm-link" data-bs-toggle="modal" href="#umkmModal{{ $modal['id'] }}">
                            <div class="umkm-hover">
                                <span>+</span>
                            </div>
                            <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $modal['img']) }}" alt="{{ $modal['title'] }}" />
                        </a>
                        <div class="umkm-caption">
                            <div class="umkm-caption-heading">{{ $modal['title'] }}</div>
                            <div class="umkm-caption-subheading">{{ $modal['subtitle'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- UMKM Modals-->
@foreach ($umkmModals as $modal)
    <div class="umkm-modal modal fade" id="umkmModal{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
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

                                @if(!empty($modal['produk_images']))
                                    <div class="produk-gallery">
                                        @foreach ($modal['produk_images'] as $produkImg)
                                            <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $produkImg) }}" alt="Produk {{ $modal['title'] }}" />
                                        @endforeach
                                    </div>
                                @endif

                                <ul class="list-inline">
                                    <li>
                                        <strong>Pemilik:</strong>
                                        {{ $modal['pemilik'] }}
                                    </li>
                                    <li>
                                        <strong>Kontak:</strong>
                                        {{ $modal['kontak'] }}
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