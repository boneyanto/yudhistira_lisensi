@extends('layouts.app')

@section('template_title')
    {{ $lisensi->name ?? 'Show Lisensi' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Lisensi</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('lisensis.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Lisensi Key:</strong>
                            {{ $lisensi->lisensi_key }}
                        </div>
                        <div class="form-group">
                            <strong>Computer Id:</strong>
                            {{ $lisensi->computer_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
