@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Products')
@endsection

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-9">
                            <h4>@lang('Products list')</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                                {{-- <span class="fas fa-plus"></span> --}}
                                @lang('New product')
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-User" id="tableExport" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('Name')</th>
                                        <th>@lang('Brand')</th>
                                        <th>@lang('Price') (€)</th>
                                        {{-- <th>@lang('Category')</th> --}}
                                        <th>@lang('Subcategory')</th>
                                        <th>@lang('Availability')</th>
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)   
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>{{ $product->price }}</td>
                                            {{-- <td>{{ $product->subCategory->category->name }}</td> --}}
                                            <td>{{ $product->subCategory->name }}</td>
                                            <td>
                                                <p title="{{ $product->available ? trans('Available') : trans('Unavailable') }}">
                                                    <i class="text-{{ $product->available ? 'success' : 'danger' }}" data-feather="{{ $product->available ? 'check' : 'alert-triangle' }}"></i>
                                                </p>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.products.edit', $product->slug) }}" class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit details')">
                                                    <span class="fas fa-pen"></span> 
                                                </a>
                                                <form method="POST" action="{{ route('admin.products.destroy', $product->slug) }}"
                                                    accept-charset="UTF-8" class="delete d-inline mr-2">
                                                    @method('DELETE')
                                                    @csrf

                                                    <button class="btn btn-sm btn-danger btn-icon delete" title="@lang('Delete record')">
                                                        <span class="fas fa-trash"></span>
                                                    </button>
                                                </form>
                                                </a>
                                                {{-- <form method="POST" action="{{ route('admin.products.available', $product->slug) }}" accept-charset="UTF-8" class="delete d-inline">
                                                    @method('PATCH')
                                                    @csrf

                                                    <button class="btn btn-sm btn-{{ $product->available ? 'success' : 'danger' }} btn-icon" title="@lang('Set availability')"><span class="fa fa-refresh"></span></button>
                                                </form> --}}
                                            </td>
                                        </tr>            
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

        <script type="text/javascript">
            $('.delete').click(function(event) {
                var form =  $(this).closest("form");
                event.preventDefault();
                swal({
                    title: "{{ trans('Are you sure you want to delete this record ?') }}",
                    icon: "warning",
                    buttons: ["{{ trans('Cancel') }}", "{{ trans('Confirm') }}"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                    form.submit();
                    }
                });
            });
        </script>
    @endpush
@endsection