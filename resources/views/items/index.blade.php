@extends('layouts.app')

@section('content')

<ul id="contents" class="tab-menu">
    <li><a href="#tabs-1">About</a></li>
    <li><a href="#tabs-2">News</a></li>
    <li><a href="#tabs-3">contact</a></li>
    <li><a href="#tabs-4">Access</a></li>
</ul>
<section class="tabs-content">
    <section id="tabs-1">
        <p>タブ1</p>
        <p>タブ1</p>
        <p>タブ1</p>
    </section>
    <section id="tabs-2">
        <p>タブ2</p>
        <p>タブ2</p>
        <p>タブ2</p>
    </section>
    <section id="tabs-3">
        <p>タブ3</p>
        <p>タブ3</p>
        <p>タブ3</p>
    </section>
    <section id="tabs-4">
        <p>タブ4</p>
        <p>タブ4</p>
        <p>タブ4</p>
    </section>
</section>

<!--トップページに戻るボタン-->
<a href="#" class="back-to-top"><img src="{{ asset('images/top-page-button (1).png') }}" alt="top_page_button" style="width: 70px; height: 70px;"></a>




@endsection