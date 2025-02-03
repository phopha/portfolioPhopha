let personImage = document.querySelector(".personImage");
let getUser = document.querySelector("#user");
let person = document.querySelector(".person");

getUser.addEventListener('input', () => {


  if (getUser.value === "Phopha") {
    personImage.setAttribute('src', './picture/phopha.jpg');
    person.classList.remove("border-secondary");
    person.classList.add("border-primary");

  }
  else if (getUser.value === "Jib") {
    personImage.setAttribute('src', './picture/girl.jpg');
    person.classList.remove("border-secondary");
    person.classList.add("border-primary");

  }
  else {
    personImage.setAttribute('src', './picture/unknownPerson.jpg');
    person.classList.remove("border-primary");
    person.classList.add("border-secondary");

  }

  console.log("You entered:", getUser.value);

});



