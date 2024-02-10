
const form = document.querySelector('#subForm');
// Add submit event listener to the form
form.addEventListener("submit", function (event) {
    const action = form.getAttribute("action");
    // Prevent default form submission
    event.preventDefault();

    // Create a new FormData object and append form data to it
    let formData = new FormData(form);

    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Configure the request
    xhr.open("POST", `${action}`, true);
    // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    // Define behavior for when the request completes
    xhr.onload = function () {
        if (xhr.status === 200) {
            // Parse the JSON response
            // let response = JSON.parse(xhr.responseText);
            let response = xhr.responseText;
            console.log(response);
        }
    };

    // Send the request with form data
    xhr.send(formData);
});
