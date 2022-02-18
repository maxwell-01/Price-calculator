let slider = document.querySelector("#slider-input")
let output = document.querySelector("#pageviews-counter")
output.innerHTML = slider.value; // Display the default slider value

//Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
    output.innerHTML = this.value
}
