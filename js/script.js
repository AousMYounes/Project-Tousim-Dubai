let menu = document.querySelector('#navbarNav');
let navbar = document.querySelector('.header .navbar');
menu.onclick = () =>{
  menu.classList.toggle('navbar-toggler');
  navbar.classList.toggle('active');
};
window.onscroll = () =>{
  menu.classList.remove('navbar-toggler');
  navbar.classList.remove('active');
};

// let section = document.querySelector('.section1 .section2 .section3 .section4');
//   let slidersItem = 2;
//   section.onclick = () =>{
//     let boxs = [...document.querySelectorAll('.slider .slider-item')];
//     for (var i = currentItem; i < currentItem + 2; i++){
//       boxs[i].style.display = 'inline-block';
//     };
//     currentItem += 2;
//     if(slidersItem >= boxs.length){
//       section.style.display = 'none';
//     }
//   };
document.querySelectorAll('#nav-tab>[data-bs-toggle="tab"]').forEach(el => {
  el.addEventListener('shown.bs.tab', () => {
    const target = el.getAttribute('data-bs-target')
    const scrollElem = document.querySelector(`${target} [data-bs-spy="scroll"]`)
    bootstrap.ScrollSpy.getOrCreateInstance(scrollElem).refresh()
  })
})


$(document).ready(function(){
    $('.slider').slick({
      dots:true,
      slidesToShow:2,
      slidesToScroll:2,
      arrows:false
      // fade:true
    });
    


    function videoToggle(){
       video= $('.vivo').get(0)

       if(video.paused){
         video.play();
         $('.video-control-play').hide();
         $('.video-control-pause').show();
       }else{
          video.pause();
          $('.video-control-play').show();
          $('.video-control-pause').hide();
       }
    }
    $('.video-control-play').click(function(){
        videoToggle();
    })
    $('.video-control-pause').click(function(){
        videoToggle();
    })
  });

  let loadMoreBtn = document.querySelector('.blog .load-more .b100');
  let currentItem = 3;
  loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.blog .box-container4 .box4')];
    for (var i = currentItem; i < currentItem + 3; i++){
      boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if(currentItem >= boxes.length){
      loadMoreBtn.style.display = 'none';
    }
  };