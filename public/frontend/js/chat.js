$(document).ready(function() {
    const $openChat = $('.openChat');
    const $containerChat = $('.container-chatbot');
    const $closeChat = $('.closeChat');
    const $sendMessageForm = $('.chat-form');
    const $messageChat = $('.messageChat');
    const $contentChat = $('.content-chat');
    const $oneTime = $('.oneTime');
    let typingIndicator;

    // Function to handle opening the chat
    $openChat.on('click', function() {
        $containerChat.addClass('active');
        $openChat.hide();
    });

    // Function to handle closing the chat
    $closeChat.on('click', function() {
        $containerChat.removeClass('active');
        $openChat.show();
    });

    // Function to handle sending a message
    $sendMessageForm.on('submit', function(e) {
        e.preventDefault();
        const message = $messageChat.val();
        if (message !== '') {
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');

            // Create a new chat bubble for the user's message
            const $rightChat = $(`
                <div class="right-chat">
                    <div class="chat-block">
                        ${message}
                        <div class="time">${hours}:${minutes}</div>
                    </div>
                </div>
            `);
            $contentChat.append($rightChat);

            // Scroll to the bottom of the chat
            $contentChat.scrollTop($contentChat[0].scrollHeight);

            // Show typing indicator
            showTypingIndicator();

            // Send the message to the server via AJAX
            $.ajax({
                url: '/chatbot/send',
                type: 'POST',
                data: {
                    message: message,
                    _token: $('meta[name="csrf-token"]').attr('content') // Include the CSRF token
                },
                success: function(response) {
                    // Remove typing indicator
                    removeTypingIndicator();

                    // Iterate over the messages array to handle multiple responses
                    response.messages.forEach(function(msg) {
                        if (msg.type === 'text') {
                            // Display bot's response
                            const $leftChat = $(`
                                <div class="left-chat">
                                    <div class="chat-block">
                                        ${msg.text}
                                        <div class="time">${hours}:${minutes}</div>
                                    </div>
                                </div>
                            `);
                            $contentChat.append($leftChat);

                            // Scroll to the bottom of the chat
                            $contentChat.scrollTop($contentChat[0].scrollHeight);
                        }
                        // You can add more conditions here to handle different message types (e.g., attachments)
                    });
                },
                error: function() {
                    // Handle error
                    removeTypingIndicator();
                    alert('There was an error sending your message.');
                }
            });
        }

        // Reset the input field
        $sendMessageForm[0].reset();
    });

    // Display the current time in the chat window
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, '0');
    const minutes = now.getMinutes().toString().padStart(2, '0');
    $oneTime.text(`${hours}:${minutes}`);

    // Function to show typing indicator
    function showTypingIndicator() {
        typingIndicator = $(`
            <div class="left-chat typing-indicator">
                <div class="chat-block">
                    <div class="dot"></div>
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        `);
        $contentChat.append(typingIndicator);

        // Scroll to the bottom of the chat
        $contentChat.scrollTop($contentChat[0].scrollHeight);
    }

    // Function to remove typing indicator
    function removeTypingIndicator() {
        if (typingIndicator) {
            typingIndicator.remove();
        }
    }
});
