document.addEventListener('DOMContentLoaded', () => {
    const searchField = document.getElementById('searchField');
    const searchResults = document.getElementById('searchResults');

    if (searchField) {
        searchField.addEventListener('keyup', () => {
            const query = searchField.value;
            if (query) {
                fetch(`../controller/search_employee.php?query=${query}`)
                    .then(response => response.text())
                    .then(data => {
                        searchResults.innerHTML = data;
                    });
            } else {
                searchResults.innerHTML = '';
            }
        });
    }
});
