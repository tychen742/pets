//
//  ViewController.swift
//  Cat Years
//
//  Created by tychen on 6/2/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    @IBOutlet var ageTextField: UITextField!
    
    @IBOutlet var ageLabel: UILabel!
    @IBAction func submitPressed(_ sender: Any) {
        print(ageTextField.text as Any)
        
        let ageInCatYears = Int(ageTextField.text!)! * 7
        ageLabel.text = String(ageInCatYears)
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

