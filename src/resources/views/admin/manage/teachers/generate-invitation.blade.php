@extends('layouts.default')

@section('title') TMD - Admin Panel - Generate Invitation for Teacher @endsection
@section('description') NULL @endsection

@section('content')
<div class="container mb-5 col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('generate-invitation') }}" method="post">
        @csrf
        <div class="d-flex flex-row justify-content-between align-items-center">
            <div class="">
                <h2>Generate <b>Invitation</b></h2>
            </div>
            <div class="">
                <a href="{{ route('manage-teachers') }}" class="btn btn-secondary"> Go Back </a>
            </div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control text-center" id="invitation" name="invitation" required autofocus>
        </div>
        <div class="form-group d-flex justify-content-center">
            <a id="generate" class="btn btn-primary">Generate</a>
        </div>
        <div class="form-group d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
            function dec2hex (dec) {
            return dec < 10
                ? '0' + String(dec)
                : dec.toString(16)
            }
            function generate (len) {
                var arr = new Uint8Array((len || 40) / 2)
                window.crypto.getRandomValues(arr)
                return Array.from(arr, dec2hex).join('')
            }

            $('#generate').click(function () {
                $('#invitation').val(generate(20))
            })
        })
</script>
@endsection