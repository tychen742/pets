package book.java7.chapter3;

import java.awt.Button;
import java.awt.Image;
import java.awt.Label;
import javafx.scene.image.ImageView;

public class WebForm {

	private Label label = new Label();
	private ImageView imageView = new ImageView();
	private Button button = new Button();

	// public String getLabel() {
	// return label.getLabel();
	// }

	public void setLabel(String text) {
		// label.setLabel(text);
	}

	public javafx.scene.image.Image getImage() {
		return imageView.getImage();
	}

	public void setImage(javafx.scene.image.Image image) {
		imageView.setImage(image);
	}

	public void onClick() {
		// button.onClick();
	}
}
