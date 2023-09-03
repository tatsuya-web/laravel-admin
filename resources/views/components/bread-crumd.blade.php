@if($breadcrumd)
<ol class="main_hd_pnkz">
    @foreach($breadcrumd->getBreadCrumbs() as $value)
        <li>
            @if($value->getUrl())
                <a href="{{ $value->getUrl() }}">{{ $value->getTitle() }}</a>
            @else
                {{ $value->getTitle() }}
            @endif
        </li>
    @endforeach
</ol>
@endif