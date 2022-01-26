@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Categories')
@endsection

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                            <strong>@lang('Something has failed! Check the modal again to see what exactly.')</strong>
                        </div>
                    @endif
                    <div class="card-header">
                        <div class="col-md-9">
                            <h4>@lang('Categories list')</h4>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-{{ $errors->any() ? 'danger' : 'primary' }}" data-toggle="modal" data-target="#addCategoryModal">@lang('New category')</span></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover datatable datatable-User" id="tableExport" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>@lang('Name')</th>
                                        <th>@lang('Description')</th>
                                        <th>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)   
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="{{ $category->description }}">...</button>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.categories.edit', $category->slug) }}"
                                                    class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit')">
                                                    <span class="fas fa-pen"> </span> 
                                                </a>
                                                <form method="POST" style="display: inline-block"
                                                    action="{{ route('admin.categories.destroy', $category->slug) }}"
                                                    accept-charset="UTF-8" class="delete">
                                                    @method("DELETE")
                                                    @csrf

                                                    <button class="btn btn-sm btn-danger btn-icon delete" title="@lang('Delete record')">
                                                        <span class="fas fa-trash"></span>
                                                    </button>
                                                </form>
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
                    text: "{{ trans('If you delete this, it will also delete all the related records (subcategories and products).') }}",
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

    @include('admin.categories.modal')
@endsection