const cardArray = document.querySelectorAll(".card")
// const fullBtnArray = document.querySelectorAll(".fullscreen")

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
	fullBtn.addEventListener("click", () => {
		console.log("you clicked the full btn", i)
	})
})

console.log(photosData)
