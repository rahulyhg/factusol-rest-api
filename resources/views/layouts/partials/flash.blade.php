@if(Session::has('danger'))
    <div class="callout callout-danger">
        <?= Session::get('danger'); ?>
    </div>
@endif

@if(Session::has('warning'))
    <div class="callout callout-warning">
        <?= Session::get('warning'); ?>
    </div>
@endif

@if(Session::has('success'))
    <div class="callout callout-success">
        <?= Session::get('success'); ?>
    </div>
@endif

@if(Session::has('info'))
    <div class="callout callout-info">
        <?= Session::get('info'); ?>
    </div>
@endif