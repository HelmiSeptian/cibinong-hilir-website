<style>
    #video-kkn-section {
        padding: 6rem 0;
        background-color: #f8f9fc;
    }
    #video-kkn-section .video-kkn-heading {
        text-align: center;
        margin-bottom: 3rem;
    }
    #video-kkn-section .video-kkn-heading h2 {
        font-size: 1.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05rem;
        color: #212529;
    }
    #video-kkn-section .video-kkn-heading h3 {
        font-size: 1rem;
        font-style: italic;
        color: #6c757d;
        font-weight: 400;
        margin-top: 0.25rem;
    }
    #video-kkn-section .video-kkn-item {
        max-width: 45rem;
        margin: 0 auto;
    }
    #video-kkn-section .video-kkn-link {
        position: relative;
        display: block;
        overflow: hidden;
        cursor: pointer;
        border-radius: 10px;
    }
    #video-kkn-section .video-kkn-link img {
        width: 100%;
        display: block;
        height: 380px;
        object-fit: cover;
    }
    #video-kkn-section .video-kkn-hover {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.4);
        transition: background 0.2s ease-in-out;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    #video-kkn-section .video-kkn-link:hover .video-kkn-hover {
        background: rgba(253, 191, 24, 0.85);
    }
    #video-kkn-section .video-kkn-hover span {
        color: #fff;
        font-size: 4rem;
        line-height: 1;
    }
    #video-kkn-section .video-kkn-caption {
        background-color: #fff;
        text-align: center;
        padding: 1.5rem 1rem;
        border: 1px solid #eee;
        border-top: none;
        border-radius: 0 0 10px 10px;
    }
    #video-kkn-section .video-kkn-caption-heading {
        font-size: 1.25rem;
        font-weight: 700;
        text-transform: uppercase;
        color: #212529;
        margin-bottom: 0.15rem;
    }
    #video-kkn-section .video-kkn-caption-subheading {
        font-size: 1rem;
        font-style: italic;
        color: #6c757d;
    }

    /* Modal styling */
    .video-kkn-modal .modal-content {
        border-radius: 0;
        padding: 2rem;
        background-color: #000;
    }
    .video-kkn-modal .close-modal {
        position: absolute;
        top: 1rem;
        right: 1rem;
        width: 2rem;
        height: 2rem;
        cursor: pointer;
        z-index: 10;
    }
    .video-kkn-modal .close-modal img {
        width: 100%;
    }
    .video-kkn-modal h2 {
        font-weight: 700;
        text-transform: uppercase;
        text-align: center;
        color: #fff;
    }
    .video-kkn-modal .item-intro {
        text-align: center;
        font-style: italic;
        color: #ccc;
    }
    .video-kkn-modal video {
        width: 100%;
        max-height: 85vh;
        margin: 1.5rem auto;
        display: block;
        border-radius: 6px;
    }
    .video-kkn-modal .btn-close-project {
        display: block;
        margin: 1.5rem auto 0 auto;
    }
</style>

@php
    $videoKkn = [
        'id' => 1,
        'thumbnail' => 'assets/img/kegiatan/17austus.jpg',
        'video' => 'assets/videos/video1.mp4',
        'title' => 'Dokumentasi Kegiatan KKN',
        'subtitle' => 'Desa Cibinong Hilir 2026',
    ];
@endphp

<!-- Video KKN Single -->
<section id="video-kkn-section">
    <div class="container">
        <div class="video-kkn-heading">
            <h2>Video Dokumentasi KKN</h2>
            <h3>Cuplikan Kegiatan KKN di Desa Cibinong Hilir</h3>
        </div>
        <div class="video-kkn-item">
            <a class="video-kkn-link" data-bs-toggle="modal" href="#videoKknModal">
                <div class="video-kkn-hover">
                    <span>▶</span>
                </div>
                <img src="{{ asset($videoKkn['thumbnail']) }}" alt="{{ $videoKkn['title'] }}" />
            </a>
            <div class="video-kkn-caption">
                <div class="video-kkn-caption-heading">{{ $videoKkn['title'] }}</div>
                <div class="video-kkn-caption-subheading">{{ $videoKkn['subtitle'] }}</div>
            </div>
        </div>
    </div>
</section>

<!-- Video KKN Modal -->
<div class="video-kkn-modal modal fade" id="videoKknModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal">
                <img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" onerror="this.style.display='none'; this.parentElement.innerHTML='&times;'; this.parentElement.style.fontSize='2rem'; this.parentElement.style.lineHeight='1'; this.parentElement.style.textAlign='center'; this.parentElement.style.color='#fff';" />
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="modal-body">
                            <h2>{{ $videoKkn['title'] }}</h2>
                            <p class="item-intro">{{ $videoKkn['subtitle'] }}</p>

                            <video controls>
                                <source src="{{ asset($videoKkn['video']) }}" type="video/mp4">
                                Browser Anda tidak mendukung tag video.
                            </video>

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

<script>
    // Auto-play video saat modal dibuka, dan stop saat modal ditutup
    document.addEventListener('DOMContentLoaded', function () {
        const modalEl = document.getElementById('videoKknModal');
        const video = modalEl.querySelector('video');
        modalEl.addEventListener('shown.bs.modal', function () {
            video.play();
        });
        modalEl.addEventListener('hidden.bs.modal', function () {
            video.pause();
            video.currentTime = 0;
        });
    });
</script>