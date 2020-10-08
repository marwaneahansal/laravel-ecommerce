import 'alpinejs';

require('./bootstrap');

let sizesElm = document.querySelectorAll(".size>div");
let quantityElem = document.getElementById('qteInput');

if(document.querySelector(".size")) {
    document.querySelector('.size').addEventListener('click', (elem) => {
        sizesElm.forEach(size => {
            if(elem.target === size) elem.target.classList.toggle("selected");
            else size.classList.remove("selected");
        })
    });
}


if(quantityElem) {

    quantityElem.addEventListener('input', () => {
        if(quantityElem.value <= 0) {
            quantityElem.value = 1;
        }
        let shopTotalElem = document.querySelector('.product_details .total');
        let price = document.querySelector('.product_details .price').innerHTML;

        price = price.replace('Price: ', '').replace('$', '');
        shopTotalElem.innerHTML = `Total: ${(price * quantityElem.value).toFixed(2)}$`;

    });
    
}


let applyPriceBtn = document.querySelector('.applyBtn');

if(applyPriceBtn) {
    applyPriceBtn.addEventListener('click', (event) => {
        let minPriceElem = document.getElementById('minPrice');
        let maxPriceElem = document.getElementById('maxPrice');
        if(maxPriceElem.value != 0 || minPriceElem.value != 0) {
            minPriceElem.classList.remove('error');
            maxPriceElem.classList.remove('error');
        } else {
            event.preventDefault();
            minPriceElem.classList.add('error');
            maxPriceElem.classList.add('error');
            document.querySelector('.priceErrorText').style.display = "block";
        }
    });
}


let searchBtn = document.querySelector('.search_btn');

if(searchBtn) {
    searchBtn.addEventListener('click', (event) => {
        if(document.getElementById("searchQuery").value == "") {
            event.preventDefault();
            document.querySelector('.searchErrorText').style.display = "block";
        }
    });
}
