// we instance slider with some setthings
const slider = tns({
  container: '.my-slider',
  navContainer: '.dots',
  navPosition: 'bottom',
  center: true,
  controls: false,
  nav: true,
  preventScrollOnTouch: 'auto',
  mouseDrag: true,
  autoplay: true,
  gutter: 5,
  autoplayButtonOutput: false
});

// we query all the dots for slider 
const dots = [document.body.querySelector('#dot-a'),document.body.querySelector('#dot-b'),document.body.querySelector('#dot-c')];

// function that switch dots between empty and filled if image on specify index
const update = (index) => {
  for(let i = 0; i < dots.length; i++) {
    const inst = dots[i].querySelectorAll('svg');
    if (!inst[0].classList.contains('hidden')) {
      inst[0].classList.add('hidden');
    }
    if (!inst[1].classList.contains('hidden')) {
      inst[1].classList.add('hidden');
    }
  }

  for(let i = 0; i < dots.length; i++) {
    const inst = dots[i].querySelectorAll('svg');
    if (i === index) {
      if (inst[1].classList.contains('hidden')) {
        inst[1].classList.remove('hidden');
      }
    } else {
      if (inst[0].classList.contains('hidden')) {
        inst[0].classList.remove('hidden');
      }
    }

  }
}

// when slider automatically switch we update dots
const index = (info) => {
  // console.log(info.index);
  update((info.index - 1));
}

slider.events.on('indexChanged', index);

// animation for More information icons
const items = document.querySelectorAll('.grid-more-info svg');
items.forEach(item => {
  item.addEventListener('animationend', function( event ) {
    event.target.classList.remove('animate-bounce');
  });

  item.addEventListener("mouseover", function( event ) {
    if (!event.target.classList.contains('animate-bounce')) {
      event.target.classList.add('animate-bounce');
    }
  });

});


// auto typing top text
let i = 0;
const txt = 'Discover, learn, and see extraordinary art.';
const speed = 50;
document.getElementById("header").innerHTML = "";

const typeWriter = () => {
  if (i < txt.length) {
    header.innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
typeWriter();