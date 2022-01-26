<div class="modal fade" id="addOfferModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">@lang('Add new offer')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.offers.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <!--begin::Name-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Name')<sup class="text-danger">*</sup></label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <input type="text" class="form-control form-control-solid @error('name') is-invalid @enderror" name="name" 
                                    id="name" placeholder="@lang('Name')" value="{{ old('name') }}" required/>
                            </div>
                            @error('name')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Name-->

                    <!--begin::Begins at-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Begins at')<sup class="text-danger">*</sup></label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <input type="text" name="from" id="from" class="form-control datepicker @error('from') is-invalid @enderror" required>
                            </div>
                            @error('from')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Begins at-->

                    <!--begin::Ends at-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Ends at')<sup class="text-danger">*</sup></label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <input type="text" name="to" id="to" class="form-control datepicker @error('to') is-invalid @enderror" required>
                            </div>
                            @error('to')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Ends at-->

                    <!--begin::Discount-->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">@lang('Discount')<sup class="text-danger">*</sup></label>
                        <div class="col-lg-10 col-xl-10 col-sm-10">
                            <div class="input-group input-group-solid input-group-lg">
                                <input type="number" class="form-control form-control-solid @error('discount') is-invalid @enderror" name="discount" 
                                    id="discount" min="1" placeholder="...%" value="{{ old('discount') }}" required/>
                            </div>
                            @error('discount')
                                <span class="form-text text-muted" role="alert"><strong class="text-danger">{{ $message }}</strong></span>
                            @enderror
                        </div>
                    </div>
                    <!--end::Discount-->

                    <div class="modal-footer bg-whitesmoke br">
                        <button type="submit" class="btn btn-primary">@lang('Submit')</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('Close')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>