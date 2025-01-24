
const token = localStorage.getItem('auth_token');
if(!token){
    console.log('No Token Found!')
}

async function logout() {
    const token = localStorage.getItem('auth_token');

    await fetch('https://book-shelf-api-production.up.railway.app/api/logout', {
        method: 'POST',
        headers: {
            'Authorization': `Bearer ${token}`,
            'Content-Type': 'application/json',
        },
    });

    localStorage.removeItem('auth_token');//remove token

    window.location.href='/';
}


// Attach event listener to logout button
document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('logout-btn')?.addEventListener('click', (e) => {
        e.preventDefault();
        logout();
    });
});

async function fetchUserData() {
    const token = localStorage.getItem('auth_token');
    try {
        const response = await fetch('https://book-shelf-api-production.up.railway.app/api/user', {
            headers: {
                'Authorization': `Bearer ${token}`,
                'Content-Type': 'application/json',
            },
        });
        if (!response.ok) {
            throw new Error('Failed to authenticate user');
        }
        const userData = await response.json(); 
        // Update the UI with user data
        document.getElementById('user-email').textContent = ' '+userData.name;
        

    } catch (error) {
        console.error('Error fetching user data:', error);
        // Redirect to login if authentication fails
        localStorage.removeItem('auth_token');
        
    }
}

setTimeout(() => {
    fetchUserData();
}, 1000);