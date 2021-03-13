<div class="row g-3">
    <div class="col-md-6 col-lg-6 col-sm-12">

        <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Contact Us</span>
        </h4>

        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
            at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
            as opposed to using Content.</p>

        <div class="find-widget">
            Company: <a href="{{ env('APP_URL') }}">{{ env('APP_NAME') }}</a>
        </div>
        <div class="find-widget">
            Address: <a href="#">1233 District 6, Colony 1, Northern Mars</a>
        </div>
        <div class="find-widget">
            Phone: <a href="#">**-890-9767</a>
        </div>

        <div class="find-widget">
            Website: <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
        </div>
        <div class="find-widget">
            Program: <a href="#">Mon to Sat: 09:30 AM - 45.30 PM</a>
        </div>


    </div>

    <div class="col-md-6 col-lg-6 col-sm-12">

        <form wire:submit.prevent="submitForm">
            @csrf

            <div class="row g-3">
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" wire:model="firstName" id="firstName" placeholder=""
                           value="">

                    @error('firstName')
                    <label class="help-block text-danger">
                        {{ $message }}
                    </label>
                    @enderror
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" wire:model="lastName" id="lastName" placeholder="" value="">

                    @error('lastName')
                    <label class="help-block text-danger">
                        {{ $message }}
                    </label>
                    @enderror

                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" wire:model="email" id="email"
                           placeholder="you@example.com">

                    @error('email')
                    <label class="help-block text-danger">
                        {{ $message }}
                    </label>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="phone" class="form-control" wire:model="phone" id="phone" placeholder="+123 3456789">

                    @error('phone')
                    <label class="help-block text-danger">
                        {{ $message }}
                    </label>
                    @enderror

                </div>

                <div class="col-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" wire:model="message"
                              placeholder="Your message here"></textarea>

                    @error('message')
                    <label class="help-block text-danger">
                        {{ $message }}
                    </label>
                    @enderror

                </div>

            </div>

            <button class="btn btn-primary mt-2" type="submit">

                <div wire:loading wire:target="submitForm" class="spinner-border text-light" role="status">
                </div>

                Submit
            </button>
        </form>
    </div>
</div>
