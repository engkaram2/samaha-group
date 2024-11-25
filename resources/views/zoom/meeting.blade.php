<!DOCTYPE html>
<html>
    <head>
        <title>Samaha</title>
        <meta charset="utf-8" />
        <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.0.1/css/bootstrap.css" />
        <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.0.1/css/react-select.css" />
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="origin-trial" content="">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            @font-face {
                font-family: Lato;
                src: url('/fonts/Lato-Regular.ttf');
            }
            @font-face {
                font-family: LatoBold;
                src: url('/fonts/Lato-Bold.ttf');
            }
            #hope-nav {
                background-color: #ffffff;
            }
            #zmmtg-root{
                background-color: transparent!important;
            }
            body{
                background-color: transparent!important;

            }
            body:before, body:after {
                content: "";
                position: absolute;
                background-attachment: fixed;
                width: 100%;
                height: 0%;
                left: 0;
                top: 0;
            }
            .loading{
                display: none!important;
            }
            .loading.active {
                display: block!important;
                position: fixed;
                left: 50%;
                top: 50%;
                transform: translateX(-50%);
            }
            .loading img{
                width: 9rem;
                margin: auto;
            }
            .loading h3{
                text-align: center;
                font-size: 18px;
                color: #DB1313;
            }
            #wc-container-left.small {
                width: 100%;
                position: relative;
                float: left;
                -webkit-user-select: none;
                -moz-user-select: none;
                -khtml-user-select: none;
                -ms-user-select: none;
            }
        </style>
        <style>
            .sdk-select {
                height: 34px;
                border-radius: 4px;
            }

            .websdktest button {
                float: right;
                margin-left: 5px;
            }

            #nav-tool {
                margin-bottom: 0px;
                display: none!important;
            }

            #show-test-tool {
                position: absolute;
                top: 100px;
                left: 0;
                display: block;
                z-index: 99999;
            }

            #display_name {
                width: 250px;
            }


            #websdk-iframe {
                width: 700px;
                height: 500px;
                border: 1px;
                border-color: red;
                border-style: dashed;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                left: 50%;
                margin: 0;
            }
            .timer-hide{
                display: none;
            }
            .timer{
                z-index: 100000000000000000000000000;
                position: fixed;
                color: #fff;
                background: #333;
                border-radius: .4em;
                top: 1%;
                left: 47%;
                padding: 0.3em;
                cursor: move;
                min-width: 4.6em;

            }
            .vc-switch{
                display: none!important;
            }
        </style>
        <style>
            #container {
                width: 100%;
                height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                overflow: hidden;
                border-radius: 7px;
                touch-action: none;
                z-index: 1000000210000000;
            }
            #item {
                z-index: 100000000000000000000000000;
                position: fixed;
                color: #fff;
                background: #333;
                border-radius: 0.4em;
                top: 1%;
                left: 47%;
                padding: 0.3em;
                cursor: move;
                min-width: 4.6em;
                touch-action: none;
                user-select: none;
            }
            #item:active {
                background-color: rgba(168, 218, 220, 1.00);
            }
            #item:hover {
                cursor: move;
            }
        </style>
    </head>
    <body>
    <div class="loading active" style="text-align: center">
        <img src="/assets/img/loading/loading3.gif">
        <h3 style="text-align: center;
                    font-size: 24px;
                    font-family:Tahoma,'LatoBold';
                    color: #DB1313;">PREPARING MEETING </h3>
    </div>
    <div id="outerContainer">
        <div id="container">
            <div id="item" class="timer-hide">
                <label id="hours">00</label>:<label id="minutes">00</label>:<label id="seconds">00</label>

            </div>
        </div>
    </div>

    <script src="https://source.zoom.us/2.0.1/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.0.1/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.0.1/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/2.0.1/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/2.0.1/lib/vendor/lodash.min.js"></script>
    <script src="https://source.zoom.us/zoom-meeting-2.0.1.min.js"></script>
    <script src="{{asset('/')}}js/tool.js"></script>
    <script src="{{asset('/')}}js/vconsole.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
{{--    TEST PURPOSE--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jsrsasign/10.8.6/jsrsasign-all-min.js" integrity="sha512-TqJ+2T2XP/TPhXBKqBZQl7KU1Ld3+4V+dY2Afo3hWA4hGfsWvQX28cjGmVMml7kikftO2kgTaGjp++Mejo3Byg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var dragItem = document.querySelector("#item");
        var container = document.querySelector("#container");


        var active = false;
        var currentX;
        var currentY;
        var initialX;
        var initialY;
        var xOffset = 0;
        var yOffset = 0;
        $(window).resize(function() {
            //$("#item").removeAttr('style');
        });


        function dragStart(e) {
            moving=true;
            if (e.type === "touchstart") {
                initialX = e.touches[0].clientX - xOffset;
                initialY = e.touches[0].clientY - yOffset;
            } else {
                initialX = e.clientX - xOffset;
                initialY = e.clientY - yOffset;
            }

            if (e.target === dragItem) {
                active = true;
            }
        }

        function dragEnd(e) {
            initialX = currentX;
            initialY = currentY;
            moving=false;

            active = false;
        }

        function drag(e) {
            if (active) {

                e.preventDefault();

                if (e.type === "touchmove") {
                    currentX = e.touches[0].clientX - initialX;
                    currentY = e.touches[0].clientY - initialY;
                } else {
                    currentX = e.clientX - initialX;
                    currentY = e.clientY - initialY;
                }

                xOffset = currentX;
                yOffset = currentY;

                setTranslate(currentX, currentY, dragItem);
            }
        }

        function setTranslate(xPos, yPos, el) {
            el.style.transform = "translate(" + xPos + "px, " + yPos + "px)";
        }
    </script>

    <script>
        let timeOut=false;
        var canClose=true;


        window.addEventListener('DOMContentLoaded', function(event) {
            console.log('DOM fully loaded and parsed');
            websdkready();
        });
        var timerObj={};
        var totalSeconds = 0;
        var totalMinutes= 0;
        var totalHours= 0;
        window.onbeforeunload = function() {
            return confirm("Do you really want to closeeeee?");
        }
        function detectMob() {
            const toMatch = [
                /Android/i,
                /webOS/i,
                /iPhone/i,
                /iPad/i,
                /iPod/i,
                /BlackBerry/i,
                /Windows Phone/i
            ];

            return toMatch.some((toMatchItem) => {
                return navigator.userAgent.match(toMatchItem);
            });
        }
        if(!detectMob())
            dragElement($(document).find("#item")[0]);
        else{
            container.addEventListener("touchstart", dragStart, false);
            container.addEventListener("touchend", dragEnd, false);
            container.addEventListener("touchmove", drag, false);

            container.addEventListener("mousedown", dragStart, false);
            container.addEventListener("mouseup", dragEnd, false);
            container.addEventListener("mousemove", drag, false);
        }
        $(document).ready(function () {
            $("body").bind("DOMSubtreeModified", function() {
                $(document).find(".zm-btn.zm-btn-legacy.zm-btn--default.zm-btn__outline--blue").on('click',function(){
                    failed($(document).find('.zm-modal-body-content .content').text());
                });
                $(document).find(".zmu-btn.leave-meeting-options__btn.leave-meeting-options__btn--default").on('click',function(){
                    window.onbeforeunload=()=>{}
                    clearInterval(timerObj);
                });
                $(document).find(".zmu-btn.leave-meeting-options__btn.leave-meeting-options__btn--default.leave-meeting-options__btn--danger.zmu-btn--default.zmu-btn__outline--white").on('click',function(){
                    MeetingStartedEnded('end');

                });
            });
            //document.getElementById("user_email").innerText =testTool.b64DecodeUnicode('{{request()->email}}');
            setTimeout(function () {
                $(document).find("#wc-container-left").addClass('small');

            },1000)
            $(document).on('click','.full-screen-widget',function () {
                console.log('clicked max min btn')
                $(document).find("#wc-container-left").toggleClass('small');

            });


        })
        function failed(message) {
            if(timeOut||message.length<1)
                return 0;
            /*switch (message) {
                case 'Signature is invalid':
                    message = "Invalid meeting credentials";
                    break;
                case 'Signature is invalid.':
                    message = "Invalid meeting credentials";
                    break;
                case 'Already has other meetings in progress.':
                    message = "HOPE platform has another meeting in progress. Please try again later";
                    break;
                case 'The meeting number is not found':
                    message = "Invalid meeting credentials";
                    break;
                case 'The meeting number is wrong.':
                    message = "Meeting ID is wrong";
                    break;
                case "Joining meeting timeout.":
                    message = "HOPE platform has another meeting in progress. Please try again later";
                    break;
                case "Meeting ID is wrong":
                    message = "The meeting number is wrong.";
                    break;

            }*/
            window.onbeforeunload=()=>{}
            clearInterval(timerObj);
            //window.location.href ='http://localhost/samaha/public/error?message='+message;
        }
        function websdkready() {
            var testTool = window.testTool;
            // get meeting args from url
            var tmpArgs = testTool.parseQuery();
            console.log('tmpArgs',tmpArgs);
            var meetingConfig = {
               // var API_KEY = "{{env('NEW_ZOOM_APP_KEY')}}";
                //var API_SECRET = "{{env('NEW_ZOOM_APP_SECRET')}}";
                sdkKey: '{{env('ZOOM_SDK_KEY')}}',
                sdkSecret:'{{env('ZOOM_SDK_SECRET')}}',
                apiKey: '{{env('NEW_ZOOM_APP_KEY')}}',
                meetingNumber: tmpArgs.mn,
                userName: (function () {
                    if (tmpArgs.name) {
                        try {
                            return testTool.b64DecodeUnicode(tmpArgs.name);
                        } catch (e) {
                            return tmpArgs.name;
                        }
                    }
                    return (
                        "CDN#" +
                        tmpArgs.version +
                        "#" +
                        testTool.detectOS() +
                        "#" +
                        testTool.getBrowserInfo()
                    );
                })(),
                passWord: tmpArgs.pwd,
                leaveUrl: "http://www.zoom.us",
                role: parseInt(tmpArgs.role, 10),
                userEmail: (function () {
                    try {
                        return testTool.b64DecodeUnicode(tmpArgs.email);
                    } catch (e) {
                        return tmpArgs.email;
                    }
                })(),
                lang: tmpArgs.lang,
                signature: tmpArgs.signature || "",
                china: tmpArgs.china === "1",
            };

            // a tool use debug mobile device
            if (testTool.isMobileDevice()) {
                vConsole = new VConsole();
            }
            console.log('checkSystemRequirements',JSON.stringify(ZoomMtg.checkSystemRequirements()));
            // it's option if you want to change the WebSDK dependency link resources. setZoomJSLib must be run at first
            // ZoomMtg.setZoomJSLib("https://source.zoom.us/2.0.1/lib", "/av"); // CDN version defaul
            if (meetingConfig.china)
            ZoomMtg.setZoomJSLib("https://jssdk.zoomus.cn/2.0.1/lib", "/av"); // china cdn option
            ZoomMtg.preLoadWasm();
            ZoomMtg.prepareJssdk();
            ZoomMtg.leaveMeeting({
                success:function () {
                    window.onbeforeunload=()=>{};
                    clearInterval(timerObj);

                }
            });

            function SDKSignature(key,secret,mn,role)
            {
                iat = Math.round(new Date().getTime() / 1000) - 30
                exp = iat + 60 * 60 * 10
                oHeader = {alg: 'HS256', typ:'JWT'}
                oPayload = {
                    sdkKey : key,
                    appKey : secret,
                    mn : mn, // This Must be MEETING ID from ZOOM
                    role : role,
                    iat: iat,
                    exp:exp,
                    tokenExp: exp,
                }
                const sHeader = JSON.stringify(oHeader);
                const sPayload = JSON.stringify(oPayload);
                signature_new = KJUR.jws.JWS.sign('HS256', sHeader, sPayload,secret )
                return signature_new;
            }



            function beginJoin(signature) {
                $zak = @json($zakToken);
                let zak_token = $zak;

                $zoomUser = @json($zoomEmail);
                let zoom_user_email = $zoomUser;

                $zoomUserID = @json($zoomUserID);
                let zoom_user_id = $zoomUserID;

                ZoomMtg.init({
                    leaveUrl: meetingConfig.leaveUrl,
                    webEndpoint: meetingConfig.webEndpoint,
                    disableCORP: !window.crossOriginIsolated, // default true
                    screenShare:true,
                    // disablePreview: false, // default false
                    success: function () {


                        console.log('USER DATA : ' + zoom_user_id)

                        // console.log("signature", signature);
                        // ZoomMtg.i18n.load(meetingConfig.lang);
                        // ZoomMtg.i18n.reload(meetingConfig.lang);
                        ZoomMtg.join({
                            meetingNumber: meetingConfig.meetingNumber,
                            userName: zoom_user_email,//meetingConfig.userName,
                            userEmail: zoom_user_email,
                            passWord: meetingConfig.passWord,
                            customerKey:'',
                            tk: zak_token,
                            // apiKey: meetingConfig.apiKey,
                            signature: SDKSignature(meetingConfig.sdkKey,meetingConfig.sdkSecret,meetingConfig.meetingNumber,1),
                            //signature:signature,
                            success: function (res) {
                                canClose=false;

                                console.log("join meeting success");
                                $(document).find("#wc-container-left").addClass('small');
                                $(document).find(".zm-btn.zm-btn-legacy.zm-btn--default.zm-btn__outline--blue").on('click',function(){
                                    failed($(document).find('.zm-modal-body-content .content').text());
                                });
                                console.log("get attendeelist");
                                ZoomMtg.getAttendeeslist({});
                                ZoomMtg.getCurrentUser({
                                    success: function (res) {
                                        console.log("success getCurrentUser", res.result.currentUser);
                                    },
                                });
                                ZoomMtg.record({
                                    record: true
                                })
                                ZoomMtg.showRecordFunction({
                                    show: false
                                });
                                document.getElementById("item").classList.remove('timer-hide')
                                document.getElementById("item").classList.add('timer')
                                var minutesLabel = document.getElementById("minutes");
                                var secondsLabel = document.getElementById("seconds");
                                var hoursLabel = document.getElementById("hours");

                                let TimerObject = getTimer({{request()->live_meeting_id}});

                                /*
                                  totalSeconds=TimerObject.seconds;
                                  totalMinutes=TimerObject.minutes;
                                  totalHours=TimerObject.hours;
                                */
                                timerObj=setInterval(setTime, 1000);

                                function setTime()
                                {
                                    ++totalSeconds;
                                    if(totalSeconds>=60){
                                        totalMinutes++;
                                        totalSeconds=0;
                                    }
                                    if(totalMinutes>=60){
                                        totalMinutes=0;
                                        totalHours++;
                                    }
                                    setTimer({{request()->mn}},{
                                        seconds:totalSeconds,
                                        minutes:totalMinutes,
                                        hours:totalHours,
                                    });
                                    secondsLabel.innerHTML = pad(totalSeconds);
                                    minutesLabel.innerHTML = pad(totalMinutes);
                                    hoursLabel.innerHTML = pad(totalHours);

                                }

                                function pad(val)
                                {
                                    var valString = val + "";
                                    if(valString.length < 2)
                                    {
                                        return "0" + valString;
                                    }
                                    else
                                    {
                                        return valString;
                                    }
                                }
                            },
                            error: function (res) {
                                failed(res.errorMessage);
                                console.log('error on join',res);
                            },
                        });
                    },
                    error: function (res) {
                        window.onbeforeunload=()=>{};
                        clearInterval(timerObj);
                        console.log('error on init',res);

                        //console.error(res);
                        failed(res.errorMessage);

                    },
                });

                ZoomMtg.inMeetingServiceListener('onUserJoin', function (data) {
                    console.log('inMeetingServiceListener onUserJoin', data);
                });

                ZoomMtg.inMeetingServiceListener('onUserLeave', function (data) {
                    console.log('inMeetingServiceListener onUserLeave', data);
                });

                ZoomMtg.inMeetingServiceListener('onUserIsInWaitingRoom', function (data) {
                    console.log('inMeetingServiceListener onUserIsInWaitingRoom', data);
                });

                ZoomMtg.inMeetingServiceListener('onMeetingStatus', function (data) {
                    if(data.toString()==='1'){
                        timeOut=true;
                    }
                    else{
                        timeOut=false;
                    }

                    if(data.toString()==='3'){
                        MeetingStartedEnded('end');
                    }
                    console.log('inMeetingServiceListener onMeetingStatus', data);
                });
            }
            console.log('before begin join', meetingConfig);
            beginJoin(meetingConfig.signature);

        };
        function getTimer(meeting_id) {
            var started_at=new Date();
            let result= {};

            if(JSON.parse(window.localStorage.getItem('auth'))==null||JSON.parse(window.localStorage.getItem('auth'))==undefined)
                return started_at;
            const requestOptions = {
                method: "POST",
                body: JSON.stringify({
                    access_token: JSON.parse(window.localStorage.getItem('auth')).auth_user_access_token,
                    meeting_id: meeting_id,
                }),
            };
            fetch(
                "https://hopeplatformeg.com/hope-beta/api/get_single_live_meeting", requestOptions
            ).then((response) => {
                //   console.log('success',response.json());
                if (response.ok) return response.json();
                return response.json().then((json) => {
                    throw json;
                });
            })
                .then((response) => {
                    let meeting=response.meeting;
                    if(meeting.started_at){

                        totalSeconds =meeting.elaspedTime.seconds;
                        totalMinutes=meeting.elaspedTime.minutes;
                        totalHours=meeting.elaspedTime.hours;
                    }else{
                        totalSeconds =meeting.elaspedTime.seconds;
                        totalMinutes=meeting.elaspedTime.minutes;
                        totalHours=meeting.elaspedTime.hours;
                        MeetingStartedEnded('start');
                    }
                    if(meeting.ended_at){
                        totalSeconds =0;
                        totalMinutes=0;
                        totalHours=0;
                        MeetingStartedEnded('start');

                    }
                })
                .catch((error) => {
                    Swal.fire({
                        title: 'HOPE Application',
                        confirmButtonText:'DISMISS',
                        confirmButtonColor:'#696969',
                        text:error.error,
                    }).then(result=>{
                        this.$router.push('/');
                    });

                });
            return result;
        }
        function MeetingStartedEnded(status) {

        }
        function setTimer(meeting_id,timerObj) {
            window.localStorage.setItem(`meeting_${meeting_id}_timer`, JSON.stringify(timerObj));
        }
        function dragElement(elmnt) {
            var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
            if (document.getElementById(elmnt.id + "header")) {
                // if present, the header is where you move the DIV from:
                document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
            } else {
                // otherwise, move the DIV from anywhere inside the DIV:
                elmnt.onmousedown = dragMouseDown;
                elmnt.touchmove = dragMouseDown;
                /*container.addEventListener("touchstart", dragStart, false);
                container.addEventListener("touchend", dragEnd, false);
                container.addEventListener("touchmove", drag, false);

                container.addEventListener("mousedown", dragStart, false);
                container.addEventListener("mouseup", dragEnd, false);
                container.addEventListener("mousemove", drag, false);*/
            }

            function dragMouseDown(e) {
                e = e || window.event;
                e.preventDefault();
                // get the mouse cursor position at startup:
                pos3 = e.clientX;
                pos4 = e.clientY;
                document.onmouseup = closeDragElement;
                // call a function whenever the cursor moves:
                document.onmousemove = elementDrag;
            }

            function elementDrag(e) {
                e = e || window.event;
                e.preventDefault();
                // calculate the new cursor position:
                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;
                // set the element's new position:
                elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
            }

            function closeDragElement() {
                // stop moving when mouse button is released:
                document.onmouseup = null;
                document.onmousemove = null;
            }
        }
    </script>


    </body>

</html>
