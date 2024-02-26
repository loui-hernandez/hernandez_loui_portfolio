export function add_contact() {
  consscript = document.querySelector("#contactForm");
    const form = document.querySelector("#contactForm");
    const feedBack = document.querySelector("#feedback");
    const received = document.querySelector("#received");
    const receivedclose = document.querySelector("#receivedclose");
    const main = document.querySelector("main");

  function regForm(event) {
    event.preventDefault();
    const url = "adduser.php";
    const thisform = event.currentTarget;
    const formdata =
      "fullname=" + thisform.elements.fullname.value +
      "&subject=" + thisform.elements.subject.value +
      "&mobile=" + thisform.elements.mobile.value +
      "&comments=" + thisform.elements.comments.value +
      "&email=" + thisform.elements.email.value;

    fetch(url, {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded"
      },
      body: formdata
    })
      .then(response => response.json())
      .then(responseText => {
        console.log(responseText);
        feedBack.innerHTML = "";

        if (responseText.errors) {
          responseText.errors.forEach(error => {
            const errorElement = document.createElement("p");
            errorElement.textContent = error;
            feedBack.appendChild(errorElement);
          });
        } else {
          form.reset();
          const messageElement = document.createElement("p");
          messageElement.textContent = responseText.message;
          feedBack.appendChild(messageElement);
          main.style.removeProperty("transform");
          received.style.display = "block";
        }
      })
      .catch(error => {
        console.log(error);
        feedBack.innerHTML = "";
        const messageElement = document.createElement("p");
        messageElement.textContent =
          "Sorry, you must be using an older browser that does not support this feature.";
        feedBack.appendChild(messageElement);
      });
  }

  function hideModel() {
    received.style.display = "none";
  }

  form.addEventListener("submit", regForm);

  receivedclose.addEventListener("click", hideModel);
}
