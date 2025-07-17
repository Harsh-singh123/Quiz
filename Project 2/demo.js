const questions = [
    { num: 1, question: "What does HTML stand for?", answer: "Hyper Text Markup Language", options: ["Hyper Text Multiple Language", "Hyper Text Preprocessor", "Hyper Tool Multi Language", "Hyper Text Markup Language"] },
    { num: 2, question: "What does CSS stand for?", answer: "Cascading Style Sheet", options: ["Computer Style Sheet", "Cascading Style Sheet", "Colorful Style Sheet", "Common Style Sheet"] },
    { num: 3, question: "What does PHP stand for?", answer: "Hypertext Preprocessor", options: ["Hypertext Preprocessor", "Hypertext Programming", "Hometext Preprocessor", "Hypertext Preprogramming"] },
    { num: 4, question: "What does XML stand for?", answer: "eXtensible Markup Language", options: ["eXTra Multi-Program Language", "eXecutable Multiple Language", "eXtensible Markup Language", "eXamine Multiple Language"] },
    { num: 5, question: "What does SQL stand for?", answer: "Structured Query Language", options: ["Statement Question Language", "Stylesheet Query Language", "Stylish Question Language", "Structured Query Language"] }
];

// Function to shuffle the questions array and reassign numbers
function shuffleAndReassignNumbers(array) {
    for (let i = array.length - 1; i > 0; i--) {
        
        let j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]]; // Swap elements
    }
    // Reassign num values sequentially
    array.forEach((item, index) => item.num = index + 1);
    return array;
    
}

// Shuffle questions and reassign numbers
const shuffledQuestions = shuffleAndReassignNumbers(questions);

console.log(shuffledQuestions);
