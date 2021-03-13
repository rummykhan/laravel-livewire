<div>

    <form wire:submit.prevent="setNewPassword">

        <input type="hidden" name="email" wire:model="email">
        <input type="hidden" name="token" wire:model="token">

        @if($successMessage)
            <div class="alert alert-success alert-dismissible" role="alert">
                {{ $successMessage }}
                <button wire:click="closeSuccessMessage" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" wire:model="password" class="form-control">

            @error('password')
            <label for="" class="help-block text-danger">{{ $message }}</label>
            @enderror
        </div>

        <div class="form-group">
            <label for="">Password confirmation</label>
            <input type="text" name="passwordConfirmation" wire:model="passwordConfirmation" class="form-control">

            @error('passwordConfirmation')
            <label for="" class="help-block text-danger">{{ $message }}</label>
            @enderror
        </div>

        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary btn-sm">Update Password</button>
        </div>

    </form>

</div>
