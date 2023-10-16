let menubar = document.getElementById('toggle');
let closer = document.getElementById('close');
let sidebar = document.getElementById('sidebar');
let list = document.querySelector('ul');


menubar.onclick = function(){
    sidebar.style.display = "inline-block";
    sidebar.style.position = 'fixed';
    sidebar.style.height = '100vh';
    sidebar.style.paddingTop = '10px';
    sidebar.style.overflowY = 'hidden';
    // sidebar.style.overflowx = 'hidden';
    sidebar.style.width = '80px';
    list.style.marginTop = '25px';
    menubar.style.display = 'none';
    closer.style.display = 'block';
    closer.style.paddingLeft = '15px';
    // closer.style.paddingLeft = '30px';
}
closer.onclick = function(){
    sidebar.style.display = "none"; 
    menubar.style.display = 'block';
    closer.style.display = 'none';
}
