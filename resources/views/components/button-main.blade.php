@props(['btnDes' => '', 'href' => '', 'type' => '', 'style' => '', 'extraclass' => ''])
<a @if($href)href="{{ $href }}"@endif @if($type)type="{{ $type }}"@endif @if($style)style="{{ $style }}"@endif class="bg-warning btn border-0 mt-3 text-light @if($extraclass) {{ $extraclass }}@endif">{{ $btnDes }}</a>