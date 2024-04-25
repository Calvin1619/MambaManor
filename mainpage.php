<?php include 'top2.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Buyer DashBoard</title>
<link rel="stylesheet" href="mainpageStyles.css">
</head>
<body>
<div class="container">
    <div class="map-container">
        <img src="map.jpg" alt="Map" class="map">
        <div class="pin phineas-pin" style="top: 30%; left: 27%;"></div>
        <div class="pin spongebob-pin" style="top: 75%; left: 77%;"></div>
        <div class="pin simpsons-pin" style="top: 62%; left: 22%; "></div>
        <div class="pin familyguy-pin" style="top: 27%; left: 25%;"></div>
        <div class="pin gravityfall-pin" style="top: 30%; left: 83%;"></div>
        <div class="pin teentitans-pin" style="top: 50%; left: 57%;"></div>
    </div>
    <div class="card-container">
        <!-- Add the search bar -->
    <div class="search-container">
        <input type="text" id="search-input" placeholder="Search..." oninput="searchProperties()">
    </div>
    <div class="card phineas-card" data-folder="phineas" data-price="500,000" data-address="2308 Maple Drive" data-bed="3" data-bath="2" data-sqft="1800">
    <div class="card-content">
        <div class="image-container">
            <img src="images/Phineas/Phineas1.jpeg" alt="Phineas Image">
        </div>
        <div class="info-container">
            <h2>Phineas</h2>
            <div class="details">
                <p>Price: $500,000</p>
                <p>Address: 2308 Maple Drive</p>
                <p>Beds: 3 | Baths: 2 | Sq Ft: 1800</p>
            </div>
        </div>
    </div>
</div>
<div class="card spongebob-card" data-folder="spongebob" data-price="400,000" data-address="124 Conch Street" data-bed="2" data-bath="1.5" data-sqft="1500">
    <div class="card-content">
        <div class="image-container">
            <img src="images/Spongebob/Spongebob1.jpeg" alt="Spongebob Image">
        </div>
        <div class="info-container">
            <h2>Spongebob</h2>
            <div class="details">
                <p>Price: $400,000</p>
                <p>Address: 124 Conch Street</p>
                <p>Beds: 2 | Baths: 1.5 | Sq Ft: 1500</p>
            </div>
        </div>
    </div>
</div>

<div class="card simpsons-card" data-folder="simpsons" data-price="600,000" data-address="742 Evergreen Terrace" data-bed="4" data-bath="3" data-sqft="2500">
    <div class="card-content">
        <div class="image-container">
            <img src="images/Simpsons/Simpsons1.jpeg" alt="Simpsons Image">
        </div>
        <div class="info-container">
            <h2>Simpsons</h2>
            <div class="details">
                <p>Price: $600,000</p>
                <p>Address: 742 Evergreen Terrace</p>
                <p>Beds: 4 | Baths: 3 | Sq Ft: 2500</p>
            </div>
        </div>
    </div>
</div>

<div class="card familyguy-card" data-folder="familyguy" data-price="550,000" data-address="101 Spooner St" data-bed="3" data-bath="2.5" data-sqft="2000">
    <div class="card-content">
        <div class="image-container">
            <img src="images/Familyguy/Familyguy1.jpeg" alt="Family Guy Image">
        </div>
        <div class="info-container">
            <h2>FamilyGuy</h2>
            <div class="details">
                <p>Price: $550,000</p>
                <p>Address: 101 Spooner St</p>
                <p>Beds: 3 | Baths: 2.5 | Sq Ft: 2000</p>
            </div>
        </div>
    </div>
</div>

<div class="card gravityfall-card" data-folder="gravityfall" data-price="350,000" data-address="7691 falls rd" data-bed="2" data-bath="2" data-sqft="3000">
    <div class="card-content">
        <div class="image-container">
            <img src="images/GravityFalls/shack1.jpg" alt="Gravity Falls Image">
        </div>
        <div class="info-container">
            <h2>GravityFalls</h2>
            <div class="details">
                <p>Price: $350,000</p>
                <p>Address: 7691 falls rd</p>
                <p>Beds: 2 | Baths: 2 | Sq Ft: 3000</p>
            </div>
        </div>
    </div>
