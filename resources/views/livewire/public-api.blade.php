<div>

    <div class="form-group">
        <label for="">
            Search
        </label>
        <input type="search" class="form-control" wire:model.debounce.300ms="search">
    </div>

    <div class="form-group mt-3" wire:loading>
        <div class="spinner-border text-primary" role="status">
        </div> Searching...
    </div>



    @if(strlen($this->search) > 3)
        <div class="row">
            @forelse($searchResults as $searchResult)
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
            @empty
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">Sorry!</h1>
                        <p class="lead">
                            Your search term brought no results.
                        </p>
                    </div>
                </div>

            @endforelse
        </div>
    @endif

</div>
