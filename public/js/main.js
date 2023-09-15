var welcomeMessage = "Welcome to Essential Nigeria Auction House!\n\nDiscover extraordinary items, bid with confidence, and win your treasures. Join our vibrant community today!";
alert(welcomeMessage);






let navbar = document.querySelector('.navbar');
let searchForm = document.querySelector('.search-form'); // Define searchForm here

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active'); // Toggle the search form's active class
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}
