require('./bootstrap');

const axios = require('axios');

createLead = () => {

    let leadEmail = document.getElementById('subscriptionEmail').value;

    axios.post('/lead', {
        'email': leadEmail
    }).then(response => {

        console.log(response.data);

        document.getElementsByClassName('alert-messages')[0].innerHTML =
        `<div class="alert alert-success alert-dismissible fade show" role="alert">
            A confirmation email has been sent to <strong>${response.data.lead.email}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`

        document.getElementById('subscriptionEmail').value = '';

    }).catch(error => {

        console.log(error.response.data.errors);

        document.getElementsByClassName('alert-messages')[0].innerHTML =
        `<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ${error.response.data.errors.email}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>`;

        document.getElementById('subscriptionEmail').value = '';
    });
    // console.log('ok');
}