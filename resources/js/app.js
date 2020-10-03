const { size } = require('lodash');

require('./bootstrap');

var sizesElm = document.querySelectorAll(".size>div");
console.log(sizesElm);
document.querySelector('.size').addEventListener('click', (elem) => {
    sizesElm.forEach(size => {
        if(elem.target === size) elem.target.classList.toggle("selected");
        else size.classList.remove("selected");
    })
});
