document.getElementById('eventForm').addEventListener('submit', function(event) {
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const eventName = document.getElementById('event').value;

    // Simple validation for empty fields
    if (name === '' || email === '' || eventName === '') {
        alert('All fields are required!');
        event.preventDefault();  // Prevent the form from being submitted
    }
});