</div>

<div class="card teentitans-card" data-folder="teentitans" data-price="950,000" data-address="420 winton falls" data-bed="5" data-bath="2" data-sqft="7000">
    <div class="card-content">
        <div class="image-container">
            <img src="images/TeenTitans/tower1.jpg" alt="Teen Titans Image">
        </div>
        <div class="info-container">
            <h2>TitanTower</h2>
            <div class="details">
                <p>Price: $950,000</p>
                <p>Address: 420 winton falls</p>
                <p>Beds: 5 | Baths: 2 | Sq Ft: 7000</p>
            </div>
        </div>
    </div>
</div>
        <?php include 'bottom.php'; ?>
    </div>
</div>
<div class="footer">
        <img id="slideshow" src="ad1.png" alt="Advertisement">
    </div>
<div id="popup-container" class="popup-container">
    <span class="close-btn" onclick="closePopup()">×</span>
    <div class="popup-content">
        <div class="image-container">
            <img id="popup-image" class="popup-image" src="" alt="Popup Image">
            <div class="btn-container">
                <button onclick="prevImage()">Previous</button>
                <button onclick="nextImage()">Next</button>
            </div>
        </div>
        <div id="popup-card-name" class="popup-card-name"></div>
        <div id="popup-details" class="popup-details"></div> <!-- Details section -->

        <!-- Add a form for adding to wishlist -->
        <form action="wishlistHandler.php" method="post" id="wishlistForm">
            <input type="hidden" name="property_name" id="wishlistPropertyName">
            <button type="button" id="add-wishlist-btn" onclick="addWishlist()">Add to Wishlist</button>
        </form>

        <!-- You may keep the "Make Offer" button if needed -->
        <button id="make-offer-btn" onclick="makeOffer()">Make Offer</button>
    </div>
</div>

<script>
const cards = document.querySelectorAll('.card');
const pins = document.querySelectorAll('.pin');
const popupContainer = document.getElementById('popup-container');
const popupImage = document.getElementById('popup-image');
const popupDetails = document.getElementById('popup-details');
let currentImageIndex = 0;
let imagesArray = [];

// Select the Make Offer button by its ID and add an event listener
const makeOfferBtn = document.getElementById('make-offer-btn');
makeOfferBtn.addEventListener('click', makeOffer);
// Define arrays for each card's image paths
const phineasImages = ['images/Phineas/Phineas1.jpeg', 'images/Phineas/Phineas2.jpg', 'images/Phineas/Phineas3.jpg', 'images/Phineas/Phineas4.jpg', 'images/Phineas/Phineas5.jpg', 'images/Phineas/Phineas6.jpg', 'images/Phineas/Phineas7.jpg', 'images/Phineas/Phineas8.jpg'];
const simpsonsImages = ['images/Simpsons/Simpsons1.jpeg', 'images/Simpsons/Simpsons2.jpeg', 'images/Simpsons/Simpsons3.jpeg', 'images/Simpsons/Simpsons4.jpg', 'images/Simpsons/Simpsons5.jpeg', 'images/Simpsons/Simpsons6.jpeg', 'images/Simpsons/Simpsons7.jpeg'];
const spongebobImages = ['images/Spongebob/Spongebob1.jpeg', 'images/Spongebob/Spongebob2.jpeg', 'images/Spongebob/Spongebob3.jpeg', 'images/Spongebob/Spongebob4.jpg', 'images/Spongebob/Spongebob5.jpg', 'images/Spongebob/Spongebob6.jpg', 'images/Spongebob/Spongebob7.jpg'];
const familyguyImages = ['images/Familyguy/Familyguy1.jpeg', 'images/Familyguy/Familyguy2.jpeg', 'images/Familyguy/Familyguy3.jpeg', 'images/Familyguy/Familyguy4.jpeg', 'images/Familyguy/Familyguy5.jpeg', 'images/Familyguy/Familyguy6.jpeg', 'images/Familyguy/Familyguy7.jpeg', 'images/Familyguy/Familyguy8.jpeg'];
const gravityfallImages = ['images/GravityFalls/shack1.jpg', 'images/GravityFalls/shack2.jpg', 'images/GravityFalls/shack3.jpg', 'images/GravityFalls/shack4.jpg', 'images/GravityFalls/shack5.jpg'];
const teentitansImages = ['images/TeenTitans/tower1.jpg', 'images/TeenTitans/tower2.jpg', 'images/TeenTitans/tower3.jpg', 'images/TeenTitans/tower4.jpg', 'images/TeenTitans/tower5.jpg'];
// Add more arrays for other cards as needed

