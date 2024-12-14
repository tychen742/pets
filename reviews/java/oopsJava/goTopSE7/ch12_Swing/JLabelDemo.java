package ch12_Swing;

import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;

class MyJFrame extends JFrame {
	private JPanel contentPane;
	String[] imgName = new String[] { "koala", "jellyfish", "penguin" };
	JLabel[] lbl = new JLabel[imgName.length];
	JLabel[] lblImg = new JLabel[imgName.length];

	MyJFrame() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 650, 300);
		contentPane = new JPanel();
		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		for (int i = 0; i<imgName.length; i++) {
			lblImg[i] = new JLabel();
//			lblImg[i].setIcon(new ImageIcon(".\\"));
		}
		

	}
}

public class JLabelDemo {

}
