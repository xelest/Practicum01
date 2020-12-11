$(document).ready(function() {
  AOS.init();

  var activity_tiles = document.querySelectorAll('.activity-item');

  activity_tiles.forEach(element => {
    console.log(generateColor());
    element.addEventListener('click', function(e) {
      e.preventDefault();
    });
    element.addEventListener('mouseover', function(e) {
      element.style.backgroundColor = generateColor();
      element.style.color = '#FFFFFF';
    });
    element.addEventListener('mouseout', function(e) {
      element.style.backgroundColor = '#FFFFFF';
      element.style.color = '#000000';
    });
  });

  function generateColor() {
    var lum = -0.25;
    var hex = String(
      '#' +
        Math.random()
          .toString(16)
          .slice(2, 8)
          .toUpperCase()
    ).replace(/[^0-9a-f]/gi, '');
    if (hex.length < 6) {
      hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
    }
    var rgb = '#',
      c,
      i;
    for (i = 0; i < 3; i++) {
      c = parseInt(hex.substr(i * 2, 2), 16);
      c = Math.round(Math.min(Math.max(0, c + c * lum), 255)).toString(16);
      rgb += ('00' + c).substr(c.length);
    }
    return rgb;
  }
});
