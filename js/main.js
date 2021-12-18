window.onload = function () {
    $(document).ready(function (){
      $('.products__slider--rawCrayfish').slick({
        arrows: false,
        dots: true,
        slidesToShow: 1,
        infinite: false
      });
    });
    
    $(document).ready(function boiled (){
      $('.products__slider--boiledCrayfish').slick({
        arrows: false,
        dots: true,
        slidesToShow: 1,
        infinite: false
      });
    });
    
    
    $(document).ready(function shrimp (){
      $('.products__slider--shrimp').slick({
        arrows: false,
        dots: true,
        slidesToShow: 1,
        infinite: false
      });
    });
    
    
    $(document).ready(function fish (){
      $('.products__slider--fish').slick({
        arrows: false,
        dots: true,
        slidesToShow: 1,
        infinite: false
      });
    });
  
  
  let tabs = document.querySelector('.products__tabs')
  let btns = tabs.querySelectorAll('.products__item--static')
  let items = tabs.querySelectorAll('.products__block')
  
  function change(arr, i) {
    arr.forEach( item => {
      item.forEach( i => {i.classList.remove('is-active')})
      item[i].classList.add('is-active')
    })
    console.log(arr)
  }


  
  for(let i = 0; i < btns.length; i++) {
    btns[i].addEventListener('click', () => {
      change([btns, items], i)
    })
  }
}

function func() {
  
}





