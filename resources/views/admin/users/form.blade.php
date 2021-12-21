<?php $r = \Route::current()->getAction() ?>

<?php $route = (isset($r['as'])) ? $r['as'] : ''; ?>


 <!--begin::Wizard Step 1-->
 <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
    {{-- <h5 class="text-dark font-weight-bold mb-10">@lang("User's Profile Details"):</h5> --}}

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label text-left">Avatar</label>
        <div class="col-lg-9 col-xl-9">
            <div class="image-input image-input-outline" id="kt_user_add_avatar">
                <div class="image-input-wrapper" style="background-image: url(@if ($route == 'admin.users.create') {{asset('assets/img/banner/1.png')}} @else {{$user->avatar}}) @endif"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="avatar" id="avatar" class="@error('avatar') is-invalid @enderror" accept=".png, .jpg, .jpeg" value="@if ($route == 'admin.users.create')
                    {{old('avatar')}}
                    @else
                     {{$user->avatar}}
                    @endif"/>

                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
            @error('avatar')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('Name')</label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" id="name" value="@if($route == 'admin.users.create'){{old('name')}}@else{{$user->name}}@endif"/>
            </div>
            @error('name')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert"><strong class="text-danger name" ></strong></span>
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-sm-3 col-form-label">@lang('First Name')</label>
        <div class="col-lg-9 col-xl-9 col-sm-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('last_name') is-invalid @enderror" name="last_name" id="last_name" value="@if($route == 'admin.users.create'){{old('last_name')}}@else{{$user->last_name}}@endif"/>
            </div>
            @error('last_name')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert"><strong class="text-danger last_name" ></strong></span>
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">@lang('Email')</label>
        <div class="col-lg-9 col-xl-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="text" class="form-control form-control-solid @error('email') is-invalid @enderror" name="email" id="email" value="@if($route == 'admin.users.create'){{old('email')}}@else{{$user->email}}@endif" />
            </div>
            @error('email')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert"><strong class="text-danger email" ></strong></span>
        </div>
    </div>
    <!--end::Group-->

    <!--begin::Group-->
    <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">@lang('Phone')</label>
        <div class="col-lg-9 col-xl-9">
            <div class="input-group input-group-solid input-group-lg">
                <input type="number" class="form-control form-control-solid @error('phone_number') is-invalid @enderror" name="phone_number" id="phone_number" value="@if($route == 'admin.users.create'){{old('phone_number')}}@else{{$user->phone_number}}@endif" />
            </div>
            @error('phone_number')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert"><strong class="text-danger phone_number" ></strong></span>
        </div>
    </div>
    <!--end::Group-->

    @if ($route == 'admin.users.create')    
        <!--begin::Group-->
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Password')</label>
            <div class="col-lg-9 col-xl-9">
                <div class="input-group input-group-solid input-group-lg">
                    <input class="form-control form-control-solid @error('password') is-invalid @enderror" type="password" id="password" name="password" />
                </div>
                @error('password')
                    <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                @enderror
                <span class="form-text text-muted" role="alert"><strong class="text-danger password" ></strong></span>
            </div>
        </div>
        <!--end::Group-->

        <!--begin::Group-->
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Password confirmation')</label>
            <div class="col-lg-9 col-xl-9">
                <div class="input-group input-group-solid input-group-lg">
                    <input class="form-control form-control-solid" type="password"  name="password_confirmation" />
                </div>
            </div>
        </div>
        <!--end::Group-->
    @endif

    <!--begin::Group-->
    {{-- <div class="form-group row">
        <label class="col-xl-3 col-lg-3 col-form-label">@lang('active')</label>
        <div class="col-lg-9 col-xl-9">
            <div class="input-group input-group-solid input-group-lg">
                <select class="form-control @error('active') is-invalid @enderror" id="active" name="active" id="active">
                    <option value="1">@lang('Yes')</option>
                    <option value="0">@lang('No')</option>
                </select>
            </div>
            @error('active')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
            @enderror
            <span class="form-text text-muted" role="alert"><strong class="text-danger active" ></strong></span>
        </div>
    </div> --}}
    <!--end::Group-->

    @if ($route == 'admin.users.edit' || $route == 'admin.users.create')
        <div class="form-group row">
            <label class="col-xl-3 col-lg-3 col-form-label">@lang('Roles')
            </label>
            <div class="col-lg-9 col-xl-9">
                <div class="input-group input-group-solid input-group-lg">
                    <select multiple="multiple" class="form-control select2"  name="roles[]" id="roles" required>
                        @foreach($roles as $id => $roles)
                            <option value="{{ $id }}" @if($route != 'admin.users.create') @isset($roles) @if(in_array($id,$user->roles()->pluck('name')->toArray())) selected @endif @endisset  @endif>{{ $roles }}</option>
                        @endforeach
                    </select>

                </div>
                @error('permission')
                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                @enderror
                <span class="form-text text-muted" role="alert"><strong class="text-danger active" ></strong></span>
            </div>
        </div>
    @endif
</div>
<!--end::Wizard Step 1-->
