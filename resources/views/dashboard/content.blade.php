@extends('layouts.app')

@section('content')
    {{-- Linea 1 --}}
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-body">
                    <?= isset($content) ? $content : '' ?>
                </div>
            </div>
        </div>
    </div>
@endsection
