@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Categories')
@endsection

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4> @lang('Categories list') </h4>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">
                        <span class="fas fa-plus"></span>
                    </a>
                    <!--end::Button-->
                </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped table-solid table-hover datatable datatable-User" id="table-2">
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
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', ['category' => $category]) }}"
                                class="btn btn-sm btn-primary btn-icon mr-2" title="@lang('Edit')">
                                <span class="fas fa-pen"> </span> 
                            </a>
                            <form method="POST" style="display: inline-block"
                                action="{{ route('admin.categories.destroy', ['category' => $category]) }}"
                                accept-charset="UTF-8" title="@lang('Delete')" class="delete">
                                @method("DELETE")
                                @csrf

                                <button class="btn btn-sm btn-danger btn-icon delete"> <span class="fas fa-trash">  </span>  </button>
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
@endsection