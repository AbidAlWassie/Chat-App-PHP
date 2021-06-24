const chatForm = document.getElementById("chat-form");
const socket = io();

// Message from server
socket.on("message", message => {
  console.log(message);
  outputMessage(message);
});

// Message submit
chatForm.addEventListener("submit", (e) => {
  e.preventDefault();
  
  // Get message text
  const msg = e.target.elements.msg.value;
  
  // Emit message to the server
  socket.emit("chatMessage", msg)
});

// Output message to DOM
function outputMessage() {
  const textList = document.createElement("div");
  textList.classList.add("message-list", "mtb-10");
  
  const textItem = document.createElement("div");
  textItem.classList.add("list-text");
  
  const text = document.createElement("div");
  text.classList.add("message-list-item", "mtb-1");
  
  text.innerHTML = `
  <p class="meta">Abid <span>11:07 am</span></p>
  <p class="text">
    ${message}
  </p>`;
  document.querySelector(".chat-messages").appendChild(text);
 }