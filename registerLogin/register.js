let doctor = document.getElementById('doctor');
let patient = document.getElementById('patient');

let docform = document.querySelector('.docReg');
let patientform = document.querySelector('.patientReg');



// Registration forms
doctor.onclick = function(){
    // patientform.style.border = '2px solid red';
    patient.style.borderBottom = 'none';
    doctor.style.borderBottom = '3px dotted rgb(8, 13, 80)';
    doctor.style.fontSize = '25px';
    patient.style.fontSize = '16px';
    patientform.style.display = 'none';
    docform.style.display = 'flex';
}
patient.onclick = function(){
    // patientform.style.border = '2px solid red';
    doctor.style.borderBottom = 'none';
    patient.style.borderBottom = '3px dotted rgb(8, 13, 80)';
    doctor.style.fontSize = '16px';
    patient.style.fontSize = '25px';
    docform.style.display = 'none';
    patientform.style.display = 'block';
}
