@extends($layout)

@php
    $show_download  = (IS_CLI)?'':SHOW_DOWNLOAD;        
    $max_image      = MAX_IMAGE_RESULT;
    $lazyload       = LAZY_LOAD;
    $default_thumb  = DEFAULT_THUMBNAIL;

    $random_related = ($random_related)??random_related();
    $related        = collect($random_related);
    $sentences      = collect($sentences);
    $images         = collect($images);
    $ads_link       = ADS_LINK;
    $image          = collect($images)->shuffle()->shift();
    $cover_img      = $image['url'];
    $mobile_img     = str_replace(['https://i.pinimg.com/originals/','https://i.pinimg.com/736x/'] , 'https://i.pinimg.com/236x/', $cover_img );
@endphp

@section('title')
{{ ucwords($keyword) }}
@endsection

@section('head')
@include('json_id')
<link rel="preconnect" href="https://i.pinimg.com">
<link rel="dns-prefetch" href="https://i.pinimg.com">
<link rel="preload" href="{{ $mobile_img }}" as="image" media="(max-width: 420px)">
<link rel="preload" href="{{ $cover_img }}" as="image" media="(min-width: 420.1px)" >
@endsection

@section('content')
<article>
    <p><strong>{{ ucwords($keyword) }}</strong>. {{ $sentences->shuffle()->take(2)->implode(' ') }}</p>
    @php
        $image = collect($images)->shuffle()->shift();
        $img_thumb = $image['thumb']??$default_thumb;
    @endphp
    @if($image)
    <figure>
        <img class="v-cover ads-img lazyload" data-src="{{ $cover_img }}" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="{{ $image['title'] }}" width="640" height="360" />
        <figcaption>{{ $image['title'] }} from {{ $image['domain'] }}</figcaption>
    </figure>
    @endif
    <p>
        {{ $sentences->shuffle()->take(3)->implode(' ') }}
    </p>
    <h3>{{ $sentences->shuffle()->pop() }}</h3>
    <p>{{ $sentences->shuffle()->pop() }} {{ $sentences->shuffle()->take(3)->implode(' ') }}</p>
</article>

<section>
@foreach(collect($images)->shuffle()->take(9) as $image)
@php
    $mobile_img     = str_replace(['https://i.pinimg.com/originals/','https://i.pinimg.com/736x/'] , 'https://i.pinimg.com/236x/', $image['url'] );
@endphp

    <aside>
        <img class="v-image ads-img lazyload" alt="{{ $image['title'] }}" data-src="{{ $mobile_img }}" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" width="640" height="360" />
        <small>Source: {{ $image['domain'] }}</small>
            @if(strpos($ads_link, '//') !== false)
            <center>
                <button class="btn btn-sm btn-success ads-img">Check Details</button>
            </center>
            @endif
        <p>{{ $sentences->shuffle()->pop() }}</p>
    </aside>
@endforeach
</section>
<section>
    <article>
        <p>
        @foreach($related->shuffle()->take(2) as $key => $r)
            @if($r !== $keyword)            
            @if($key == 0)
                <a href="{{ image_url($r) }}"><i>&larr; {{ $r }}</i></a>
            @endif
            @if($key == 1)
                <a href="{{ image_url($r) }}"><i>{{ $r }} &rarr;</i></a>
            @endif
            @endif
        @endforeach
        </p>
    </article>
</section>
@endsection