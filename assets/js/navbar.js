const handleNav = document.querySelector('#handle-nav'),
 clickBtn = document.querySelector('#clickme'),
clickHide = document.querySelector('#click-hide'),
content = document.querySelector('.content');


clickBtn.addEventListener('click', addClass);

function addClass() {
  handleNav.classList.toggle('visible');
}


window.onclick = (e) =>{
    if (e.target.contains(content)) {
     handleNav.classList.remove('visible');
    }
}

