<div class="col-auto">
    <label class="sr-only" for="inlineFormInputGroup">Username</label>
    <div class="input-group mb-2">
      <div class="input-group-prepend">
        <div class="input-group-text">@</div>
      </div>
      <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
    </div>
</div>
{{-- value="{{ old('name') ?? $category->name}}" --}}
{{-- {{ old('description') ?? $category->description}} --}}

<!--begin::Image-->
<div class="form-group row">
    <div class="col-lg-9 col-xl-9">
        <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" name="image" id="validatedCustomFile" required>
            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
            <div class="invalid-feedback">Example invalid custom file feedback</div>
        </div>
    </div>
</div>
<!--end::Image-->

<!--begin::Group-->
<div class="form-group row">
    <label class="col-sm-3 col-form-label">@lang('Name')</label>
    <div class="col-lg-9 col-xl-9 col-sm-9">
        <div class="input-group input-group-solid input-group-lg">
            <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}"/>
        </div> 
        @error('name')
            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
        @enderror
        <span class="form-text text-muted" role="alert"><strong class="text-danger name" ></strong></span>
    </div>
</div>
<!--end::Group-->

{{-- <div class="custom-file">
    <input type="file" class="custom-file-input" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
</div> --}}

<!--begin::Description-->
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">@lang('Description')</label>
    <div class="col-lg-9 col-xl-9">
        <div class="input-group input-group-solid input-group-lg">
            <textarea class="form-control form-control-solid @error('description') 
                is-invalid @enderror" id="description" name="description" required> {{ old('description') }}</textarea>
        </div>
        @error('description')
            <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
        @enderror
    </div>
</div>
<!--end::Description-->

<!--begin::Image-->
<div class="form-group row">
    <label class="col-xl-3 col-lg-3 col-form-label">@lang('Image')</label>
    <div class="col-lg-9 col-xl-9">
        <div class="custom-file">
            <input type="file" name="image" value="{{ old('image') }}" accept=".png, .jpg, .jpeg" 
                class="custom-file-input @error('avatar') is-invalid @enderror" id="validatedCustomFile">
            <label class="custom-file-label" for="validatedCustomFile">@lang('Choose file...')</label>
            {{-- <div class="invalid-feedback">@lang('Example invalid custom file feedback')</div> --}}
        </div>
        @error('image')
            <span class="form-text text-muted" role="alert"><strong class="text-danger image">{{ $message }}</strong></span>
        @enderror
    </div>
</div>
<!--end::Image-->