class ProductService {

    constructor(){
        this.cart = this.getCartProducts();
    }

    getCartProducts(){
        let cartProducts = JSON.parse(localStorage.getItem('cartProducts'));
        if(cartProducts){
            return cartProducts;
        }else{
            return [];
        }
    }

    addProductToCart(product){
        this.cart.push(product);
        this.updateCartStorage();
        
    }

    updateCartStorage(){
        localStorage.setItem('cartProducts', JSON.stringify(this.cart));
    }

    getFormatedCart(){
        var concatenatedProducts ='';

        this.cart.forEach(function(product){

            //pentru fiecare produs construieste urmatorul html
            concatenatedProducts += 
            `
            <div class="card border m-2 p-2">
                
                <h5 class="card-title p-1">${product.name}</h5>
                <div class="card-body border border-dark rounded mt-1 mb-1 d-flex flex-column justify-content-between">   
                    
                    <p class="card-text">Price: ${product.price} lei</p>
                    
                </div>
                
            </div>`
         });
         return concatenatedProducts;
    }

    getCartProductsPrice(){
        var fullPrice = 0;
        this.cart.forEach(function(product){
            fullPrice += product.price
        });
        return `The full price of your products is ${fullPrice}`;
    }

}

var products = new ProductService;

function addToCart(product) {
    products.addProductToCart(product);
    return  alert('Product added')   

};

function showCart() {
    //transformam lista de produse intr-un string ca sa il putem injecta in pagina 
    let formattedproducts = products.getFormatedCart();
    document.getElementById('productsListId').innerHTML = formattedproducts;
 }

function checkOut(){
    localStorage.clear();
}