let show_index = 0,
  photos = document.querySelectorAll('.carousel__photo');

document.querySelector('.carousel__button--prev').addEventListener('click', function () {
  prevPhoto();
});
document.querySelector('.carousel__button--next').addEventListener('click', function () {
  nextPhoto();
});

function prevPhoto() {
  photos.forEach(photo => {
    photo.classList.remove('carousel__photo--show');
  });
  show_index--;
  if (show_index < 0)
    show_index = photos.length - 1;
  photos[show_index].classList.add('carousel__photo--show');
}

function nextPhoto() {
  photos.forEach(photo => {
    photo.classList.remove('carousel__photo--show');
  });
  show_index++;
  if (show_index >= photos.length)
    show_index = 0;
  photos[show_index].classList.add('carousel__photo--show');
}

setInterval(() => {
  nextPhoto()
}, 5000);