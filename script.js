function submitForm(event) {
    event.preventDefault();

    // Get form data
    const formData = new FormData(document.getElementById('signupForm'));
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value;
    });

    // Send data to server using AJAX or fetch API
    fetch('submit_form.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
    .then(response => response.json())
    .then(result => {
        alert(result.message);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}
