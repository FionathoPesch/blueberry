var form = document.querySelector("form");
var answerKey = {
  question_a: "b",
  question_b: "c",
  question_c: "b"
};

function submitQuiz() {
  var ele = document.getElementsByTagName("input");
  var results = {};

  for (var i = 0; i < ele.length; i++) {
    if (ele[i].type == "radio") {
      if (ele[i].checked) {
        results[ele[i].name] = ele[i].value;
      }
    }
  }

  console.log(results);
  res = checkEqual(results, answerKey);

  if (res == false) {
    alert("You did not pass the quiz, redirecting you to the intro page");
    window.location = "intro.php";
  } else {
    window.location = "applet.php";
  }
}

function checkEqual(a, b)
{
  // Create arrays of property names
    var aProps = Object.getOwnPropertyNames(a);
    var bProps = Object.getOwnPropertyNames(b);

    // If number of properties is different,
    // objects are not equivalent
    if (aProps.length != bProps.length) {
        return false;
    }

    for (var i = 0; i < aProps.length; i++) {
        var propName = aProps[i];

        // If values of same property are not equal,
        // objects are not equivalent
        if (a[propName] !== b[propName]) {
            return false;
        }
    }

    // If we made it this far, objects
    // are considered equivalent
    return true;
}
