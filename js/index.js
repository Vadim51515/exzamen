let statusPopup = false

const setPopup = () =>{
	let popup = document.getElementById("popup")
	popup.style.display = "none"
	document.body.style.overflow = 'visible'
}


const openPopup = () =>{
	let popup = document.getElementById("popup")
	popup.style.display = "block"
	// let body = document.getElementById("body")
document.body.style.overflow = 'hidden'
};



// const  test  = (abc) =>{
// 		for (let i = 0; a > i; i++ ) {
// 			var elem = document.getElementById("test").innerHTML = `<div>
// 		 <p class="number">${111}</p>
// 		</div>`
// 		}
// 		a = a += 1;
// }
// const invisible = () =>{
// 	let invis = document.getElementById("invis")
// 	if (invis.style.display === "none") {
// 		invis.style.display = "block"
// 	}
// 	else{
// 		invis.style.display = "none"
// 	}
// 	var mydata = JSON.parse(data);
// alert(mydata[0].name);

// }
// const radio_a = (value) =>{
// 	a = value
// }
// const radio_b = (value) =>{
// 	b = value
// }
// const radio_c = (value) =>{
// 	c = value
// }
// const radio = () =>{
// 	console.log("a" ,a);
// 	console.log("b", b);
// 	console.log("c", c);
// 	console.log("abc", Number(a) +  Number(b) +  Number(c))

// }



