<div>

    <ul class="list-group">
        @foreach($list as $listItem)
            <a href="{{ $listItem['external'] ? $listItem['external_link'] : route($listItem['url']) }}"
               class="list-group-item list-group-item-action" aria-current="true">

                <div class="d-flex justify-content-between">
                    <h5 class="mb-1">{{ $listItem['label'] }}</h5>
                </div>

                <p class="mb-1">{{ $listItem['detail'] }}</p>

                <label class="badge {{ $listItem['class'] }}">{{ $listItem['smallText'] }}</label>
            </a>
        @endforeach
    </ul>

    <div class="row mt-3">
        <div class="col-12 text-center">

            <a href="https://github.com/rummykhan/laravel-livewire" class="text-decoration-none text-monospace">
                <i class="bi bi-github"></i> https://github.com/rummykhan/laravel-livewire
            </a>

        </div>
    </div>

</div>
