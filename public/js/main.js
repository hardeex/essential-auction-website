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

// start of making the bid item highlight horizontally scrollable
$(document).ready(function () {
    const container = $('.browse-bid-row-container');
    const bidRow = $('.browse-bid-row');
    const bidItem = $('.bid-item');
    const prevArrow = $('.prev-arrow');
    const nextArrow = $('.next-arrow');

    let currentPosition = 0;

    // Calculate the maximum scroll position based on the number of bid items
    const maxPosition = (bidItem.length - 1) * bidItem.outerWidth();

    // Function to scroll bid items
    const scrollBidItems = (direction) => {
        if (direction === 'next') {
            currentPosition += bidItem.outerWidth();
        } else {
            currentPosition -= bidItem.outerWidth();
        }

        // Ensure the currentPosition stays within bounds
        currentPosition = Math.min(Math.max(currentPosition, 0), maxPosition);

        // Update the CSS to scroll the bid items
        bidRow.css('transform', `translateX(-${currentPosition}px)`);
    };

    // Scroll to the right when the next arrow is clicked
    nextArrow.click(() => {
        scrollBidItems('next');
    });

    // Scroll to the left when the previous arrow is clicked
    prevArrow.click(() => {
        scrollBidItems('prev');
    });
});
// end of making the bid item horizontally scrollable 

//  ======= WHY CHOOSE US STYLING==== JS CODE

document.addEventListener("DOMContentLoaded", function () {
    const accordions = document.querySelectorAll(".accordion");

    accordions.forEach((accordion) => {
        const header = accordion.querySelector(".why-us-point-header");
        const content = accordion.querySelector(".why-us-point-header-desc");

        header.addEventListener("click", () => {
            content.classList.toggle("active");
            header.classList.toggle("active");
        });
    });
});

//  ======= End of WHY CHOOSE US STYLING==== JS CODE

// ==== Handling the show and hide of some auction contents in the index page-- The upcoming section =======
$(document).ready(function () {
    $('.auction-action button').click(function () {
        var target = $(this).data('target');
        
        if (target === 'all-content') {
            // Show all content sections
            $('.contents').show();
        } else {
            // Hide all content sections
            $('.contents').hide();
            // Show the selected content section
            $('#' + target).show();
        }
    });
});


// naivate to the register section at the index page
function scrollToSection(sectionId) {
    const targetSection = document.getElementById(sectionId);

    if (targetSection) {
        // Scroll smoothly to the target section
        targetSection.scrollIntoView({ behavior: 'smooth' });
    }
}
