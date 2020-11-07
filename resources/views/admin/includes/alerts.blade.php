<div class="alert">
<p>Alert - {{$content ?? ''}}</p>

{{-- sdasdsadas --}}

</div>
@push('styles')
    <style>
    .alert{
        background: red;
        color: #ffffff;
        font-weight: bold;
        text-transform: uppercase;
        text-align: center;
    }
</style>
@endpush