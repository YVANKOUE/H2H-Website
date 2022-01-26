@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Offers')
@endsection

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="col-md-9">
                            <h4>@lang('Offer list')</h4>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('admin.offers.create') }}" class="btn btn-primary">@lang('New Offer')</span></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            @if ($offers->count() > 0)
                                <table class="table table-bordered table-striped table-hover datatable datatable-User" id="tableExport" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>@lang('Name')</th>
                                            <th>@lang('Begins at')</th>
                                            <th>@lang('Ends at')</th>
                                            <th>@lang('Discount')</th>
                                            <th>@lang('Products')</th>
                                            <th>@lang('Action')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($offers as $offer)   
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $offer->name }}</td>
                                                <td>{{ $offer->from }}</td>
                                                <td>{{ $offer->to }}</td>
                                                <td>{{ $offer->discount }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="top" data-content="{{ implode(', ', $offer->products->pluck('name')->toArray()) }}" title="{{  $offer->products->count() }} @lang('Products')" data-trigger="focus">{{ $offer->products->count() }}</button>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.offers.edit', $offer->slug) }}" class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit')">
                                                        <span class="fas fa-pen"> </span> 
                                                    </a>
                                                    <form method="POST" style="display: inline-block"
                                                        action="{{ route('admin.offers.destroy', $offer->slug) }}"
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
                            @else
                                <p class="text-center text-info">@lang('No offers yet.')</p>
                            @endif
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