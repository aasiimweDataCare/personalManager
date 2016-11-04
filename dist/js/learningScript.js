/**
 * Created by Administrator on 10/15/2016.
 */

function add(first_value, second_value) {
    var result = (first_value + second_value);
    console.log(result);
    document.getElementById('print').value = result;
    return result;
}

/*start of function scoping and nesting-Js OOP*/
var addFunction = function (x, y) {
    var result = x + y;
    document.getElementById('print').value = result;
    return result;
};

var promptFunction = function (prompt_message, default_prompt_value) {
    var result = prompt(prompt_message, default_prompt_value);
    return result;
};

var areaOfCircleFunction = function (pi, radius) {
    return (accuratePi(pi) * accurateSqRadius(radius));

    function accuratePi(pi) {
        pi = (22 / 7);
        return pi;
    }

    function accurateSqRadius(radius) {
        return (Math.pow(radius, 2));
    }
};
/*end of function scoping and nesting-Js OOP*/

/*start of string Type casting and concatenation*/
function trialTypeCastingPrompt(initialMsg, returnMsg) {
    var age = prompt(initialMsg, returnMsg);
    if (isNaN(age)) {
        return alert('Invalid age entered');
    } else {
        return alert('You will soon be ' + (Number(age) + 1) + ' years old.');
    }


    /*->you have to use lots of brackets to be able to type cast well
     * ->the type casting always starts with a capital letter
     * ->the switch statement is the same as in php*/
}

function trialTypeCastingPromptOR_Operator(initialMsg, returnMsg) {
    var customer = prompt(initialMsg, returnMsg);
    return alert('Hello' + ( customer || 'Valued customer'));

}

/*end of function scoping and nesting-Js OOP*/

/* start of determining equality and looping in variables*/
/*see
 ->for loop,
 ->do while loop and
 ->breaking out of a loop
 */
function loopingAndEquality_Operation() {
    var x = 10;
    while (x > 0) {

        x--;
    }
    return x;
}
/* end of determining equality in variables*/

/*Handling errors*/


function displayResult() {
    var message, x;
    message = document.getElementById("print_general");
    message.innerHTML = "";
    x = document.getElementById("demo").value;
    try {
        x = Number(x);
        if (x == "") throw "is empty";
        if (isNaN(x)) throw "is not a number";
        if (x > 10) throw "is too high";
        if (x < 5) throw "is too low";
    }
    catch (err) {
        message.innerHTML = "Input " + err;
    }
}
/* start of working with DOM elements*/

function getStringLength() {
    var stringLength, output, msg, myText;
    myText = document.getElementById("demo").value;
    stringLength = myText.length;
    output = document.getElementById("print_general");
    output.innerHTML = "";
    try {
        msg = Number(stringLength);
        if ((msg !== "") && !(isNaN(msg))) {
            output.innerHTML = "The string length is " + msg;
        } else {
            throw "invalid string length";
        }

    } catch (e) {
        output.innerHTML = "String length had an error of " + e;
    }
}

function getElementsByClassName_DOMElement() {

    var elements = document.getElementsByClassName("btn");
    var names = '';
    for (var i = 0; i < elements.length; i++) {
        names += elements[i].value + "x<br>";
    }


    console.log(names);
    document.getElementById("print_general").innerHTML = names;
}

/* start of working with DOM elements writing to out-put streams*/
function writeToOutPut_DOMElement() {

    var myDate = Date();
    console.log(myDate);
    document.getElementById("print_general").innerHTML = myDate;
}
/* start of working with DOM elements writing to out-put streams*/
