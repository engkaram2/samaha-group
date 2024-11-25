{{--@extends('Dashboard.layouts.master')--}}
{{--@section('title', trans('back.chat.chats'))--}}

{{--@section('style')--}}
{{--@stop--}}
{{--@section('file_scripts_2')--}}

{{--    <script type="module" src="{{ asset('firebase_chat.js') }}"></script>--}}


{{--    --}}{{--    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>--}}

{{--    <script>--}}
{{--        $(document).ready(function(){--}}
{{--            firebase.initializeApp({--}}
{{--                apiKey: "AIzaSyBZaOQlmABvXFK3Q87AKwE5tIGPsyWy5-w",--}}
{{--                authDomain: "samaha-d3211.firebaseapp.com",--}}
{{--                projectId: "samaha-d3211",--}}
{{--                storageBucket: "samaha-d3211.appspot.com",--}}
{{--                messagingSenderId: "592415085289",--}}
{{--                appId: "1:592415085289:web:d8c7a6e3a6d54a031b9678",--}}
{{--                measurementId: "G-GFM7YSMMQ8"--}}
{{--            });--}}
{{--            // firebase.analytics();--}}
{{--        });--}}
{{--    </script>--}}
{{--@stop--}}

{{--@section('breadcrumb')--}}
{{--    <div class="breadcrumb-line">--}}
{{--        <ul class="breadcrumb">--}}

{{--            <li class="active">@lang('back.chat.chats')</li>--}}
{{--        </ul>--}}
{{--        @include('Dashboard.layouts.parts.quick-links')--}}
{{--    </div>--}}
{{--@stop--}}

{{--@section('content')--}}
{{--    @include('Dashboard.layouts.parts.validation_errors')--}}

{{--    <!-- Basic datatable -->--}}
{{--    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">--}}

{{--        <div id="chat">--}}
{{--            <!-- messages will display here -->--}}
{{--            <ul id="messages"></ul>--}}

{{--            <!-- form to send message -->--}}
{{--            <form id="message-form">--}}
{{--                <input id="message-input" type="text" />--}}
{{--                <button id="message-btn" type="submit">Send</button>--}}
{{--            </form>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--    <!-- /basic datatable -->--}}

{{--@stop--}}

{{--@section('scripts')--}}



{{--    <!-- scripts -->--}}
{{--    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>--}}
{{--    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>--}}
{{--    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>--}}

{{--    <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-messaging.js"></script>--}}

{{--    <script >--}}
{{--        $(document).ready(function(e){--}}
{{--            // firebase.initializeApp({--}}
{{--            // Your web app's Firebase configuration--}}
{{--            // For Firebase JS SDK v7.20.0 and later, measurementId is optional--}}
{{--            const firebaseConfig = {--}}
{{--                apiKey: "AIzaSyBZaOQlmABvXFK3Q87AKwE5tIGPsyWy5-w",--}}
{{--                authDomain: "samaha-d3211.firebaseapp.com",--}}
{{--                projectId: "samaha-d3211",--}}
{{--                storageBucket: "samaha-d3211.appspot.com",--}}
{{--                messagingSenderId: "592415085289",--}}
{{--                appId: "1:592415085289:web:c20f762514ee5bff1b9678",--}}
{{--                measurementId: "G-7WHXC8NCGL"--}}
{{--            };--}}

{{--            // Initialize Firebase--}}
{{--            const app = initializeApp(firebaseConfig);--}}
{{--            const analytics = getAnalytics(app);--}}
{{--        });--}}

{{--    </script>--}}



{{--    --}}{{----}}{{--<script type="module">--}}
{{--    --}}{{----}}{{--    // Import the functions you need from the SDKs you need--}}
{{--    --}}{{----}}{{--    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-app.js";--}}
{{--    --}}{{----}}{{--    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.1.0/firebase-analytics.js";--}}
{{--    --}}{{----}}{{--    // TODO: Add SDKs for Firebase products that you want to use--}}
{{--    --}}{{----}}{{--    // https://firebase.google.com/docs/web/setup#available-libraries--}}

{{--    --}}{{----}}{{--    // Your web app's Firebase configuration--}}
{{--    --}}{{----}}{{--    // For Firebase JS SDK v7.20.0 and later, measurementId is optional--}}
{{--    --}}{{----}}{{--    const firebaseConfig = {--}}
{{--    --}}{{----}}{{--        apiKey: "AIzaSyBZaOQlmABvXFK3Q87AKwE5tIGPsyWy5-w",--}}
{{--    --}}{{----}}{{--        authDomain: "samaha-d3211.firebaseapp.com",--}}
{{--    --}}{{----}}{{--        projectId: "samaha-d3211",--}}
{{--    --}}{{----}}{{--        storageBucket: "samaha-d3211.appspot.com",--}}
{{--    --}}{{----}}{{--        messagingSenderId: "592415085289",--}}
{{--    --}}{{----}}{{--        appId: "1:592415085289:web:c20f762514ee5bff1b9678",--}}
{{--    --}}{{----}}{{--        measurementId: "G-7WHXC8NCGL"--}}
{{--    --}}{{----}}{{--    };--}}

{{--    --}}{{----}}{{--    // Initialize Firebase--}}
{{--    --}}{{----}}{{--    const app = initializeApp(firebaseConfig);--}}
{{--    --}}{{----}}{{--    const analytics = getAnalytics(app);--}}
{{--    --}}{{----}}{{--</script>--}}





{{--    <script>--}}
{{--    // Retrieve Firebase Messaging object.--}}
{{--    const messaging = firebase.messaging();--}}
{{--    // Add the public key generated from the console here.--}}
{{--    messaging.usePublicVapidKey("BHKW1HXcvs2fHXiTFI484yIsPR_Z7xA_2pCUSQNCYN6oMT09aaQpIgwxaF4q-6GAnSEZ8l7P_QNNrhdd7iZW6P0");--}}

{{--    function sendTokenToServer(fcm_token) {--}}
{{--        const user_id = '{{auth()->guard('admin')->user()->id}}';--}}
{{--        console.log($user_id);--}}
{{--        axios.post('/api/save-token', {--}}
{{--            fcm_token, user_id--}}
{{--        })--}}
{{--            .then(res => {--}}
{{--                console.log(res);--}}
{{--            })--}}
{{--    }--}}
{{--    </script>--}}
{{--@stop--}}

