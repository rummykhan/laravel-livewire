<div>

    <ul class="list-group">
        @foreach($list as $listItem)
            <a href="{{ route($listItem['url']) }}" class="list-group-item list-group-item-action" aria-current="true">

                <div class="d-flex justify-content-between">
                    <h5 class="mb-1">{{ $listItem['label'] }}</h5>
                </div>

                <p class="mb-1">{{ $listItem['detail'] }}</p>

                <label class="badge {{ $listItem['class'] }}">{{ $listItem['smallText'] }}</label>
            </a>
        @endforeach
    </ul>

</div>
