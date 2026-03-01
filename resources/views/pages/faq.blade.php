@extends('layouts.alpin-curry')

@section('title', __('site.faq_page.title').' | '.__('site.brand'))
@section('meta_description', __('site.faq_page.subtitle'))

@php
    $faqItems = [
        [
            'question' => __('site.faq.items.q1.question'),
            'answer' => __('site.faq.items.q1.answer'),
        ],
        [
            'question' => __('site.faq.items.q2.question'),
            'answer' => __('site.faq.items.q2.answer'),
        ],
        [
            'question' => __('site.faq.items.q3.question'),
            'answer' => __('site.faq.items.q3.answer'),
        ],
        [
            'question' => __('site.faq.items.q4.question'),
            'answer' => __('site.faq.items.q4.answer'),
        ],
        [
            'question' => __('site.faq.items.q5.question'),
            'answer' => __('site.faq.items.q5.answer'),
        ],
        [
            'question' => __('site.faq.items.q6.question'),
            'answer' => __('site.faq.items.q6.answer'),
        ],
    ];

    $faqSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => array_map(static function (array $item): array {
            return [
                '@type' => 'Question',
                'name' => $item['question'],
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $item['answer'],
                ],
            ];
        }, $faqItems),
    ];
@endphp

@section('content')
    <main id="main-content">
        <section class="container page-hero reveal">
            <span class="eyebrow">{{ __('site.nav.faq') }}</span>
            <h1>{{ __('site.faq_page.title') }}</h1>
            <p>{{ __('site.faq_page.subtitle') }}</p>
        </section>

        <section class="section">
            <div class="container faq-list">
                @foreach ($faqItems as $index => $item)
                    <details class="faq-item reveal" style="transition-delay: {{ ($index + 1) * 55 }}ms;">
                        <summary>{{ $item['question'] }}</summary>
                        <p>{{ $item['answer'] }}</p>
                    </details>
                @endforeach
            </div>
        </section>
    </main>
@endsection

@push('scripts')
    <script type="application/ld+json">
        {!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
@endpush
