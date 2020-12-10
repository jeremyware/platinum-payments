// Change nav menu color if on that page!
let pageUrl = window.location.pathname;
let getNav = document.querySelectorAll("nav div ul li a");

for (let i = 0; i < getNav.length; i++) {
  // Get URL info
  let pageUrlName = pageUrl.split("/");
  let pageUrlLength = pageUrlName.length - 1;
  // Get links info
  let pageNav = getNav[i].pathname;
  let pageNavName = pageNav.split("/");
  let pageNavLength = pageNavName.length - 1;
  let pageFinalName = pageNavName[pageNavLength];
  let pageNavExists = pageUrl.includes(pageFinalName);
  // Change links color
  if (pageNavExists == true) {
    getNav[i].style.cssText = "color: #31a6ff;";
  } else if (pageUrlName[pageUrlLength] == "") {
    getNav[0].style.cssText = "color: #31a6ff;";
  }
}


function showHidden(checked) {
  if (checked == true) {
    document.getElementById('hiddenForm').style.display = 'block';
  } else {
    document.getElementById('hiddenForm').style.display = 'none';
  }
};

function showOther(checked) {
  if (checked == true) {
    document.getElementById('otherChoice').style.display = 'block';
  } else {
    document.getElementById('otherInput').style.display = 'none';
  }
};

$('.selfmessage').on('focus', function (e) {
  $('#other0').prop('checked', true);
});