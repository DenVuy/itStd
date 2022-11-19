// Reference counter outside of function
var idx = 0;
// Collect all sections in a NodeList
var sxn = document.querySelectorAll('section');

for (let i = 0; i < sxn.length; i++) {
  sxn[i].setAttribute('data-id', i);
}
// Reference nav
var nav = document.querySelector('nav');
// Collect all anchors into a HTMLCollection
var lnx = document.links;

document.addEventListener('click', move, false);

function move(e) {
  if (e.target == lnx[0]) {
    idx--;
    if (idx < 0) {
      idx = sxn.length - 1;
    }
  } else if (e.target.tagName === 'SECTION') {
    idx = e.target.getAttribute('data-id');
  } else {
    idx++;
    if (idx > sxn.length - 1) {
      idx = 0;
    }
  }
  return idxScroll(idx);
}

// Pass idx thru idxScroll
function idxScroll(idx) {
  // Reference current active section
  var act = document.querySelector('.active');
  // Determine which section becomes active
  var x = sxn[idx];
  // Remove active class from current section
  act.classList.remove('active');
  // Add active class to new section
  x.classList.add('active');
  /* scrollIntoView method has a behavior option that animates
  || scrolling
  */
  x.scrollIntoView({
    behavior: 'smooth'
  });
}