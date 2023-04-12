// classList - shows/gets all classes
// contains - checks classList for specific class
// add - add class
// remove - remove class
// toggle - toggles class


const navToggle = document.querySelector('.nav-toggle');
const links = document.querySelector('.links');

navToggle.addEventListener('click', function(){
    // console.log('clicked')
    // console.log(links.classList); //this shows links in console, if we add contains it will output true if it exists and false if it does not.
    // if (links.classList.contains('show-links')) {
    //     links.classList.remove('show-links');
    // } else {
    //     links.classList.add('show-links');
    // }

    links.classList.toggle('show-links');
});