package org.tychen.designpatterns.demo1;

import javax.swing.SwingUtilities;

import org.tychen.designpatterns.demo1.controller.Controller;
import org.tychen.designpatterns.demo1.model.Model;
import org.tychen.designpatterns.demo1.view.View;

public class Application {

	public static void main(String[] args) {
		SwingUtilities.invokeLater(new Runnable() {

			@Override
			public void run() {
				runApp();
			}
		});

	}

	public static void runApp() { // entry point
		// model should never import interfaces or from controller
		// model is free-standing independent
		Model model = new Model();
		View view = new View(model); // the view of model
		// view imports model from model packages
		// we are passing the model to the view here
	
	Controller controller = new Controller(view, model);
	
	}
}
