function scrollPageSmoothly(distance) {
    const initialY = window.scrollY;
    const targetY = initialY + distance;
    const duration = 800; // Продолжительность анимации в миллисекундах

    const startTime = performance.now();

    function scroll() {
      const currentTime = performance.now();
      const timeElapsed = currentTime - startTime;

      window.scrollTo(0, ease(timeElapsed, initialY, distance, duration));

      if (timeElapsed < duration) {
        requestAnimationFrame(scroll);
      }
    }

    function ease(t, b, c, d) {
      t /= d / 2;
      if (t < 1) return c / 2 * t * t + b;
      t--;
      return -c / 2 * (t * (t - 2) - 1) + b;
    }

    requestAnimationFrame(scroll);
  }




// Получаем все ссылки с атрибутом data-modal-target
var modalLinks = document.querySelectorAll("[data-modal-target]");

// Получаем все модальные окна
var modals = document.querySelectorAll(".modal");

// Добавляем обработчик событий на каждую ссылку
modalLinks.forEach(function(link) {
  link.addEventListener("click", function(event) {
    event.preventDefault();
    var targetModal = document.querySelector(this.dataset.modalTarget);
    targetModal.style.display = "block";
  });
});

// Добавляем обработчик событий для закрытия модального окна
modals.forEach(function(modal) {
  var closeButton = modal.querySelector(".close-button");
  closeButton.addEventListener("click", function() {
    modal.style.display = "none";
  });
  window.addEventListener("click", function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  });
});






const slider = document.querySelector('.slider');
const prevBtn = document.querySelector('.prev-btn');
const nextBtn = document.querySelector('.next-btn');

let currentSlide = 0;
const totalSlides = slider.children.length;

function prevSlide() {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSliderPosition();
}

function nextSlide() {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSliderPosition();
}

function updateSliderPosition() {
  slider.style.transform = `translateX(${-currentSlide * 33.33}%)`;
}

prevBtn.addEventListener('click', prevSlide);
nextBtn.addEventListener('click', nextSlide);

updateSliderPosition();








