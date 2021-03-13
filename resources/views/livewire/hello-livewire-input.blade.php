<div>

    <div class="row">
        <div class="col-md-6 col-sm-12">

            <div class="form-group">
                <label for="">Title</label>
                <select name="title" id="" class="form-control" wire:model="selectedTitle">
                    @foreach($titleList as $title)
                        <option value="{{ $title }}">{{ $title }}</option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="col-md-6 col-sm-12">

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" wire:model="name" class="form-control">
            </div>

        </div>
    </div>

    <h3 class="mt-3">Hi {{ $selectedTitle }}, my name is {{ $name }}. How are you ?</h3>
</div>
