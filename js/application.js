{
    const searchbox = document.querySelector('#searchbox');
    function filter() {
        const rows = document.querySelectorAll('#userlist tbody tr');
        const query = searchbox.value.toLowerCase();
        rows.forEach((row) => {
            const city = row.querySelector('.city').innerText.toLowerCase();
            if (city.indexOf(query) >= 0) {
                row.classList.remove('hide-row');
            } else {
                row.classList.add('hide-row');
            }
        });
    }
    searchbox.addEventListener('keyup', filter);

    function addFormAlert (where, type, title= 'Success', content = undefined) {
        let alertHtml = '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        alertHtml += '<h4 class="alert-heading">' + title + '</h4>';
        if (content) {
            alertHtml += '<p class="mb-0">'+content+'</p>';
        }

        const alertEl = document.createElement('div');
        alertEl.classList.add('alert', 'alert-'+type, 'alert-dismissible', 'fade', 'show', 'mb-3');
        alertEl.setAttribute('role', 'alert');
        alertEl.innerHTML = alertHtml;

        document.querySelector(where).appendChild(alertEl);
    }

    document.querySelector('#addrow').addEventListener('submit', async function(event) {
        event.preventDefault();
        document.querySelector('#addrowalerts').textContent = '';

        const formData = new FormData();
        for (let target of event.target) {
            formData.append(target.id, target.value)
        }

        const response = await fetch(event.target.action, {
            body: formData,
            method: event.target.method,
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            },
        });

        if (response.ok) {
            const newUser = await response.json();

            // add new user into table
            const row = document.createElement('tr');
            let html = '<td>' + newUser.name + '</td><td>' + newUser.email + '</td><td class="city">' + newUser.city + '</td>';
            row.innerHTML = html;
            document.querySelector('#userlist tbody').appendChild(row);

            addFormAlert('#addrowalerts', 'success', 'User added');
        } else {
            if (response.status == '400') {
                const errors = await response.json();

                // construct error description content
                let alertContent = document.createElement('ul');
                for (let error of errors) {
                    const errEl = document.createElement('li');
                    errEl.innerText = error;
                    alertContent.appendChild(errEl);
                }

                addFormAlert('#addrowalerts', 'warning', 'Validation error', alertContent.innerHTML);
            } else {
                addFormAlert('#addrowalerts', 'warning', 'Error adding user', response.status);
            }
        }
    })
}