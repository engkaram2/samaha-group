// // Import the functions you need from the SDKs you need
// import { initializeApp } from "firebase/app";
// // import { getAnalytics } from "firebase/analytics";
// import { getFirestore } from "firebase/firestore";
//
// const firebaseApp =initializeApp( {
//     apiKey: "AIzaSyBZaOQlmABvXFK3Q87AKwE5tIGPsyWy5-w",
//     authDomain: "samaha-d3211.firebaseapp.com",
//     projectId: "samaha-d3211",
//     storageBucket: "samaha-d3211.appspot.com",
//     messagingSenderId: "592415085289",
//     appId: "1:592415085289:web:c20f762514ee5bff1b9678",
//     measurementId: "G-7WHXC8NCGL"
// });
//
// // Initialize Firebase
// const app = initializeApp(firebaseConfig);
// // const firestore = initializeFirestore(firebaseApp);
// // const analytics = getAnalytics(app);
//
// const firestore_db = getFirestore();
//
// const docRef = firestore_db.collection('users').doc('chat');
//
// await docRef.set({
//     message: 'hello',
// });
//
// const snapshot = await db.collection('users').get();
// snapshot.forEach((doc) => {
//     console.log(doc.id, '=>', doc.data());
// });
//
//
// alert('hello world');
