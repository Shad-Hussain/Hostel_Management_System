let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        name : 'Burger',
        tag : 'burger',
        price: 15,
        incart: 0
    },

    {
        name : 'Pizza',
        tag : 'pizza',
        price: 40,
        incart: 0
    },

    {
        name : 'Pau Bhaji',
        tag : 'paubhaji',
        price: 30,
        incart: 0
    },

    {
        name : 'Bread Omlet',
        tag : 'breadomlet',
        price: 10,
        incart: 0
    },

    {
        name : 'Chai',
        tag : 'chai',
        price: 5,
        incart: 0
    },

    {
        name : 'Aaloo Paratha',
        tag : 'aalooparatha',
        price: 10,
        incart: 0
    },
]

for(let i=0; i < carts.length; i++){
 carts[i].addEventListener('click', () =>{
    cartNumbers(products[i]);
    totalCost(products[i]);
 })
}

function onloadCartNumbers(){
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers)
    {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product){

    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if( productNumbers){
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;

    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(product);
}

function setItems(product){
let cartItems = localStorage.getItem('productsInCart');
cartItems = JSON.parse(cartItems);

if(cartItems != null) {
    if(cartItems[product.tag] == undefined){
        cartItems = {
            ...cartItems,
            [product.tag] : product
        }
    }
    (cartItems[product.tag].incart += 1);
} else{
    product.incart = 1;
    cartItems = {
    [product.tag] : product
}
}

localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
//console.log("product price is",product.price);
let cartCost = localStorage.getItem('totalCost');
console.log("My cartCost is", cartCost);


if(cartCost != null) {
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + product.price);
}else{ 
    localStorage.setItem("totalCost", product.price);
}

}

function displayCart(){
    let  cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    let productContainer = document.querySelector(".products");

    console.log(cartItems);
    if( cartItems && productContainer ) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product">
                <ion-icon name="close-circle"></ion-icon>
                <img src="./images/${item.tag}.jpg">
                <span>${item.name}</span>
            </div>
            <div class = "price">${item.price}</div>
            <div class ="quantity">
            
            `
        });
    }

}

onloadCartNumbers();
displayCart();