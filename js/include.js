async function includeHTML() {
    const includeElements = document.querySelectorAll('[data-include]');
    for (const el of includeElements) {
        const file = el.getAttribute('data-include');
        try {
            const response = await fetch(file);
            if (!response.ok) throw new Error('Network response was not ok');
            const content = await response.text();
            el.innerHTML = content;
        } catch (error) {
            console.error('Error fetching file:', error);
        }
    }
}

document.addEventListener('DOMContentLoaded', includeHTML);
