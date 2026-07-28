<!-- Footer-->
<footer class="footer-desa" style="background-color: #1a1a1a; color: #d1d1d1; padding-top: 3rem;">
    <div class="container">
        <div class="row gy-4">
            <!-- Logo + Deskripsi + Sosmed -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('assets/img/sugihmukti.png') }}" alt="Logo Desa Cibinong" style="width: 48px; height: 48px; object-fit: contain;" class="me-2" />
                    <div>
                        <h5 class="mb-0 text-white fw-bold">Desa Cibinong Hilir</h5>
                        <small class="text-white-50">Kabupaten Cianjur</small>
                    </div>
                </div>
                <p class="text-white-50">
                    Website Resmi Pemerintah Desa Cibinong. Media informasi publik untuk mewujudkan desa yang mandiri dan sejahtera.
                </p>
                <div class="d-flex gap-2 mt-3">
                    {{-- <a href="#!" class="btn btn-dark btn-social rounded-circle" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a> --}}
                    <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/desacibinonghilir2" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    {{-- <a href="#!" class="btn btn-dark btn-social rounded-circle" aria-label="YouTube"><i class="fab fa-youtube"></i></a> --}}
                    <a class="btn btn-dark btn-social mx-2" href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            

            <!-- Jelajahi -->
            <div class="col-lg-2 col-md-6">
                <h6 class="text-white fw-bold text-uppercase mb-3">Jelajahi</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#page-top" class="text-white-50 text-decoration-none">Beranda</a></li>
                    <li class="mb-2"><a href="#about" class="text-white-50 text-decoration-none">Profil Desa</a></li>
                    <li class="mb-2"><a href="#services" class="text-white-50 text-decoration-none">Pelayanan Desa</a></li>
                    <li class="mb-2"><a href="#team" class="text-white-50 text-decoration-none">Perangkat Desa</a></li>
                    <li class="mb-2"><a href="#umkm-section" class="text-white-50 text-decoration-none">UMKM</a></li>
                </ul>
            </div>

            <!-- Layanan -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white fw-bold text-uppercase mb-3">Perancang</h6>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a class="text-white-50 text-decoration-none" href="https://instagram.com/rmkahfii" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i> Rmkahfii
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="text-white-50 text-decoration-none" href="https://instagram.com/helmiseptiam9" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i> HelmiS
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="text-white-50 text-decoration-none" href="https://instagram.com/ohh.zy" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i> PiqriP
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Hubungi Kami -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white fw-bold text-uppercase mb-3">Hubungi Kami</h6>
                <ul class="list-unstyled">
                    <li class="mb-3 d-flex">
                        <i class="fas fa-map-marker-alt me-2 mt-1" style="color: #3a5a40;"></i>
                        <span class="text-white-50">Cibinong Hilir, Kec. Cilaku, Kabupaten Cianjur, Jawa Barat</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-envelope me-2" style="color: #3a5a40;"></i>
                        <span class="text-white-50">desacibinong@gmail.com</span>
                    </li>
                    <li class="mb-3 d-flex align-items-center">
                        <i class="fas fa-phone me-2" style="color: #3a5a40;"></i>
                        <span class="text-white-50">0812-3456-7890</span>
                    </li>
                </ul>
            </div>
        </div>
        <br>
       

    <!-- Copyright Bar -->
    <div class="mt-4" style="background-color: #000000; padding: 1rem 0;">
        <div class="container text-center">
            <small class="text-white-50">
                &copy; {{ date('Y') }} <strong class="text-white">Pemerintah Desa Cibinong</strong>. Hak Cipta Dilindungi.
            </small>
        </div>
    </div>
    
</footer>