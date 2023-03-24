hamburger = document.querySelector(".hamburger");
    hamburger.onclick = function() {
      navBar = document.querySelector(".nav-bar");
      navBar.classList.toggle("active");
    }
    
    destination = document.querySelector(".dropbtn");
    destination.onclick = function() {
      desContent = document.querySelector(".destination-content");
      desContent.classList.toggle("activeD");
    }

    ticket = document.querySelector(".dropbtnT");
    ticket.onclick = function() {
      tickContent = document.querySelector(".ticket-content");
      tickContent.classList.toggle("activeT");
    }