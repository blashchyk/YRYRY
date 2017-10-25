@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
<div class="content">
			<div class="container">
				<div class="row">
    @include('user.alert')
@endsection

@section('side_bar')
    @include('user.side_bar')
    </div>
    </div>
    </div>
@endsection

@section('footer')
    @include('site.footer')
@endsection