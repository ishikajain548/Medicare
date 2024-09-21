        // // // Cart data
        // // const cart = [];
        // // let total = 0;

        // // // Function to add an item to the cart
        // // function addToCart(productName, price) {
        // //     cart.push({ productName, price });
        // //     total += price;

        // //     // Update the cart display
        // //     updateCartDisplay();
        // // }

        // // // Function to remove an item from the cart
        // // function removeFromCart(index) {
        // //     const removedItem = cart.splice(index, 1)[0];
        // //     total -= removedItem.price;

        // //     // Update the cart display
        // //     updateCartDisplay();
        // // }

        // // // Function to update the cart display
        // // function updateCartDisplay() {
        // //     const cartItemsElement = document.getElementById('cartItems');
        // //     const cartTotalElement = document.getElementById('cartTotal');

        // //     // Clear the current cart display
        // //     cartItemsElement.innerHTML = '';

        // //     // Populate the cart display with the current items
        // //     cart.forEach((item, index) => {
        // //         const listItem = document.createElement('li');
        // //         const removeButton = document.createElement('button');
        // //         removeButton.textContent = 'Remove';
        // //         removeButton.onclick = () => removeFromCart(index);
        // //         listItem.className = 'cart-item';
        // //         listItem.textContent = `${item.productName} - Rs.${item.price.toFixed(2)}`;
        // //         listItem.appendChild(removeButton);
        // //         cartItemsElement.appendChild(listItem);
        // //     });

        // //     // Update the total
        // //     cartTotalElement.textContent = total.toFixed(2);
        // // }

        // // // Function to toggle the cart content visibility
        // // function toggleCart() {
        // //     const cartContent = document.getElementById('cartContent');
        // //     cartContent.style.display = cartContent.style.display === 'block' ? 'none' : 'block';
        // // }

        // // // New Cart JS
       

        // const product = [
        //     {
        //         id: 0,
        //         image: '../images/advil.jpg',
        //         title: 'Z Flip Foldable Mobile',
        //         price: 120,
        //     },
        //     {
        //         id: 1,
        //         image: '../images/cataphil.webp',
        //         title: 'Air Pods Pro',
        //         price: 60,
        //     },
        //     {
        //         id: 2,
        //         image: '../images/cipla.png',
        //         title: '250D DSLR Camera',
        //         price: 230,
        //     },
        //     {
        //         id: 3,
        //         image: '../images/crocin.webp',
        //         title: 'Head Phones',
        //         price: 100,
        //     }
        // ];
        // const categories = [...new Set(product.map((item)=>
        //     {return item}))]
        //     let i=0;
        // document.getElementById('root').innerHTML = categories.map((item)=>
        // {
        //     var {image, title, price} = item;
        //     return(
        //         `<div class='box'>
        //             <div class='img-box'>
        //                 <img class='images' src=${image}></img>
        //             </div>
        //         <div class='bottom'>
        //         <p>${title}</p>
        //         <h2>$ ${price}.00</h2>`+
        //         "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        //         `</div>
        //         </div>`
        //     )
        // }).join('')
        
        // var cart =[];
        
        // function addtocart(a){
        //     cart.push({...categories[a]});
        //     displaycart();
        // }
        // function delElement(a){
        //     cart.splice(a, 1);
        //     displaycart();
        // }
        
        // function displaycart(){
        //     let j = 0, total=0;
        //     document.getElementById("count").innerHTML=cart.length;
        //     if(cart.length==0){
        //         document.getElementById('cartItem').innerHTML = "Your cart is empty";
        //         document.getElementById("total").innerHTML = "$ "+0+".00";
        //     }
        //     else{
        //         document.getElementById("cartItem").innerHTML = cart.map((items)=>
        //         {
        //             var {image, title, price} = items;
        //             total=total+price;
        //             document.getElementById("total").innerHTML = "$ "+total+".00";
        //             return(
        //                 `<div class='cart-item'>
        //                 <div class='row-img'>
        //                     <img class='rowimg' src=${image}>
        //                 </div>
        //                 <p style='font-size:12px;'>${title}</p>
        //                 <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
        //                 "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
        //             );
        //         }).join('');
        //     }
        
            
        // }

        