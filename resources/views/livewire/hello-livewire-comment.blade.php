<div>
    @foreach($comments as $comment)
        <div class="card mb-3">

            <div class="row g-0">

                <div class="col-md-2 text-center">
                    <img src="{{ $comment['image'] }}" class="mt-3" alt="img-rounded" style="border-radius:50%;">
                </div>

                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text">{{ $comment['comment'] }}</p>
                        <p class="card-text"><small
                                class="text-muted">{{ $comment['title'] }} {{ $comment['user'] }}</small></p>
                    </div>
                </div>

            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-md-6 col-sm-12">

            <div class="form-group">
                <label for="">Title</label>
                <select name="title" id="" class="form-control" wire:model="selectedTitle">
                    <option value="">Select title</option>
                    @foreach($titleList as $title)
                        <option value="{{ $title }}">{{ $title }}</option>
                    @endforeach
                </select>

                @error('selectedTitle')
                <label class="help-block text-danger">{{ $message }}</label>
                @enderror
            </div>

        </div>
        <div class="col-md-6 col-sm-12">

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" wire:model="name" class="form-control">

                @error('name')
                <label class="help-block text-danger">{{ $message }}</label>
                @enderror
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12">

            <div class="form-group">
                <label for="">Comment</label>
                <textarea name="title" id="" class="form-control" wire:model="comment"></textarea>

                @error('comment')
                <label class="help-block text-danger">{{ $message }}</label>
                @enderror
            </div>
        </div>
    </div>


    <div class="form-group mt-2">
        <button class="btn btn-primary btn-sm" wire:click="postComment">Post Comment</button>
    </div>


</div>
