
async function loginUser(event) {
    event.preventDefault(); // Prevent the form from submitting normally

    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
  

    try {
        const response = await fetch('https://book-shelf-api-production.up.railway.app/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email, password}),
        });

        const result = await response.json();

        if(!response.ok){
            alert('Login failed: ' + (result.message || 'Unknown error'));
            return;
        }
        if(result.code != 0){
            alert('Login failed: ' + (result.message || 'Unknown error'));
            return;
        }

        localStorage.setItem('auth_token', result.data.token);  // Token is saved in localStorage 

        window.location.href="/";
       
    } catch (error) {
        // Handle network errors
        alert('An error occurred: ' + error.message);
    }
}

document.getElementById("login").addEventListener("submit", loginUser);