// Event listeners for the first Phineas card
const firstPhineasCard = document.querySelector('.card.phineas-card');
const firstPhineasPin = document.querySelector('.pin.phineas-pin');

firstPhineasCard.addEventListener('click', () => {
    openPopup('phineas'); 
});

firstPhineasPin.addEventListener('click', () => {
    openPopup('phineas'); 
});

// Event listeners for the first Spongebob card
const firstSpongebobCard = document.querySelector('.card.spongebob-card');
const firstSpongebobPin = document.querySelector('.pin.spongebob-pin');

firstSpongebobCard.addEventListener('click', () => {
    openPopup('spongebob'); 
});

firstSpongebobPin.addEventListener('click', () => {
    openPopup('spongebob'); 
});

// Event listeners for the first Simpsons card
const firstSimpsonsCard = document.querySelector('.card.simpsons-card');
const firstSimpsonsPin = document.querySelector('.pin.simpsons-pin');

firstSimpsonsCard.addEventListener('click', () => {
    openPopup('simpsons'); 
});

firstSimpsonsPin.addEventListener('click', () => {
    openPopup('simpsons'); 
});
    // Event listeners for the first FamilyGuy card
    const firstFamilyGuyCard = document.querySelector('.card.familyguy-card');
const firstFamilyGuyPin = document.querySelector('.pin.familyguy-pin');

firstFamilyGuyCard.addEventListener('click', () => {
    openPopup('familyguy'); 
});

firstFamilyGuyPin.addEventListener('click', () => {
    openPopup('familyguy'); 
});

// Event listeners for the first Gravity Falls card
const firstGravityFallCard = document.querySelector('.card.gravityfall-card');
const firstGravityFallPin = document.querySelector('.pin.gravityfall-pin');

firstGravityFallCard.addEventListener('click', () => {
    openPopup('gravityfall'); 
});

firstGravityFallPin.addEventListener('click', () => {
    openPopup('gravityfall'); 
});

// Event listeners for the first Teen Titans card
const firstTeenTitansCard = document.querySelector('.card.teentitans-card');
const firstTeenTitansPin = document.querySelector('.pin.teentitans-pin');

firstTeenTitansCard.addEventListener('click', () => {
    openPopup('teentitans'); 
});

