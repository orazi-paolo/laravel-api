const deleteButtons = document.querySelectorAll('.delete-technology');

deleteButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        const technologyName = event.target.getAttribute('data-technology-name');
        const userConfirmed = confirm(`Are you sure you want to delete ${technologyName} ?`);

        if (!userConfirmed) {
            event.preventDefault();
        }

    });
})
