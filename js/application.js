{
    const searchbox = document.querySelector('#searchbox');
    function filter() {
        const rows = document.querySelectorAll('#userlist tbody tr');
        const query = searchbox.value.toLowerCase();
        rows.forEach((row) => {
            const city = row.querySelector('.city').innerText.toLowerCase();
            if (city.indexOf(query) >= 0) {
                row.classList.remove("hide-row");
            } else {
                row.classList.add("hide-row");
            }
        });
    }
    searchbox.addEventListener('keyup', filter);
}