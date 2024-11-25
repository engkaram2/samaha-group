{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8" />--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1" />--}}
{{--    <title>Firebase RealTime Chat</title>--}}
{{--    <link rel="stylesheet" href="./index.css">--}}
{{--    <style>--}}
{{--        body {--}}
{{--            background-color: #f3f2f3;--}}
{{--            margin: 0;--}}
{{--            padding: 0;--}}
{{--        }--}}

{{--        header {--}}
{{--            text-align: center;--}}
{{--        }--}}

{{--        #messages{--}}
{{--            padding-bottom: 30%;--}}
{{--        }--}}

{{--        li {--}}
{{--            list-style-type: none;--}}
{{--            margin-bottom: 10px;--}}
{{--            background-color: #6929ca;--}}
{{--            padding: 5px;--}}
{{--            border-radius: 10px;--}}
{{--            color: white;--}}
{{--            width: 50%;--}}
{{--        }--}}

{{--        li span {--}}
{{--            font-style: italic;--}}
{{--            font-weight: bolder;--}}
{{--            color: #b5b0b9;--}}
{{--        }--}}

{{--        #chat {--}}
{{--            width: 80%;--}}
{{--            margin: auto;--}}
{{--        }--}}

{{--        #message-form {--}}
{{--            text-align: center;--}}
{{--            position: fixed;--}}
{{--            left: 0;--}}
{{--            bottom: 0;--}}
{{--            width: 100%;--}}
{{--            background-color: #b7b5b9;--}}
{{--        }--}}

{{--        input {--}}
{{--            width: 70%;--}}
{{--            height: 30px;--}}
{{--        }--}}

{{--        button {--}}
{{--            width: 25%;--}}
{{--            height: 38px;--}}
{{--        }--}}

{{--        .sent {--}}
{{--            text-align: right;--}}
{{--            background-color: #a79cb3;--}}
{{--            margin-left: 50%;--}}
{{--        }--}}

{{--        .sent span {--}}
{{--            margin-left: 5px;--}}
{{--            color: #6929ca;--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<header>--}}
{{--    <h2>Firebase RealTime Chat</h2>--}}
{{--</header>--}}

{{--<div id="chat">--}}
{{--    <!-- messages will display here -->--}}
{{--    <ul id="messages"></ul>--}}

{{--    <!-- form to send message -->--}}
{{--    <form id="message-form">--}}
{{--        <input id="message-input" type="text" />--}}
{{--        <button id="message-btn" type="submit">Send</button>--}}
{{--    </form>--}}
{{--</div>--}}
{{--<!-- scripts -->--}}
{{--<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>--}}
{{--<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-database.js"></script>--}}
{{--<script src="index.js"></script>--}}

{{--<script >--}}




{{--        const firebaseConfig = {--}}
{{--            apiKey: "AIzaSyBZaOQlmABvXFK3Q87AKwE5tIGPsyWy5-w",--}}
{{--            authDomain: "samaha-d3211.firebaseapp.com",--}}
{{--            projectId: "samaha-d3211",--}}
{{--            storageBucket: "samaha-d3211.appspot.com",--}}
{{--            messagingSenderId: "592415085289",--}}
{{--            appId: "1:592415085289:web:c20f762514ee5bff1b9678",--}}
{{--            measurementId: "G-7WHXC8NCGL"--}}
{{--        };--}}


{{--        firebase.initializeApp(firebaseConfig);--}}

{{--        const db = firebase.database();--}}

{{--        const username = prompt("Please Tell Us Your Name");--}}

{{--        function sendMessage(e) {--}}
{{--            e.preventDefault();--}}

{{--            // get values to be submitted--}}
{{--            const timestamp = Date.now();--}}
{{--            const messageInput = document.getElementById("message-input");--}}
{{--            const message = messageInput.value;--}}

{{--            // clear the input box--}}
{{--            messageInput.value = "";--}}

{{--            //auto scroll to bottom--}}
{{--            document--}}
{{--                .getElementById("messages")--}}
{{--                .scrollIntoView({ behavior: "smooth", block: "end", inline: "nearest" });--}}

{{--            // create db collection and send in the data--}}
{{--            db.ref("messages/" + timestamp).set({--}}
{{--                username,--}}
{{--                message,--}}
{{--            });--}}
{{--        }--}}

{{--        const fetchChat = db.ref("messages/");--}}

{{--        fetchChat.on("child_added", function (snapshot) {--}}
{{--            const messages = snapshot.val();--}}
{{--            const message = `<li class=${--}}
{{--                username === messages.username ? "sent" : "receive"--}}
{{--            }><span>${messages.username}: </span>${messages.message}</li>`;--}}
{{--            // append the message on the page--}}
{{--            document.getElementById("messages").innerHTML += message;--}}
{{--        });--}}
{{--</script>--}}
{{--</body>--}}
{{--</html>--}}
