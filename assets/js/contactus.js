// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyA-OWm5P_p21_5-Tvn8N0SywFlAvooNZSE",
  authDomain: "virtual-visit-a5382.firebaseapp.com",
  databaseURL: "https://virtual-visit-a5382-default-rtdb.asia-southeast1.firebasedatabase.app",
  projectId: "virtual-visit-a5382",
  storageBucket: "virtual-visit-a5382.appspot.com",
  messagingSenderId: "197095596661",
  appId: "1:197095596661:web:1140e104190d419a9d4e3c",
  measurementId: "G-V5WFQK6QQ4"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
  
  // Refernece contactInfo collections
  let contactInfo = firebase.database().ref("user information");
  
  // Listen for a submit
  document.querySelector(".contact-form").addEventListener("submit", submitForm);
  
  function submitForm(e) {
    e.preventDefault();
  
    //   Get input Values
    let name = document.querySelector(".name").value;
    let email = document.querySelector(".email").value;
    let message=document.querySelector(".message").value;
    console.log(name, email, message);
  
    saveContactInfo(name, email, message);
  
    document.querySelector(".contact-form").reset();
  }
  
  // Save infos to Firebase
  function saveContactInfo(name, email, message) {
    let newContactInfo = contactInfo.push();
  
    newContactInfo.set({
      Name: name,
      Email: email,
      Message: message,
    });
  }