let slider = document.querySelector("#slider-input")
let pageViews = document.querySelector("#page-views-counter")
let price = document.querySelector('#price-counter')
let discountCheckbox = document.querySelector('#monthly-yearly-switch')
let discountPercent = 25
let priceOptions =
    [
        {pageViews: '10K', price: 8},
        {pageViews: '50K', price: 12},
        {pageViews: '100K', price: 16},
        {pageViews: '500K', price: 24},
        {pageViews: '1M', price: 36}
]

function getPrice (priceIndex, applyDiscount = false, discountPercent = 0) {
    if (!applyDiscount) {
        return (priceOptions[priceIndex].price).toFixed(2)
    }
    return (priceOptions[priceIndex].price * (1 - (discountPercent/100))).toFixed(2)
}

function updatePriceAndPageViews() {
    pageViews.innerHTML = priceOptions[slider.value].pageViews
    if (!discountCheckbox.checked) {
        price.innerHTML = getPrice(slider.value)
    } else {
        price.innerHTML = getPrice(slider.value, true, discountPercent)
    }
}

slider.addEventListener('input', updatePriceAndPageViews)
discountCheckbox.addEventListener('click', updatePriceAndPageViews)

