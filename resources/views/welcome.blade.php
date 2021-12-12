<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Legal connect</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            background-image: url("{{ asset('assets/images/background_tech.jpg') }}");
        }

        .navbar {
            /* background-color: black; */
            width: 100%;
            display: flex;
            justify-content: center;
            position: absolute;
            top: -100%;
            animation: anim4 0.3s forwards 4.1s;
        }

        a {
            color: white;
            padding: 15px;
            text-decoration: none;
            font-size: 2vw;
            font-weight: bold;
            font-family: 'Courier New', Courier, monospace;
            margin-left: 5px;
            margin-right: 5px;
        }

        a:hover {
            background-color: white;
            color: black;
        }

        @media only screen and (max-width: 760px) {
            #login {
                position: unset !important;
                flex-direction: column !important;
                padding: 10px !important;
            }
        }

        .up {
            height: 100%;
            width: 100%;
            margin: auto;
            background-color: black;
            animation: anim5 0.3s forwards 4.1s;
        }

        /* .down {
                padding: 20px;
                background-color: white;
                border: 2px solid black;
                font-family: 'Courier New', Courier, monospace;
            } */

        #picture_box {
            width: 50%;
            background-image: url("{{ asset('assets/images/worn_page_bg_2.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            bottom: -100%;
            position: absolute;
            left: 50%;
            animation: anim 2s forwards, anim3 2s forwards 2s;
        }

        @media screen and (max-width: 800px) {
            #picture_box {
                background-image: url("{{ asset('assets/images/worn_page_bg_sm2.jpg') }}");
            }
        }

        #text_box {
            width: 50%;
            height: 100%;
            left: -100%;
            position: absolute;
            animation: anim2 2s forwards 2s;
            color: white;
            font-size: 4vw;
            font-weight: 400;
            line-height: 2%;
            display: flex;
            flex-direction: column;
            font-family: 'Courier New', Courier, monospace;
        }


        #text_box> :first-child {
            margin-top: 30%;
        }


        @media only screen and (max-width: 800px) {
            #text_box> :first-child {
                margin-top: 50%;
            }
        }

        /* @media only screen and (min-width: 800px) and (max-width: 1000){
                #text_box> :first-child {
                    margin-top: 33%;
                }
            } */

        #text_box p {
            margin-left: 10%;
        }

        .right_pic {
            width: 50%;
            background-image: url("{{ asset('assets/images/anim_right4_crop.jpg') }}");
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            right: -100%;
            position: absolute;
            /* left: 50%; */
            animation: anim6 2s forwards 2s;
        }

        @media only screen and (max-width: 800px) {
            .right_pic {
                background-image: url("{{ asset('assets/images/anim_right4_crop_sm.jpg') }}");
            }
        }

        @media only screen and (max-width: 500px) {
            .right_pic {
                background-image: url("{{ asset('assets/images/anim_right4_crop_xs.jpg') }}");
            }
        }

        @keyframes anim {
            from {
                bottom: -100%;
            }

            to {
                bottom: 0;
            }
        }

        @keyframes anim3 {
            from {
                left: 50%;
                width: 50%;
            }

            to {
                width: 0px;
                left: 50%;
            }
        }

        @keyframes anim2 {
            from {
                left: -100%;
            }

            to {
                left: 0;
            }
        }

        @keyframes anim4 {
            from {
                top: -100%;
            }

            to {
                top: 0;
            }
        }

        @keyframes anim5 {
            from {
                margin-top: 0;
            }

            to {
                margin-top: 100px;
            }
        }

        @keyframes anim6 {
            from {
                right: -100%;
            }

            to {
                right: 0;
            }
        }

    </style>
</head>

<body>
    <div class="navbar">
        <a href="#about" target="_self" rel="noopener noreferrer">ABOUT US</a>
        <a href="{{ route('products.index') }}" target="_self" rel="noopener noreferrer">PRODUCTS</a>
        <a href="{{ route('contact') }}" target="_self" rel="noopener noreferrer">CONTACT</a>
        @if (Route::has('login'))
            <div class="position-absolute right-0 px-3 py-4" id="login">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <div class="up">
        <div id="picture_box">

        </div>
        <div id="text_box">
            <p class="text-center mb-xl-5">CONNECT TO</p>
            <p class="mt-4 text-center">THE FUTURE</p>
            <!-- <div id="sub_text">
                    <p>For law </p>
                    <p>professionals</p>
                    <p> and more</p>
                </div> -->
        </div>
        <div class="right_pic"></div>
    </div>
    <div class="container-fluid p-2 bg-white mt-2 mb-2">
        <div class="row" id="about">
            <img class="col-lg-4 col-sm-12" src="{{ asset('assets/images/anim_right.jpg') }}" alt="picture">
            <p class="col-lg-8 col-sm-12" style="font-family: 'Courier New', Courier, monospace; font-weight: bold">Here
                at LegalConnect we develop websites and applications with the client's needs in mind first. Having great
                experience as a private lawyer and being able to fully understand the tech needs of lawyers and other
                independent proffesionals, we strive to provide the best solution for each of your requests and model
                our products on your specific needs. This is why, we encourage our clients to contact us and let us know
                what they need in reality and turn those needs and requests into userfriendly code. Feel free to browse
                our products and pick what you think is best suited for you and, if you cannot find what you need among
                our products, feel free to contact us and we will provide a custom product fitted to your needs.</p>
        </div>
    </div>
</body>

</html>
