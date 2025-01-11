function writejournal(){
let a=document.getElementsByClassName("cta-button")
a.innerHTML="write-journal.html"
}
function famousjournal(){
    let a=document.getElementsByClassName("cta-button")
    a.innerHTML="famous-journal.html"
    }
 
    function validateForm() {
        const name = document.getElementById("name").value;
        const email = document.getElementById("email").value;
        const message = document.getElementById("message").value;

        if (!name || !email || !message) {
            alert("Please fill in all fields.");
            return false;
        }
        return true;
    }
    function rateExperience(stars) {
        alert(`You rated this experience ${stars} star(s)!`);
       
    }
    document.getElementById("feedback").focus()