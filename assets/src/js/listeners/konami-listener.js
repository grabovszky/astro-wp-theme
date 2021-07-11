let cursor = 0;
const konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
document.addEventListener('keydown', (e) => {
  cursor = (e.keyCode === konamiCode[cursor]) ? cursor + 1 : 0;
  if (cursor === konamiCode.length) {
    activateAlert();
  }
});

function activateAlert() {
  document.body.innerHTML +=
      '<div class="alert alert-light content-container shadow-lg fixed-top m-5 p-4 alert-dismissible fade show" role="alert">' +
      '<h4 class="alert-heading text-blue">How did you even find this?!</h4>' +
      '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' +
      '<hr>' +
      '<p class="mb-0 text-blue">If you would like, contact me on <a href="https://www.gaborkristof.com" class="text-blue">my website</a>.</p>' +
      '</div>';
}
