document.getElementById('send-button').addEventListener('click', function() {
    sendMessage();
});

document.getElementById('message-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});

function sendMessage() {
    const messageInput = document.getElementById('message-input');
    const messageText = messageInput.value.trim();
    
    if (messageText !== '') {
        const messageContainer = document.createElement('div');
        messageContainer.className = 'message sent';
        
        const messageContent = document.createElement('p');
        messageContent.textContent = messageText;
        
        const messageTime = document.createElement('span');
        const currentDateTime = new Date();
        messageTime.textContent = `${currentDateTime.getHours()}:${currentDateTime.getMinutes()}`;
        
        messageContainer.appendChild(messageContent);
        messageContainer.appendChild(messageTime);
        
        document.getElementById('chat-box').appendChild(messageContainer);
        messageInput.value = '';
        messageInput.focus();
        
        document.getElementById('chat-box').scrollTop = document.getElementById('chat-box').scrollHeight;
    }
}

document.getElementById('search-input').addEventListener('input', function() {
    const searchText = this.value.toLowerCase();
    const chatItems = document.querySelectorAll('.chat-item');
    
    chatItems.forEach(function(item) {
        const itemName = item.querySelector('p').textContent.toLowerCase();
        if (itemName.includes(searchText)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
});

document.getElementById('add-group-button').addEventListener('click', function() {
    const groupName = prompt("Masukkan nama grup diskusi baru:");
    if (groupName) {
        const chatItem = document.createElement('div');
        chatItem.className = 'chat-item';
        
        const chatName = document.createElement('p');
        chatName.textContent = groupName;
        
        const chatMessage = document.createElement('p');
        chatMessage.textContent = "Grup diskusi baru dibuat";
        
        chatItem.appendChild(chatName);
        chatItem.appendChild(chatMessage);
        
        document.getElementById('chat-list').appendChild(chatItem);
    }
});
function openChat(group) {
    console.log("Open chat for group:", group);
    document.querySelector('.chat-header h2').textContent = group;
}
