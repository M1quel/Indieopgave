var itemContainer = document.getElementsByClassName('item-container')[0];

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', loader)
    document.addEventListener('DOMContentLoaded', ready)
}else {
    loader()
    ready()
}

function loader() {

    if (sessionStorage.length == 0) {
        document.getElementsByClassName('item-container')[0].innerHTML = '<h1 style="font-size: 20px;">Du har ikke noget i din kurv</h1>';
        document.getElementsByClassName('item-container')[0].style.justifyContent = "center";
    } else {
        for(let i=0; i<sessionStorage.length; i++) {
            let key = sessionStorage.key(i);
            let item = sessionStorage.getItem(key);
            document.getElementsByClassName('item-container')[0].innerHTML += item;
            console.log(sessionStorage.getItem(key))
        }
    }
    updateCartTotal()
    
}

function ready () {
    var removeCartItemBtns = document.getElementsByClassName('btn-danger');
    for (let i = 0; i < removeCartItemBtns.length; i++) {
        var button = removeCartItemBtns[i];
        button.addEventListener("click", removefunc)
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input');
    for (let i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged)
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('item-container')[0];
    var cartRows = cartItemContainer.getElementsByClassName('cart-row');
    var total = 0;
    for (let i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('cart-price')[0];
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
        var price = parseFloat(priceElement.innerText.replace('$', ''));
        var quantity = quantityElement.value;
        total = total + (price * quantity);
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total;
}



function removefunc(event) {
    var buttonClicked = event.target;
    var cartItem = buttonClicked.parentElement.parentElement;
    var title = cartItem.getElementsByClassName('cart-item-title')[0].innerText;
    sessionStorage.removeItem(title);
    loader()
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

function purchaseClicked() {
    alert("Thank you for your purchase")
    sessionStorage.clear()
}


















function purchaseClicked() {
    alert("Thanks for your purchase");
    sessionStorage.clear();
    loader();
}


