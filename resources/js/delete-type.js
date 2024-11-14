const deleteButtons = document.querySelectorAll('.delete-type');

deleteButtons.forEach(button => {
    button.addEventListener('click', function (event) {
        const typeName = event.target.getAttribute('data-type-name');
        const userConfirmed = confirm(`Are you sure you want to delete ${typeName} ?`);

        if (!userConfirmed) {
            event.preventDefault();
        }

    });
})
