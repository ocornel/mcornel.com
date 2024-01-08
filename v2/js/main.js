function setThemePreference() {
    var d = new Date();
    /*
    * The getHours() method returns the hour (from 0 to 23) of the specified date and time.
    * Early morning = 0 - 6
    * Morning = 6 - 12
    * Evening = 12 - 18
    * Night = 18 - 23
    */
    var currentHour = d.getHours();

    if (currentHour >= 19 || currentHour <= 6) {
        document.body.setAttribute("data-theme", "dark")
    } else {
        document.body.setAttribute("data-theme", "light")
    }
}

window.onload = setThemePreference;
setInterval(setThemePreference, 15 * 3600000) // check which theme to set every 15 minutes;

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