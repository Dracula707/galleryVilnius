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

let dots = [document.body.querySelector('#dot-a'),document.body.querySelector('#dot-b'),document.body.querySelector('#dot-c')];

const news = (number) => {
  const modal = document.getElementById(`modal${number}`);
  modal.classList.toggle('hidden');
  document.body.classList.toggle('modal-on');
}

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

const index = (info) => {
  // console.log(info.index);
  update((info.index - 1));
}

slider.events.on('indexChanged', index);



update(0);