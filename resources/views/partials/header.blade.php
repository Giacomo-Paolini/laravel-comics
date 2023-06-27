<header class="p-2">
    <div class="container mt-2 mb-2">
        <div class="row">        
            <div class="col-4">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </div>
            <div class="col-8 d-flex justify-content-end">
                <nav class="d-flex align-items-center justify-content-center">
                    <ul class="list-unstyled d-flex gap-4">
                        @foreach ($links as $link)
                            <li><a class="links-header" href="#">{{ $link['text'] }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>