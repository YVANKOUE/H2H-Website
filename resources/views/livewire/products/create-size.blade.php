<form wire:submit.prevent="save" class="card-footer border mb-3 font-weight-bolder">
    <h6 class="mb-4">@lang('New size')</h6>
    @if ($message)
        <div class="alert alert-success alert-dismissible show fade text-center bg-outline">
            <div class="alert-body">
                <button class="close" data-dismiss="alert">
                    <span>&times;</span>
                </button>
                {{ $message }}
            </div>
        </div>
    @endif
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('Size')</label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('size') 
                    is-invalid @enderror" wire:model.lazy="size" id="size"/>
            </div> 
            @error('size')
                <span class="form-text text-muted" role="alert"><strong class="text-danger size">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">@lang('Save')</button>
    </div>
</form>