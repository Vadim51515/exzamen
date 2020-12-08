let application = [
{
	"name" : 123,
	"age" : 111
},
{
	"name" : 124,
	"age" : 111
},
{
	"name" : 125,
	"age" : 111
}
];

const fio = ( )=> {
	var elem = document.getElementById("fio")
application.map(e=>{
	elem.innerHTML = `<p class="number">${e.name}</p>`
})
			
console.log(application)
}
