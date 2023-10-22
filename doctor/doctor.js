let openbtn = document.getElementById('profilearrow');
let closebtn = document.getElementById('outprofile');
let profileboard = document.querySelector('.doctorprofile');

openbtn.onclick = function(){
    profileboard.style.display ='flex';
}
closebtn.onclick = function(){
    profileboard.style.display ='none';
}