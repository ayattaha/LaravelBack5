@extends('layouts.main')

@section('menu')
<li class="active"><a href="/">Home page</a></li>
@endsection

@push('submenue')
<li class="active"><a href="/">test page</a></li>
@endpush

@prepend('submenue')
<li class="active"><a href="/">new page</a></li>
@endprepend