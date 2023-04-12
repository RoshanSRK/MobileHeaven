var $sid = "<?php echo $_SESSION['sid'] ?>";
// open cart modal
const cart = document.querySelector('#toggle-cart');
const cartModalOverlay = document.querySelector('.cart-modal-overlay');

cart.addEventListener('click', () => {
  if (cartModalOverlay.style.transform === 'translateX(200%)'){
    cartModalOverlay.style.transform = 'translateX(0)';
  } else {
    cartModalOverlay.style.transform = 'translateX(200%)';
  }
})
// end of open cart modal

// close cart modal
const closeBtn = document.querySelector ('#close-btn');

closeBtn.addEventListener('click', () => {
  cartModalOverlay.style.transform = 'translateX(200%)';
  wishlistModalOverlay.style.transform = 'translateX(200%)';
});

cartModalOverlay.addEventListener('click', (e) => {
  if (e.target.classList.contains('cart-modal-overlay')){
    cartModalOverlay.style.transform = 'translateX(200%)';
  }
})


// end of close cart modal

// add products to cart
const addToCart = document.getElementsByClassName('cart-btn');
const productRow = document.getElementsByClassName('product-row');

for (var i = 0; i < addToCart.length; i++) { //infinite loop 
  button = addToCart[i];
  button.addEventListener('click', addToCartClicked);
}

function addToCartClicked (event) {
  button = event.target;
  var cartItem = ((button.parentElement).parentElement).parentElement;
  var price = cartItem.getElementsByClassName('price')[0].innerText;
  var imageSrc = cartItem.getElementsByClassName('product-image')[0].src;
  addItemToCart (price, imageSrc);
  updateCartPrice();
}

function addItemToCart (price, imageSrc) {

  var productRow = document.createElement('div');
  productRow.classList.add('product-row');
  var productRows = document.getElementsByClassName('product-rows')[0];
  var cartImage = document.getElementsByClassName('cart-image');
  
  for (var i = 0; i < cartImage.length; i++){
    if (cartImage[i].src == imageSrc){
      alert ('This item has already been added to the cart');
      return;
    }
  }
 
  var cartRowItems = `
  <div class="product-row">
        <img class="cart-image" src="${imageSrc}" alt="">
        <span class ="cart-price">${price}</span>
        <input class="product-quantity" type="number" value="1">
        <button class="remove-btn">Remove</button>
        </div>
      `;
  productRow.innerHTML = cartRowItems;
  productRows.append(productRow);
  productRow.getElementsByClassName('remove-btn')[0].addEventListener('click', removeItem);
  productRow.getElementsByClassName('product-quantity')[0].addEventListener('change', changeQuantity);
  updateCartPrice();
  updateCartDB(imageSrc);
}
// end of add products to cart

//updateCartDB
function updateCartDB(imageSrc) {
$.ajax({    
        url: "findProdId.php",             
        type: "POST",
		data: {
			productImage : imageSrc
		},
        	success: function(data){                    
            	var $productId = data;
             alert($productId);
        	}
});
$.ajax({
		    url: "savetocart.php",
		    type: "POST",
	    	data:
     {
			productId : $productId,
			sid: $sid,
			quantity: quantity,				
		},
		cache: false,
		success: alert("inserted")
	});
}

// Remove products from cart
const removeBtn = document.getElementsByClassName('remove-btn');
for (var i = 0; i < removeBtn.length; i++) {
  button = removeBtn[i];
  button.addEventListener('click', removeItem);
}

function removeItem (event) {
  btnClicked = event.target;
  btnClicked.parentElement.parentElement.remove();
  updateCartPrice();
   document.getElementsByClassName('wishlist-quantity')[0].textContent = productRowW.length/2;
}

// update quantity input
var quantityInput = document.getElementsByClassName('product-quantity')[0];

for (var i = 0; i < quantityInput; i++){
  input = quantityInput[i];
  input.addEventListener('change', changeQuantity);
}

