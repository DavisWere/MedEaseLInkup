let doctorlog = document.getElementById('doctorlog');
let patientlog = document.getElementById('patientlog');
let stafflog = document.getElementById('stafflog');


let docLogin = document.querySelector('.docLog');
let patientLogin = document.querySelector('.patientLog');
let staffLogin = document.querySelector('.staffLog');


// patient
patientlog.onclick = function(){
    stafflog.style.borderBottom = 'none';
    doctorlog.style.borderBottom = 'none';
    patientlog.style.borderBottom = '3px dotted rgb(8, 13, 80)';
    patientlog.style.fontSize = '30px';
    stafflog.style.fontSize = '22px';
    doctorlog.style.fontSize = '22px';
    staffLogin.style.display = 'none';
    docLogin.style.display = 'none';
    patientLogin.style.display = 'block';
}
// doctor
doctorlog.onclick = function(){
    patientlog.style.borderBottom = 'none';
    stafflog.style.borderBottom = 'none';
    doctorlog.style.borderBottom = '3px dotted rgb(8, 13, 80)';
    doctorlog.style.fontSize = '30px';
    patientlog.style.fontSize = '22px';
    stafflog.style.fontSize = '22px';
    patientLogin.style.display = 'none';
    staffLogin.style.display = 'none';
    docLogin.style.display = 'block';
}
// staff
stafflog.onclick = function(){
    patientlog.style.borderBottom = 'none';
    doctorlog.style.borderBottom = 'none';
    stafflog.style.borderBottom = '3px dotted rgb(8, 13, 80)';
    stafflog.style.fontSize = '30px';
    patientlog.style.fontSize = '22px';
    doctorlog.style.fontSize = '22px';
    patientLogin.style.display = 'none';
    docLogin.style.display = 'none';
    staffLogin.style.display = 'block';
}