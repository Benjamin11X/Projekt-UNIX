//KOMPUTERY I LAPTOPY
document.getElementById("komputery_laptopy").onchange = function () {
  if (document.getElementById("komputery_laptopy").checked == true) {
    document.getElementById("komputery").checked = true;
    document.getElementById("laptopy").checked = true;
  } else if (document.getElementById("komputery_laptopy").checked == false) {
    document.getElementById("komputery").checked = false;
    document.getElementById("laptopy").checked = false;
  }
};

document.getElementById("komputery").onchange = function () {
  if (document.getElementById("komputery").checked == false) {
    document.getElementById("komputery_laptopy").checked = false;
  }

  if (
    document.getElementById("komputery").checked == true &&
    document.getElementById("laptopy").checked == true
  ) {
    document.getElementById("komputery_laptopy").checked = true;
  }
};

document.getElementById("laptopy").onchange = function () {
  if (document.getElementById("laptopy").checked == false) {
    document.getElementById("komputery_laptopy").checked = false;
  }
  if (
    document.getElementById("komputery").checked == true &&
    document.getElementById("laptopy").checked == true
  ) {
    document.getElementById("komputery_laptopy").checked = true;
  }
};

//SMARTFONY I SMARTWATCHE
document.getElementById("smartfony_smartwatche").onchange = function () {
  if (document.getElementById("smartfony_smartwatche").checked == true) {
    document.getElementById("smartfony").checked = true;
    document.getElementById("smartwatche").checked = true;
    document.getElementById("tablety").checked = true;
    document.getElementById("komorkowe").checked = true;
  } else if (document.getElementById("komputery_laptopy").checked == false) {
    document.getElementById("smartfony").checked = false;
    document.getElementById("smartwatche").checked = false;
    document.getElementById("tablety").checked = false;
    document.getElementById("komorkowe").checked = false;
  }
};

document.getElementById("smartfony").onchange = function () {
  if (document.getElementById("smartfony").checked == false) {
    document.getElementById("smartfony_smartwatche").checked = false;
  }

  if (
    document.getElementById("smartfony").checked == true &&
    document.getElementById("smartwatche").checked == true &&
    document.getElementById("tablety").checked == true &&
    document.getElementById("komorkowe").checked == true
  ) {
    document.getElementById("smartfony_smartwatche").checked = true;
  }
};
document.getElementById("smartwatche").onchange = function () {
  if (document.getElementById("smartwatche").checked == false) {
    document.getElementById("smartfony_smartwatche").checked = false;
  }
  if (
    document.getElementById("smartfony").checked == true &&
    document.getElementById("smartwatche").checked == true &&
    document.getElementById("tablety").checked == true &&
    document.getElementById("komorkowe").checked == true
  ) {
    document.getElementById("smartfony_smartwatche").checked = true;
  }
};
document.getElementById("tablety").onchange = function () {
  if (document.getElementById("tablety").checked == false) {
    document.getElementById("smartfony_smartwatche").checked = false;
  }
  if (
    document.getElementById("smartfony").checked == true &&
    document.getElementById("smartwatche").checked == true &&
    document.getElementById("tablety").checked == true &&
    document.getElementById("komorkowe").checked == true
  ) {
    document.getElementById("smartfony_smartwatche").checked = true;
  }
};
document.getElementById("komorkowe").onchange = function () {
  if (document.getElementById("komorkowe").checked == false) {
    document.getElementById("smartfony_smartwatche").checked = false;
  }
  if (
    document.getElementById("smartfony").checked == true &&
    document.getElementById("smartwatche").checked == true &&
    document.getElementById("tablety").checked == true &&
    document.getElementById("komorkowe").checked == true
  ) {
    document.getElementById("smartfony_smartwatche").checked = true;
  }
};
