@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Roles')
@endsection

@section('content')

<div class="section-body">
    <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
                <h4> @lang('Roles list') </h4>
                <div class="card-toolbar">
                    <!--begin::Button-->
                    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">
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
                        <th>@lang('Permissions')</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($roles as $role)   
                      <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @foreach($role->permissions()->pluck('name') as $permission)
                                <span class="label label-lg label-primary label-inline">{{ $permission }}</span>
                            @endforeach
                        </td>
                        <td>
                            <a href="{{ route('admin.roles.edit', ['role' => $role->id]) }}"
                                class="btn btn-sm btn-primary btn-icon mr-2" title="Edit details">
                                <span class="fas fa-pen"> </span> 
                            </a>
                            <form method="POST" style="display: inline-block"
                                action="{{ route('admin.roles.destroy', ['role' => $role->id]) }}"
                                accept-charset="UTF-8" class="delete">
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