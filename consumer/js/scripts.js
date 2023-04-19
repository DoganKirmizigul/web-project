$(document).ready(function () {
  $("#menu").click(function () {
    $("#menu").toggleClass("fa-times");
    $(".navbar").toggleClass("nav-toggle");
  });
});

filterSelection("all");
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) AddClass(x[i], "show");
  }

  // başka bir işlem yapmak istiyorsanız, buraya ekleyebilirsiniz
}

// Show filtered elements
function AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// btn aktif etme
// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
function toggleImage(imgId, textId, divId) {
  const img = document.getElementById(imgId);
  const textElement = document.getElementById(textId);
  const div = document.querySelector(divId);
  img.onclick = function () {
    if (img.getAttribute("src") === "images/goods/" + imgId + "off.jpg") {
      textElement.textContent = "On";
      div.style.backgroundColor = "green";
      img.src = "images/goods/" + imgId + "on.jpg";
    } else {
      textElement.textContent = "Off";
      div.style.backgroundColor = "red";
      img.src = "images/goods/" + imgId + "off.jpg";
    }
  };
}
$(document).ready(function(){

  $('#menu').click(function(){
      $(this).toggleClass('fa-times');
      $('.navbar').toggleClass('nav-toggle');
  });

  $(window).on('load scroll',function(){
      $('#menu').removeClass('fa-times');
      $('.navbar').removeClass('nav-toggle');
  });

});