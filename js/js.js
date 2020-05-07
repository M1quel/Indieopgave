if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
}else {
    ready()
}

function ready () {
    var addToCartButtons = document.getElementsByClassName('add-to-cart-btn');
    for (let i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click', addToCartClicked)
    }
}

function addToCartClicked(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement.parentElement;
    var title = shopItem.getElementsByClassName('vare-navn')[0].innerText;
    var price = shopItem.getElementsByClassName('vare-pris')[0].innerText;
    var imageSrc = shopItem.getElementsByClassName('item-img')[0].src;
    addItemToCart(title, price, imageSrc);
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div');
    
    var cartRowContents = `
        <div class="cart-row">
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <div class="price-wrapper">
            <span class="cart-price cart-column">${price}</span>
        </div>
            
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>
        </div>`
    cartRow.innerHTML = cartRowContents;
    var sessionStorageName = title;
    console.log(sessionStorageName)
    
    if (sessionStorage.getItem(sessionStorageName)) {
        alert("This item is already in the cart");
        return;
    } else {
        sessionStorage.setItem(sessionStorageName, cartRow.innerHTML);
    }
}