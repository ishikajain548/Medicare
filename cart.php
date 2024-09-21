<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="icon" type="image/png" href="images/logo3.PNG"  size="64x64" />
    <!-- <link rel="stylesheet" href="css/cart.css"> -->
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
<style>
    
 *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    font-size: 18px;
}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}
.header{
    height: 80px;
    width: 70%;
    background-color: rgb(5, 118, 163);
    border-radius: 3px;
    margin: 30px 0px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px;
}
.header .logo img{
    /* font-size: 30px;
    font-weight: bold;
    color: white; */
    height: 70px;
    width:70px;
}
.cart{
    display: flex;
    background-color: white;
    justify-content: space-between;
    align-items: center;
    padding: 7px 10px;
    border-radius: 3px;
    width: 80px;
}
.fa-solid{
    color: rgb(5, 118, 163);
}
.cart p{
    height: 22px;
    width: 22px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 22px;
    background-color: rgb(5, 118, 163);
    color: white;
}
.container{
    display: flex;
    width: 70%;
    margin-bottom: 30px;
    
}
#root{
    width: 60%;
    display: grid;
    /* grid-template-columns: repeat(2, 1fr); */
    grid-template-columns: repeat(3, 1fr);
    grid-template-rows: repeat(10, 1fr);
    grid-gap: 20px;
}
.sidebar{
    width: 40%;
    border-radius: 5px;
    background-color: #eee;
    margin-left: 20px;
    padding: 15px;
    text-align: center;
}
.head{
    background-color: rgb(5, 118, 163);
    border-radius: 3px;
    height: 40px;
    padding: 10px;
    margin-bottom: 20px;
    color: white;
    display: flex;
    align-items: center;
}
.foot{
    display: flex;
    justify-content: space-between;
    margin: 20px 0px;
    padding: 10px 0px;
    border-top: 1px solid #333;
}
.box{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    border: 1px solid rgb(5, 118, 163);
    border-radius: 5px;
    padding: 15px;
}
.img-box{
    width: 100%;
    height: 180px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.images{
    max-width: 90%;
    max-height: 90%;
    object-fit: cover;
    object-position: center;
}
.bottom{
    margin-top: 20px;
    width: 100%;
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    height: 110px;
}
h2{
    font-size: 20px;
    color: #130f40;
}
button{
    width: 100%;
    position: relative;
    border: none;
    border-radius: 5px;
    background-color: rgb(5, 118, 163);
    padding: 7px 25px;
    cursor: pointer;
    color: white;
}
button:hover{
    background-color: #333;
}
.cart-item{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px;
    background-color: white;
    border-bottom: 1px solid #aaa;
    border-radius: 3px;
    margin: 10px 10px;
}
.row-img{
    width: 50px;
    height: 50px;
    border-radius: 50px;
    border: 1px solid rgb(5, 118, 163);
    display: flex;
    align-items: center;
    justify-content: center;
}
.rowimg{
    max-width: 43px;
    max-height: 43px;
    border-radius: 50%;
}
.fa-trash{
    margin-top: 5px;
}
.fa-trash:hover{
    cursor: pointer;
    color: #333;
}
.cart-item-details {
    flex-grow: 1;
    margin-left: 10px; /* Added margin between image and details */
}

.cart-item-quantity {
    display: flex;
    align-items: center;
}

.cart-item-quantity button {
    border: none;
    background: none;
    cursor: pointer;
    font-size: 14px;
    padding: 3px 8px;
    margin-bottom: 7px;
}

.cart-item-quantity span {
    margin: 0 8px; /* Added margin between quantity and buttons */
}

.cart-item-total-price {
    font-size: 15px;
}
.p{
    color:white;
}

</style>

</head>

<body>
<div class="header">
            <p class="logo"><img src="images/logo3.PNG" alt="logo"></p>
            <p class='p'><?php echo "Welcome to the cart! "  ?><?= $_SESSION['auth_user']['name']?></p>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">Rs. 0.00</h2>
                </div>
                <div id="checkout-container"></div>

            </div>
        </div>

   

        
<!-- <script src="js/cart.js"></script> -->

<script>
        const product = [
            {
                id: 1,
                image: 'images/crocin.webp',
                title: 'Crocin',
                price: 17,
                available_quantity: 20
            },
            {
                id: 2,
                image: 'images/sinarest.jpg',
                title: 'Sinarest',
                price: 67.08,
                available_quantity: 10
            },
            {
                id: 3,
                image: 'images/shelcal.webp',
                title: 'Shelcal 500',
                price: 116.82,
                available_quantity: 15
            },
            {
                id: 4,
                image: 'images/evion.webp',
                title: 'Evion 400 mg',
                price: 36.00,
                available_quantity: 15
            },
            {
                id: 5,
                image: 'images/sd.webp',
                title: 'Saridon',
                price: 41.90,
                available_quantity: 15
            },
            {
                id: 6,
                image: 'images/at.webp',
                title: 'Aspirin',
                price: 75.40,
                available_quantity: 10
            },
            {
                id: 7,
                image: 'images/disprin.jpg',
                title: 'Dispirin',
                price: 11.20,
                available_quantity: 15
            },
            {
                id: 8,
                image: 'images/ct.jpg',
                title: 'Cetrizine IP',
                price: 17.00,
                available_quantity: 10
            },
            {
                id: 9,
                image: 'images/multivitamin.jpeg',
                title: 'Multivitamin Capsule',
                price: 316,
                available_quantity: 12
            },
            {
                id: 10,
                image: 'images/omega3.jpg',
                title: 'Omega 3 Fish Oil Capsules',
                price: 329,
                available_quantity: 15
            },
            {
                id: 11,
                image: 'images/vitamind3.jpg',
                title: 'Vitamin D3 softgels',
                price: 370,
                available_quantity: 20
            },
            {
                id: 12,
                image: 'images/melatonin.webp',
                title: 'Melatonin Sleep Aid',
                price: 291,
                available_quantity: 15
            },
            {
                id: 13,
                image: 'images/advil.jpg',
                title: 'Advil Liquigels',
                price: 200,
                available_quantity: 25
            },
            {
                id: 14,
                image: 'images/probiotic.webp',
                title: 'Probiotic Capsules',
                price: 212,
                available_quantity: 30
            },
            {
                id: 15,
                image: 'images/zedex.webp',
                title: 'Zedex',
                price: 148.11,
                available_quantity: 40
            },
            {
                id: 16,
                image: 'images/zandu_ayurvedic.webp',
                title: 'Zandu Ayurvedic Cough Syrup',
                price: 243.00,
                available_quantity: 20
            },
            {
                id: 17,
                image: 'images/bzedex.webp',
                title: 'Bro-Syrup',
                price: 134.81,
                available_quantity: 25
            },
            {
                id: 18,
                image: 'images/promethazine.jpg',
                title: 'Promethazine Oral Solution',
                price: 300,
                available_quantity: 10
            },
            {
                id: 19,
                image: 'images/panderm.webp',
                title: 'Panderm 15gm',
                price: 112.00,
                available_quantity: 15
            },
            {
                id: 20,
                image: 'images/moov2.jpeg',
                title: 'Moov Cream',
                price: 167.40,
                available_quantity: 250
            },
            {
                id: 21,
                image: 'images/burnheal.webp',
                title: 'Burn Heal',
                price: 54.4,
                available_quantity: 150
            },
            {
                id: 22,
                image: 'images/cipladine.webp',
                title: 'Cipladin',
                price: 14,
                available_quantity: 200
            },
            {
                id: 23,
                image: 'images/cataphil.webp',
                title: 'Cetaphil Moisturising Lotion',
                price: 1503.08,
                available_quantity: 10
            },
            {
                id: 24,
                image: 'images/nivea.webp',
                title: 'Nivea Cocoa Body Lotion',
                price: 489.50,
                available_quantity: 15
            },
            {
                id: 25,
                image: 'images/lacto.webp',
                title: 'Lacto Calamine Body Lotion',
                price: 73.60,
                available_quantity: 15
            },
            {
                id: 26,
                image: 'images/biotique.webp',
                title: 'Biotique Bio White Orchid Lotion',
                price: 177.21,
                available_quantity: 12
            },
            {
                id: 27,
                image: 'images/dispovan.webp',
                title: 'Dispovan Insulin Syringe(Pack of 10)',
                price: 95,
                available_quantity: 10
            },
            {
                id: 28,
                image: 'images/discarditt.webp',
                title: 'BD Discarditt LI Syringe',
                price: 28.50,
                available_quantity: 5
            },
            {
                id: 29,
                image: 'images/monocef.webp',
                title: 'Monocef 1 gm Injection',
                price: 60.09,
                available_quantity: 10
            },
            {
                id: 30,
                image: 'images/lupisulin.webp',
                title: 'Lupisulin M30 30/70 100 IU Cartridge',
                price: 339.28,
                available_quantity: 5
            },

        ];
        const categories = [...new Set(product.map((item)=>
            {return item}))]
            let i=0;
        document.getElementById('root').innerHTML = categories.map((item)=>
        {
            var {image, title, price} = item;
            return(
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div>
                <div class='bottom'>
                <p id='title'>${title}</p>
                <h2 id='price'>Rs. ${price}.00</h2>`+
                "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
               
                `</div>
                </div>`
                
            )
        }).join('')
        
        // 
        var cart = [];

    // function addtocart(a) {
    //     // Check if the item is already in the cart
    //     const index = cart.findIndex(item => item.id === categories[a].id);
        
    //     if (index !== -1) {
    //         // If the item is already in the cart, increase its quantity
    //         cart[index].quantity += 1;
    //     } else {
    //         // If the item is not in the cart, add it with quantity 1
    //         cart.push({ ...categories[a], quantity: 1 });
    //     }
        
    //     alert("Your item has been added to cart.");
    //     displaycart();
    // }
    
   


function checkQuantity(selectedProduct) {
    if (selectedProduct.available_quantity > 0 && selectedProduct.available_quantity >= 1) {
        return true; // Quantity is available
    } else {
        alert("Sorry, the product is out of stock!");
        return false; // Quantity is not available
    }
}


// function addtocart(a) {
//     const selectedProduct = product[a];
//     const index = cart.findIndex(item => item.id === selectedProduct.id);

//     if (index !== -1) {
//         cart[index].quantity += 1;
//         alert("This item is already in your cart.");
//     } else {
//         if (selectedProduct.available_quantity > 0) {
//             // Check if the requested quantity is less than or equal to the available quantity
//             if (selectedProduct.available_quantity >= 1  ) {
//                 cart.push({ ...selectedProduct, quantity: 1 });
                
//                selectedProduct.available_quantity--; // Decrease available quantity
//                 alert("Your item has been added to cart.");
//             } 
            
//             else {
//                 alert("Sorry, the product is out of stock!");
//             }
//         } else {
//             alert("Sorry, the product is out of stock!");
//         }
//     }

    
//     displaycart();
// }

function addtocart(a) {
    const selectedProduct = product[a];
    const index = cart.findIndex(item => item.id === selectedProduct.id);

    if (index !== -1) {
        cart[index].quantity += 1;
        alert("This item is already in your cart.");
    } else {
        if (selectedProduct.available_quantity > 0) {
            // Check if the requested quantity is less than or equal to the available quantity
            if (selectedProduct.available_quantity >= 1) {
                // Update cart data and display
                cart.push({ ...selectedProduct, quantity: 1 });
                selectedProduct.available_quantity--;
                displaycart();
                
                alert("Your item has been added to cart.");
                
            } else {
                alert("Sorry, the product is out of stock!");
            }
        } else {
            alert("Sorry, the product is out of stock!");
        }
    }
}




    // function delElement(a) {
    //     cart.splice(a, 1);
    //     displaycart();
    // }
    function delElement(a) {
            const selectedProduct = cart[a];
            const productIndex = product.findIndex(item => item.id === selectedProduct.id);
            product[productIndex].available_quantity += selectedProduct.quantity; // Increase available quantity
            cart.splice(a, 1);
            displaycart();
        }

    // function displaycart() {
    //     let j = 0,
    //         total = 0;
    //     document.getElementById("count").innerHTML = cart.reduce((acc, item) => acc + item.quantity, 0);
    //     if (cart.length == 0) {
    //         document.getElementById('cartItem').innerHTML = "Your cart is empty";
    //         document.getElementById("total").innerHTML = "Rs. " + 0 + ".00";
    //     } else {
    //         document.getElementById("cartItem").innerHTML = cart.map((items,index) => {
    //             var { image, title, price, quantity } = items;
    //             total += price * quantity;
    //             document.getElementById("total").innerHTML = "Rs. " + total + ".00";
    //             return (
    //                 `<div class='cart-item'>
    //                     <div class='row-img'>
    //                         <img class='rowimg' src=${image}>
    //                     </div>
    //                     <div>
    //                         <p style='font-size:12px;'>${title}</p>
    //                         <h2 style='font-size: 15px;'>Rs. ${price}.00</h2>
    //                     </div>
    //                     <div>
    //                         <button onclick='decreaseQuantity(${index})'>-</button>
    //                         <span>${quantity}</span>
    //                         <button onclick='increaseQuantity(${index})'>+</button>
    //                         <i class='fa-solid fa-trash' onclick='delElement(${index})'></i>
    //                     </div>
    //                 </div>`
    //             );
    //         }).join('');
    //     }
    // }
    function displaycart() {
            let total = 0;
            document.getElementById("count").innerHTML = cart.reduce((acc, item) => acc + item.quantity, 0);
            if (cart.length == 0) {
                document.getElementById('cartItem').innerHTML = "Your cart is empty";
                document.getElementById("total").innerHTML = "Rs. " + 0 + ".00";
            } else {
                document.getElementById("cartItem").innerHTML = cart.map((items,index) => {
                    var { image, title, price, quantity } = items;
                    total += price * quantity;
                    
                    document.getElementById("total").innerHTML = "Rs. " + total + ".00";
                    return (
                        `<div class='cart-item'>
                            <div class='row-img'>
                                <img class='rowimg' src=${image}>
                            </div>
                            <div>
                                <p style='font-size:12px;'>${title}</p>
                                <h2 style='font-size: 15px;'>Rs. ${price}.00</h2>
                            </div>
                            <div>
                                <button onclick='decreaseQuantity(${index})'>-</button>
                                <span>${quantity}</span>
                                <button onclick='increaseQuantity(${index})'>+</button>
                                <i class='fa-solid fa-trash' onclick='delElement(${index})'></i>
                            </div>
                        </div>`
                    );
                }).join('');
        
           }
           
           const checkoutContainer = document.getElementById('checkout-container');
            if (cart.length > 0) {
                // If cart is not empty, display the checkout button
                checkoutContainer.innerHTML = "<button onclick='checkout()'>Checkout</button>";
            } else {
                // If cart is empty, hide the checkout button
                checkoutContainer.innerHTML = "";
            }
        }
        function checkout() {
            // Implement your checkout logic here
            // window.location.href="checkout.php";
            var valueToSend = document.getElementById("total").textContent;
            window.location.href = "checkout.php?value=" + encodeURIComponent(valueToSend);
        }

        


    // function increaseQuantity(index) {
    //     cart[index].quantity++;
    //     displaycart();
    // }
    function increaseQuantity(index) {
    const selectedProduct = cart[index];
    
    // Check if increasing the quantity exceeds the available quantity
    if (selectedProduct.available_quantity > selectedProduct.quantity) {
        selectedProduct.quantity++;
        displaycart();
    } else {
        alert("Sorry, the maximum available quantity for this product has been reached.");
    }
}

    function decreaseQuantity(index) {
        if (cart[index].quantity > 1) {
            cart[index].quantity--;
            displaycart();
        }
    }
    document.getElementById('root').innerHTML = product.map((item, index) => {
            var { image, title, price } = item;
            return (
                `<div class='box'>
                    <div class='img-box'>
                        <img class='images' src=${image}></img>
                    </div>
                    <div class='bottom'>
                        <p>${title}</p>
                        <h2>Rs. ${price}.00</h2>
                        <button onclick='addtocart(${index})'>Add to cart</button>
                    </div>
                </div>`
            );
        }).join('');

</script>
</body>
</html>