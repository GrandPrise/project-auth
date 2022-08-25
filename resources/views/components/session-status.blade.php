@props(['status'])
@if($status)
    <div class="alert alert-danger">
        <p>{{ $status }}</p>
    </div>
@endif
