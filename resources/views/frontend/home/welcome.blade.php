<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DostiBD</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}asset/folder/lg.png">
    <meta name="description" content="">
    <meta name="keywords" content="dostibd">
    <meta property="og:title" content="dostibd">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <link href="https://fonts.googleapis.com/css?family=Source Code Pro" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&amp;display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Acme&amp;display=swap" rel="stylesheet">

    <!-- Bootstrap CS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Font Awesome CSS CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Slick Slider CSS CDN-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}asset/folder/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}asset/folder/slick-theme.css">

    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}asset/folder/jquery.fancybox.css">

    <!-- Matis Menus CSS -->
    <link rel="stylesheet" href="{{ asset('/') }}asset/folder/metisMenu.css">

    <!-- Custom Css for this Design -->
    <link rel="stylesheet" href="http://dostibd.techdevbd.com/{{ asset('/') }}asset/folder/style.css">

    <!-- Custom Css for this Design -->
    <link rel="stylesheet" href="{{ asset('/') }}asset/folder/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}asset/folder/style1.css">
    <link rel="stylesheet" href="{{ asset('/') }}asset/folder/style2.css">
    <link rel="stylesheet" href="{{ asset('/') }}asset/folder/style3.css">
    <link rel="stylesheet" href="{{ asset('/') }}asset/folder/style4.css">
    <link rel="stylesheet" href="{{ asset('/') }}asset/folder/style5.css">

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *,
        ::after,
        ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after,
        ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        pre,
        samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dd,
        dl,
        figure,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu,
        ol,
        ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button],
        button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio,
        canvas,
        embed,
        iframe,
        img,
        object,
        svg,
        video {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        .z-10 {
            z-index: 10
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>

<body class="antialiased">
    {{-- <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div> --}}

    <!--Header Part Start-->
    <header class="sticky-header">
        <!--Middle Header Part Start-->
        <div class="container">
            <div class="middle-header">
                <div class="row">
                    <div class="col-9 col-md-4">
                        <div class="destopmodehide">
                            <span class="moble-menus-models">
                                <i class="fa fa-bars"></i>
                            </span>
                        </div>
                        <div class="logo">
                            <a href="{{ route('welcome') }}">
                                <img src="{{ asset('/') }}asset/folder/logo1.webp" alt=""
                                    style="width:20% !important">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 mobilemodehide">
                        <div class="search-section" style="width: 100%; margin: 25px auto 0px;">
                            <form action="{{ url('/search') }}" method="get">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search Here"
                                        name="query">
                                    <div class="input-group-append">
                                        <button type="submit" class="input-group-text search-button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-3 col-md-3">
                        <ul class="cartnavbar mobilemodehide">

                            <li class="padding:10px;HeaderCartItems">
                                <a style="background-color: #900C3F; border-radius: 7px; color: #fff; margin-left: 10px;padding:15px;"
                                    href="{{ route('cart') }}"><b> CART</b><i class="fa ml-1 fa-shopping-cart"
                                        aria-hidden="true"></i>
                                </a>

                            </li>

                        </ul>
                        <span class="HeaderCartItems2">
                            <a class="destopmodehide mobile-menus-models viewCartmobile"
                                href="http://dostibd.techdevbd.com/cart">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>

                            </a>
                            <!--Mobile Menu Side Models Start-->

                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!--Middle Header Part End-->
        <!--Main Header Part Start-->
        <div class="">
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header-menu">
                                <ul>
                                    <li class="categorylists">
                                        <a href="#">
                                            <i class="fa mr-1 fa-bars" aria-hidden="true"></i>Category </a>
                                        <ul>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="{{ route('categoryPant') }}"><span>
                                                        <img src="{{ asset('/') }}asset/folder/jeans.png"
                                                            style="width: 24px;">
                                                    </span>Pants</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="{{ route('categoryShoes') }}"><span>
                                                        <img src="{{ asset('/') }}asset/folder/high-heel.png"
                                                            style="width: 24px;">
                                                    </span>Shoes</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="{{ route('categoryTshirt') }}"><span>
                                                        <img src="{{ asset('/') }}asset/folder/polo-shirt.png"
                                                            style="width: 24px;">
                                                    </span>T-Shirts</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link" href="{{ route('categoryCloth') }}"><span>
                                                        <img src="{{ asset('/') }}asset/folder/polo-shirt.png"
                                                            style="width: 24px;">
                                                    </span>Clothes</a>
                                            </li>
                                            {{-- <li class="nav-item ">
                                                <a class="nav-link" href="{{ route('categoryDonate') }}"><span>
                                                        <img src="{{ asset('/') }}asset/folder/clothdonation.png"
                                                            style="width: 24px;">
                                                    </span>For Donate</a>
                                            </li> --}}
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('welcome')}}">HOME</a>
                                    </li>
                                    <li class="">
                                        <a href={{ route('about') }}>About Us</a>
                                    </li>
                                    <li class="">
                                        <a href={{ route('shelf') }}>Shelf</a>
                                    </li>
                                    <li class="">
                                        <a href={{ route('policies') }}>Policies</a>
                                    </li>
                                    <li class="">
                                        <a href={{ route('contact') }}>Contact Us</a>
                                    </li>
                                    <li>
                                        <a class="lost-pass" href={{ route('password') }}>
                                            Forgot Password?
                                        </a>
                                    </li>
                                    <li>

                                        @if (Route::has('login'))
                                            @auth
                                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                                            @else
                                        <li>
                                            <a href="{{ route('login') }}"><b>Login/Sign Up</b></a>
                                        </li>
        
                                    @endauth
                                    @endif
        
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Header Part End-->
    </header>

     <!--Main Contant Section Start-->
     <div class="main-container">
        <!--Slider Part Include Start-->
        <div class="slider-section">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <img class="d-block w-100 h-25" src="{{ asset('/') }}asset/folder/slider.png"
                            alt="SM Power Image">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block  w-100 h-25" src="{{ asset('/') }}asset/folder/slider.png"
                            alt="SM Power Image">
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block  w-100 h-25" src="{{ asset('/') }}asset/folder/slider.png"
                            alt="SM Power Image" >
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="main-home-page">
            <div class="container">
                <div class="categories-tabs">
                    <div class="row">

                    </div>

                    <div class="featured-products latest" style="background-color: #e1f5fe;">
                        <a href="{{ route('newProduct') }}"> <button class="float-right btn btn-primary">View
                                All</button></a>
                        <h2 style="color:rgb(43, 163, 89);">New Products</h2>
                        <div class="row">
                            <?php $count = 0; ?>
                            @foreach ($products->reverse() as $product)
                                @if ($count == 6)
                                @break;
                            @endif
                            <div class="column">
                                <div class="carddds">
                                    <p><a href="{{ route('productDetails', ['id' => $product->id]) }}">
                                            <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                alt="Denim Jeans"
                                                style="height:160px; !important;width:147px; !important">
                                            <p class="word">{{ $product->name }}</p>
                                            <p class="price p-0" style="color:red;">
                                                Price:{{ $product->price }}Tk</p>

                                        </a></p>
                                    <p><span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                    </p>
                                </div>

                            </div>
                            <?php $count = $count + 1; ?>
                        @endforeach

                    </div>
                </div>

                <div class="products-section">
                    <div class="featured-products salePart" style="background-color: #e1f5fe">
                        <a href="{{ route('categoryShoes') }}"><button class="float-right btn btn-primary">View
                                All</button></a>
                        <h2 style="color:rgb(43, 163, 89);">Shoes</h2>

                        <div class="row">
                            @foreach ($products as $product)
                                @if ($product->category_name == 'shoes')
                                    <div class="column">
                                        <div class="carddds">
                                            <p><a href="{{ route('productDetails', ['id' => $product->id]) }}">
                                                    <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                        alt="Denim Jeans"
                                                        style="height:160px; !important;width:147px; !important">
                                                    <p class="word">{{ $product->name }}</p>
                                                    <p class="price p-0" style="color:red;">
                                                        Price:{{ $product->price }}Tk</p>

                                                </a></p>
                                            <p><span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </p>
                                        </div>

                                    </div>
                                @endif
                            @endforeach


                        </div>
                    </div>

                    <div class="featured-products latest" style="background-color: #e1f5fe;">
                        <a href="{{ route('categoryTshirt') }}"><button class="float-right btn btn-primary">View
                                All</button></a>
                        <h2 style="color:rgb(43, 163, 89);">T-Shirts</h2>
                        <div class="row">
                            @foreach ($products as $product)
                                @if ($product->category_name == 't-shirt')
                                    <div class="column">
                                        <div class="carddds">
                                            <p><a href="{{ route('productDetails', ['id' => $product->id]) }}">
                                                    <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                        alt="Denim Jeans"
                                                        style="height:160px; !important;width:147px; !important">
                                                    <p class="word">{{ $product->name }}</p>
                                                    <p class="price p-0" style="color:red;">
                                                        Price:{{ $product->price }}Tk</p>

                                                </a></p>
                                            <p><span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </p>
                                        </div>

                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                    <div class="featured-products latest" style="background-color: #e1f5fe;">
                        <a href="{{ route('categoryPant') }}"><button class="float-right btn btn-primary">View
                                All</button></a>
                        <h2 style="color:rgb(43, 163, 89);">Pants</h2>
                        <div class="row">
                            @foreach ($products as $product)
                                @if ($product->category_name == 'pant')
                                    <div class="column">
                                        <div class="carddds">
                                            <p><a href="{{ route('productDetails', ['id' => $product->id]) }}">
                                                    <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                        alt="Denim Jeans"
                                                        style="height:160px; !important;width:147px; !important">
                                                    <p class="word">{{ $product->name }}</p>
                                                    <p class="price p-0" style="color:red;">
                                                        Price:{{ $product->price }}Tk</p>

                                                </a></p>
                                            <p><span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                            </p>
                                        </div>

                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="featured-products latest" style="background-color: #e1f5fe;">
                    <a href="{{ route('categoryCloth') }}"><button class="float-right btn btn-primary">View
                            All</button></a>
                    <h2 style="color:rgb(43, 163, 89);">Clothes</h2>
                    <div class="row">
                        @foreach ($products as $product)
                            @if ($product->category_name == 'cloth')
                                <div class="column">
                                    <div class="carddds">
                                        <p><a href="{{ route('productDetails', ['id' => $product->id]) }}">
                                                <img class="card-img-top" src="{{ asset("/$product->image") }}"
                                                    alt="Denim Jeans"
                                                    style="height:160px; !important;width:147px; !important">
                                                <p class="word">{{ $product->name }}</p>
                                                <p class="price p-0" style="color:red;">
                                                    Price:{{ $product->price }}Tk</p>

                                            </a></p>
                                        <p><span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </p>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <!--Main Footer Part Start-->
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>About Us</h3>
                            <hr style="margin: 10px 0px 22px; width: 15%; border: 1px solid #2b97f5;">
                            <p>Established Business in 2023, Dostibd to Worlds Shops, Restaurants and Individuals. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Address</h3>
                            <hr style="margin: 10px 0px 22px; width: 15%; border: 1px solid #2b97f5;">
                            <p>Dhaka-BD,1205, Bangladesh. </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-widget">
                                <h3>Telephone</h3>
                                <hr style="margin: 10px 0px 22px; width: 15%; border: 1px solid #2b97f5;">
                                <p>Post No : 114-0021 Email: dostibd@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Social Media</h3>
                            <hr style="margin: 10px 0px 22px; width: 15%; border: 1px solid #2b97f5;">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/" style="background: #3a579a;">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" style="background: #0da8e3;">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#"
                                        style="background-image: linear-gradient(#4560ca, #ff5745,#ffd057);">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Main Footer Part Start-->
        <!--Bottom Footer Part Start-->
        <div class="bottom-footer">
            <div class="copyright">
                <p>Copyright © 2023 Dostibd - All Rights Reserved - Created by <a class="ml-2" href=""
                        target="_blank"></a>
                </p>
            </div>
        </div>
        <!--Bottom Footer Part Start-->
    </footer>

    <!-- Jquery Script  CDN-->
    <script src="{{ asset('/') }}asset/folder/jquery.min.js"></script>

    <!-- Jquery Script  CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap Script  CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- Metis Menus Script -->
    <script src="https://www.baticrom.com/public/batikrom/js/metisMenu.min.js"></script>

    <!-- Sweet Alert CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Slick slider CDN -->
    <script type="text/javascript" src="https://www.baticrom.com/public/batikrom/js/slick.min.js"></script>

    <!--iconify Script CDN-->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <!-- Custom Script for this Design -->
    <script src="https://www.baticrom.com/public/batikrom/js/myjquery.js"></script>

    <script>
        $(document).ready(function() {

            $(document).on("click", ".Quantityplus", function() {
                var that = $(this);
                var m = that.attr("data-max");
                var id = that.attr("data-id");
                var cls = 'input.qty_' + id;
                var q = parseInt($(cls).val());

                q = isNaN(q) ? 1 : q;

                var access = m - q;

                if (access > 0) {
                    q++;
                    $(cls).val(q)
                }

            });


            $(document).on("click", ".Quantityminus", function() {
                var that = $(this);
                var n = that.attr("data-min");
                var id = that.attr("data-id");
                var cls = 'input.qty_' + id;
                var q = parseInt($(cls).val());

                q = isNaN(q) ? 1 : q;

                if (q > n) {
                    q--;
                    $(cls).val(q)

                }

            });

            $(document).on('click', function(e) {

                var container = $(".search-section");
                var containerClose = $(".SearchResultDiv");

                if (!$(e.target).closest(container).length) {
                    containerClose.hide();
                }

            });

            $(document).on("keyup", ".AjaxSearchProduct", function() {

                var search = $(this).val();

                if (search.length > 2) {
                    var url = $(this).data('url');

                    $.ajax({
                            url: url,
                            type: 'GET',
                            dataType: 'json',
                            cache: false,
                            data: {
                                'search': search
                            }
                        })
                        .done(function(data) {
                            $(".SearchResultDiv").empty().append(data.searchProducts);
                            $(".SearchResultDiv").show();
                        })
                        .fail(function() {
                            // alert("error");
                        });

                }


            });

            $(document).on('click', '.wishlistCompareUpdate', function() {
                var url = $(this).data('url');

                var that = $(this);

                $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        cache: false,
                    })
                    .done(function(data) {
                        if (data.success) {

                            $(".viewItemsLists").empty().append(data.itemsView);

                            if (data.status == true) {
                                $(that).addClass('active');
                            } else {
                                $(that).removeClass('active');
                            }
                            if (data.statusType == 0) {
                                $(".wlcounter").empty().append(data.count);
                                if (data.alert == true) {
                                    alert('Wishlist Are Full. Cannot Added Over 48 Items.');
                                }
                            } else {
                                $(".cpcounter").empty().append(data.count);
                                if (data.alert == true) {
                                    alert('Compare Are Full. Cannot Added Over 20 Items.');
                                }
                            }



                        }
                    })
                    .fail(function() {
                        // alert("error");
                    });


            });

            $(document).on("click", ".singleaddCart", function() {

                var that = $(this);
                var id = that.attr("data-id");
                var url = that.attr("data-url");

                var cls = '.addToCartProduct_' + id;
                var clsMS = '.MessageSuccess' + id;
                var clsCMS = '.CMessageSuccess' + id;
                var clsLoading = '.LoadingaddCartHide_' + id;
                var clsAction = '.addCartShow_' + id;

                var data = $(cls).serialize();

                $.ajax({
                        url: url,
                        method: "POST",
                        data: data,
                        beforeSend: function() {
                            $(clsAction).hide();
                            $(clsLoading).show();
                            $(clsMS).empty();
                        },
                    })
                    .done(function(data) {
                        $(clsMS).empty().append(
                            '<div style="border: 1px solid #28a745;padding: 5px 10px;margin-bottom:5px;">Product Added Success</div>'
                        );
                        $(clsCMS).empty().append(
                            '<a href="https://www.baticrom.com/carts" style="border: 1px solid #28a745;padding: 2px 10px;margin-bottom:5px;display:inline-block;">View Cart <i class="fa fa-long-arrow-right" aria-hidden="true"></i> </a>'
                        );
                        $(".HeaderCartItems").empty().append(data.HeadercartItems);
                        $(".HeaderCartItems2").empty().append(data.HeadercartItems2);
                        $(clsLoading).hide();
                        $(clsAction).show();
                    })
                    .fail(function() {
                        $(clsLoading).hide();
                        $(clsAction).show();
                        location.reload(true);
                    });

            });

            $(document).on('click', '.cartUpdate', function() {

                var url = $(this).data('url');
                var Dcharge = parseInt($('.cartDeliveryCharge').text());

                if (isNaN(Dcharge)) {
                    Dcharge = 0;
                }

                $.ajax({
                        url: url,
                        type: 'GET',
                        dataType: 'json',
                        cache: false,
                    })
                    .done(function(data) {

                        $(".productList-table").empty().append(data.cartItems);
                        $(".HeaderCartItems").empty().append(data.HeadercartItems);
                        $(".HeaderCartItems2").empty().append(data.HeadercartItems2);
                    })
                    .fail(function() {
                        // alert("error");
                    });


            });



        });
        jQuery(document).ready(($) => {
            // $(".quantity").on("click", ".plus", function (e) {
            //     let $input = $(this).prev("input.qty");
            //     let val = parseInt($input.val());
            //     $input.val(val + 1).change();
            // });





            // $(".quantity").on("click", ".minus", function (e) {
            //     let $input = $(this).next("input.qty");
            //     var val = parseInt($input.val());
            //     if (val > 0) {
            //         $input.val(val - 1).change();
            //     }
            // });
        });
    </script>

    <script>
        $(".sale-slider").slick({
            dots: false,
            autoplay: true,
            autoplaySpeed: 2500,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ],
        });
    </script>

    <script>
        $(".slider-one").slick({
            dots: false,
            autoplay: true,
            autoplaySpeed: 2500,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ],
        });
    </script>

    <script type="text/javascript">
        var url = "http://dostibd.techdevbd.com/lang/change";



        $(".changeLang").change(function() {

            window.location.href = url + "?lang=" + $(this).val();

        });
    </script>

</body>

</html>
