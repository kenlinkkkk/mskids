@extends('client.index')
@section('title')
    <title>{{ $page->name }}</title>
@endsection

@section('content')
    <section class="page-hero-section division" id=pricing-page style="background-image: url('{{ $page->picture == '' ? asset('assets\client\images\newsletter-1.jpg') : asset($page->picture) }}')">
        <div class=container>
            <div class=row>
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="hero-txt text-center white-color">
                        @if(!empty($page->name))
                            <h3 class=h3-xl>{{ $page->name }}</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-60 pricing-page-section" id=pricing-2>
        <div class=container>
            @if (!empty($page->content))
                {!! $page->content !!}
            @endif
        </div>
    </section>
@endsection

@section('script')
@endsection
