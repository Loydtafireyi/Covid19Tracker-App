const consentBanner = document.querySelector(".consent-banner")
const cancelBtn = document.querySelector(".cancel")

cancelBtn.addEventListener('click', () => {
	consentBanner.classList.remove("active")
})

setTimeout( () => {
	consentBanner.classList.add("active")
}, 2000)