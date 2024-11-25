
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


    var date = new Date();
    date.setHours(date.getHours() - 1);
    date.setHours(date.getUTCSeconds() + 1);

    var dateTime = date.toISOString();
    console.log(dateTime); // 2022-06-19T21:00:00.000Z


    // var m = new Date();
    // var dateTimemmmm =
    //     m.getUTCFullYear() + "-" +
    //     ("0" + (m.getUTCMonth() + 1)).slice(-2) + "-" +
    //     ("0" + m.getUTCDate()).slice(-2) + " " +
    //     ("0" + (m.getUTCHours()-1)).slice(-2) + ":" +
    //     ("0" + m.getUTCMinutes()).slice(-2) + ":" +
    //     ("0" + m.getUTCSeconds()).slice(-2);
    // console.log(dateTimemmmm);
    //
    // var d = new Date();
    // var day = d.getUTCHours()-1;
    // console.log(day);

    // var utcStr = new Date().toUTCString();
    // console.log(utcStr); // 👉️ "Mon, 24 Jul 2023 16:46:35 GMT"
    // console.log(utcStr); // 👉️ "Mon, 24 Jul 2023 16:46:35 GMT"
    // console.log(utcStr); // 👉️ "Mon, 24 Jul 2023 16:46:35 GMT"
    //
    // var isoStr = new Date().toISOString();
    // console.log(isoStr);
    // console.log(isoStr);
    // console.log(isoStr);


// get current username
// var name = window.prompt("Enter your name");


// Getting all message and listeing real time chat =====================================
    db.collection("users").doc('0').collection('chats').doc('{{ $id }}').collection('messages').orderBy("created_at").onSnapshot(function(snapshot){

    snapshot.docChanges().forEach(function(change,ind){
        var data = change.doc.data();
        console.log(data.created_at.toLocaleString());
        // if new message added
        if(change.type == "added"){

            if(data.sender_id == 0){ //Which message i sent

                var html = `<div class="col-12">
                                  <div class="chatCard_one">
                                      <p>  ${data.content}</p>
                                  </div>
                                  <span class="msgAbs_span mxEnd_auto"> ${data.created_at.toLocaleString()}</span>
                              </div>`;

                $('.chat').append(html);

            }else{
                var html = `<div class="col-12">
                                    <div class="chatCard_one accepted_msg mxST_auto">
                                        <p> ${data.content} </p>
                                    </div>
                                   <span class="msgAbs_span mxST_auto"> ${data.created_at.toLocaleString()}</span>
                                </div>`;

                $('.chat').append(html);

            }
            if(snapshot.docChanges().length - 1 == ind){ // we will scoll down on last message
                // auto scroll
                $(".panel-body").animate({ scrollTop: $('.panel-body').prop("scrollHeight")}, 1000);
            }
        }

        if(change.type == "modified"){
        }
        if(change.type == "removed"){
            $("#"+change.doc.id+"-message").html("this message has been deleted")
        }
    })
})


// on click function
$('.send-button').click(function(){
    var message = $('#btn-input').val();

    if(message){
        // insert message
        var dateTime = getCurrentUtcTime();
        sendMessage({
            reciever_id: '{{ $id }}',
            sender_id : '0',
            content : message,
            created_at : dateTime
        })

        $('#btn-input').val("")
    }
})

// also we will send message when user enter key
$('#btn-input').keyup(function(event) {
    // get key code of enter
    if(event.keyCode == 13){ // enter
        var message = $('#btn-input').val();

        if(message){
            // insert message
            var dateTime = getCurrentUtcTime();
            sendMessage({
                reciever_id: '{{ $id }}',
                sender_id : '0',
                content : message,
                created_at : dateTime
            })

            $('#btn-input').val("")
        }
    }
    // console.log("Key pressed");
})

    function sendMessage(object){
        console.log(object)
        {{--var ticket_id =  {{ $id }};--}}
        db.collection("users").doc('0').collection('chats').doc("{{ $id }}").collection('messages').add(object).then(added => {
            console.log("message sent ",added)
        }).catch(err => {
            console.err("Error occured",err)
        })
        db.collection("users").doc("{{ $id }}").collection('chats').doc('0').collection('messages').add(object).then(added => {
            console.log("message sent ",added)
        }).catch(err => {
            console.err("Error occured",err)
        })
    }


    function getCurrentUtcTime() {
        // var m = new Date();
        // var dateTime =
        //     m.getUTCFullYear() + "-" +
        //     ("0" + (m.getUTCMonth() + 1)).slice(-2) + "-" +
        //     ("0" + m.getUTCDate()).slice(-2) + " " +
        //     ("0" + (m.getUTCHours()-1)).slice(-2) + ":" +
        //     ("0" + m.getUTCMinutes()).slice(-2) + ":" +
        //     ("0" + m.getUTCSeconds()).slice(-2);
        // console.log(dateTime);
        // return dateTime;

        var date = new Date();
        date.setHours(date.getHours() - 1);

        var dateTime = date.toISOString();
        console.log(dateTime); // 2022-06-19T21:00:00.000Z
        return dateTime;
    }

</script>



{{--<div class="header">--}}
{{--    <small class=" text-muted">--}}
{{--        <span class="glyphicon glyphicon-time"></span>${data.created_at}</small>--}}
{{--</div>--}}


{{--// function sendMessage(object){--}}
{{--//     console.log(object)--}}
{{--//     db.collection("chats").add(object).then(added => {--}}
{{--//         console.log("message sent ",added)--}}
{{--//     }).catch(err => {--}}
{{--//         console.err("Error occured",err)--}}
{{--//     })--}}
{{--//--}}
{{--// }--}}


{{--// function deleteMessage(doc_id){--}}
{{--//     var flag = window.confirm("Are you sure to want delete ?")--}}
{{--//     if(flag){--}}
{{--//--}}
{{--//         db.collection("chats").doc(doc_id).delete();--}}
{{--//         console.log("Deleted");--}}
{{--//     }--}}
{{--// }--}}
