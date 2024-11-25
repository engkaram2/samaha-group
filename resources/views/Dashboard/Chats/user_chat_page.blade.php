@extends('Dashboard.layouts.master')
@section('title', trans('back.chat.chats'))
@section('style')
    @include('Dashboard.Chats.chat_css')
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
        <!-- user chat will display here -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-comment"></span> Uer Chat Messages
                    </div>
                    <div class="panel-body">
                        <ul class="chat">
                        </ul>
                    </div>
                    <div class="panel-footer" style="margin-right: 10px; margin-left: 10px;">
                        <div class="input-group">
                            <input id="btn-input" type="text" class="form-control input-sm"
                                   placeholder="Type your message here..."/>
                            <span class="input-group-btn">
                                <button class="btn btn-warning btn-sm send-button m-2" id="btn-chat">
                                    Send</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel-heading" >
               <span class="input-group-btn">
                     <button onclick="deleteTicket('{{ $ticket }}')" class="glyphicon glyphicon-trash btn btn-danger btn-sm send-button m-2"> End conversation</button>
                </span>
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

    {{--    <script type="text/javascript" src="{{'Dashboard/Chats/chat_script.blade.php'}}"></script>--}}
    @include('Dashboard.Chats.chat_script')

    <script>
        function deleteTicket(ticket) {
            var flag = window.confirm("Are you sure to want delete ticket ?")

            if (flag) {
                var ticket_name = db.collection("tickets").doc(ticket).id;
                // db.collection('tickets').doc(ticket);
                // console.log(db.collection("tickets").doc(ticket).id);
                db.collection("tickets").doc(ticket_name).delete();
                window.location.href = "{{route('chats.index')}}";
                console.log("Deleted");
            }
        }
    </script>
@stop
