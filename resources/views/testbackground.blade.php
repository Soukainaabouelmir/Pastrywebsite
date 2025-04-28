<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider 360° Pâtisserie</title>
  <link rel="stylesheet" href="style.css">
</head>




<style>
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: #f8f8f8;
}

.slider-container {
  perspective: 1000px;
  width: 80%;
  max-width: 600px;
  height: 400px;
  margin: auto;
  overflow: hidden;
  position: relative;
}

.slider {
  width: 100%;
  height: 100%;
  display: flex;
  transform-style: preserve-3d;
  animation: rotateSlider 10s infinite linear;
}

.slide {
  width: 100%;
  height: 100%;
  position: absolute;
  backface-visibility: hidden;
  transform-origin: center;
}

.slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

@keyframes rotateSlider {
  0% {
    transform: rotateY(0deg);
  }
  100% {
    transform: rotateY(360deg);
  }
}

.slide:nth-child(1) {
  transform: rotateY(0deg) translateZ(300px);
}

.slide:nth-child(2) {
  transform: rotateY(90deg) translateZ(300px);
}

.slide:nth-child(3) {
  transform: rotateY(180deg) translateZ(300px);
}

.slide:nth-child(4) {
  transform: rotateY(270deg) translateZ(300px);
}

</style>

<body>
  <div class="slider-container">
    <div class="slider">
      <div class="slide"><img src="{{ asset('asset/images/fruitcake.jpg') }}" class="card-img-top" alt="Cake 3"></div>
      <div class="slide"> <img src="{{ asset('asset/images/rasberycake.jpg') }}" class="card-img-top" alt="Cake 3"></div>
      <div class="slide"> <img src="{{ asset('asset/images/pink2.jpg') }}" class="card-img-top" alt="Cake 3"></div>
      <div class="slide"><img class="img-fluid rounded" src="{{ asset('asset/images/pink1.jpg') }}" alt=""></div>
    </div>
  </div>

  

  <script>
    const slider = document.querySelector('.slider');
let isPaused = false;

slider.addEventListener('mouseover', () => {
  isPaused = true;
  slider.style.animationPlayState = 'paused';
});

slider.addEventListener('mouseout', () => {
  isPaused = false;
  slider.style.animationPlayState = 'running';
});

  </script>
</body>


</html>
