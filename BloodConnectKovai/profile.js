window.addEventListener('load',()=>{
    const healthid = sessionStorage.getItem('healthid');

document.getElementById('t3').textContent = healthid;
})

