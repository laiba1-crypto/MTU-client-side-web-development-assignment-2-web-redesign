// content.php-serverside(PHP)

// Function to fetch content for a specific topic from the database
function fetchContentByTopic($topicId) {
    // Query database and return content
    // ...
}

// Endpoint for AJAX request
if(isset($_GET['topicId'])) {
    $topicId = $_GET['topicId'];
    $content = fetchContentByTopic($topicId);
    
    // Send the content to the client in JSON format
    header('Content-Type: application/json');
    echo json_encode($content);
}

// script.js-Client-side (jQuery/AJAX)

// Function to load content for a specific topic
function loadContent(topicId) {
    // Make an AJAX request to the server
    $.ajax({
        url: 'content.php',
        method: 'GET',
        data: { topicId: topicId },
        dataType: 'json',
        success: function(response) {
            // Render the received content on the client side
            renderContent(response);
        },
        error: function(error) {
            console.error('Error loading content:', error);
        }
    });
}

// Function to render content on the client side
function renderContent(content) {
    // Display content in the UI
    // ...
}