function changeQuantity(event) {
  var input = event.target;
  if (isNaN(input.value) || input.value <= 0){
    input.value = 1;
  }
  updateCartPrice();
}
// end of update quantity input

// update total price
function updateCartPrice() {
  var total = 0;
  for (var i = 0; i < productRow.length; i += 2) {
    cartRow = productRow[i];
  var priceElement = cartRow.getElementsByClassName('cart-price')[0];
  var quantityElement = cartRow.getElementsByClassName('product-quantity')[0];
  var price = parseFloat(priceElement.innerText.replace('Rs', ''));
  var quantity = quantityElement.value;
  total = total + (price * quantity );
    
  }
  document.getElementsByClassName('total-price')[0].innerText =  'Rs ' + total;

document.getElementsByClassName('cart-quantity')[0].textContent = i /= 2;
}
// end of update total price

// purchase items
const purchaseBtn = document.querySelector('.purchase-btn');

const closeCartModal = document.querySelector('.cart-modal');

purchaseBtn.addEventListener('click', purchaseBtnClicked);

function purchaseBtnClicked () {
 cartModalOverlay.style.transform= 'translateX(-100%)'
 window.location.href = "indexcheckout.html";
}
// end of purchase items

//alert user if cart is empty

//Script for Wishlist 
//wishlist
const wishlist = document.querySelector('#wishlist');
const wishlistModalOverlay = document.querySelector('.wishlist-modal-overlay');

wishlist.addEventListener('click', () => {
  if (wishlistModalOverlay.style.transform === 'translateX(200%)'){
    wishlistModalOverlay.style.transform = 'translateX(0)';
  } else {
    wishlistModalOverlay.style.transform = 'translateX(200%)';
  }
});
const closeBtnW = document.querySelector ('#close-btnW');

closeBtnW.addEventListener('click', () => {
  wishlistModalOverlay.style.transform = 'translateX(200%)';
});

wishlistModalOverlay.addEventListener('click', (e) => {
  if (e.target.classList.contains('wishlist-modal-overlay')){
    wishlistModalOverlay.style.transform = 'translateX(200%)';
  }
});

//add products to wishlist
const addToWishlist = document.getElementsByClassName('heart-btn');
const productRowW = document.getElementsByClassName('productW-row');

for (var i = 0; i < addToWishlist.length; i++) { //infinite loop 
  button = addToWishlist[i];
  button.addEventListener('click', addToWishlistClicked);
}

function addToWishlistClicked (event) {
  button = event.target;
  var cartItem = ((button.parentElement).parentElement).parentElement;
  var price = cartItem.getElementsByClassName('price')[0].innerText;
  var imageSrc = cartItem.getElementsByClassName('product-image')[0].src;
  addItemToWishlist (price, imageSrc);
  document.getElementsByClassName('wishlist-quantity')[0].textContent = productRowW.length/2;
  //updateCartPrice();
}

function addItemToWishlist (price, imageSrc) {
  var productRowW = document.createElement('div');
  productRowW.classList.add('productW-row');
  var productRowsW = document.getElementsByClassName('productW-rows')[0];
  var wishlistImage = document.getElementsByClassName('wishlist-image');
  
  for (var i = 0; i < wishlistImage.length; i++){
    if (wishlistImage[i].src == imageSrc){
      alert ('This item has already been added to your wishlist');
      return;
    }
  }
  
  var cartRowItems = ` 
  <div class="productW-row">
        <img class="wishlist-image" src="${imageSrc}" alt="">
        <span class ="cart-price">${price}</span>
        <button class="remove-btn">Remove</button>
        </div>
        
      `;
  productRowW.innerHTML = cartRowItems;
  productRowsW.append(productRowW);
  productRowW.getElementsByClassName('remove-btn')[0].addEventListener('click', removeItem);
  document.getElementsByClassName('wishlist-quantity')[0].textContent = productRowW.length/2;
}

