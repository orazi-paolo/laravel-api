const deleteButtons = document.querySelectorAll('.delete-button');

deleteButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        const projectName = event.target.getAttribute('data-project-name');
        const userConfirmed = confirm(`Are you sure you want to delete ${projectName} ?`);

        if (!userConfirmed) {
            event.preventDefault();
        }

    });
})
