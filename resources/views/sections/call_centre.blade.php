<style>
    #call-centre-section {
        padding: 6rem 0;
        background-color: #ffffff;
    }
    #call-centre-section .call-centre-heading {
        text-align: center;
        margin-bottom: 3rem;
    }
    #call-centre-section .call-centre-heading h2 {
        font-size: 1.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
        color: #212529;
    }
    #call-centre-section .call-centre-heading h3 {
        font-size: 1rem;
        font-style: italic;
        color: #6c757d;
        font-weight: 400;
        margin-top: 0.25rem;
    }
    #call-centre-section .call-centre-item {
        max-width: 25rem;
        margin: 0 auto 2rem auto;
    }
    #call-centre-section .call-centre-link {
        position: relative;
        display: block;
        overflow: hidden;
        cursor: pointer;
    }
    #call-centre-section .call-centre-link img {
        width: 100%;
        display: block;
        height: 180px;
        object-fit: cover;
    }
    #call-centre-section .call-centre-hover {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(58, 90, 64, 0.9);
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #call-centre-section .call-centre-link:hover .call-centre-hover {
        opacity: 1;
    }
    #call-centre-section .call-centre-hover span {
        color: #fff;
        font-size: 2rem;
        font-weight: 300;
        line-height: 1;
    }
    #call-centre-section .call-centre-caption {
        background-color: #fff;
        text-align: center;
        padding: 1.25rem 1rem;
        border: 1px solid #eee;
        border-top: none;
    }
    #call-centre-section .call-centre-caption-heading {
        font-size: 1rem;
        font-weight: 700;
        text-transform: uppercase;
        color: #212529;
        margin-bottom: 0.15rem;
    }
    #call-centre-section .call-centre-caption-subheading {
        font-size: 0.9rem;
        font-style: italic;
        color: #6c757d;
    }
    #call-centre-section .call-centre-caption-nomor {
        font-size: 1.1rem;
        font-weight: 700;
        color: #3a5a40;
        margin-top: 0.5rem;
    }

    /* Modal styling */
    .call-centre-modal .modal-content {
        border-radius: 0;
        padding: 3rem;
    }
    .call-centre-modal .close-modal {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 2rem;
        height: 2rem;
        cursor: pointer;
    }
    .call-centre-modal .close-modal img {
        width: 100%;
    }
    .call-centre-modal h2 {
        font-weight: 700;
        text-transform: uppercase;
        text-align: center;
    }
    .call-centre-modal .item-intro {
        text-align: center;
        font-style: italic;
    }
    .call-centre-modal img.modal-img {
        max-width: 100%;
        margin: 1.5rem auto;
        display: block;
    }
    .call-centre-modal .nomor-besar {
        text-align: center;
        font-size: 2rem;
        font-weight: 700;
        color: #3a5a40;
        margin: 1rem 0;
    }
    .call-centre-modal ul.list-inline {
        text-align: center;
        margin-top: 1.5rem;
    }
    .call-centre-modal ul.list-inline li {
        display: inline-block;
        margin: 0 1rem;
    }
    .call-centre-modal .btn-close-project {
        display: block;
        margin: 1.5rem auto 0 auto;
    }
</style>

@php
    $callCentreModals = [
        [
            'id' => 1,
            'folder' => 'callcentre',
            'img' => 'polisi.png',
            'title' => 'Polsek Cilaku',
            'subtitle' => 'Layanan Keamanan',
            'nomor' => '(0263) 284711',
            'desc' => 'Layanan pengaduan keamanan, kecelakaan, dan tindak kriminal di wilayah Kecamatan Cilaku.',
            'alamat' => 'Jl. Raya Cibeber KM.7, Desa Sirnagalih, Kabupaten Cianjur, Jawa Barat 43285',
            'jam_operasional' => '24 Jam',
        ],
        [
            'id' => 2,
            'folder' => 'callcentre',
            'img' => 'damkar.png',
            'title' => 'Pemadam Kebakaran',
            'subtitle' => 'Darurat Bencana',
            'nomor' => '113 / 1131',
            'desc' => 'Layanan tanggap darurat pemadam kebakaran, pohon tumbang, dan penyelamatan hewan berbahaya untuk wilayah Kabupaten Cianjur.',
            'alamat' => 'Sukaluyu, Hegarmanah, Kabupaten Cianjur, Jawa Barat 43284',
            'jam_operasional' => '24 Jam',
        ],
        [
            'id' => 3,
            'folder' => 'callcentre',
            'img' => 'ambulance.png',
            'title' => 'Ambulance',
            'subtitle' => 'Layanan Kesehatan Darurat',
            'nomor' => '118 / 119',
            'desc' => 'Layanan panggilan darurat medis dan ambulans untuk wilayah Kabupaten Cianjur. Bisa juga menghubungi Call Center 112 Cianjur Fast Respon untuk kedaruratan medis, kecelakaan, dan bencana.',
            'alamat' => 'RSUD Sayang Cianjur, Kabupaten Cianjur',
            'jam_operasional' => '24 Jam',
        ],
    ];
@endphp

<!-- Call Centre Grid-->
<section id="call-centre-section">
    <div class="container">
        <div class="call-centre-heading">
            <h2>Call Centre Desa Cibinong Hilir</h2>
            <h3>Nomor Penting & Layanan Darurat</h3>
        </div>
        <div class="row">
            @foreach ($callCentreModals as $modal)
                <div class="col-lg-4 col-sm-6">
                    <div class="call-centre-item">
                        <a class="call-centre-link" data-bs-toggle="modal" href="#callCentreModal{{ $modal['id'] }}">
                            <div class="call-centre-hover">
                                <span>+</span>
                            </div>
                            <img src="{{ asset('assets/img/' . $modal['folder'] . '/' . $modal['img']) }}" alt="{{ $modal['title'] }}" />
                        </a>
                        <div class="call-centre-caption">
                            <div class="call-centre-caption-heading">{{ $modal['title'] }}</div>
                            <div class="call-centre-caption-subheading">{{ $modal['subtitle'] }}</div>
                            <div class="call-centre-caption-nomor">{{ $modal['nomor'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call Centre Modals-->
@foreach ($callCentreModals as $modal)
    <div class="call-centre-modal modal fade" id="callCentreModal{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
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

                                <div class="nomor-besar">{{ $modal['nomor'] }}</div>

                                <ul class="list-inline">
                                    <li>
                                        <strong>Alamat:</strong>
                                        {{ $modal['alamat'] }}
                                    </li>
                                    <li>
                                        <strong>Jam Operasional:</strong>
                                        {{ $modal['jam_operasional'] }}
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