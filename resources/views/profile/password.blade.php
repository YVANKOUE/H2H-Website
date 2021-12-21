<div class="card-body">
    <div class="row">
        <div class="form-group col-md-12 col-12">
            <label class="form-label text-alert">@lang('Current Password')</label>
            <input type="password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" placeholder="@lang('Enter a current password')" value="">
            @error('current_password')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert">
                <strong id="current_password" class="text-danger current_password"></strong>
            </span>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-12 col-12">
            <label class="form-label text-alert">@lang('New Password')</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="" placeholder="@lang('Enter a new password')">
            @error('password')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert">
                <strong id="password" class="text-danger password"></strong>
            </span>
        </div>
        <div class="form-group col-md-12 col-12">
            <label class="form-label text-alert">@lang('Confirm a new password')</label>
            <input type="password" name="password_confirmation" placeholder="@lang('Verify Password')" class="form-control" value="">
        </div>
        <div class="form-group col-md-12 col-12">
            {{-- <a href="{{ route('password.request') }}">@lang('Forget a password')</a> --}}
        </div>
    </div>
</div>