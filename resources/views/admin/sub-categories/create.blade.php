<div class="modal fade" id="addSubCategoryModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">@lang('Add new subcategory')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.sub-categories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!--begin::Name-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Name')<sup class="text-danger">*</sup></label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" id="name" placeholder="@lang('Name')" value="{{ old('name') }}" required/>
                            </div>
                            @error('name')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Name-->

                    <!--begin::Description-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Description')<sup class="text-danger">*</sup></label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <textarea class="form-control form-control-solid @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="5" placeholder="@lang('Description')" required>{{ old('description') ?? '' }}</textarea>
                            </div>
                            @error('description')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Description-->

                    <!--begin::Category-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Category')<sup class="text-danger">*</sup></label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <select class="form-control form-control-solid @error('category_id') is-invalid @enderror" name="category_id" required>
                                    <option selected disabled>@lang('Select category')</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Category-->

                    <!--begin::Image-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Image')</label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <input type="file" class="form-control form-control-solid @error('image') is-invalid @enderror" name="image" id="image">
                            </div>
                            @error('image')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Image-->

                    <div class="modal-footer bg-whitesmoke br">
                        <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>