<form wire:submit.prevent="save" class="card-footer border mb-3 font-weight-bolder">
    <!--begin::Color-->
    <h6 class="mb-4">@lang('New color')</h6>
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
        <label class="col-sm-3 col-form-label">@lang('Code')</label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="color" class="form-control form-control-solid @error('code') 
                    is-invalid @enderror" wire:model.lazy="code" id="code"/>
            </div> 
            @error('code')
                <span class="form-text text-muted" role="alert"><strong class="text-danger code">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Color-->
    <!--begin::Color-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('Name')</label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('name') 
                    is-invalid @enderror" wire:model.lazy="name" id="name"/>
            </div> 
            @error('name')
                <span class="form-text text-muted" role="alert"><strong class="text-danger name">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Color-->
    <!--begin::Wizard Actions-->
    <div class="text-right">
        <button type="submit" class="btn btn-primary">@lang('Save')</button>
    </div>
    <!--end::Wizard Actions-->
</form>