var btn_signup_page = document.getElementById('btn_signup_page');

btn_signup_page.addEventListener('click', function(){
    location.href = './signup_success.html';
});


// var user_id = document.getElementById('user_id');
// var user_pw = document.getElementById('user_pw');
// var user_name = document.getElementById('user_name');
// var nickname = document.getElementById('nickname');
// var email = document.getElementById('email');
// var profile_img = document.getElementById('profile_img');
// var btn_signup_page = document.getElementById('btn_signup_page');

// btn_signup_page.addEventListener('click', function(){

//     var formData = new FormData();

//     formData.append('user_id', user_id.value);
//     formData.append('user_pw', user_pw.value);
//     formData.append('user_name', user_name.value);
//     formData.append('nickname', nickname.value);
//     formData.append('email', email.value);

//     if(profile_img.files[0]){
//         formData.append('profile_img', profile_img.files[0]);
//     }

//     fetch('../php/signup.php',{
//         method:'POST',
//         body:formData
//     })
//     .then(function(res){
//         return res.text();
//     })
//     .then(function(text){
//         alert(text);
//     });

// });