// Filter.js 3.0

// 1.0
//  - Basic filter script by country.
//
// 2.0
//  Added: My favourites option (hard-coded resorts)
//     Major Changes:
//      - Added new case for value === 'author-fav'
//      - Created array of my favourite resort names
//      - Added check using .includes() on card title
// 3.0
//      - Added null checks for titleElement and countryLine (prevents errors)
//      - Made comparison more robust with .trim() and .toLowerCase() on both sides
//      - Added comments categorising the code.
//      - Added Debugging code (Console.log) to ensure script is fully operational
//      - Slightly cleaner variable names and structure
// 4.0 
//      - I decided i wanted to add snowfall to the filter. (for some genuine usability) :)
//      - countryFilter ---> ResortFilter
//      -

console.log("Filter.js is loaded!")
document.addEventListener('DOMContentLoaded', () => 
{
    const Select = document.getElementById('ResortFilter');
    if (!Select) return;

    // Search is entirely case senstive. Needed from "resort_name" on php :/
    const HMFav = ["Kitzbühel", "Avoriaz", "Whistler Blackcomb"];  // The resorts i've been to.

    Select.addEventListener('change', () => 
    {
        const value = Select.value.trim();
        //Swvug Code //console.log("Filter changed to:", value);
        // show all
        if (value === '') 
        {
            document.querySelectorAll('.card').forEach(card => 
            {
                card.parentElement.style.display = 'block';
            });
            return;
        }

        const cards = document.querySelectorAll('.card');

        cards.forEach(card => 
        {
            let show = false;

                // Favorites
            if (value === 'author-fav') 
            {
            
            const title = card.querySelector('.card-title');
            if (title) 
            {
                const resortName = title.textContent.trim();
                show = HMFav.includes(resortName);
            }
            }
                // Country
                else if (value.startsWith('c-')) 
                {
                    const countryCode = value.replace('c-', '').trim();
                    const countryLine = card.querySelector('p strong');
                    if (countryLine) 
                    {
                        const country = countryLine.nextSibling.textContent.trim().toLowerCase();
                        show = country === countryCode.toLowerCase();
                    }
                  //Debug Code // console.log("Country filter applied:", countryCode);
                }
            // Snowfall filter
            else if (value.startsWith('s-'))
            {
                // Find the snowfall line: <strong>Avg Snowfall:</strong> 1,200 cm
                const snowLine = Array.from(card.querySelectorAll('p strong'))
                .find(el => el.textContent.includes('Avg Snowfall'));
                if (snowLine) {
                    const snowText = snowLine.nextSibling.textContent.trim().replace(/[^0-9]/g, '');
                    const snowfall = parseInt(snowText, 10) || 0;
                    if (value === 's-high')    show = snowfall > 800;
                    if (value === 's-med')     show = snowfall >= 400 && snowfall <= 800;
                    if (value === 's-low')     show = snowfall < 400 && snowfall > 0;
                    console.log(`Snowfall filter: ${snowfall} cm → show = ${show}`);
                } else {
            //DebugCode
                    console.warn("Snowfall data not found in card"); 
                }
            }
            card.parentElement.style.display = show ? 'block' : 'none';
            
        });
    });
});