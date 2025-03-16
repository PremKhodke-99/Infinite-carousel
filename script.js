class Carousel {
  constructor() {
    this.track = document.querySelector(".carousel-track");
    this.prevBtn = document.getElementById("prevBtn");
    this.nextBtn = document.getElementById("nextBtn");
    this.dots = document.querySelectorAll(".dot");
    this.index = 1;
    this.totalSlides = this.dots.length;
    this.intervalTime = 4000;
    this.autoSlide = setInterval(() => this.nextSlide(), this.intervalTime);

    this.initEvents();
    this.updateDots();
  }

  updateSlide(instant = false) {
    this.track.style.transition = instant
      ? "none"
      : "transform 0.5s ease-in-out";
    this.track.style.transform = `translateX(-${this.index * 100}%)`;
    this.updateDots();
  }

  nextSlide() {
    this.index++;
    this.updateSlide();
    if (this.index > this.totalSlides) {
      setTimeout(() => {
        this.track.style.transition = "none";
        this.index = 1;
        this.updateSlide(true);
      }, 500);
    }
  }

  prevSlide() {
    if (this.index === 1) {
      this.track.style.transition = "none";
      this.index = this.totalSlides + 1;
      this.updateSlide(true);
      setTimeout(() => {
        this.track.style.transition = "transform 0.5s ease-in-out";
        this.index = this.totalSlides;
        this.updateSlide();
      }, 50);
    } else {
      this.index--;
      this.updateSlide();
    }
  }

  updateDots() {
    this.dots.forEach((dot) => dot.classList.remove("active"));
    this.dots[(this.index - 1) % this.totalSlides].classList.add("active");
  }

  initEvents() {
    this.dots.forEach((dot) => {
      dot.addEventListener("click", (e) => {
        clearInterval(this.autoSlide);
        this.index = parseInt(e.target.dataset.index) + 1;
        this.updateSlide();
        this.autoSlide = setInterval(() => this.nextSlide(), this.intervalTime);
      });
    });

    this.nextBtn.addEventListener("click", () => {
      clearInterval(this.autoSlide);
      this.nextSlide();
      this.autoSlide = setInterval(() => this.nextSlide(), this.intervalTime);
    });

    this.prevBtn.addEventListener("click", () => {
      clearInterval(this.autoSlide);
      this.prevSlide();
      this.autoSlide = setInterval(() => this.nextSlide(), this.intervalTime);
    });
  }
}

new Carousel();
