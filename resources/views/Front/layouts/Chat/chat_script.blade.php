<!-- firebase js -->
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.13.2/firebase-storage.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>

<script type="text/javascript">

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

    var ticket_id = generateRandomString();
    console.log('jj');

    function generateRandomString() {
        var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        var charLength = chars.length;
        var result = '';
        for (var i = 0; i < 7; i++) {
            // result += chars[rand(0, charLength - 1)];
            result += chars.charAt(Math.floor(Math.random() * charLength));
        }
        return result;
    }


    // Getting all message and listeing real time chat
    var tickett_id =  ticket_id;

    db.collection("users").doc(tickett_id).collection('chats').doc('0').collection('messages').orderBy("created_at").onSnapshot(function (snapshot) {

        snapshot.docChanges().forEach(function (change, ind) {
            var data = change.doc.data();
            // if new message added
            if (change.type == "added") {

                if (data.sender_id == ticket_id) { //Which message i sent

                    var html = ` <div class="chatCard_one">
                    <p> ${data.content} </p>
                </div>`;

                    $('.chat').append(html);

                } else {

                    var html = `<div class="chatCard_one accepted_msg mxST_auto">
                    <p> ${data.content} </p>
                </div>`;

                    $('.chat').append(html);
                }
                if (snapshot.docChanges().length - 1 == ind) { // we will scoll down on last message
                    // auto scroll
                    $(".panel-body").animate({scrollTop: $('.panel-body').prop("scrollHeight")}, 1000);
                }
            }
            if (change.type == "modified") {
            }
            if (change.type == "removed") {

                $("#" + change.doc.id + "-message").html("this message has been deleted")
            }
        })
    })


    // on click function
    $('.send-button').click(function () {

        var tickett_id = ticket_id;
        console.log(ticket_id);
        console.log(1);
        var message = $('#btn-input').val();
        if (message) {
            // insert message
            var dateTime = getCurrentUtcTime();

            sendMessage({
                reciever_id: 0,
                sender_id: tickett_id,
                content: message,
                created_at: dateTime
            })
            $('#btn-input').val("")
        }
    })

    // also we will send message when user enter key
    $('#btn-input').keyup(function (event) {
        // get key code of enter
        if (event.keyCode == 13) { // enter
            var message = $('#btn-input').val();

            if (message) {
                // insert message
                var dateTime = getCurrentUtcTime();

                sendMessage({
                    reciever_id: 0,
                    sender_id: ticket_id,
                    content: message,
                    created_at: dateTime
                })
                $('#btn-input').val("")
            }
        }
        // console.log("Key pressed");
    })

    var ticketAdded = false;   /// AA

    function sendMessage(object) {

        if (ticketAdded == false) {

            db.collection("tickets").add({ticket:ticket_id} ).then(added => {
                console.log("message sent ", added)

                ticketAdded = true;

            }).catch(err => {
                console.err("Error occured", err)
            })
        }

        console.log(object)
        var tickett_id = ticket_id;
        console.log(tickett_id);

        db.collection("users").doc('0').collection('chats').doc(tickett_id).collection('messages').add(object).then(added => {
            console.log("message sent ", added)
        }).catch(err => {
            console.err("Error occured", err)
        })

        db.collection("users").doc(tickett_id).collection('chats').doc('0').collection('messages').add(object).then(added => {
            console.log("message sent ", added)
        }).catch(err => {
            console.err("Error occured", err)
        })
    }

    function getCurrentUtcTime() {

        var dateTime_now = new Date();
        var dateTime = dateTime_now.toISOString();
        return dateTime;
    }

</script>
