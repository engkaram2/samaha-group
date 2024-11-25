<script src="{{asset('Front/assets')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('Front/assets')}}/js/slick.min.js"></script>
<script src="{{asset('Front/assets')}}/js/jquery.fancybox.min.js"></script>
<script src="{{asset('Front/assets')}}/js/popper.min.js"></script>
<script src="{{asset('Front/assets')}}/js/bootstrap.min.js"></script>
<script src="{{asset('Front/assets')}}/js/main.js"></script>
<script src="{{asset('Front/assets')}}/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script>
    $(document).ready(function(e){
        // firebase.initializeApp({
        //     apiKey: "AIzaSyBFbtTK5VtTf6IlkBNefUsKgOe_kSJyicE",
        //     authDomain: "mzadat-3d599.firebaseapp.com",
        //     projectId: "mzadat-3d599",
        //     storageBucket: "mzadat-3d599.appspot.com",
        //     messagingSenderId: "291352482082",
        //     appId: "1:291352482082:web:0a3903fa1e9464e27c557b",
        //     measurementId: "G-GR7JYH9JGH"
        // });
        //
        // firebase.analytics();
        //
        // const messaging = firebase.messaging();
        //
        // messaging.usePublicVapidKey("BD4R4MG05HegdKE-gLIGnxHL2_Jq1Axi1PcUSvJVZNobsyScy2YZlci2XzqFvzzB4Dv1-3sYbGgRJ0ub8UJkyTw");
        //
        // Notification.requestPermission().then((permission) => {
        //     if (permission === 'granted') {
        //         console.log('Notification permission granted.');
        //     } else {
        //         console.log('Unable to get permission to notify.');
        //     }
        // });
        //
        // lightbox.option({
        //     resizeDuration: 100,
        //     fadeDuration: 300,
        //     fitImagesInViewport: true,
        // });
// ======================== saveBtn disabled ============
        let saveBtn = $('#save-form-btn');
        let registerForm = $('#submitted-form');

        registerForm.on('submit', function(e){
            saveBtn.attr('disabled', 'true');
        });
// ====================================

    });
</script>

