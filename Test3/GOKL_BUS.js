// script.js
const busRoutes = {
    type1: ['300', '302', '303'],
    type2: ['T305', 'T352', 'T400'],
    type3: ['T103', 'T106', 'T107'],
    type4: ['GOKL-01-(GREEN)', 'GOKL-02(PURPLE)', 'GOKL-03-(RED)'],
    type5: ['HS01', 'KLG1', 'KS01'],
};

function showRoutes(busType) {
    const routesContainer = document.getElementById('routesContainer');
    const routeButtonsContainer = document.getElementById('routeButtons');
    const scheduleContainer = document.getElementById('scheduleContainer');
    const scheduleContent = document.getElementById('schedule');

    // Hide previous content
    routesContainer.style.display = 'none';
    scheduleContainer.style.display = 'none';

    // Display routes for the selected bus type
    routeButtonsContainer.innerHTML = '';
    busRoutes[busType].forEach(route => {
        const routeButton = document.createElement('button');
        routeButton.textContent = route;
        routeButton.addEventListener('click', () => showSchedule(route, busType));
        routeButtonsContainer.appendChild(routeButton);
    });

    routesContainer.style.display = 'block';
}

function showSchedule(route, busType) {
    const scheduleContainer = document.getElementById('scheduleContainer');
    const scheduleContent = document.getElementById('schedule');

    // Hide previous content
    scheduleContainer.style.display = 'none';

    // Display schedule for the selected bus type and route
    // You can fetch the schedule data from a server/database in a real-world scenario
    const scheduleData = getScheduleData(busType, route);

    scheduleContent.innerHTML = `<p>${scheduleData}</p>`;

    scheduleContainer.style.display = 'block';
}

// Function to fetch schedule data from the server
function getScheduleData(busType, route) {
    const scheduleContainer = document.getElementById('scheduleContainer');
    const scheduleContent = document.getElementById('schedule');

    // Hide previous content
    scheduleContainer.style.display = 'none';

    // Fetch schedule data from the PHP script
    fetch('get_timetable.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `busType=${encodeURIComponent(busType)}&route=${encodeURIComponent(route)}`,
    })
    .then(response => response.text())
    .then(data => {
        // Display the timetable data
        scheduleContent.innerHTML = data;
        scheduleContainer.style.display = 'block';
    })
    .catch(error => console.error('Error fetching timetable:', error));
}