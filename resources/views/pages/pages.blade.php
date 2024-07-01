@extends('layouts.user_layout.app')

@section('content')
<div class="privacy">
	<div class="container">
        @php
            $pagesController= new \App\Http\Controllers\PagesController();
            $pagesController->__setPage($page);
        @endphp
        @include('pages.pages.'[$page],['content'=>$pagesController->__getPage()])
    </div>
</div>
@endsection
