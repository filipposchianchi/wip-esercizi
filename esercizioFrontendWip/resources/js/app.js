require('./bootstrap');

let parent = document.getElementById("cards-holder");

document.getElementById("card-trigger").addEventListener("click", function(e) {
  let param = e.target.getAttribute("data-sku");
  let url = "https://jsonplaceholder.typicode.com/posts/" + param;
  fetch(url)
    .then(response => {
      if (response.ok) {
        return Promise.resolve(response);
      } else {
        return Promise.reject(new Error("error"));
      }
    })
    .then(response => response.json()) // parse response as JSON
    .then(data => {
      let cardContainer = document.createElement("div");
      cardContainer.classList.add("card");
      parent.append(cardContainer);
      let cardBody = document.createElement("div");
      cardBody.classList.add("card-body");
      cardContainer.append(cardBody);
      let cardTitle = document.createElement("h5");
      cardTitle.classList.add("card-title");
      cardBody.append(cardTitle);
      let cardText = document.createElement("p");
      cardText.classList.add("card-text");
      cardBody.append(cardText);
      let buttonDelete = document.createElement("button");
      buttonDelete.innerHTML = "Delete";
      buttonDelete.classList.add("btn-primary");
      buttonDelete.id = "delete";
      cardBody.append(buttonDelete);
      cardTitle.innerHTML += data.title;
      cardText.innerHTML += data.body;

      buttonDelete.addEventListener("click", function() {
        cardContainer.remove();
      });
    });
});

document.getElementById("menu").addEventListener("click", function() {
    var x = document.getElementsByTagName("UL");
    
    x[0].classList.toggle("invisibile")
    


    
});


    
   
        




