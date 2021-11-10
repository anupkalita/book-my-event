const customer_name = document.querySelector("#session-variable").textContent;

(function(){
    showTickets();
    
})()

function showTickets(){
    const xhr = new XMLHttpRequest();

    xhr.open('GET', 'orders_process.php', true);

    xhr.onload = function(){
        if(this.status === 200){
            // console.log(JSON.parse(this.responseText));
            const data = JSON.parse(this.responseText);
            console.log(data);
            let output = "";
            data.forEach(function(item){
                
                output += `
                    <div class="order-item">
                        <div class="label">
                            <p>Traansaction ID:# </p>
                            <p>Booked Date:</p>
                            <p>Event:</p>
                            <p>Total Price:</p>
                        </div>
                        <div class="order-details">
                            <p>${item.transaction_id}</p>
                            <p>${(item.date_booked).slice(0,10)}</p>
                            <p>${(item.total_event)}</p>
                            <p>${item.total_price}</p>
                            <button class="ticket-btn">Cancel Ticket</button>
                        </div>
                    </div>
                `
            });

            document.querySelector('#orders').innerHTML = output;
        }
    }

    xhr.send();
}

// To cancel tickets
document.body.addEventListener('click', function(e){
    if(e.target.classList.contains("ticket-btn")){

        let transaction_id = e.target.parentElement.firstElementChild.textContent;

        console.log(transaction_id);

        const xhr = new XMLHttpRequest;
    
            xhr.open('POST', 'cancel_ticket_process.php', true);
    
            xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')
    
            xhr.onload = function(){
                if(this.status === 200){
                    // console.log(this.responseText);
                    const response = JSON.parse(this.responseText);
                    alert(response);
                    showTickets();

                }
            }
    
            const cancelTicket = `transaction_id=${transaction_id}&customer_name=${customer_name}`
    
         xhr.send(cancelTicket);
        
    }
})