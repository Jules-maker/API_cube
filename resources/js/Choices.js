import Choices from 'choices.js';

document.addEventListener('DOMContentLoaded', () => {
    const multipleCancelButton = new Choices('#choices-multiple-remove-button', {
        removeItemButton: true,
        position: 'bottom',
    });
});
