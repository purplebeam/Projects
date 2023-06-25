// Sample data for the cards
const products = {
    // Φρόυτα
    fruits: [
        {
            image: 'https://img.freepik.com/free-photo/strawberry-isolated-white-background-close-up_93675-128534.jpg?w=996&t=st=1682271996~exp=1682272596~hmac=e4de2b3079a80de4c646b4d1f226c2a88c6c15f947467ca0708b3cf4591234d5',
            name: 'Φράουλα',
            itemNumber: 'Τεμάχιο 1',
            value: '1.00 €'
        },
        {
            image: 'https://img.freepik.com/free-photo/sliced-whole-oranges_144627-3981.jpg?w=1380&t=st=1682272035~exp=1682272635~hmac=6c880690c496a7a4dd3ddef062b2b1ab079a6e79c8a6f5776a29ef67dff5ed09',
            name: 'Πορτοκάλι',
            itemNumber: 'Τεμάχιο 2',
            value: '2.00 €'
        },
        {
            image: 'https://img.freepik.com/free-vector/vector-ripe-yellow-banana-bunch-isolated-white-background_1284-45456.jpg?w=996&t=st=1682272094~exp=1682272694~hmac=02ba5fb7a188e9e946ca5a1fd0e0778a8ad1f1058c869321866fff0caa0b0c24',
            name: 'Μπανάνα',
            itemNumber: 'Τεμάχιο 3',
            value: '3.00 €'
        }
    ],

    // Λαχανικά
    vegetables: [
        {
            image: 'https://img.freepik.com/free-photo/tomatoes_144627-15411.jpg?w=1380&t=st=1682272181~exp=1682272781~hmac=f74359e51dbf61741b2a76b77b2e63bc2e539d902513037ca36a08cf21f8d365',
            name: 'Ντομάτα',
            itemNumber: 'Τεμάχιο 4',
            value: '1.00 €'
        },
        {
            image: 'https://img.freepik.com/free-photo/top-view-sliced-cucumbers-stand-with-knife-checkered-towel-gray-surface_141793-18590.jpg?w=1060&t=st=1682272230~exp=1682272830~hmac=62389150cc4a6f211dd65c88fb7dcf9e9f7d69ba820dd1a9a55fd653ed6ebb05',
            name: 'Αγγούρι',
            itemNumber: 'Τεμάχιο 5',
            value: '2.00 €'
        },
        {
            image: 'https://img.freepik.com/free-vector/realistic-onion-composition_1284-72135.jpg?w=996&t=st=1682272291~exp=1682272891~hmac=ca6a7c878343ac73e5c170a56923683ac7d68aae34ca1ab2f94280d44dd4f08e',
            name: 'Κρεμμύδι',
            itemNumber: 'Τεμάχιο 6',
            value: '3.00 €'
        }
    ]
}

const categorySelect = document.getElementById('category-select');
const cardContainer = document.getElementById('card-container');
const totalPriceValue = document.getElementById('total-price-value');
const submitButton = document.querySelector('.submit-button');
const cartCountElement = document.getElementById('cart-count');

let selectedProducts = new Map();



function toggleProduct(category, itemNumber) {
    const product = products[category].find(product => product.itemNumber === itemNumber);
    if (product) {
        if (selectedProducts.has(product.itemNumber)) {
            selectedProducts.set(product.itemNumber, selectedProducts.get(product.itemNumber) + 1);
        } else {
            selectedProducts.set(product.itemNumber, 1);
        }
        updateCart();
        addCards(category); // Update the cards to display the updated quantity
    }
}


function updateCart() {
    let totalPrice = 0;
    let totalItems = 0;
    for (const category in products) {
        for (const product of products[category]) {
            if (selectedProducts.has(product.itemNumber)) {
                const quantity = selectedProducts.get(product.itemNumber);
                totalPrice += parseFloat(product.value.replace('€', '')) * quantity;
                totalItems += quantity;
            }
        }
    }
    totalPriceValue.textContent = `${totalPrice.toFixed(2)} €`;
    cartCountElement.textContent = totalItems;
}

function addCards(category) {
    const productsInCategory = products[category];
    const cardHtmlArray = productsInCategory.map(product => generateCardHtml(product, category));
    cardContainer.innerHTML = cardHtmlArray.join('');
}

categorySelect.addEventListener('change', (event) => {
    const category = event.target.value;
    if (category) {
        addCards(category);
    } else {
        cardContainer.innerHTML = '';
    }
    updateCart();
});

function generateCardHtml(product, category) {
    const isSelected = selectedProducts.has(product.itemNumber);
    const quantity = selectedProducts.get(product.itemNumber) || 0;
    const cardHtml = `
	<div class="card" style = "margin: 0px 10px 0px 0px; background-color: rgba(255, 255, 255, 0.5);" onclick="toggleProduct('${category}', '${product.itemNumber}')">
	<div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
	  <img src="${product.image}" style = "border: 2px solid black; height: 100px; width: 100px;"class="img-fluid" alt="${product.name}"/>
	  <a href="#!">
		<div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
	  </a>
	</div>
	<div class="card-body">
	  <h5 class="card-title">${product.name}</h5>
	  <p class="card-text">${product.itemNumber}</p>
	  <p> Ποσότητα: ${quantity} Τεμάχια</p>
	  <a class="btn btn-primary button-footer">${product.value}</a>
	</div>
  </div>`;

    return cardHtml;
}

submitButton.addEventListener('click', () => {
    alert(`Η τελική τιμή διαμορφώνεται σε ${totalPriceValue.textContent}`);
});
