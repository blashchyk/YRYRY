@extends('layouts.site')

@section('header')
    @include('site.header')
@endsection

@section('content')
<div class="content">
			<div class="container">
				<div class="row">
    @include('site.about')
@endsection

@section('side_bar')
    @include('site.side_bar5')
    </div>
    </div>
    </div>
@endsection

@section('footer')
    @include('site.footer')
@endsection