firstTeenTitansPin.addEventListener('click', () => {
    openPopup('teentitans'); 
});
function openPopup(cardName) {
    const card = document.querySelector(`.card[data-folder="${cardName.toLowerCase()}"]`);
    const price = card.getAttribute('data-price');
    const address = card.getAttribute('data-address');
    const beds = card.getAttribute('data-bed');
    const baths = card.getAttribute('data-bath');
    const sqft = card.getAttribute('data-sqft');

    let description = '';
    switch (cardName.toLowerCase()) {
        case 'phineas':
            description = "Step into the world of adventure and creativity at 2308 Maple Drive in Danville! Phineas and Ferb's expansive modern home is a haven for innovation and fun. Boasting a cutting-edge design, spacious rooms, an observatory for stargazing, and a backyard that's perfect for building, exploring, and inventing, this property is a dream come true for imaginative minds.";
            imagesArray = phineasImages; 
            break;
        case 'spongebob':
            description = "Charming and cozy, Spongebob's pineapple-shaped home offers a unique living experience in the heart of Bikini Bottom. Perfect for a single occupant or a small family, this cheerful abode features a bright interior, a spacious living area, and a quaint garden, creating an inviting atmosphere reminiscent of beachside living.";
            imagesArray = spongebobImages; 
            break;
        case 'simpsons':
            description = "Welcome to the iconic Simpsons' family home at 742 Evergreen Terrace! This spacious two-story house is ideal for families looking for comfort and convenience. With four bedrooms, a cozy living room, a fully equipped kitchen, and a backyard perfect for outdoor gatherings, this home provides ample space for your family's needs.";
            imagesArray = simpsonsImages; 
            break;
        case 'familyguy':
            description = "Nestled on 101 Spooner St in Quahog, Rhode Island, the Griffin family home is a charming retreat offering a blend of comfort and character. Featuring multiple levels, a versatile floor plan, and a vibrant neighborhood setting, this residence is perfect for families seeking a cozy yet lively living environment.";
            imagesArray = familyguyImages; 
            break;
            case 'gravityfall':
            description = "Discover the mystery and adventure of Gravity Falls with this enchanting property located at 7691 Falls Rd. Tucked away in a secluded forest setting, this cozy retreat offers tranquility and charm. With its rustic yet cozy interior, expansive grounds, and proximity to local attractions, this property is perfect for those seeking a unique getaway.";
            imagesArray = gravityfallImages; 
            break;
        case 'teentitans':
            description = "Ascend to new heights with the Teen Titans' iconic Titan Tower, located at 420 Winton Falls. This state-of-the-art headquarters offers unparalleled views of the city skyline and cutting-edge amenities for crime-fighting and relaxation alike. With spacious living quarters, advanced technology, and a prime location, this property is a superhero's dream come true.";
            imagesArray = teentitansImages; 
            break;
        default:
            description = "Description not available.";
            imagesArray = []; 
    }

    popupDetails.innerHTML = `
        <div class="price">Price: $${price}</div>
        <div class="address">Address: ${address}</div>
        <div class="specs">Beds: ${beds} | Baths: ${baths} | Sq Ft: ${sqft}</div>
        <div class="description"><p>${description}</p></div>
    `;
    document.getElementById('popup-card-name').textContent = cardName; // Set the popup-card-name
    popupContainer.style.display = 'block';
    currentImageIndex = 0;
    updatePopupImage();
}

function closePopup() {
    popupContainer.style.display = 'none';
}

function prevImage() {
    currentImageIndex = (currentImageIndex - 1 + imagesArray.length) % imagesArray.length;
    updatePopupImage();
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % imagesArray.length;
    updatePopupImage();
}

function updatePopupImage() {
    popupImage.src = imagesArray[currentImageIndex];
}

cards.forEach(card => {
    card.addEventListener('click', () => {
        const folder = card.getAttribute('data-folder');
        imagesArray = getImagesArray(folder);
        if (imagesArray.length > 0) {
            openPopup(card.textContent.trim());
        }
    });

    card.addEventListener('mouseenter', () => {
        const folder = card.getAttribute('data-folder');
        const pin = document.querySelector(`.pin.${folder}-pin`);
        card.style.backgroundColor = '#37882c';
        pin.style.backgroundColor = 'yellow';
    });

    card.addEventListener('mouseleave', () => {
        const folder = card.getAttribute('data-folder');
        const pin = document.querySelector(`.pin.${folder}-pin`);
        card.style.backgroundColor = '';
        pin.style.backgroundColor = '';
    });
});

pins.forEach(pin => {
    pin.addEventListener('click', () => {
        const folder = pin.classList[1].replace('-pin', '');
        const card = document.querySelector(`.card.${folder}-card`);
        imagesArray = getImagesArray(folder);
        if (imagesArray.length > 0) {
            openPopup(card.textContent.trim());
        }
    });

    pin.addEventListener('mouseenter', () => {
        const folder = pin.classList[1].replace('-pin', '');
        const card = document.querySelector(`.card.${folder}-card`);
        card.style.backgroundColor = '#37882c';
        pin.style.backgroundColor = 'yellow';
    });

    pin.addEventListener('mouseleave', () => {
        const folder = pin.classList[1].replace('-pin', '');
        const card = document.querySelector(`.card.${folder}-card`);
        card.style.backgroundColor = '';
        pin.style.backgroundColor = '';
    });
});

