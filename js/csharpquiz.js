const startButton = document.getElementById('start-btn')
const nextButton = document.getElementById('next-btn')
const questionContainerElement = document.getElementById('question-container')
const questionElement = document.getElementById('question')
const answerButtonsElement = document.getElementById('answer-buttons')

let shuffledQuestions, currentQuestionIndex
//button to start the quiz
startButton.addEventListener('click', startGame)
nextButton.addEventListener('click', () => {
  currentQuestionIndex++
  setNextQuestion()
})
//if you start the game the previous questions will vanish/hide
function startGame() {
  startButton.classList.add('hide')
  shuffledQuestions = questions.sort(() => Math.random() - .5)
  currentQuestionIndex = 0
  questionContainerElement.classList.remove('hide')
  setNextQuestion()
}

function setNextQuestion() {
  resetState()
  showQuestion(shuffledQuestions[currentQuestionIndex])
}
//show the question
function showQuestion(question) {
  questionElement.innerText = question.question
  question.answers.forEach(answer => {
    const button = document.createElement('button')
    button.innerText = answer.text
    button.classList.add('btn')
    if (answer.correct) {
      button.dataset.correct = answer.correct
    }
    button.addEventListener('click', selectAnswer)
    answerButtonsElement.appendChild(button)
  })
}
//hide function
function resetState() {
  clearStatusClass(document.body)
  nextButton.classList.add('hide')
  while (answerButtonsElement.firstChild) {
    answerButtonsElement.removeChild(answerButtonsElement.firstChild)
  }
}
//select the answer of the question
function selectAnswer(e) {
  const selectedButton = e.target
  const correct = selectedButton.dataset.correct
  setStatusClass(document.body, correct)
  Array.from(answerButtonsElement.children).forEach(button => {
    setStatusClass(button, button.dataset.correct)
  })
  if (shuffledQuestions.length > currentQuestionIndex + 1) {
    nextButton.classList.remove('hide')
  } else {
    startButton.innerText = 'Opnieuw Spelen'
    startButton.classList.remove('hide')
  }
}
//the status of the answer 
function setStatusClass(element, correct) {
  clearStatusClass(element)
  if (correct) {
    element.classList.add('correct')
  } else {
    element.classList.add('wrong')
  }
}

function clearStatusClass(element) {
  element.classList.remove('correct')
  element.classList.remove('wrong')
}
//objects for the questions with true or false
const questions = [
  {
    question: 'Welke datatype word gebruikt voor tekst?',
    answers: [
      { text: 'int', correct: false },
      { text: 'bool', correct: false },
      { text: 'string', correct: true },
      { text: 'double', correct: false }
    ]
  },
  {
    question: 'Hoe begin je een array?',
    answers: [
      { text: 'Array = new Array[ ]', correct: false },
      { text: 'string[ ] i = { "", "" };', correct: true },
      { text: 'Array[ ] = ', correct: false },
      { text: 'Console.Array();', correct: false }
    ]
  },
  {
    question: 'Hoe convert je string naar int?',
    answers: [
      { text: 'string = ConvertInt();', correct: false },
      { text: 'Console.WriteLine(string = Convert);', correct: false },
      { text: 'string = int;', correct: false },
      { text: 'Convert.ToInt32();', correct: true }
    ]
  },
]