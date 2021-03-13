<div>

    <div class="form-group">
        <label for="">Search</label>
        <input type="text" class="form-control" wire:model.debounce.500ms="search">
    </div>


    <div class="row">
        @foreach($searchResults as $searchResult)
            <div class="col-3 mt-2">
                <div class="card h-100">
                    <img src="{{ $searchResult['avatar_url'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{ $searchResult['html_url'] }}" class="card-title">
                            <i class="bi bi-github"></i> {{ $searchResult['login'] }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</div>
