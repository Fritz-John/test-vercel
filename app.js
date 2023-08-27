function startTypingAnimation() {
    const text = "Hello I'm \n<small>Pauline Andrea</small>";
    const text2 = "Hello I'm Pauline Andrea";
    const typingSpeed = 100; 
    const typingTextElement = document.querySelector('.typing-text');
  
    let charIndex = 0;
  
    function type() {
      if (charIndex < text.length) {
        const char = text.charAt(charIndex);
  
        

        
        if (char === '<') {

          const endTagIndex = text.indexOf('>', charIndex);
          if (endTagIndex !== -1) {
         
            typingTextElement.innerHTML += text.substring(charIndex, endTagIndex + 1);
            charIndex = endTagIndex + 1;
            setTimeout(type, typingSpeed);
            return;
          }
        }
  
        
        typingTextElement.innerHTML += char;
        charIndex++;
        setTimeout(type, typingSpeed);
      }
    }
  
    type();
  }
  
  document.addEventListener('DOMContentLoaded', startTypingAnimation);


  // document.getElementById("copyEmail").addEventListener("click", function(event) {
  //   event.preventDefault();
  //   const email = event.target.closest("a").getAttribute("href").replace("mailto:", ""); // Extract the email address from href

  //   const textarea = document.createElement("textarea");
  //   textarea.value = email;
  //   document.body.appendChild(textarea);
  //   textarea.select();
  //   document.execCommand("copy");
  //   document.body.removeChild(textarea);

  //   // Show a Bootstrap tooltip
  //   const tooltip = new bootstrap.Tooltip(event.target);
  //   tooltip.show();

  //   // Replace the alert with a notification (Bootstrap popover)
  //   const notification = document.getElementById("notification");
  //   notification.innerHTML = 'Email copied to clipboard: ' + email;
  //   const popover = new bootstrap.Popover(notification, {
  //     container: 'body',
  //     placement: 'top',
  //     trigger: 'manual'
  //   });
  //   popover.show();
  //   setTimeout(() => popover.hide(), 1500);
  // });
 // Initialize Clipboard.js
 var clipboard = new ClipboardJS('#copyEmail');

 // Define success and error handlers
 clipboard.on('success', function(e) {
   console.log('Text copied:', e.text);
   // You can display a success message or perform other actions here
 });

 clipboard.on('error', function(e) {
   console.error('Error copying:', e.action, e.trigger);
   // You can display an error message or perform other actions here
 });

  document.addEventListener("DOMContentLoaded", function() {
    var buttons = document.querySelectorAll(".button");
    var portfolioItems = document.getElementById("portfolio-items");
    var items = document.querySelectorAll(".item");
  
    buttons.forEach(function(button) {
      button.addEventListener("click", function() {
        var value = this.getAttribute("data-bs-filter");
  
        // Output the value to the console
        console.log(value);
  
        if (value === "All") {
          portfolioItems.classList.remove("justify-content-between");
        } else {
          portfolioItems.classList.add("justify-content-between");
        }
  
        items.forEach(function(item) {
          item.style.display = "none";
          item.classList.add("d-none");
        });
  
        var filteredItems = document.querySelectorAll(".item.filter." + value);
        filteredItems.forEach(function(filteredItem) {
          filteredItem.style.display = "";
          filteredItem.classList.remove("d-none");
        });
  
        buttons.forEach(function(btn) {
          btn.classList.remove("active");
        });
        this.classList.add("active");
      });
    });
  });
  


document.addEventListener('DOMContentLoaded', function() {
  var buttons = document.querySelectorAll('.button');
  var portfolioItems = document.getElementById('portfolio-items');
  var items = document.querySelectorAll('.item');

  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function() {
      var value = this.getAttribute('data-bs-filter');
      console.log(value);

      if (value === 'All') {
        portfolioItems.classList.remove('justify-content-between');
      } else {
        portfolioItems.classList.add('justify-content-between');
      }

      for (var j = 0; j < items.length; j++) {
        items[j].style.display = 'none';
        items[j].classList.add('d-none');
      }

      var filteredItems = document.querySelectorAll('.item.filter.' + value);
      for (var k = 0; k < filteredItems.length; k++) {
        filteredItems[k].style.display = 'block';
        filteredItems[k].classList.remove('d-none');
      }

      this.classList.add('active');
      var siblings = getSiblings(this);
      for (var l = 0; l < siblings.length; l++) {
        siblings[l].classList.remove('active');
      }
    });
  }
});

document.addEventListener('DOMContentLoaded', function() {
  var imageOverlays = document.querySelectorAll('.image-overlay');
  var modalImage = document.getElementById('modalImage');

  for (var i = 0; i < imageOverlays.length; i++) {
    imageOverlays[i].addEventListener('click', function() {
      var imageSrc = this.getAttribute('data-image-src');
      modalImage.setAttribute('src', imageSrc);
    });
  }
});
// Helper function to get siblings of an element
function getSiblings(element) {
  var siblings = [];
  var sibling = element.parentNode.firstChild;
  while (sibling) {
    if (sibling.nodeType === 1 && sibling !== element) {
      siblings.push(sibling);
    }
    sibling = sibling.nextSibling;
  }
  return siblings;
}


// Animation
const observer = new IntersectionObserver((entries) =>{
  entries.forEach((entry) =>{
      console.log(entry)
      if(entry.isIntersecting){
          entry.target.classList.add('show');
      }else{
          entry.target.classList.remove('show');
      }
  });
});


const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el)=>observer.observe(el));




// const imageContainer = document.querySelector('.image-container');

// // Function to enable scrolling
// function enableScrolling() {
//   imageContainer.style.overflow = 'auto';
// }

// // Attach an event listener to the 'DOMContentLoaded' event
// document.addEventListener('DOMContentLoaded', function () {
//   // Call the enableScrolling function after the DOM is fully loaded
//   enableScrolling();
// });