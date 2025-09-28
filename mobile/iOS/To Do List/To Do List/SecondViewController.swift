//
//  SecondViewController.swift
//  To Do List
//
//  Created by tychen on 6/4/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit

class SecondViewController: UIViewController , UITextFieldDelegate {
    
    
    @IBOutlet var itemTextField: UITextField!
    
    @IBAction func add(_ sender: Any) {
        
        let itemsObject = UserDefaults.standard.object(forKey: "items")
        
        var items:NSMutableArray
        
        if let tempItems = itemsObject as? NSMutableArray {
            
            items = tempItems
            
            items.addingObjects(from: [itemTextField.text!])
            
        } else {
            
            items = [ itemTextField.text!]
        }
        
        UserDefaults.standard.set(items, forKey: "items")
        
        itemTextField.text = ""
        
    }

    override func touchesBegan(_ touches: Set<UITouch>, with event: UIEvent?) {
        self.view.endEditing(true)
    }
    func textFieldShouldReturn(_ textField: UITextField) -> Bool {
        textField.resignFirstResponder()
        return true
    }
    override func viewDidLoad() {
        super.viewDidLoad()

    }
    
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}

