{{--@extends('Front.layouts.legal.master')--}}
{{--@section('title', trans('back.chat_page'))--}}
{{--@section('style')--}}
{{--@stop--}}
{{--@include('front.layouts.splash')--}}
{{--@section('content')--}}
{{--    <!--start main section-->--}}
{{--    <section class="innerNEWs_section">--}}
{{--        <div class="welcome_section">--}}
{{--            <div class="container welcmInner_container pxLG-0">--}}
{{--                <h3 class="wow fadeInDown" data-wow-duration="1.3s" data-wow-offset="100" data-wow-delay="1s"> Chat with--}}
{{--                    us </h3>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <h3>{{$id}}</h3>--}}
{{--    <section class="contact_section secPadding">--}}
{{--        <div class="container pxLG-0">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-lg-6 col-xl-7">--}}
{{--                    <div class="about_desWrap">--}}
{{--                        <span class="smOffer myFlex__center"> Chat with us </span>--}}
{{--                        <h3> how we can <span> help you? </span></h3>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <div class="panel panel-primary">--}}
{{--                                    <div class="panel-heading">--}}
{{--                                        <span class="glyphicon glyphicon-comment"></span> Uer Chat Messages--}}
{{--                                    </div>--}}
{{--                                    <br>--}}
{{--                                    <div class="panel-body">--}}
{{--                                        <ul class="chat">--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    --}}{{--                                    <div class="panel-footer" style="margin-right: 10px; margin-left: 10px;">--}}
{{--                                    --}}{{--                                        <div class="input-group">--}}
{{--                                    --}}{{--                                            <input id="btn-input" type="text" class="form-control input-sm"--}}
{{--                                    --}}{{--                                                   placeholder="Type your message here..."/>--}}
{{--                                    --}}{{--                                            <span class="input-group-btn">--}}
{{--                                    --}}{{--                                             <button class="btn btn-warning btn-sm send-button m-2" id="btn-chat">Send</button>--}}
{{--                                    --}}{{--                                          </span>--}}
{{--                                    --}}{{--                                        </div>--}}
{{--                                    --}}{{--                                    </div>--}}


{{--                                    <div class="Cform__row">--}}
{{--                                        <input type="text" id="btn-input" class="helpU__input"--}}
{{--                                               placeholder="Type your message here...">--}}
{{--                                        <button type="submit" class="send__btn main__btn send-button" id="btn-chat"><img--}}
{{--                                                src="{{asset('Front/assets')}}/img/directup.svg" alt=""></button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        --}}{{--                        <form action="" class="contactUs__form">--}}
{{--                        --}}{{--                            <input type="hidden" id="randomfield" value="">--}}
{{--                        --}}{{--                            <div class="row">--}}
{{--                        --}}{{--                                <div class="col-md-12">--}}
{{--                        --}}{{--                                    <div class="panel panel-primary">--}}
{{--                        --}}{{--                                        <div class="panel-body">--}}
{{--                        --}}{{--                                            <ul class="chat"></ul>--}}
{{--                        --}}{{--                                        </div>--}}
{{--                        --}}{{--                                    </div>--}}
{{--                        --}}{{--                                </div>--}}
{{--                        --}}{{--                            </div>--}}
{{--                        --}}{{--                            <div class="Cform__row">--}}
{{--                        --}}{{--                                <input type="text" id="btn-input" class="helpU__input" placeholder="Type your message here...">--}}
{{--                        --}}{{--                                <button type="submit" class="send__btn main__btn send-button" id="btn-chat"> <img src="{{asset('Front/assets')}}/img/directup.svg" alt=""> </button>--}}
{{--                        --}}{{--                            </div>--}}
{{--                        --}}{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-12 col-lg-6 col-xl-5">--}}
{{--                    <div class="aboutTH_wrap wow fadeInUp" data-wow-duration="1.3s" data-wow-offset="100">--}}
{{--                        <div class="blueBk_contWrap">--}}
{{--                            <h3> Also You can contact us with </h3>--}}
{{--                            <div class="contBox_flex">--}}
{{--                                <img src="{{asset('Front/assets')}}/img/call1.svg" alt="" class="contBox_Icon">--}}
{{--                                <div class="contBx_fBody">--}}
{{--                                    <h5> call us </h5>--}}
{{--                                    <a href="#" class="contBx__num"> 77 </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="contBox_flex">--}}
{{--                                <img src="{{asset('Front/assets')}}/img/msg1.svg" alt="" class="contBox_Icon">--}}
{{--                                <div class="contBx_fBody">--}}
{{--                                    <h5> write to us </h5>--}}
{{--                                    <a href="#" class="contBx__num"> 77 </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--@stop--}}
{{--@push('scripts')--}}
{{--    --}}{{--    @include('Front.layouts.chat_script',['id'=>$id])--}}
{{--    <!-- firebase js -->--}}
{{--    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>--}}
{{--    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>--}}
{{--    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-firestore.js"></script>--}}
{{--    <script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-storage.js"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"--}}
{{--            integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="--}}
{{--            crossorigin="anonymous"></script>--}}

{{--    <script type="text/javascript">--}}

{{--        var firebaseConfig = {--}}
{{--            apiKey: "AIzaSyBZaOQlmABvXFK3Q87AKwE5tIGPsyWy5-w",--}}
{{--            authDomain: "samaha-d3211.firebaseapp.com",--}}
{{--            projectId: "samaha-d3211",--}}
{{--            storageBucket: "samaha-d3211.appspot.com",--}}
{{--            messagingSenderId: "592415085289",--}}
{{--            appId: "1:592415085289:web:c20f762514ee5bff1b9678",--}}
{{--            measurementId: "G-7WHXC8NCGL"--}}
{{--        };--}}

{{--        // Initialize Firebase--}}
{{--        firebase.initializeApp(firebaseConfig);--}}
{{--        var db = firebase.firestore();--}}
{{--        console.log("Firebase connected");--}}
{{--        var ticket_id = '{{$id}}';--}}
{{--        console.log('jj');--}}
{{--        // insert ticket--}}
{{--        createTicket({--}}
{{--            ticket: '{{$id}}',--}}
{{--        })--}}

{{--        function createTicket(object) {--}}
{{--            console.log(object)--}}
{{--            db.collection("tickets").add(object).then(added => {--}}
{{--                console.log("message sent ", added)--}}
{{--            }).catch(err => {--}}
{{--                console.err("Error occured", err)--}}
{{--            })--}}
{{--        }--}}


{{--        // var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";--}}
{{--        // var chars = "0123456789";--}}
{{--        // var string_length = 8;--}}
{{--        // var randomstring = '';--}}
{{--        // for (var i = 0; i < string_length; i++) {--}}
{{--        //     var rnum = Math.floor(Math.random() * chars.length);--}}
{{--        //     randomstring += chars.substring(rnum, rnum + 1);--}}
{{--        // }--}}
{{--        // document.getElementById('randomfield').value = randomstring;--}}
{{--        // //or even this as you are using JQuery--}}
{{--        // //$('#randomfield').val(randomstring);--}}
{{--        // console.log(randomstring);--}}
{{--        // var tickett_id = randomstring;--}}


{{--        var m = new Date();--}}
{{--        var dateTime =--}}
{{--            m.getUTCFullYear() + "-" +--}}
{{--            ("0" + (m.getMonth() + 1)).slice(-2) + "-" +--}}
{{--            ("0" + m.getDate()).slice(-2) + " " +--}}
{{--            ("0" + (m.getHours() - 1)).slice(-2) + ":" +--}}
{{--            ("0" + m.getMinutes()).slice(-2) + ":" +--}}
{{--            ("0" + m.getSeconds()).slice(-2);--}}

{{--        console.log(dateTime);--}}


{{--        // get current username--}}
{{--        // var name = window.prompt("Enter your name");--}}

{{--        // Getting all message and listeing real time chat--}}

{{--        db.collection("users").doc('{{$id}}').collection('chats').doc('0').collection('messages').orderBy("created_at").onSnapshot(function (snapshot) {--}}

{{--            // db.collection("users").doc('123').collection('chats').doc(0).collection('messages').orderBy("created_at").onSnapshot(function (snapshot) {--}}

{{--            snapshot.docChanges().forEach(function (change, ind) {--}}
{{--                var data = change.doc.data();--}}
{{--                // if new message added--}}
{{--                if (change.type == "added") {--}}

{{--                    if (data.sender_id == '{{$id}}') { //Which message i sent--}}

{{--                        var html = `<li class="left clearfix">--}}
{{--                   <span class="chat-img pull-left">--}}
{{--                        <img src="http://placehold.it/50/55C1E7/fff&text=Me" alt="User Avatar" class="img-circle" />--}}
{{--                    </span>--}}
{{--                    <div class="chat-body clearfix">--}}
{{--                        <p id="${change.doc.id}-message">--}}
{{--                            ${data.content}--}}
{{--                        </p>--}}
{{--                        <div class="header">--}}
{{--                            <small class=" text-muted">--}}
{{--                                <span class="glyphicon glyphicon-time"></span>${data.created_at}</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>`;--}}

{{--                        $('.chat').append(html);--}}

{{--                    } else {--}}

{{--                        var html = `<li class="right clearfix" style="margin-left: 399px;">--}}
{{--                    <span class="chat-img pull-right">--}}
{{--                        <img src="http://placehold.it/50/55C1E7/fff&text=Admin " alt="User Avatar" class="img-circle" />--}}
{{--                    </span>--}}
{{--                    <div class="chat-body clearfix">--}}
{{--                        <p id="${change.doc.id}-message" >--}}
{{--                            ${data.content}--}}
{{--                        </p>--}}
{{--                        <div class="header">--}}
{{--                            <small class=" text-muted">--}}
{{--                                <span class="glyphicon glyphicon-time"></span>${data.created_at}</small>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>`;--}}

{{--                        $('.chat').append(html);--}}
{{--                    }--}}
{{--                    if (snapshot.docChanges().length - 1 == ind) { // we will scoll down on last message--}}
{{--                        // auto scroll--}}
{{--                        $(".panel-body").animate({scrollTop: $('.panel-body').prop("scrollHeight")}, 1000);--}}
{{--                    }--}}
{{--                }--}}
{{--                if (change.type == "modified") {--}}
{{--                }--}}
{{--                if (change.type == "removed") {--}}

{{--                    $("#" + change.doc.id + "-message").html("this message has been deleted")--}}
{{--                }--}}
{{--            })--}}

{{--        })--}}


{{--        // on click function--}}
{{--        $('.send-button').click(function () {--}}
{{--            //  var ticket_id = $('#randomfield').val();--}}
{{--            var ticket_id = '{{$id}}';--}}
{{--            console.log(ticket_id);--}}
{{--            console.log(1);--}}
{{--            var message = $('#btn-input').val();--}}
{{--            if (message) {--}}
{{--                // insert message--}}
{{--                sendMessage({--}}
{{--                    reciever_id: 0,--}}
{{--                    sender_id: ticket_id,--}}
{{--                    content: message,--}}
{{--                    created_at: dateTime--}}
{{--                })--}}
{{--                $('#btn-input').val("")--}}
{{--            }--}}
{{--        })--}}

{{--        // also we will send message when user enter key--}}
{{--        $('#btn-input').keyup(function (event) {--}}
{{--            // get key code of enter--}}
{{--            if (event.keyCode == 13) { // enter--}}
{{--                var message = $('#btn-input').val();--}}

{{--                if (message) {--}}
{{--                    // insert message--}}
{{--                    sendMessage({--}}
{{--                        reciever_id: 0,--}}
{{--                        sender_id: '{{ $id }}',--}}
{{--                        content: message,--}}
{{--                        created_at: dateTime--}}
{{--                    })--}}
{{--                    $('#btn-input').val("")--}}
{{--                }--}}
{{--            }--}}
{{--            // console.log("Key pressed");--}}
{{--        })--}}


{{--        function sendMessage(object) {--}}
{{--            console.log(object)--}}
{{--            // var ticket_id = $('#randomfield').val();--}}
{{--            var ticket_id = '{{$id}}';--}}

{{--            console.log('jj');--}}
{{--            console.log(ticket_id);--}}
{{--            console.log(ticket_id);--}}
{{--            console.log(ticket_id);--}}

{{--            db.collection("users").doc('0').collection('chats').doc(ticket_id).collection('messages').add(object).then(added => {--}}
{{--                console.log("message sent ", added)--}}
{{--            }).catch(err => {--}}
{{--                console.err("Error occured", err)--}}
{{--            })--}}

{{--            db.collection("users").doc(ticket_id).collection('chats').doc('0').collection('messages').add(object).then(added => {--}}
{{--                console.log("message sent ", added)--}}
{{--            }).catch(err => {--}}
{{--                console.err("Error occured", err)--}}
{{--            })--}}
{{--        }--}}
{{--    </script>--}}
{{--@endpush--}}
