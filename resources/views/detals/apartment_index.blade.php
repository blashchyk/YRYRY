@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
<div class="content">
			<div class="container">
				<div class="row">
    @include('detals.apartment')
@endsection

@section('side_bar')
    @include('site.side_bar4')
    </div>
    </div>
    </div>
@endsection

@section('footer')
    @include('site.footer')
@endsection