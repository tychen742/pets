package java20_GUI;

import java.awt.Dimension;
import java.awt.Toolkit;
import javax.swing.*;

public class Swing extends JFrame {
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	public static void main(String[] args) {
		new Swing();
	}

	public Swing() {
		this.setSize(400, 400);
		// this.setLocationRelativeTo(null);
		Toolkit tk = Toolkit.getDefaultToolkit();
		Dimension dim = tk.getScreenSize();
		int xPos = (dim.width / 2) - (this.getWidth() / 2);
		int yPos = (dim.height / 2) - (this.getHeight() / 2);
		this.setLocation(xPos, yPos);
		this.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		this.setTitle("My first frame");
		this.setResizable(false);

		JPanel thePanel = new JPanel();
		JLabel label1 = new JLabel("Tell me something");
		label1.setText("New Text");
		label1.setToolTipText("Doesn't do anything");
		thePanel.add(label1);

		JButton button1 = new JButton("Send");
		// button1.setBorderPainted(false);
		// button1.setContentAreaFilled(false);
		button1.setText("New Button");
		button1.setText("It's a button");
		thePanel.add(button1);

		JTextField textField1 = new JTextField("Type in the textfield", 15);
		textField1.setColumns(10);
		textField1.setText("Type again");
		textField1.setToolTipText("Tooltip");
		thePanel.add(textField1);

		JTextArea textArea1 = new JTextArea(15, 20);
		textArea1.setText("Just a whole bunch of text that is important\n");
		textArea1.setLineWrap(true);
		textArea1.setWrapStyleWord(true);
		int numOfLines = textArea1.getLineCount();
		textArea1.append(" number of lines: " + numOfLines);
		
		JScrollPane scrollbar1 = new JScrollPane(textArea1, JScrollPane.VERTICAL_SCROLLBAR_AS_NEEDED, JScrollPane.HORIZONTAL_SCROLLBAR_AS_NEEDED);
		thePanel.add(scrollbar1);
		
		this.add(thePanel);

		this.setVisible(true);
		
		textField1.requestFocus();

	}
}
