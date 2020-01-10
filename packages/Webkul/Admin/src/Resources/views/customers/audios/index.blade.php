@extends('admin::layouts.content')

@section('page_title')
    Audio tracked
@stop

@section('content')

    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>  Audio tracked </h1>
            </div>
            <div class="page-action">
                <!-- <a href="{{ route('admin.groups.create') }}" class="btn btn-lg btn-primary">
                    {{ __('admin::app.customers.groups.add-title') }}
                </a> -->
            </div>
        </div>

        <div class="page-content">
            @inject('customerAudio','Webkul\Admin\DataGrids\CustomerAudiosDataGrid')
            {!! $customerAudio->render() !!}
        </div>
    </div>

@stop