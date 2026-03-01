@extends('layouts.alpin-curry')

@section('title', __('site.gallery_page.title').' | '.__('site.brand'))
@section('meta_description', __('site.gallery_page.subtitle'))

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.gallery') }}</span>
            <h1>{{ __('site.gallery_page.title') }}</h1>
            <p>{{ __('site.gallery_page.subtitle') }}</p>
        </section>

        <section class="section">
            <div class="container gallery-grid">
                @forelse ($galleryImages as $image)
                    <article class="gallery-card reveal">
                        <img src="{{ asset($image['path']) }}" alt="{{ $image['caption'] }}">
                        <div class="caption">{{ $image['caption'] }}</div>
                    </article>
                @empty
                    <article class="gallery-card reveal">
                        <img src="{{ asset('assets/images/dishes/rise-with-curries.png') }}" alt="Alpin Curry Table">
                        <div class="caption">Alpin Curry</div>
                    </article>
                @endforelse
            </div>
        </section>
    </main>
@endsection
