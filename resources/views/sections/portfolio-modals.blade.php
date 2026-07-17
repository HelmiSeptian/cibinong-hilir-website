@php
    $portfolioModals = [
        ['id' => 1, 'img' => '1.jpg', 'client' => 'Threads', 'category' => 'Illustration'],
        ['id' => 2, 'img' => '2.jpg', 'client' => 'Explore', 'category' => 'Graphic Design'],
        ['id' => 3, 'img' => '3.jpg', 'client' => 'Finish', 'category' => 'Identity'],
        ['id' => 4, 'img' => '4.jpg', 'client' => 'COLA COLA', 'category' => 'Branding'],
        ['id' => 5, 'img' => '5.jpg', 'client' => 'Southwest', 'category' => 'Website Design'],
        ['id' => 6, 'img' => '6.jpg', 'client' => 'Window', 'category' => 'Photography'],
    ];
@endphp

<!-- Portfolio Modals-->
@foreach ($portfolioModals as $modal)
    <!-- Portfolio item {{ $modal['id'] }} modal popup-->
    <div class="portfolio-modal modal fade" id="portfolioModal{{ $modal['id'] }}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/' . $modal['img']) }}" alt="..." />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
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