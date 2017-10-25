@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
<div class="content">
			<div class="container">
				<div class="row">
    @include('add.trucking')
@endsection

@section('side_bar')
    @include('site.side_bar')
    </div>
    </div>
    </div>
@endsection

@section('footer')
    @include('site.footer')
@endsection