function getImagesArray(folder) {
    switch (folder) {
        case 'phineas':
            return phineasImages;
        case 'spongebob':
            return spongebobImages;
        case 'simpsons':
            return simpsonsImages;
        case 'familyguy':
            return familyguyImages;
        case 'gravityfall':
            return gravityfallImages;
        case 'teentitans':
            return teentitansImages;
        default:
            return [];
    }
}
// Add function to handle search
function searchProperties() {
    const searchTerm = document.getElementById('search-input').value;
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `data3.php?search_term=${searchTerm}`, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                updateDashboard(response);
            } else {
                console.error('Error fetching search results:', xhr.status);
            }
        }
    };
    xhr.send();
}

// Function to attach event listeners for cards and pins
function attachEventListeners() {
    cards.forEach(existingCard => {
        existingCard.addEventListener('click', () => {
            const folder = existingCard.getAttribute('data-folder');
            openPopup(folder);
        });
    });

    pins.forEach(existingPin => {
        existingPin.addEventListener('click', () => {
            const folder = existingPin.classList[1].replace('-pin', '');
            openPopup(folder);
        });
    });
}

// Function to update dashboard with search results
function updateDashboard(result) {
    const cardContainer = document.querySelector('.card-container');
    cardContainer.innerHTML = '';

    // Add the search bar back to the card container
    const searchBarHTML = `
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search..." oninput="searchProperties()">
        </div>
    `;
    cardContainer.innerHTML += searchBarHTML;

    // Create and append the card with search result
    const card = document.createElement('div');
    card.classList.add('card');
    card.dataset.folder = result.name.toLowerCase(); 
    card.dataset.price = result.price; 
    card.dataset.address = result.address; 
    card.dataset.bed = result.beds; 
    card.dataset.bath = result.baths; 
    card.dataset.sqft = result.sqft; 
    card.innerHTML = `
        <div class="card-content">
            <div class="image-container">
                <img src="${result.image_path}" alt="${result.name} Image">
            </div>
            <div class="info-container">
                <h2>${result.name}</h2>
                <div class="details">
                    <p>Price: $${result.price}</p>
                    <p>Address: ${result.address}</p>
                    <p>Beds: ${result.beds} | Baths: ${result.baths} | Sq Ft: ${result.sqft}</p>
                </div>
            </div>
        </div>
    `;
    
    cardContainer.appendChild(card);

    // Attach event listeners for the new card
    card.addEventListener('click', () => {
        openPopup(result.name.toLowerCase());
    });

    // Attach event listener for the pin
    const newPin = document.querySelector(`.pin.${result.name.toLowerCase()}-pin`);
    newPin.addEventListener('click', () => {
        openPopup(result.name.toLowerCase());
    });

    attachEventListeners();
}

const images = ['ad1.png', 'ad2.jpg', 'ad3.JPG'];

let currentIndex = 0;

// Function to change image every 4 seconds
function changeImage() {
    currentIndex = (currentIndex + 1) % images.length;
    document.getElementById('slideshow').src = images[currentIndex];
}
setInterval(changeImage, 4000);

function makeOffer() {
    
    popupDetails.innerHTML = `
        <h3>Your offer will be sent to the owner</h3>
        <label for="offer">Enter your offer amount: </label>

        <input type="number" id="offer" name="offer" min="0" max="10000000" />
        <button id="submit-offer-btn">Submit Offer</button>
    `;
    popupContainer.style.display = 'block';
    // Select the Make Offer button by its ID and add an event listener
    const submitOfferBtn = document.getElementById('submit-offer-btn');
    submitOfferBtn.addEventListener('click', submitOffer);
}

function submitOffer() {
    closePopup();
    alert('Offer made!');
}
function addWishlist() {
    const propertyName = document.getElementById('popup-card-name').textContent.trim();
    console.log("Property Name:", propertyName);

    // Set the property name in the hidden input field
    document.getElementById('wishlistPropertyName').value = propertyName;

    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'wishlistHandler.php', true);

    // Set up the callback function to handle the response
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            // If the request was successful, display a confirmation message
            alert('Property added to wishlist successfully!');
        } else {
            // If there was an error, display an error message
            alert('Error adding property to wishlist. Please try again later.');
        }
    };
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('property_name=' + encodeURIComponent(propertyName));
}


</script>
</body>
</html>
