const chatBody = document.querySelector(".chat-body");
const txtInput = document.querySelector("#txtInput");
const send = document.querySelector(".send");

send.addEventListener("click", () => renderUserMessage());

txtInput.addEventListener("keyup", (event) => {
    if (event.keyCode === 13) {
        renderUserMessage();
    }
});

const renderUserMessage = () => {
    const userInput = txtInput.value;
    renderMessageEle(userInput, "user");
    txtInput.value = "";
    setTimeout(() => {
        renderChatbotResponse(userInput);
        setScrollPosition();
    }, 600);
};

const renderChatbotResponse = (userInput) => {
    const res = getChatbotResponse(userInput);
    renderMessageEle(res);
};

const renderMessageEle = (txt, type) => {
    let className = "user-message";
    if (type !== "user") {
        className = "chatbot-message";
    }
    const messageEle = document.createElement("div");
    const txtNode = document.createTextNode(txt);
    messageEle.classList.add(className);
    messageEle.append(txtNode);
    chatBody.append(messageEle);
};

const answers = [
    "It is certain",
    "It is decidedly so",
    "Without a doubt",
    "Yes - definitely",
    "You may rely on it",
    "As I see it, yes",
    "Most likely",
    "Outlook good",
    "Yes", "Signs point to yes",
    "Don't count on it",
    "My reply is no",
    "My sources say no",
    "Outlook not so good",
    "Very doubtful",
    "Reply hazy, try again",
    "Ask again later",
    "Better not tell you now",
    "Cannot predict now",
    "Concentrate and ask again",
    "Yes daddy",
    "You're not old enough to learn that information"
];
const getChatbotResponse = (userInput) => {
    return responseObj[userInput.toLowerCase()] == undefined
        ? answers[Math.floor(Math.random() * Math.floor(answers.length))]
        : responseObj[userInput.toLowerCase()];
};

const setScrollPosition = () => {
    if (chatBody.scrollHeight > 0) {
        chatBody.scrollTop = chatBody.scrollHeight;
    }
};


const responseObj = {
    hello: "Hey ! How are you doing ?",
    hey: "Hey! What's Up",
    Alone: "Gimme 10 minutes to get there",
    today: new Date().toDateString(),
    time: new Date().toLocaleTimeString(),
};