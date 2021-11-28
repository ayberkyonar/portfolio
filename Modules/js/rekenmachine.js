let headerButton = document.querySelector('body');
let myButtons = document.querySelector('.changeTheme');
//theme switcher
function changeColor(){
    headerButton.classList.toggle ('themeDark');
}

let display='0';
let operator=null;
let firstValue= 0;
let secondValue= 0;
let result= 0;

let displayElement=document.querySelector('.display');
let buttonsElement=document.querySelector('.buttons');

buttonsElement.addEventListener('click', handleClick);
showDisplay();
//handle the click as an number or operators
function handleClick(event)
{
    const element=event.target;

    switch(element.className)
    {
        case 'btn-number':
            handleNumber(element);
            break;
        case 'btn-operator':
            handleOperator(element);
            break;  
        case 'btn-dot':
            handleDot(element);
            break;
        case 'btn-clear':
            handleClear(element);
            break;
        case 'btn-equal':
            handleEqual(element);
            break;
    }
}

function handleNumber(el)
{
    let number=el.innerHTML;
  
    if(display==='0'){
        display=number;
    }
    else{
        display=display+number;
    }

    showDisplay();
} 
//operator function
function handleOperator(el) {
    operator=el.innerHTML;
    firstValue = display;
    display = "0";
    showDisplay();
}
//handle dot 
function handleDot(el){
    let dot = el.innerHTML;
    if(!display.includes(".")){
        display=display+dot;
    }
    showDisplay();
}
//button to clear the calculator
function handleClear (el) {
    display='0';
    operator=null;
    firstValue= 0;
    secondValue= 0;
    result= 0;
    displayElement.innerHTML = 0;
    showDisplay;
}
//the total of everything you did in the calculator
function handleEqual () {
    secondValue=display;
    display = "0";
    let valueOne = parseFloat(firstValue);
    let valueTwo = parseFloat(secondValue);
    if (operator === "+") {
        result = valueOne+valueTwo;
    }else if(operator === "-") {
        result = valueOne-valueTwo;
    }else if(operator === "*") {
        result = valueOne*valueTwo;
    }else if(operator === "/") {
        result = valueOne/valueTwo;
    }
    display=result;
    showDisplay();
}
//function to show the display
function showDisplay(){
    displayElement.innerHTML=display;
}