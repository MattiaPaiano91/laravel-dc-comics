@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
        ],
        [
            'url' => '/Characters',
            'label' => 'characters',
        ],
        [
            'url' => '/Comics',
            'label' => 'comics',
        ],
        
        [
            'url' => '/Movies',
            'label' => 'movies',  
        ],
        [
            'url' => '/Tv',
            'label' => 'tv',  
        ],
        [
            'url' => '/Games',
            'label' => 'games',
        ],
        [
            'url' => '/Collectibles',
            'label' => 'collectibles',
        ],
        [
            'url' => '/Videos',
            'label' => 'videos',
        ],
        [
            'url' => '/Fans',
            'label' => 'fans',
        ],
        [
            'url' => '/News',
            'label' => 'news',
        ],
        [
            'url' => '/Shop',
            'label' => 'shop',
        ],
    ];
@endphp

<header class="row g-0 p-0">
    <nav class="col">
        <ul class="d-flex align-items-center p-0">
            <img src="{{ asset('images/dc-logo.png') }}" alt="">
            @foreach ($links as $link)
                <li>
                        <a href="{{ $link['url'] }}">
                            {{ $link['label'] }}
                        </a>
                </li>
            @endforeach
            <li>
                <div class="input-group input-group-sm">
                    <span class="input-group-text" id="inputGroup-sizing-sm">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input placeholder="search" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
            </li>
        </ul>
    </nav>
</header>
