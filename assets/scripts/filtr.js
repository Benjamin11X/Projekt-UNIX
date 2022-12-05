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
  } else if (document.getElementById("smartfony_smartwatche").checked == false) {
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

//PODZESPOŁY KOMPUTEROWE
document.getElementById("podzespoly_komputerowe").onchange = function () {
  if (document.getElementById("podzespoly_komputerowe").checked == true) {
    document.getElementById("procesory").checked = true;
    document.getElementById("karty_graficzne").checked = true;
    document.getElementById("pamiec_ram").checked = true;
    document.getElementById("plyty_glowne").checked = true;
    document.getElementById("dyski").checked = true;
    document.getElementById("obudowy").checked = true;
    document.getElementById("chlodzenie").checked = true;
    document.getElementById("zasilacze").checked = true;
  } else if (document.getElementById("podzespoly_komputerowe").checked == false) {
    document.getElementById("procesory").checked = false;
    document.getElementById("karty_graficzne").checked = false;
    document.getElementById("pamiec_ram").checked = false;
    document.getElementById("plyty_glowne").checked = false;
    document.getElementById("dyski").checked = false;
    document.getElementById("obudowy").checked = false;
    document.getElementById("chlodzenie").checked = false;
    document.getElementById("zasilacze").checked = false;
  }
};

document.getElementById("procesory").onchange = function () {
  if (document.getElementById("procesory").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

document.getElementById("karty_graficzne").onchange = function () {
  if (document.getElementById("karty_graficzne").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

document.getElementById("pamiec_ram").onchange = function () {
  if (document.getElementById("pamiec_ram").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

document.getElementById("plyty_glowne").onchange = function () {
  if (document.getElementById("plyty_glowne").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

document.getElementById("dyski").onchange = function () {
  if (document.getElementById("dyski").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

document.getElementById("obudowy").onchange = function () {
  if (document.getElementById("obudowy").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

document.getElementById("chlodzenie").onchange = function () {
  if (document.getElementById("chlodzenie").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

document.getElementById("zasilacze").onchange = function () {
  if (document.getElementById("zasilacze").checked == false) {
    document.getElementById("podzespoly_komputerowe").checked = false;
  }

  if (
    document.getElementById("procesory").checked == true &&
    document.getElementById("karty_graficzne").checked == true &&
    document.getElementById("pamiec_ram").checked == true &&
    document.getElementById("plyty_glowne").checked == true &&
    document.getElementById("dyski").checked == true &&
    document.getElementById("obudowy").checked == true &&
    document.getElementById("chlodzenie").checked == true &&
    document.getElementById("zasilacze").checked == true
  ) {
    document.getElementById("podzespoly_komputerowe").checked = true;
  }
};

//URZADZENIA PERYFERYJNE 
document.getElementById("urzadzenia_peryferyjne").onchange = function () {
  if (document.getElementById("urzadzenia_peryferyjne").checked == true) {
    document.getElementById("drukarki").checked = true;
    document.getElementById("monitory").checked = true;
    document.getElementById("mikrofony").checked = true;
  } else if (document.getElementById("urzadzenia_peryferyjne").checked == false) {
    document.getElementById("drukarki").checked = false;
    document.getElementById("monitory").checked = false;
    document.getElementById("mikrofony").checked = false;

  }
};

document.getElementById("drukarki").onchange = function () {
  if (document.getElementById("drukarki").checked == false) {
    document.getElementById("urzadzenia_peryferyjne").checked = false;
  }

  if (
    document.getElementById("drukarki").checked == true &&
    document.getElementById("monitory").checked == true &&
    document.getElementById("mikrofony").checked == true 
  ) {
    document.getElementById("urzadzenia_peryferyjne").checked = true;
  }
};

document.getElementById("monitory").onchange = function () {
  if (document.getElementById("monitory").checked == false) {
    document.getElementById("urzadzenia_peryferyjne").checked = false;
  }

  if (
    document.getElementById("drukarki").checked == true &&
    document.getElementById("monitory").checked == true &&
    document.getElementById("mikrofony").checked == true 
  ) {
    document.getElementById("urzadzenia_peryferyjne").checked = true;
  }
};

document.getElementById("mikrofony").onchange = function () {
  if (document.getElementById("mikrofony").checked == false) {
    document.getElementById("urzadzenia_peryferyjne").checked = false;
  }

  if (
    document.getElementById("drukarki").checked == true &&
    document.getElementById("monitory").checked == true &&
    document.getElementById("mikrofony").checked == true 
  ) {
    document.getElementById("urzadzenia_peryferyjne").checked = true;
  }
};

//TV I AUDIO
document.getElementById("tv_audio").onchange = function () {
  if (document.getElementById("tv_audio").checked == true) {
    document.getElementById("telewizory").checked = true;
    document.getElementById("audio").checked = true;
  } else if (document.getElementById("tv_audio").checked == false) {
    document.getElementById("telewizory").checked = false;
    document.getElementById("audio").checked = false;
  }
};

document.getElementById("telewizory").onchange = function () {
  if (document.getElementById("telewizory").checked == false) {
    document.getElementById("tv_audio").checked = false;
  }

  if (
    document.getElementById("telewizory").checked == true &&
    document.getElementById("audio").checked == true 
  ) {
    document.getElementById("tv_audio").checked = true;
  }
};

document.getElementById("audio").onchange = function () {
  if (document.getElementById("audio").checked == false) {
    document.getElementById("tv_audio").checked = false;
  }

  if (
    document.getElementById("telewizory").checked == true &&
    document.getElementById("audio").checked == true 
  ) {
    document.getElementById("tv_audio").checked = true;
  }
};

//AKCESORIA
document.getElementById("akcesoria").onchange = function () {
  if (document.getElementById("akcesoria").checked == true) {
    document.getElementById("klawiatury").checked = true;
    document.getElementById("myszki").checked = true;
    document.getElementById("sluchawki").checked = true;
  } else if (document.getElementById("akcesoria").checked == false) {
    document.getElementById("klawiatury").checked = false;
    document.getElementById("myszki").checked = false;
    document.getElementById("sluchawki").checked = false;

  }
};

document.getElementById("klawiatury").onchange = function () {
  if (document.getElementById("klawiatury").checked == false) {
    document.getElementById("akcesoria").checked = false;
  }

  if (
    document.getElementById("klawiatury").checked == true &&
    document.getElementById("myszki").checked == true &&
    document.getElementById("sluchawki").checked == true 
  ) {
    document.getElementById("akcesoria").checked = true;
  }
};

document.getElementById("myszki").onchange = function () {
  if (document.getElementById("myszki").checked == false) {
    document.getElementById("akcesoria").checked = false;
  }

  if (
    document.getElementById("klawiatury").checked == true &&
    document.getElementById("myszki").checked == true &&
    document.getElementById("sluchawki").checked == true 
  ) {
    document.getElementById("akcesoria").checked = true;
  }
};

document.getElementById("sluchawki").onchange = function () {
  if (document.getElementById("sluchawki").checked == false) {
    document.getElementById("akcesoria").checked = false;
  }

  if (
    document.getElementById("klawiatury").checked == true &&
    document.getElementById("myszki").checked == true &&
    document.getElementById("sluchawki").checked == true 
  ) {
    document.getElementById("akcesoria").checked = true;
  }
};




