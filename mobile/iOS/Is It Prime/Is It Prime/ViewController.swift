//
//  ViewController.swift
//  Is It Prime
//
//  Created by tychen on 6/2/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    @IBOutlet var numberTextField: UITextField!
    
    @IBOutlet var resultLabel: UILabel!
    @IBAction func submitPressed(_ sender: Any) {
        
        
        if let userEnteredString = numberTextField.text {
            let userEnteredInteger = Int(userEnteredString)
            if let number = userEnteredInteger {
                var isPrime = true
                if number < 2 {
                    isPrime = false
                }
                for index in 2...((number/2)) {
                    if number % index == 0 {
                        isPrime = false
                    }
                }
                if isPrime == true {
                    resultLabel.text = "\(number) Is a Prime!"
                } else {
              resultLabel.text = "\(number) is NOT a Prime!"
                }
            } else {
                resultLabel.text = "Please enter a positive whole number."
            }
        }
        
        
        
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}

