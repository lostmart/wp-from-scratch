const cardArray = document.querySelectorAll(".card")
const lightbox = document.querySelector(".lightbox")
const lightboxClose = document.querySelector(".lightbox__close")

// post data intitialized
let photosData = []

// console.log(cardArray)

// loop the dom, extract data and handle event listeners
cardArray.forEach((card, i) => {
	// data for each photo to insert into the post array
	const imageUrl = card.querySelector(".post_img").src
	const postRef = card.querySelector(".post_img").getAttribute("data-reference")
	const postCat = card.querySelector(".post_img").getAttribute("data-category")
	const postData = {
		imageUrl,
		postRef,
		postCat,
	}
	photosData.push(postData)
	// fullscreen button for each photo
	const fullBtn = card.querySelector(".fullscreen")
	fullBtn.addEventListener("click", (e) => {
		e.stopPropagation()
		console.log("you clicked the full btn", i)
		lightbox.classList.add("toggled")
		document.querySelector(".lightbox__container").firstElementChild.src =
			photosData[i].imageUrl
	})
})

// close lighbox
lightboxClose.addEventListener("click", () => {
	lightbox.classList.remove("toggled")
})

// close lighbox when background is clicked
window.addEventListener("click", (e) => {
	e.target.classList.contains("lightbox")
		? lightbox.classList.remove("toggled")
		: false
})

console.log(photosData)
