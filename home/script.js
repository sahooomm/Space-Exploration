document.getElementById('contact-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
  
    // Fetch form data
    const formData = new FormData(this);
  
    // Construct email message
    const message = `
      Name: ${formData.get('name')}
      Email: ${formData.get('email')}
      Message: ${formData.get('message')}
    `;
  
    // Display the message (you can customize this part according to your needs)
    alert('Message sent:\n\n' + message);
  
    // You can also send the message to a server using AJAX or fetch
    // Example:
    // fetch('/send-message', {
    //   method: 'POST',
    //   body: JSON.stringify({ message }),
    //   headers: {
    //     'Content-Type': 'application/json'
    //   }
    // })
    // .then(response => {
    //   if (response.ok) {
    //     return response.text();
    //   }
    //   throw new Error('Network response was not ok.');
    // })
    // .then(data => {
    //   console.log(data); // Success message from server
    // })
    // .catch(error => {
    //   console.error('There was a problem with your fetch operation:', error);
    // });
  });
  