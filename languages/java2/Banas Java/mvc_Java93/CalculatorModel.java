package mvc_Java93;
// Data & Calculation in Model class
// Interface in View class
// coordinate MV in Controller class

public class CalculatorModel {
	private int calculationValue; // Data
	
	public void addTwoNumbers(int firstNumber, int secondNumber) { // Method
		calculationValue = firstNumber + secondNumber;
	}
	
	public int getCalculationValue() { // Access to the data
		return calculationValue;
	}
}
