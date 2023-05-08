// Get the form elements
const weightInput = document.getElementById("weightInput");
const heightInput = document.getElementById("heightInput");
const calculateBtn = document.getElementById("calculateBtn");
const bmiResultArea = document.querySelector('.bmi-result-area');
const bmiResult = document.getElementById("bmiResult");
const bmiOverview = document.getElementById("bmiOverview");

// Define the calculateBMI function
function calculateBMI() {
  const weight = weightInput.value;
  const height = heightInput.value;
  
  // Calculate the BMI
  const bmi = weight / ((height / 100) * (height / 100) );
  
  // Display the BMI result
  bmiResult.textContent = bmi.toFixed(2);

  if(bmi >= 30){
    bmiResultArea.classList.remove("green");
    bmiResultArea.classList.add("red");
    bmiOverview.textContent = "- Obesity";
  }
  if(bmi > 25 && bmi < 30){
    bmiResultArea.classList.remove("green");
    bmiResultArea.classList.add("red");
    bmiOverview.textContent = "- Over Weight";
  }
  if(bmi < 18.5){
    bmiResultArea.classList.remove("green");
    bmiResultArea.classList.add("red");
    bmiOverview.textContent = "- Underweight";
  }
  if(bmi >= 18.5 && bmi < 25){
    bmiResultArea.classList.remove("red");
    bmiResultArea.classList.add("green");
    bmiOverview.textContent = "- Normal weight";
  }
}

// Attach the function to the button click event
calculateBtn.addEventListener("click", calculateBMI);
