function getBotResponse(input) {
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }

    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else if (input =="mahesh") {
        return "SMART BOY (:";
    }  } else if (input =="yogesh") {
        return "lavda nasalela manus";
    } else if (input =="krishna") {
        return "Kansa MAMA";
    } else if (input =="mahesh") {
        return "SMART BOY (:";
    } else {
        return "try typing something";
    }
}