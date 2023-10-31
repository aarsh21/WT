(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
  
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
  })()

function validateTitle() {
  const titleInput = document.getElementById("title");
  const titleError = document.getElementById("titleError");

  // Check if the title input is empty
  if (titleInput.value.trim() === "") {
    titleError.textContent = "Title is required.";
    titleInput.setCustomValidity("Title is required.");
  } else {
    titleError.textContent = "";
    titleInput.setCustomValidity("");
  }
}

function validateChaptersInput() {
  const chaptersInput = document.getElementById("chapters");
  const errorMessage = document.getElementById("error-message");
  const inputValue = parseInt(chaptersInput.value);

  if (isNaN(inputValue)) {
    errorMessage.textContent = "Please enter a valid number.";
  } else if (inputValue < 1 || inputValue > 2000) {
    errorMessage.textContent = "Please enter a number between 1 and 2000.";
  } else {
    errorMessage.textContent = "";
  }
}

function validateAuthorInput() {
  const authorInput = document.getElementById("author");
  const authorError = document.getElementById("authorError");
  if (authorInput.value.trim() === "") {
    authorError.textContent = "Author is required .";
    authorInput.setCustomValidity("Author is required .");
  } else {
    authorError.textContent = "";
    authorInput.setCustomValidity("");
  }
}

function validateLanguageInput() {
  const languageInput = document.getElementById("languageManga");
  const languageError = document.getElementById("languageError");

  if (
    languageInput.value != "japanese" &&
    languageInput.value != "english" &&
    languageInput.value != "korean"
  ) {
    languageError.textContent =
      "Not a correct language please choose enter either japanese , english or korean";
    languageInput.setCustomValidity(
      "Not a correct language please choose enter either japanese , english or korean"
    );
  } else {
    languageError.textContent = "";
    languageInput.setCustomValidity("");
  }
}
