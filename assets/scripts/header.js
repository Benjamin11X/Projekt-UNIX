document.getElementById("btn-left").onclick = function () {
  document.getElementById("slider-wrapper").scrollLeft -= 40;
};

document.getElementById("btn-right").onclick = function () {
  document.getElementById("slider-wrapper").scrollLeft += 40;
};

document.getElementById("btn-right-bestsellers").onclick = function () {
  document.getElementById("bestsellers").scrollLeft += 120;
};

document.getElementById("btn-left-bestsellers").onclick = function () {
  document.getElementById("bestsellers").scrollLeft -= 120;
};

document.getElementById("btn-right-promotions").onclick = function () {
  document.getElementById("promotions").scrollLeft += 120;
};

document.getElementById("btn-left-promotions").onclick = function () {
  document.getElementById("promotions").scrollLeft -= 120;
};
