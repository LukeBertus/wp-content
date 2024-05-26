AOS.init({
    once: true,
    duration: 1000,
});

import HeaderJS from './modules/header.js'
import ReasonHeight from './modules/reasonHeight.js'
import Pitch from './modules/pitch.js'
import Cms from './modules/cms.js'
import Money from './modules/money.js'

const headerJS = new HeaderJS()
const reasonHeight = new ReasonHeight()
const cms = new Cms()
const money = new Money()


const sections = document.querySelectorAll('.taco-section');

let lastY = 0;

const observer = new IntersectionObserver(entries => {
  const direction = entries[0].boundingClientRect.y <= lastY ? 'down' : 'up';
  lastY = entries[0].boundingClientRect.y;

  let relevantEntry;
  if (direction === 'down') {
    relevantEntry = entries.reduce((lowest, entry) => {
      return entry.boundingClientRect.y < lowest.boundingClientRect.y ? entry : lowest;
    });
  } else {
    relevantEntry = entries.reduce((highest, entry) => {
      return entry.boundingClientRect.y > highest.boundingClientRect.y ? entry : highest;
    });
  }

  if (relevantEntry && relevantEntry.isIntersecting) {
    const id = relevantEntry.target.getAttribute('id');
    const navLink = document.querySelector(`a[href="#${id}"]`);

    if (navLink) {
      const allNavLinks = document.querySelectorAll('.taco-link');
      allNavLinks.forEach(link => link.classList.remove('active'));
      navLink.classList.add('active');
    }
  }
}, {
  rootMargin: '-50% 0px -50% 0px',
  threshold: 0
});

sections.forEach(section => {
  observer.observe(section);
});

console.log(document.querySelectorAll('.taco-link'))
//offset start position
document.querySelectorAll('.taco-link').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute('href'));
    window.scrollTo({
      top: target.offsetTop +400,  // Adjust this value to change the scroll position
      behavior: 'smooth'
    });
  });
});
document.querySelectorAll('a[href^="#"]:not(.taco-link)').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const target = document.querySelector(this.getAttribute('href'));
    window.scrollTo({ 
      top: target.offsetTop +1,
      behavior: 'smooth'
    });
  });
});

document.querySelectorAll('.link-text a').forEach(link => {
  link.target = '_blank';
});