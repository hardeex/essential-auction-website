var welcomeMessage = "Welcome to Essential Nigeria Auction House!\n\nDiscover extraordinary items, bid with confidence, and win your treasures. Join our vibrant community today!";
alert(welcomeMessage);

//declaring variable
let navbar = document.querySelector('.navbar');
let searchForm = document.querySelector('.search-form'); // Define searchForm here
let cartItem = document.querySelector('.cart-items-container');


// auto adding nav bar items to the menu
document.querySelector('#menu-btn').onclick = () =>{ // when the menu-item is selected or click
    navbar.classList.toggle('active'); // show the nav bar
    searchForm.classList.remove('active'); // remove the search form
    cartItem.classList.remove('active'); // remove the cart-items
}

// add or remove the search box, nav var and menu-item
document.querySelector('#search-btn').onclick = () =>{ // when the search btn is selected
    searchForm.classList.toggle('active'); // show the search form
    navbar.classList.remove('active'); // remove the nav bar
    cartItem.classList.remove('active'); // remove the cart item
}


// handle the cart-items views
document.querySelector('#cart-btn').onclick = () =>{ // when the cart-item is selected
    cartItem.classList.toggle('active'); // show the item in the cart
    navbar.classList.remove('active'); // remove the nav bar
    searchForm.classList.remove('active'); // remove the search form
}

// while scrolling on any page of the website
window.onscroll = () =>{
    navbar.classList.remove('active'); // remove the nav bar
    searchForm.classList.remove('active'); // remove the form
    cartItem.classList.remove('active'); // remove the cart item
}


