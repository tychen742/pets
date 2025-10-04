package mvc_Java93;

import java.awt.event.ActionListener;

import javax.swing.*;

public class CalculatorView extends JFrame { // JFrame: for interface, non-MVC
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;
	private JTextField firstNumber = new JTextField(10); // these are components
	private JLabel additionLabel = new JLabel("+");
	private JTextField secondNumber = new JTextField(10);
	private JButton calculateButton = new JButton("Calculate");
	private JTextField calcSolution = new JTextField(10);

	CalculatorView() { // the view (extends JFrame
		JPanel calcPanel = new JPanel();

		this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		this.setSize(600, 200);

		calcPanel.add(firstNumber); // add the components to the panel
		calcPanel.add(additionLabel);
		calcPanel.add(secondNumber);
		calcPanel.add(calculateButton);
		calcPanel.add(calcSolution);

		this.add(calcPanel);

	}

	public int getFirstNumber() { // Access the number
		// getText returns the value in the JTextField
		return Integer.parseInt(firstNumber.getText());
	}

	public int getSecondNumber() {
		return Integer.parseInt(firstNumber.getText());
	}
	
	public int getCalcSolution(){
		return Integer.parseInt(calcSolution.getText());
	}
	
	public void setCalcSolution(int solution){
		calcSolution.setText(Integer.toString(solution));
	}
	
	void addCalculationListener(ActionListener listenerForCalcButton){
		calculateButton.addActionListener(listenerForCalcButton);
	}
	
	void displayErrorMessage(String errorMessage) {
		JOptionPane.showMessageDialog(this, errorMessage);
	}

}
