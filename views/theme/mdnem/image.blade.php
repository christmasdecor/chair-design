@extends($layout)
@php
$show_download  = (IS_CLI)?'':SHOW_DOWNLOAD;
$max_image      = MAX_IMAGE_RESULT;
$lazyload       = LAZY_LOAD;
$default_thumb  = DEFAULT_THUMBNAIL;
$related        = collect(random_related());
$sentences      = collect($sentences);
$images         = collect($images);
@endphp
@section('title')
@endsection
@section('head')
@endsection

@section('content')
**{{ ucwords($keyword) }}**, {{ $sentences->shuffle()->take(3)->implode(' ') }}
@php $image = collect($images)->shuffle()->shift(); $img_thumb = $image['thumb']??$default_thumb; @endphp

@if($image)
![{{ $image['title'] }}]({{ $image['url'] }} "{{ $image['title'] }}")
{{ $image['title'] }} From {{ str_replace("www.", "", $image)['domain'] }}
@endif

{{ $sentences->shuffle()->take(5)->implode(' ') }}

### {{ $sentences->shuffle()->pop() }}

{{ $sentences->shuffle()->pop() }} {{ $sentences->shuffle()->take(4)->implode(' ') }}

**Another Article :**
@foreach(collect(random_related())->shuffle()->take(3) as $r)
@if($r !== $keyword)
[{{ ucfirst($r) }}]({{ str_replace(".html", "/", image_url($r)) }})
@endif
@endforeach

@include('ads_in_article')


@foreach(collect($images)->shuffle()->take(15) as $image)
@php $img_thumb = $image['thumb']??$default_thumb; @endphp

![{{ $image['title'] }}]({{ $image['url'] }} "{{ $image['title'] }}")
Source: {{ str_replace("www.", "", $image)['domain'] }}

{{ $sentences->shuffle()->pop() }} {{ $sentences->shuffle()->take(5)->implode(' ') }} {{ $image['title'] }}.
@endforeach

@endsection