import './bootstrap';


import '../sass/app.scss';

$(document).on('click','.dropdown-toggle',function(e) {
  //handler code here
  $('.dropdown-menu').toggle(".dropdown-menu" );
  
});


//Stripe 

//Firebase
// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional

const fbapikey = proccess.env.FIREBASE_APIKEY

const firebaseConfig = {
  apiKey: fbapikey,
  authDomain: "krochetbykayknits.firebaseapp.com",
  databaseURL: "https://krochetbykayknits-default-rtdb.firebaseio.com",
  projectId: "krochetbykayknits",
  storageBucket: "krochetbykayknits.appspot.com",
  messagingSenderId: "117649532568",
  appId: "1:117649532568:web:1ded6ab6cd224ffc9252ed",
  measurementId: "G-471ZXRWK14"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
