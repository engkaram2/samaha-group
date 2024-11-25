{{--<!DOCTYPE html>--}}
{{--<html>--}}

{{--<head>--}}
{{--    <title>Samaha</title>--}}
{{--    <meta charset="utf-8" />--}}
{{--    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.0.1/css/bootstrap.css" />--}}
{{--    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.0.1/css/react-select.css" />--}}
{{--    <meta name="format-detection" content="telephone=no">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">--}}
{{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
{{--    <style>--}}
{{--        @font-face {--}}
{{--            font-family: Lato;--}}
{{--            src: url('/fonts/Lato-Regular.ttf');--}}
{{--        }--}}
{{--        @font-face {--}}
{{--            font-family: LatoBold;--}}
{{--            src: url('/fonts/Lato-Bold.ttf');--}}
{{--        }--}}
{{--        #hope-nav {--}}
{{--            background-color: #ffffff;--}}
{{--        }--}}
{{--        #zmmtg-root{--}}
{{--            background-color: transparent!important;--}}
{{--        }--}}
{{--        body{--}}
{{--            background-color: transparent!important;--}}
{{--        }--}}
{{--        body:before, body:after {--}}
{{--            content: "";--}}
{{--            position: absolute;--}}
{{--            background-attachment: fixed;--}}
{{--            width: 100%;--}}
{{--            height: 0%;--}}
{{--            left: 0;--}}
{{--            top: 0;--}}
{{--        }--}}
{{--        .loading{--}}
{{--            display: none!important;--}}
{{--        }--}}
{{--        .loading.active {--}}
{{--            display: block!important;--}}
{{--            position: fixed;--}}
{{--            left: 50%;--}}
{{--            top: 50%;--}}
{{--            transform: translateX(-50%);--}}
{{--        }--}}
{{--        .loading img{--}}
{{--            width: 9rem;--}}
{{--            margin: auto;--}}
{{--        }--}}
{{--        .loading h3{--}}
{{--            text-align: center;--}}
{{--            font-size: 18px;--}}
{{--            color: #DB1313;--}}
{{--        }--}}

{{--    </style>--}}
{{--    <style>--}}
{{--        .sdk-select {--}}
{{--            height: 34px;--}}
{{--            border-radius: 4px;--}}
{{--        }--}}

{{--        .websdktest button {--}}
{{--            float: right;--}}
{{--            margin-left: 5px;--}}
{{--        }--}}

{{--        #nav-tool {--}}
{{--            margin-bottom: 0px;--}}
{{--            display: none!important;--}}
{{--        }--}}

{{--        #show-test-tool {--}}
{{--            position: absolute;--}}
{{--            top: 100px;--}}
{{--            left: 0;--}}
{{--            display: block;--}}
{{--            z-index: 99999;--}}
{{--        }--}}

{{--        #display_name {--}}
{{--            width: 250px;--}}
{{--        }--}}
{{--        #websdk-iframe {--}}
{{--            width: 700px;--}}
{{--            height: 500px;--}}
{{--            border: 1px;--}}
{{--            border-color: red;--}}
{{--            border-style: dashed;--}}
{{--            position: fixed;--}}
{{--            top: 50%;--}}
{{--            left: 50%;--}}
{{--            transform: translate(-50%, -50%);--}}
{{--            left: 50%;--}}
{{--            margin: 0;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}

{{--<body>--}}

{{--<div class="loading active " style="text-align: center">--}}
{{--    <img src="/assets/img/loading/loading3.gif">--}}
{{--    <img class="" width="150" src="{{ asset('logo/samaha') }}/translation.png"/>--}}

{{--    <h3 style="text-align: center;--}}
{{--                font-size: 24px;--}}
{{--                font-family:Tahoma,'LatoBold';--}}
{{--                color: #DB1313;">PREPARING MEETING</h3>--}}
{{--</div>--}}
{{--<nav id="nav-tool" class="navbar navbar-inverse navbar-fixed-top d-none">--}}
{{--    <div class="container">--}}
{{--        <div class="navbar-header">--}}
{{--            <a class="navbar-brand" href="#">Zoom Web ==== SDK====</a>--}}
{{--        </div>--}}
{{--        <div id="navbar" class="websdktest">--}}
{{--            <form class="navbar-form navbar-right" id="meeting_form">--}}
{{--                <div class="form-group">--}}
{{--                    <input readonly type="hidden" name="display_name" id="display_name" value="{{request()->email!=''?request()->email:'2.0.1#CDN'}}" maxLength="100"--}}
{{--                           placeholder="Name" class="form-control" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input readonly name="meeting_number" id="meeting_number" value="{{$meeting_id}}" maxLength="200"--}}
{{--                           style="width:150px" placeholder="Meeting Number" class="form-control" required>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input readonly name="meeting_pwd" id="meeting_pwd" value="{{$password}}" style="width:150px"--}}
{{--                           maxLength="32" placeholder="Meeting Password" class="form-control">--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input readonly name="meeting_email" id="meeting_email" value="{{request()->email}}" style="width:150px"--}}
{{--                           maxLength="32" placeholder="Email option" class="form-control">--}}
{{--                </div>--}}

{{--                <div style="display: none" class="form-group">--}}
{{--                    <select id="meeting_role" class="sdk-select">--}}
{{--                        <option value=0>Attendee</option>--}}
{{--                        <option selected value=1>Host</option>--}}
{{--                        <option value=5>Assistant</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div  style="display: none" class="form-group">--}}
{{--                    <select id="meeting_china" class="sdk-select">--}}
{{--                        <option selected value=0>Global</option>--}}
{{--                        <option value=1>China</option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div  style="display: none" class="form-group">--}}
{{--                    <select id="meeting_lang" class="sdk-select">--}}
{{--                        <option selected value="en-US">English</option>--}}
{{--                        <option value="de-DE">German Deutsch</option>--}}
{{--                        <option value="es-ES">Spanish Español</option>--}}
{{--                        <option value="fr-FR">French Français</option>--}}
{{--                        <option value="jp-JP">Japanese 日本語</option>--}}
{{--                        <option value="pt-PT">Portuguese Portuguese</option>--}}
{{--                        <option value="ru-RU">Russian Русский</option>--}}
{{--                        <option value="zh-CN">Chinese 简体中文</option>--}}
{{--                        <option value="zh-TW">Chinese 繁体中文</option>--}}
{{--                        <option value="ko-KO">Korean 한국어</option>--}}
{{--                        <option value="vi-VN">Vietnamese Tiếng Việt</option>--}}
{{--                        <option value="it-IT">Italian italiano</option>--}}
{{--                    </select>--}}
{{--                </div>--}}

{{--                <input type="hidden" value="" id="copy_link_value" />--}}
{{--                <button type="submit" class="btn btn-primary" id="join_meeting">Join</button>--}}
{{--                <button type="submit" class="btn btn-primary" id="clear_all">Clear</button>--}}
{{--                <button type="button" link="" onclick="window.copyJoinLink('#copy_join_link')"--}}
{{--                        class="btn btn-primary" id="copy_join_link">Copy Direct join link</button>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--        <!--/.navbar-collapse -->--}}
{{--    </div>--}}
{{--</nav>--}}


{{--<div id="show-test-tool">--}}
{{--    <button style="display: none!important;" type="submit" class="d-none btn btn-primary" id="show-test-tool-btn"--}}
{{--            title="show or hide top test tool">Show</button>--}}
{{--</div>--}}
{{--<script>--}}

{{--    document.getElementById('show-test-tool-btn').addEventListener("click", function (e) {--}}
{{--        var textContent = e.target.textContent;--}}
{{--        if (textContent === 'Show') {--}}
{{--            document.getElementById('nav-tool').style.display = 'block';--}}
{{--            document.getElementById('show-test-tool-btn').textContent = 'Hide';--}}
{{--        } else {--}}
{{--            document.getElementById('nav-tool').style.display = 'none';--}}
{{--            document.getElementById('show-test-tool-btn').textContent = 'Show';--}}
{{--        }--}}
{{--    });--}}

{{--</script>--}}


{{--<script src="https://source.zoom.us/2.13.0/lib/vendor/react.min.js"></script>--}}
{{--<script src="https://source.zoom.us/2.13.0/lib/vendor/react-dom.min.js"></script>--}}
{{--<script src="https://source.zoom.us/2.13.0/lib/vendor/redux.min.js"></script>--}}
{{--<script src="https://source.zoom.us/2.13.0/lib/vendor/redux-thunk.min.js"></script>--}}
{{--<script src="https://source.zoom.us/2.13.0/lib/vendor/lodash.min.js"></script>--}}
{{--<script src="https://source.zoom.us/zoom-meeting-2.13.0.min.js"></script>--}}


{{--<script src="{{asset('/')}}js/tool.js"></script>--}}
{{--<script src="{{asset('/')}}js/vconsole.min.js"></script>--}}
{{--<script >--}}
{{--    window.addEventListener('DOMContentLoaded', function(event) {--}}
{{--        console.log('DOM fully loaded and parsed');--}}
{{--        websdkready();--}}
{{--    });--}}

{{--    function websdkready() {--}}
{{--        var testTool = window.testTool;--}}
{{--        if (testTool.isMobileDevice()) {--}}
{{--            vConsole = new VConsole();--}}
{{--        }--}}
{{--        console.log("checkSystemRequirements");--}}
{{--        console.log(JSON.stringify(ZoomMtg.checkSystemRequirements()));--}}

{{--        // it's option if you want to change the WebSDK dependency link resources. setZoomJSLib must be run at first--}}
{{--        // if (!china) ZoomMtg.setZoomJSLib('https://source.zoom.us/2.13.0/lib', '/av'); // CDN version default--}}
{{--        // else ZoomMtg.setZoomJSLib('https://jssdk.zoomus.cn/2.13.0/lib', '/av'); // china cdn option--}}
{{--        // ZoomMtg.setZoomJSLib('http://localhost:9999/node_modules/@zoomus/websdk/dist/lib', '/av'); // Local version default, Angular Project change to use cdn version--}}
{{--        ZoomMtg.preLoadWasm(); // pre download wasm file to save time.--}}

{{--        // var CLIENT_ID = "YOUR_CLIENT_ID_OR_SDK_KEY";--}}
{{--        var CLIENT_ID = "HzE13xHYTl-T_C3ybEjZPQ";--}}
{{--        /**--}}
{{--         * NEVER PUT YOUR ACTUAL SDK SECRET OR CLIENT SECRET IN CLIENT SIDE CODE, THIS IS JUST FOR QUICK PROTOTYPING--}}
{{--         * The below generateSignature should be done server side as not to expose your SDK SECRET in public--}}
{{--         * You can find an example in here: https://developers.zoom.us/docs/meeting-sdk/auth/#signature--}}
{{--         */--}}
{{--            // var CLIENT_SECRET = "YOUR_CLIENT_SECRET_OR_SDK_SECRET";--}}
{{--        var CLIENT_SECRET = "O9xQV0ECdYFTXq7XkrjmLDabLLXylgqk2krl";--}}

{{--        // some help code, remember mn, pwd, lang to cookie, and autofill.--}}
{{--        document.getElementById("display_name").value =--}}
{{--            "CDN" +--}}
{{--            ZoomMtg.getWebSDKVersion()[0] +--}}
{{--            testTool.detectOS() +--}}
{{--            "#" +--}}
{{--            testTool.getBrowserInfo();--}}
{{--        document.getElementById("meeting_number").value = testTool.getCookie(--}}
{{--            "meeting_number"--}}
{{--        );--}}
{{--        document.getElementById("meeting_pwd").value = testTool.getCookie(--}}
{{--            "meeting_pwd"--}}
{{--        );--}}
{{--        if (testTool.getCookie("meeting_lang"))--}}
{{--            document.getElementById("meeting_lang").value = testTool.getCookie(--}}
{{--                "meeting_lang"--}}
{{--            );--}}

{{--        document--}}
{{--            .getElementById("meeting_lang")--}}
{{--            .addEventListener("change", function (e) {--}}
{{--                testTool.setCookie(--}}
{{--                    "meeting_lang",--}}
{{--                    document.getElementById("meeting_lang").value--}}
{{--                );--}}
{{--                testTool.setCookie(--}}
{{--                    "_zm_lang",--}}
{{--                    document.getElementById("meeting_lang").value--}}
{{--                );--}}
{{--            });--}}
{{--        // copy zoom invite link to mn, autofill mn and pwd.--}}
{{--        document--}}
{{--            .getElementById("meeting_number")--}}
{{--            .addEventListener("input", function (e) {--}}
{{--                var tmpMn = e.target.value.replace(/([^0-9])+/i, "");--}}
{{--                if (tmpMn.match(/([0-9]{9,11})/)) {--}}
{{--                    tmpMn = tmpMn.match(/([0-9]{9,11})/)[1];--}}
{{--                }--}}
{{--                var tmpPwd = e.target.value.match(/pwd=([\d,\w]+)/);--}}
{{--                if (tmpPwd) {--}}
{{--                    document.getElementById("meeting_pwd").value = tmpPwd[1];--}}
{{--                    testTool.setCookie("meeting_pwd", tmpPwd[1]);--}}
{{--                }--}}
{{--                document.getElementById("meeting_number").value = tmpMn;--}}
{{--                testTool.setCookie(--}}
{{--                    "meeting_number",--}}
{{--                    document.getElementById("meeting_number").value--}}
{{--                );--}}
{{--            });--}}

{{--        document.getElementById("clear_all").addEventListener("click", function (e) {--}}
{{--            testTool.deleteAllCookies();--}}
{{--            document.getElementById("display_name").value = "";--}}
{{--            document.getElementById("meeting_number").value = "";--}}
{{--            document.getElementById("meeting_pwd").value = "";--}}
{{--            document.getElementById("meeting_lang").value = "en-US";--}}
{{--            document.getElementById("meeting_role").value = 0;--}}
{{--            window.location.href = "/index1.blade.php";--}}
{{--        });--}}

{{--        // click join meeting button--}}
{{--        document--}}
{{--            .getElementById("join_meeting")--}}
{{--            .addEventListener("click", function (e) {--}}
{{--                e.preventDefault();--}}
{{--                var meetingConfig = testTool.getMeetingConfig();--}}
{{--                if (!meetingConfig.mn || !meetingConfig.name) {--}}
{{--                    alert("Meeting number or username is empty");--}}
{{--                    return false;--}}
{{--                }--}}


{{--                testTool.setCookie("meeting_number", meetingConfig.mn);--}}
{{--                testTool.setCookie("meeting_pwd", meetingConfig.pwd);--}}

{{--                var signature = ZoomMtg.generateSDKSignature({--}}
{{--                    meetingNumber: meetingConfig.mn,--}}
{{--                    sdkKey: CLIENT_ID,--}}
{{--                    sdkSecret: CLIENT_SECRET,--}}
{{--                    role: meetingConfig.role,--}}
{{--                    success: function (res) {--}}
{{--                        console.log(res.result);--}}
{{--                        meetingConfig.signature = res.result;--}}
{{--                        meetingConfig.sdkKey = CLIENT_ID;--}}
{{--                        var joinUrl = "{{route('zoom.meeting')}}?" + testTool.serialize(meetingConfig);--}}
{{--                        console.log(joinUrl);--}}
{{--                        window.open(joinUrl, "_blank");--}}
{{--                    },--}}
{{--                });--}}
{{--            });--}}

{{--        function copyToClipboard(elementId) {--}}
{{--            var aux = document.createElement("input");--}}
{{--            aux.setAttribute("value", document.getElementById(elementId).getAttribute('link'));--}}
{{--            document.body.appendChild(aux);--}}
{{--            aux.select();--}}
{{--            document.execCommand("copy");--}}
{{--            document.body.removeChild(aux);--}}
{{--        }--}}

{{--        // click copy jon link button--}}
{{--        window.copyJoinLink = function (element) {--}}
{{--            var meetingConfig = testTool.getMeetingConfig();--}}
{{--            if (!meetingConfig.mn || !meetingConfig.name) {--}}
{{--                alert("Meeting number or username is empty");--}}
{{--                return false;--}}
{{--            }--}}
{{--            var signature = ZoomMtg.generateSDKSignature({--}}
{{--                meetingNumber: meetingConfig.mn,--}}
{{--                sdkKey: CLIENT_ID,--}}
{{--                sdkSecret: CLIENT_SECRET,--}}
{{--                role: meetingConfig.role,--}}
{{--                success: function (res) {--}}
{{--                    console.log(res.result);--}}
{{--                    meetingConfig.signature = res.result;--}}
{{--                    meetingConfig.sdkKey = CLIENT_ID;--}}
{{--                    var joinUrl = "{{route('zoom.meeting')}}?" + testTool.serialize(meetingConfig);--}}

{{--                    document.getElementById('copy_link_value').setAttribute('link', joinUrl);--}}
{{--                    copyToClipboard('copy_link_value');--}}

{{--                },--}}
{{--            });--}}
{{--        };--}}

{{--    }--}}

{{--</script>--}}
{{--</body>--}}

{{--</html>--}}



{{--https://zoom.us/meeting#/previous--}}
{{--https://devsupport.zoom.us/hc/en-us/articles/360060333111-How-to-embed-Zoom-into-a-website--}}
{{--https://developers.zoom.us/docs/meeting-sdk/web/--}}
