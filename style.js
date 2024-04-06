const textToDisplay = "Create Memories, Not Expenses – HOSTEL, Your Gateway to Affordable Luxury.";

        function animateText(index) {
            const textContainer = document.getElementById("text-container");
            textContainer.innerHTML = textToDisplay.substring(0, index);

            if (index < textToDisplay.length) {
                setTimeout(() => {
                    animateText(index + 1);
                }, 100); 
            }
        }
        document.addEventListener("DOMContentLoaded", () => {
            animateText(0);
        });

let burger = document.querySelector(".burger");
let tog = document.querySelector("#jas");

burger.addEventListener('click', ()=>{
 tog.classList.toggle("hi");
});

window.onscroll = function() {myFunction()};
   function myFunction() {
      let first = document.querySelector("#first");
      if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
       first.classList.add('first');
       first.style.opacity = "1";
      } else {
        first.classList.remove('first');
      }

      let second = document.querySelector("#second");
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
       second.classList.add('second');
       second.style.opacity = "1";
      } else {
        second.classList.remove('second');
      }
      let third = document.querySelector("#third");
      if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
       third.classList.add('third');
       third.style.opacity = "1";
      } else {
        first.classList.remove('third');
      }
      let four = document.querySelector("#four");
      if (document.body.scrollTop > 450 || document.documentElement.scrollTop > 450) {
       four.classList.add('four');
       four.style.opacity = "1";
      } else {
        four.classList.remove('four');
      }
      let five = document.querySelector("#five");
      if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
       five.classList.add('five');
       five.style.opacity = "1";
      } else {
        five.classList.remove('five');
      }
    }


       function showDiv(divNumber) {
      document.querySelectorAll('button').forEach(button => {
        button.classList.remove('btn-s');
    });
    document.getElementById(`btn` + divNumber).classList.add('btn-s');
      // Hide all divs
      document.querySelectorAll('.box').forEach(div => {
          div.classList.remove('active');
      });
      
      // Show the selected div
      document.getElementById('div' + divNumber).classList.add('active');
  }


  const slider = document.querySelector('.slider');
  const slides = document.querySelector('.slides');
  const images = document.querySelectorAll('.slides img');
  
  let counter = 0;
  const slideWidth = images[0].clientWidth;
  
  function nextSlide() {
    counter++;
    if (counter >= images.length) {
      counter = 0;
    }
    slides.style.transform = `translateX(${-slideWidth * counter}px)`;
  }
  
  function startSlider() {
    setInterval(nextSlide, 3000); // Change slide every 3 seconds
  }
  
  startSlider();
  


