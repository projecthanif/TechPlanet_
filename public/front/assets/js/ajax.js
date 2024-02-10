
const form = document.querySelector('#subForm');
// Add submit event listener to the form
form.addEventListener("submit", function (event) {
    const action = form.getAttribute("action");
    const body = document.querySelector('body');
    const div = document.createElement("div");

    div.innerHTML = `<div x-data="{ show: false }" x-init="setTimeout(() => show = true, 1000)">
    <div x-show="show" class="flash-message">
        This is a flash message!
    </div>
</div>`;    // Prevent default form submission
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

            body.appendChild(div) ;
            alert('add to cart');

        }
    };

    // Send the request with form data
    xhr.send(formData);
});
