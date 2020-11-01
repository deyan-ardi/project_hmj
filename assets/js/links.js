// prepare url data from body
const url = document.querySelector("body").dataset.link;

//get element
const container = document.querySelector(".container"),
	more = container.querySelector(".link a.more"),
	back = container.querySelector(".more-content .back a"),
	loader = document.querySelector(".loader"),
	background = document.querySelector(".background img"),
	swipe = document.querySelector(".swipe img");

// full size animation
more.addEventListener("click", () => {
	container.classList.add("show-more");
	container.querySelector(".more-content").style.animation =
		"1s both sideContentItems";
	container.querySelector(".main-content").style.animation =
		"1s both sideContent";
	container.querySelector("main .link").style.animationDelay = "1s";
});
back.addEventListener("click", () => {
	container.classList.remove("show-more");
	container.querySelector(".more-content").style.animation =
		"1s both sideContentItemsBack";
	container.querySelector(".main-content").style.animation = "1s both sideBack";
});

//loader
// add class "active" on class "loader" first
const logo = container.querySelector("header .logo"),
	logoImg = container.querySelector("header .logo img"),
	text = container.querySelector("header .text"),
	link = container.querySelector("main .link");
function loaderFun() {
	loader.classList.remove("active");
	logo.style.animationPlayState = "running";
	logoImg.style.animationPlayState = "running";
	text.style.animationPlayState = "running";
	link.style.animationPlayState = "running";

	//prepare first reload (img)
	let firstBg = true,
		swipeAdd = true;
	setInterval(() => {
		if (document.body.clientWidth <= 411) {
			while (firstBg) {
				background.src = url + "assets/img/bg/background-mobile.jpg";
				firstBg = false;
			}
		} else {
			background.src = url + "assets/img/bg/background.jpg";
			firstBg = true;
		}
		if (document.body.clientWidth <= 550) {
			while (swipeAdd) {
				swipe.src = url + "assets/img/swipe.gif";
				swipeAdd = false;
			}
		} else {
			swipe.src = "";
			swipeAdd = true;
		}
	}, 100);
}

//mobile animation
let first = true;
setInterval(() => {
	if (document.body.clientWidth <= 550) {
		let beforePos = container.scrollTop;
		container.querySelector(".more-content .content").style.transition =
			"500ms";

		while (first) {
			container.querySelector(
				".more-content .content"
			).style.borderTopLeftRadius = "3rem";
			container.querySelector(
				".more-content .content"
			).style.borderTopRightRadius = "3rem";
			first = false;
		}

		container.onscroll = () => {
			if (beforePos < container.scrollTop) {
				container.querySelector(
					".more-content .content"
				).style.borderTopLeftRadius = "0rem";
				container.querySelector(
					".more-content .content"
				).style.borderTopRightRadius = "0rem";
			} else {
				container.querySelector(
					".more-content .content"
				).style.borderTopLeftRadius = "3rem";
				container.querySelector(
					".more-content .content"
				).style.borderTopRightRadius = "3rem";
			}

			beforePos = container.scrollTop;
		};
	} else {
		container.querySelector(".more-content .content").style.borderRadius = "0";
		first = true;
	}
}, 100);
