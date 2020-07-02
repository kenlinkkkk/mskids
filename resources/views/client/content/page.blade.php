@extends('client.index')
@section('title')
    <title>{{ $page->name }}</title>
@endsection

@section('content')
    <section class="page-hero-section division" id=pricing-page>
        <div class=container>
            <div class=row>
                <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                    <div class="hero-txt text-center white-color">
                        <h3 class=h3-xl>{{ $page->name }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wide-60 pricing-page-section" id=pricing-2>
        <div class=container>
            <div class=tab-content>
                <div aria-labelledby=tab1-list class="tab-pane fade show active" id=price-tab-1 role=tabpanel>
                    <div class="row d-flex align-items-center pricing-row primary-theme">
                        {!! $page->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
