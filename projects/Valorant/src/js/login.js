const form = document.querySelector('#login');
const usernameInput = document.querySelector('#username');
const passwordInput = document.querySelector('#password');

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const usernameValue = usernameInput.value.trim();
    const passwordValue = passwordInput.value.trim();

    if (usernameValue === '') {
        setErrorFor(usernameInput, 'Username cannot be blank');
    } else {
        setSuccessFor(usernameInput);
    }

    if (passwordValue === '') {
        setErrorFor(passwordInput, 'Password cannot be blank');
    } else {
        setSuccessFor(passwordInput);
    }

    // Check if both inputs are valid
    if (usernameValue !== '' && passwordValue !== '') {
        // Submit the form
        form.submit();
    }
});

function setErrorFor(input, message) {
    const formGroup = input.parentElement;
    const errorMessage = formGroup.querySelector('.form__input-error-message');

    // Add error message and class
    errorMessage.innerText = message;
    formGroup.classList.add('form__input-group--error');
}

function setSuccessFor(input) {
    const formGroup = input.parentElement;
    const errorMessage = formGroup.querySelector('.form__input-error-message');

    // Remove error message and class
    errorMessage.innerText = '';
    formGroup.classList.remove('form__input-group--error');
}
