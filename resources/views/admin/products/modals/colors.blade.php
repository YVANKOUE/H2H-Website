<div class="modal fade" id="basicColorsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('All colors')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    @if (count($colors) > 0)
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">@lang('Name')</th>
                                <th scope="col">@lang('Color')</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($colors as $color)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $color->name }}</td>
                                        <td>
                                            <span class="badge" style="background-color: {{ $color->code }}; color: {{ $color->code }}">something</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-center text-info">@lang('No color yet.')</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>