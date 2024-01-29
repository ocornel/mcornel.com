function setThemePreference() {
    const currentHour = new Date().getHours();
    const theme = currentHour >= 19 || currentHour <= 6 ? "dark" : "light";
    document.body.setAttribute("data-theme", theme);
}

// Set theme on page load and every 15 minutes
window.onload = setThemePreference;
setInterval(setThemePreference, 15 * 60 * 1000);

function getAge(dateStart, dateEnd = null) {
    // Validate date inputs using built-in methods (optional)
    if (!isValidDate(dateStart) || (dateEnd && !isValidDate(dateEnd))) {
        return "Invalid date(s) provided. Please enter valid dates.";
    }

    // Use Date.prototype.getTime() for date comparison
    const start = new Date(dateStart).getTime();
    const end = dateEnd ? new Date(dateEnd).getTime() : new Date().getTime();

    // Ensure end date is after start date
    if (end < start) {
        return "End date cannot be earlier than start date.";
    }

    // Calculate age components efficiently
    const yearAge = Math.floor((end - start) / (1000 * 60 * 60 * 24 * 365));
    const monthAge = Math.floor((end - start) % (1000 * 60 * 60 * 24 * 365) / (1000 * 60 * 60 * 24 * 30));
    const dayAge = Math.floor((end - start) % (1000 * 60 * 60 * 24 * 30) / (1000 * 60 * 60 * 24));

    // Modify dayString to exclude days when (yearAge > 0 && monthAge <= 3)
    const dayString = yearAge === 0 && monthAge <= 3 ? ` ${dayAge} day${dayAge === 1 ? '' : 's'}` : '';

    // Combine age components with logical operators
    const ageString =
        `${yearAge}${yearAge === 1 ? " year" : " years"}${monthAge ? ` ${monthAge}${monthAge === 1 ? " month" : " months"}` : ''}${dayString}`;

    return ageString;
}

// Optional function to validate date format (example)
function isValidDate(dateString) {
    try {
        new Date(dateString);
        return true;
    } catch (error) {
        return false;
    }
}


// slideshow
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  // Show and animate the current slide
  slides[slideIndex-1].style.opacity = 1; // Reset opacity to 1 for smooth transition
  slides[slideIndex-1].style.display = "block";
}

// Add autoslide functionality
let slideInterval = setInterval(autoSlide, 5000); // Change 5000 to desired interval + delay (in milliseconds)

function autoSlide() {
  plusSlides(1);
}

// Stop autoslide on hover (optional)
var slideContainer = document.getElementsByClassName("slideshow-container")[0];
slideContainer.addEventListener("mouseover", function() {
  clearInterval(slideInterval);
});

slideContainer.addEventListener("mouseout", function() {
  slideInterval = setInterval(autoSlide, 5000); // Change 5000 to desired interval + delay (in milliseconds)
});
