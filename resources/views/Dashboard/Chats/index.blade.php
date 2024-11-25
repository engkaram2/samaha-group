@extends('Dashboard.layouts.master')
@section('title', trans('back.chat.chats'))
@section('style')
{{--    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"--}}
{{--          id="bootstrap-css">--}}
{{--    <link rel="stylesheet" type="text/css" href="style.css">--}}
{{--    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>--}}
{{--    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>--}}
{{--    <!------ Include the above in your HEAD tag ---------->--}}
@stop
@section('file_scripts_2')
@stop
@section('breadcrumb')
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li class="active">@lang('back.chat.chats')</li>
        </ul>
        @include('Dashboard.layouts.parts.quick-links')
    </div>
@stop

@section('content')
    @include('Dashboard.layouts.parts.validation_errors')

    <!-- Basic datatable -->
    <div class="panel panel-flat" dir="{{ direction() }}" style="margin: 20px;">
        <!-- Tickets will display here -->
        <div class="row">
            <div class="col-md-11">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-comment"></span> All Tickets
                    </div>
                    <div class="panel-body">
                        <ul class="all_tickets">
                        </ul>
                    </div>
                    <div class="panel-footer">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /basic datatable -->

@stop

@section('scripts')
    <!-- firebase js -->
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-storage.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
            crossorigin="anonymous"></script>
    <!--    <script type="text/javascript" src="script_all_tickets.js"></script>-->
    <script>
        var firebaseConfig = {

            apiKey: "AIzaSyBZaOQlmABvXFK3Q87AKwE5tIGPsyWy5-w",
            authDomain: "samaha-d3211.firebaseapp.com",
            projectId: "samaha-d3211",
            storageBucket: "samaha-d3211.appspot.com",
            messagingSenderId: "592415085289",
            appId: "1:592415085289:web:c20f762514ee5bff1b9678",
            measurementId: "G-7WHXC8NCGL"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        var db = firebase.firestore();

        console.log("Firebase connected");

        // Getting all message and listeing real time chat
        {{--db.collection('users').doc('0').collection('chats').onSnapshot(function (snapshot) {--}}
        {{--    console.log(snapshot);--}}
        {{--    var html =--}}
        {{--        `<li class="right clearfix">--}}

        {{--            <div class="chat-body clearfix">--}}
        {{--            <a href="{{route('user_chat')}}" target="_blank">--}}
        {{--                <p  style="background-color: cornflowerblue;" >--}}
        {{--                    ${snapshot}--}}
        {{--                </p>--}}
        {{--                </a>--}}
        {{--            </div>--}}
        {{--        </li>`;--}}

        {{--    $('.all_tickets').append(html);--}}
        {{--})--}}


        // Getting all message and listeing real time chat
        db.collection('tickets').onSnapshot(function (snapshot) {
            snapshot.docChanges().forEach(function (change, ind) {
                var data = change.doc.data();
                // if new ticket added
                if (change.type == "added") {
                    var url1 = "{{url('dashboard/user_chat')}}"+"/"+data.ticket+"/"+change.doc.id;
                    var html =
                        `<li class="right clearfix">
                   <span class="chat-img pull-left">
                        <img src="http://placehold.it/50/55C1E7/fff&text=New Ticket " alt="User Avatar" class="img-circle" />
                    </span>
                    <div class="chat-body clearfix">

                      <a href="${url1}">
                       <p id="${change.doc.id}-ticket" >
                              ${data.ticket}
                        </p>
                        </a>
                    </div>
                </li>`;

                    $('.all_tickets').append(html);


                    if (snapshot.docChanges().length - 1 == ind) { // we will scoll down on last message
                        // auto scroll
                        $(".panel-body").animate({scrollTop: $('.panel-body').prop("scrollHeight")}, 1000);
                    }
                }

            })

        })
    </script>
@stop
