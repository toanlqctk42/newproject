const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}

inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

document.getElementById("myInput").oninput = function() {hide_user()};
document.getElementById("myInput_2").oninput = function() {hide_pass()};
function hide_user() {
	var user_text = document.getElementById("hide_1");
	user_text.style.display  = "none";
	if (document.getElementById("myInput").value.length == 0)
	{
		user_text.style.display = "block";
	} 
}
function hide_pass() {
	var pass_text = document.getElementById("hide_2");
	pass_text.style.display = "none";
	if (document.getElementById("myInput_2").value.length == 0)
	{
		pass_text.style.display = "block";
	} 
}