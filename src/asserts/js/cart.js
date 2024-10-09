document.querySelectorAll('.heart').forEach(function(heart) {
    heart.onclick = function() {
        this.classList.toggle('filled');
    }
});


// Function to handle checkbox clicks
function handleCheckboxClick(checkboxId, messageId) {
    const checkbox = document.getElementById(checkboxId);
    const messageElement = document.getElementById(messageId);

    checkbox.addEventListener('click', function() {
        hideAllSummaries(); // Hide all summaries first

        // Show the message if the checkbox is checked
        if (checkbox.checked) {
            messageElement.style.display = 'block';  // Show relevant message
            uncheckOtherCheckboxes(checkboxId);  // Uncheck other checkboxes
        } else {
            messageElement.style.display = 'none';  // Hide if unchecked
        }
    });
}

// Function to hide all summary sections
function hideAllSummaries() {
    const summaries = document.querySelectorAll('.summary');
    summaries.forEach(function(summary) {
        summary.style.display = 'none';  // Hide all summaries
    });
}

// Function to uncheck all other checkboxes except the one clicked
function uncheckOtherCheckboxes(currentCheckboxId) {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
        if (checkbox.id !== currentCheckboxId) {
            checkbox.checked = false;  // Uncheck other checkboxes
        }
    });
}

// Handle each checkbox
handleCheckboxClick('checkbox1', 'message1');
handleCheckboxClick('checkbox2', 'message2');
handleCheckboxClick('checkbox3', 'message3');
handleCheckboxClick('checkbox4', 'message4');


// Function to handle increment and decrement for each set
function setupCounter(set) {
    const decrementButton = set.querySelector('.decrement');
    const incrementButton = set.querySelector('.increment');
    const valueInput = set.querySelector('.value');

    let currentValue = 1; // Initial value

    incrementButton.addEventListener('click', function() {
        currentValue++;
        valueInput.value = currentValue; // Update the input value
    });

    decrementButton.addEventListener('click', function() {
        if (currentValue > 1) { // Prevent going below 1
            currentValue--;
            valueInput.value = currentValue; // Update the input value
        }
    });
}

// Setup counters for each set
const sets = document.querySelectorAll('.class4');
sets.forEach(set => setupCounter(set));