// Filter.js
console.log("Filter.js is loaded!")
document.addEventListener('DOMContentLoaded', () => {
    const filterSelect = document.getElementById('countryFilter');
    if (!filterSelect) return;

    filterSelect.addEventListener('change', () => {
        const filterValue = filterSelect.value.trim();
        const cards = document.querySelectorAll('.card');
    // Search is entirely case senstive. Needed from "resort_name" on php :/
    const HMFav = ["Kitzbühel", "Avoriaz", "Whistler Blackcomb"];  // The resorts i've been to.

        cards.forEach(card => {
            const titleElement = card.querySelector('.card-title');
            if (!titleElement) return;

            const resortName = titleElement.textContent.trim();

            let show = false;

            if (filterValue === '') {
                show = true;
                console.log("All Resorts?")
            } else if (filterValue === 'author-fav') {
                show = HMFav.includes(resortName);
                console.log("Favourites selected")
            } else {
                // country filter
                const countryLine = card.querySelector('p.text-secondary strong');
                if (countryLine) {
                    console.log("Country Selected")
                    const countryText = countryLine.nextSibling.textContent.trim().toLowerCase();
                    show = countryText.includes(filterValue.toLowerCase());
                }
            }

            card.parentElement.style.display = show ? 'block' : 'none';
            
        });
    });
});