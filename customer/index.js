const sessionVariable = document.querySelector('#session-variable').textContent;

(function () {
    const xhr = new XMLHttpRequest();
  
    xhr.open("GET", "../admin/dashboard_process.php", true);
  
    xhr.onload = function () {
      if (this.status === 200) {
        const data = JSON.parse(this.responseText);
        console.log(data);
        let output = "";
  
        data.forEach(function (item) {
          output += `
          <div class="item">
          <img src="../admin/${item.poster}" alt="${item.event_name}">
          <div class="item-desc">
              <h3>${item.event_name.toUpperCase()}</h3>
              <p><i class="fas fa-rupee-sign"></i> ${item.price}</p>
          </div>
          <div>
              <button class="item-btn">${item.date_time.substring(0,10)}, <span style="color:black"> \u00A0${item.date_time.substring(10,19)}<span></button>
              <button class="ticket-btn">Add Ticket</button>
              <span id="food-id">${item.event_id}</span>
          </div>
          </div>
          `;
        });
  
        document.querySelector('#display-category').innerHTML = output;
      }
    };
  
    xhr.send();
  })();


  // Function to add ticket to cart
document.body.addEventListener('click', function(e){
    if(e.target.classList.contains('ticket-btn')){
        let event_id = e.target.nextElementSibling.textContent;
        let customer_name = sessionVariable;
        let quantity = 1;
        console.log(event_id);

        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'add_to_cart_process.php', true);

        xhr.setRequestHeader('Content-type','application/x-www-form-urlencoded')

        xhr.onload = function(){
            if(this.status === 200){
                alert(this.responseText);
            }
        }

        const cartData = `event_id=${event_id}&customer_name=${customer_name}&quantity=${quantity}`

        xhr.send(cartData);
    }
})
  