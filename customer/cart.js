const customer_name = document.querySelector('#session-variable').textContent;

// Load cart items as soon as the page loads
(function(){
    loadCartItems();
})();

//Function to Load cart items
function loadCartItems(){
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'cart_process.php', true)

    xhr.onload = function(){
        if(this.status === 200){
            const data = JSON.parse(this.responseText);
            // console.log(data);
            let output = "";
            data.forEach(function(item){

                output += `<div class="cart-item">
                            <div class="cart-food-img">
                                <img src="../admin/${item.poster}" alt="${item.event_name}">
                            </div>
                            <div class="cart-food-details">
                                <h2>${(item.event_name).toUpperCase()}</h2>
                                <p>Price: ${item.price}</p>
                                <p>Ticket: 
                                <input type="number" name="num" value="${item.quantity}" id="quantity" min="1">
                                </p>
                                <button id="cart-remove-btn">Remove</button>
                                <span id="food-id">${item.event_id}</span>
                            </div>
                        </div>
                        `
                });
                    
                document.querySelector('#cart-section').innerHTML = output;

            // to populate the order summary details as soon as the page loads
            order_summary();
        }
    }

    xhr.send();
};


// Function to change quantity value in database
document.body.addEventListener('change', function(e){

    // if changed quanity value is <5 & >0
    if(e.target.value>0){
        if(e.target.id === "quantity"){
            let quantity = e.target.value;
            let event_id = e.target.parentElement.nextElementSibling.nextElementSibling.textContent;
            
            const xhr = new XMLHttpRequest;
    
            xhr.open('POST', 'quantity_update_process.php', true);
    
            xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
    
            xhr.onload = function(){
                if(this.status === 200){
                    // console.log(JSON.parse(this.responseText));

                    // To populate the order summary details after quantity change
                    order_summary();
                }
            }
    
            const quantityValue = `event_id=${event_id}&customer_name=${customer_name}&quantity=${quantity}`
    
            xhr.send(quantityValue);
        }

    }
    else{
        alert('Quantity more than 5 not allowed');
    }

});


// Function to fetch order_summary from database async
function order_summary(){
    
    const xhr = new XMLHttpRequest;

    xhr.open('GET', 'order_summary_process.php', true);

    xhr.onload = function(){
        let output = "";
        if(this.status === 200){
            const data = JSON.parse(this.responseText);
            // console.log(data);
            let total=0;
            data.forEach(function(item){
                total = total + (item.price * item.quantity);
            })

            output = `
                    <h3>Order Summary</h3>
                    <hr>
                    <p>Cart Subtotal: ${total}</p>
                    <hr>
                    <div id="checkout">
                        <button id="checkout-btn">Book Tickets</button>
                    </div>
             `
        }

        document.querySelector('#order-summary').innerHTML = output;

    }

    xhr.send();
};


// To remove item form the cart
document.body.addEventListener('click', function(e){
    if(e.target.id === "cart-remove-btn"){
        // console.log(e.target.nextElementSibling.textContent);
        let event_id = e.target.nextElementSibling.textContent;

        const xhr = new XMLHttpRequest;
    
            xhr.open('POST', 'remove_cartitem_process.php', true);
    
            xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
    
            xhr.onload = function(){
                if(this.status === 200){
                    // console.log(this.responseText);

                    // To populate the order summary details after item removed
                    order_summary();
                    // To Load cart items after item is removed
                    loadCartItems();
                }
            }
    
            const removeItem = `event_id=${event_id}&customer_name=${customer_name}`
    
         xhr.send(removeItem);
        
    }
})


// Checkout button
document.body.addEventListener('click', function(e){
    if(e.target.id === "checkout-btn"){
        const xhr = new XMLHttpRequest;

    xhr.open('GET', 'cart_process.php', true);

    xhr.onload = function(){

        if(this.status === 200){
            const data = JSON.parse(this.responseText);
            checkout(data);
            // console.log(data);
        }

    }

    xhr.send();
    }
});


function checkout(data){
    let totalEvent = "";
    let totalPrice = 0;
    console.log(data);
    data.forEach(function(item){
        totalEvent += `${item.quantity}-${item.event_name} (${(item.date_time).substring(0,19)}), `;
        totalPrice += item.price * item.quantity;
        console.log(item.date_time);
    });

    // console.log(totalPrice, totalEvent, customer_name);
    if(data.length!=0){

        const xhr = new XMLHttpRequest;
    
           xhr.open('POST', 'checkout_process.php', true);
    
           xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
    
           xhr.onload = function(){
               if(this.status === 200){
                   location.href="tickets.php";
                console.log(JSON.parse(this.responseText));
               }
           }

           const checkoutItem = `totalPrice=${totalPrice}&totalEvent=${totalEvent}&customer_name=${customer_name}`
    
        xhr.send(checkoutItem);
    }else{
        alert("No items available")
    }

        
    
}