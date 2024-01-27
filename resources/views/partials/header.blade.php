<header>
    <div class="logo">
        <a href="#home">
            <img src="\dc-logo.png" alt="">
        </a>
    </div>

    <nav>
        <ul class="myNav">
            @foreach($nav as $item)
            <li>
                <a href="{{ $item['link'] }}">
                    <div class="borderBottom">
                        {{ $item["name"] }}
                    </div>
                </a>
            </li>
            @endforeach
        </ul>
    </nav>
</header>