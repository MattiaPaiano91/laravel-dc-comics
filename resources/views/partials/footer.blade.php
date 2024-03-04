
<footer>
    <div class="footer-top container-fluid ">
        <div class="footer-content row align-items-center  p-0">
            <div class="col-6 d-flex p-0 ">
                <div class="text-col">
                    <ul>
                        <li>DC COMICS</li>
                        @foreach ($footerLinks['DC COMICS'] as $link)
                            <li>
                                <a href="">
                                    {{$link}}
                                    </a>
                            </li>
                        @endforeach
                    </ul>
                    <ul>
                        <li>SHOP</li>
                        @foreach ($footerLinks['SHOP'] as $link)
                            <li>
                                <a href="">
                                    {{$link}}
                                    </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-col">
                    <ul>
                        <li>DC</li>
                        @foreach ($footerLinks['DC'] as $link)
                            <li>
                                <a href="">
                                    {{$link}}
                                    </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="text-col">
                   <ul>
                        <li>SITES</li>
                        @foreach ($footerLinks['SITES'] as $link)
                            <li>
                                <a href="">
                                    {{$link}}
                                    </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-6 dc-icon">
                <img src="images/dc-logo-bg.png" alt="">
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="button-social-section">
            <button>SIGN UP NOW!</button>
            <ul class="p-0 d-flex align-items-center">
                <li>FOLLOW US</li>
                @foreach ($footerLinks['SOCIAL'] as $link)
                    <li>
                        <img src="{{ $link }}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</footer>
