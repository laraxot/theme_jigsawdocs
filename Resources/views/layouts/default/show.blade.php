@extends('pub_theme::layouts.app')

@section('nav-toggle')
    @include('pub_theme::layouts.nav.menu-toggle')
@endsection

@section('content')
<section class="container max-w-8xl mx-auto px-6 md:px-8 py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('pub_theme::layouts.nav.menu', ['items' => $page->navigation ])
        </nav>

        <div class="DocSearch-content w-full lg:w-3/5 break-words pb-16 lg:pl-4" v-pre>
            {!! $row->txt !!}
        </div>
    </div>
</section>
@endsection
