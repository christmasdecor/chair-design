<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @section('title')
            {{ SITE_NAME }}
        @show
    </title>
    <style>:root{--border-radius:5px;--box-shadow:2px 2px 10px;--color:#118bee;--color-accent:#118bee15;--color-bg:#fff;--color-bg-secondary:#e9e9e9;--color-secondary:#0645AD;--color-secondary-accent:#920de90b;--color-shadow:#f4f4f4;--color-text:#000;--color-text-secondary:#999;--font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;--hover-brightness:1.2;--justify-important:center;--justify-normal:left;--line-height:1.5;--width-card:285px;--width-card-medium:460px;--width-card-wide:800px;--width-content:1080px}article aside{background:var(--color-secondary-accent);border-left:4px solid var(--color-secondary);padding:.01rem .8rem}body{background:var(--color-bg);color:var(--color-text);font-family:var(--font-family);line-height:var(--line-height);margin:0;overflow-x:hidden;padding:1rem 0}footer,header,main{margin:0 auto;max-width:var(--width-content);padding:0rem 1rem}hr{background-color:var(--color-bg-secondary);border:none;height:1px;margin:4rem 0}section{display:flex;flex-wrap:wrap;justify-content:var(--justify-important)}section aside{border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);box-shadow:var(--box-shadow) var(--color-shadow);margin:1rem;padding:1.25rem;width:var(--width-card)}section aside:hover{box-shadow:var(--box-shadow) var(--color-bg-secondary)}section aside img{max-width:100%}[hidden]{display:none}article header,div header,main header{padding-top:0}header{text-align:var(--justify-important)}header a b,header a em,header a i,header a strong{margin-left:.5rem;margin-right:.5rem}header nav img{margin:1rem 0}section header{padding-top:0;width:100%}nav{align-items:center;display:flex;font-weight:700;justify-content:space-between;margin-bottom:7rem}nav ul{list-style:none;padding:0}nav ul li{display:inline-block;margin:0 .5rem;position:relative;text-align:left}nav ul li:hover ul{display:block}nav ul li ul{background:var(--color-bg);border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);box-shadow:var(--box-shadow) var(--color-shadow);display:none;height:auto;left:-2px;padding:.5rem 1rem;position:absolute;top:1.7rem;white-space:nowrap;width:auto}nav ul li ul li,nav ul li ul li a{display:block}code,samp{background-color:var(--color-accent);border-radius:var(--border-radius);color:var(--color-text);display:inline-block;margin:0 .1rem;padding:0 .5rem}details{margin:1.3rem 0}details summary{font-weight:700;cursor:pointer}h1,h2,h3,h4,h5,h6{line-height:var(--line-height)}mark{padding:.1rem}ol li,ul li{padding:.2rem 0}p{margin:.75rem 0;padding:0}pre{margin:1rem 0;max-width:var(--width-card-wide);padding:1rem 0}pre code,pre samp{display:block;max-width:var(--width-card-wide);padding:.5rem 2rem;white-space:pre-wrap}small{color:var(--color-text-secondary)}sup{background-color:var(--color-secondary);border-radius:var(--border-radius);color:var(--color-bg);font-size:xx-small;font-weight:700;margin:.2rem;padding:.2rem .3rem;position:relative;top:-2px}a{color:var(--color-secondary);display:inline-block;text-decoration:none}a:hover{filter:brightness(var(--hover-brightness));text-decoration:underline}a b,a em,a i,a strong,button{border-radius:var(--border-radius);display:inline-block;font-size:medium;font-weight:700;line-height:var(--line-height);margin:.5rem 0;padding:1rem 2rem}button{font-family:var(--font-family)}button:hover{cursor:pointer;filter:brightness(var(--hover-brightness))}a b,a strong,button{background-color:var(--color);border:2px solid var(--color);color:var(--color-bg)}a em,a i{border:2px solid var(--color);border-radius:var(--border-radius);color:var(--color);display:inline-block;padding:1rem}figure{margin:0;padding:0}figure img{max-width:100%}figure figcaption{color:var(--color-text-secondary)}button:disabled,input:disabled{background:var(--color-bg-secondary);border-color:var(--color-bg-secondary);color:var(--color-text-secondary);cursor:not-allowed}button[disabled]:hover{filter:none}input,label,select,textarea{display:block;font-size:inherit;max-width:var(--width-card-wide)}input[type=checkbox],input[type=radio]{display:inline-block}input[type=checkbox]+label,input[type=radio]+label{display:inline-block;font-weight:400;position:relative;top:1px}input,select,textarea{border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);margin-bottom:1rem;padding:.4rem .8rem}input[readonly],textarea[readonly]{background-color:var(--color-bg-secondary)}label{font-weight:700;margin-bottom:.2rem}table{border:1px solid var(--color-bg-secondary);border-radius:var(--border-radius);border-spacing:0;display:inline-block;max-width:100%;overflow-x:auto;padding:0;white-space:nowrap}table td,table th,table tr{padding:.4rem .8rem;text-align:var(--justify-important)}table thead{background-color:var(--color);border-collapse:collapse;border-radius:var(--border-radius);color:var(--color-bg);margin:0;padding:0}table thead th:first-child{border-top-left-radius:var(--border-radius)}table thead th:last-child{border-top-right-radius:var(--border-radius)}table thead th:first-child,table tr td:first-child{text-align:var(--justify-normal)}table tr:nth-child(even){background-color:var(--color-accent)}blockquote{display:block;font-size:x-large;line-height:var(--line-height);margin:1rem auto;max-width:var(--width-card-medium);padding:1.5rem 1rem;text-align:var(--justify-important)}blockquote footer{color:var(--color-text-secondary);display:block;font-size:small;line-height:var(--line-height);padding:1.5rem 0} article{padding: 1.25rem;}.v-cover{height: auto;max-height: 480px; object-fit: cover;width: 100%;cursor: pointer;}.v-image{height: 250px; object-fit: cover;width: 100vw;cursor: pointer;}.dwn-cover{max-height: 460px; object-fit: cover;}.w-100{width: 100vw}.search-box{color:#333;background-color:#f5f5f5;width:85%;height:50px;padding:0 20px;border:none;border-radius:20px;outline:0;border:1px solid #002cd92e}.search-box:active,.search-box:focus,.search-box:hover{border:1px solid #d9008e}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;cursor:pointer;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;border-top-color:transparent;border-right-color:transparent;border-bottom-color:transparent;border-left-color:transparent;padding:.375rem .75rem;margin:0.5rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.hide{display:none;visibility:hidden}.popbox{position:fixed;top:0;left:0;bottom:0;width:100%;z-index:1000000}.pop-content{display:block;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);z-index:2;box-shadow:0 3px 20px 0 rgba(0,0,0,.5)}.popcontent{padding:20px;background:#fff;border-radius:5px;overflow:hidden}.pop-overlay{position:absolute;top:0;left:0;bottom:0;width:100%;z-index:1;background:rgb(255 255 255 / 93%)}.popbox-close-button{position:absolute;width:28px;height:28px;line-height:28px;text-align:center;top:-14px;right:-14px;color:#c82333;background-color:#fff;box-shadow:0 -1px 1px 0 rgba(0,0,0,.2);border:none;border-radius:50%;cursor:pointer;font-size:28px;font-weight:700;padding:0}.popcontent img{width:100%;height:100%;display:block}.flowbox{position:relative;overflow:hidden}@media screen and (max-width:840px){.pop-content{width:90%;height:auto;top:20%}.popcontent img{height:auto}}
</style>
    @yield('head')
    @include('head')
</head>
<body>
    <header>
        <h1>
            <a href="/">
            @section('title')
                {{ SITE_NAME }}
            @show
            </a>
        </h1>
        <p>
            @section('description')
                {{ SITE_DESCRIPTION }}
            @show
        </p>
        <center>
            <input class='search-box' id="search-box" placeholder='Search and hit enter..' type='text' name="q" required autocomplete="off" id="search-query">
            @include('ads_top_banner')
        </center>
    </header>
    <main>
        @yield('content')
        <center>
            @include('ads_btn_banner')
        </center>
    </main>
    <footer style="padding-top: 50px;">
        <center>
            @foreach(pages() as $page)
                <a href="{{ page_url($page) }}">{{ ucwords(str_replace('-', ' ', $page)) }}</a>
            @endforeach
        </center>
    </footer>
    <div class="popbox hide" id="popbox">
        <div aria-label='Close' class="pop-overlay" role="button" tabindex="0"/>
        <div class="pop-content">
            <div class="popcontent" align="center">
                <img data-src="https://1.bp.blogspot.com/-y8AsxfEerDc/YFSyMPZF14I/AAAAAAAAAAM/JUegMgSE-3o5A_06mx0Fir2-dkB6fAGvACLcBGAsYHQ/s640/re.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="  width="640" height="320" class="lazyload" alt="" />
                <button class='g_url btn btn-success btn-dwn m-2'>Confirm</button>
                <br/>
            </div>
            <button class='g_url popbox-close-button'>&times;</button>
        </div>
    </div>
    @include('footer')
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js" integrity="sha512-6ORWJX/LrnSjBzwefdNUyLCMTIsGoNP6NftMy2UAm1JBm6PRZCO1d7OHBStWpVFZLO+RerTvqX/Z9mBFfCJZ4A==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" integrity="sha512-JrL1wXR0TeToerkl6TPDUa9132S3PB1UeNpZRHmCe6TxS43PFJUcEYUhjJb/i63rSd+uRvpzlcGOtvC/rDQcDg==" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var current     = window.location.href;
        var g_confirm   = current.includes('c=1');
        var go_ads      = '{{ADS_LINK}}';

        $(document).ready(function()
        {
            if(go_ads.includes('//'))
            {
                if(!g_confirm)
                {
                    $(window).scroll(function (event) {
                        var scroll = $(window).scrollTop();
                        if (scroll >= 200) {
                            $('#popbox').removeClass('hide');
                        }
                        console.log('scroll..');                    
                    });
                }

                $(document).on('click','.g_url',function(e)
                {
                    e.preventDefault();

                    var g_target=current.includes("?")?current+"&c=1":current+"?c=1";

                    window.open(go_ads,"_blank");
                    window.location.href=g_target;
                });

                $(document).on('click','.ads-img',function(e)
                {
                    e.preventDefault();
                    window.open(go_ads, '_blank');
                });
            }

            $("[id*='google-cache']").remove();        

            $(document).on('submit','#search-box',function(e){
                e.preventDefault();
                var query = $('input[name="q"]').val();
                query = query.replace(/[`~!@#$%^&*()_|+\-=?;:'",.<>\{\}\[\]\\\/]/gi, '').replace(/\s\s+/g, ' ');
                var target = 'site:'+location.host+' '+query;
                var uri= 'https://www.google.com/search?q='+encodeURIComponent(target);
                window.open(uri, '_blank');
            });
        });
    </script>
</body>

</html>
