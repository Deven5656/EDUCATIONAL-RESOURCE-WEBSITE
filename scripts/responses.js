function getBotResponse(input) {
    //rock paper scissors
    if (input == "em1") {
        return "shorturl.at/ilWZ1";
    } else if (input == "coa") {
        return "shorturl.at/eoswF";
    } else if (input == "ec1") {
        return "shorturl.at/hilrU";
    }else if (input == "dbms") {
        return "shorturl.at/twMU5";
    } else if (input == "pcpf") {
        return "shorturl.at/gHLV2";
    } else if (input == "dsa") {
        return "shorturl.at/oJRZ9";
    }

    // Simple responses
    if (input == "hello"||input == "HI"||input == "HELLO"||input == "Hey"||input == "hey"||input == "Hello"||input == "hi") {
        return "Hello there!";
    } else if (input == "goodbye"||input == "bye"||input == "Bye"||input == "by") {
        return "Talk to you later! bye";
    } else if (input == "Thank you😍") {
        return "Your Welcome come again";
     } else {
        return "For above query contact us via whatsapp 8369505410 9765859088";
    }
}