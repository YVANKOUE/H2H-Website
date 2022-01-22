<div class="card-body">
    <div class="row">
        <div class="form-group col-md-12 col-12">
            <label class="form-label text-alert">@lang('Current Password')</label>
            <div class="input-group input-group-solid input-group-lg">
                <!-- Password field -->
                <input type="password" class="form-control @error('current_password') is-invalid @enderror" placeholder="@lang('Enter a current password')" name="current_password" id="current_password">
                <!-- An element to toggle between password visibility -->
                <div class="input-group-append">
                    <div class="input-group-text" style="cursor: pointer;"><i class="far fa-eye" onclick="showCurrentPassword()"></i></div>
                </div>
            </div>
            @error('current_password')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            {{-- <span class="form-text text-muted" role="alert">
                <strong id="current_password" class="text-danger current_password"></strong>
            </span> --}}
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12 col-12">
            <label class="form-label text-alert">@lang('New Password')</label>
            <div class="input-group input-group-solid input-group-lg">
                <!-- Password field -->
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="@lang('Enter a new password')" name="password" id="password">
                <!-- An element to toggle between password visibility -->
                <div class="input-group-append">
                    <div class="input-group-text" style="cursor: pointer;"><i class="far fa-eye" onclick="showPassword()"></i></div>
                </div>
            </div>
            @error('password')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            {{-- <span class="form-text text-muted" role="alert">
                <strong id="password" class="text-danger password"></strong>
            </span> --}}
        </div>
        <div class="form-group col-md-12 col-12">
            <label class="form-label text-alert">@lang('Confirm a new password')</label>
            <div class="input-group input-group-solid input-group-lg">
                <!-- Password field -->
                <input type="password" class="form-control" placeholder="@lang('Verify Password')" name="password_confirmation" id="password_confirmation">
                <!-- An element to toggle between password visibility -->
                <div class="input-group-append">
                    <div class="input-group-text" style="cursor: pointer;"><i class="far fa-eye" onclick="showConfirmPassword()"></i></div>
                </div>
            </div>
        </div>
        
        <div class="form-group col-md-12 col-12">
            {{-- <a href="{{ route('password.request') }}">@lang('Forget a password')</a> --}}
        </div>
    </div>
</div>