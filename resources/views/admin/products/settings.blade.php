@extends('layouts.back')

@section('title')
    {{ config('app.name') }} | @lang('Colors and sizes')
@endsection

@section('content')

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="justify-content-start">
                            <h4>@lang('Colors and sizes')</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between">
                            <div class="card col-md-6">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title">@lang('Colors')</h4>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicColorsModal">@lang('All colors')</button>
                                </div>
                                <div class="card-body">
                                    @livewire('products.create-color')
                                </div>
                            </div>
                            <div class="card col-md-5">
                                <div class="card-header justify-content-between">
                                    <h4 class="card-title">@lang('Sizes')</h4>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicSizesModal">@lang('All sizes')</button>
                                </div>
                                <div class="card-body">
                                    @livewire('products.create-size')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection