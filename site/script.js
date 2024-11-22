const eventDropdown = document.getElementById("event");
const placeDropdown = document.getElementById("place");

// Places for each event type
const places = {
    "10km": ["Race Course", "Peelamedu", "Gandhipuram"],
    "15km": ["Singanallur", "RS Puram", "Sundarapuram"],
    "Half Marathon": ["Podanur", "Saibaba Colony", "Saravanampatti"],
    "Full Marathon": ["Ukkadam", "Thudiyalur", "Sulur"],
};

// Update place options when event is selected
eventDropdown.addEventListener("change", () => {
    const selectedEvent = eventDropdown.value;
    placeDropdown.innerHTML = '<option value="">Select a Location</option>'; // Reset options

    if (places[selectedEvent]) {
        places[selectedEvent].forEach((place) => {
            const option = document.createElement("option");
            option.value = place;
            option.textContent = place;
            placeDropdown.appendChild(option);
        });
    }
});
