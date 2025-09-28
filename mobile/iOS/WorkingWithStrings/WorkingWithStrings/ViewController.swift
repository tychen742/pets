//
//  ViewController.swift
//  WorkingWithStrings
//
//  Created by tychen on 6/5/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit


class ViewController: UIViewController {
    
    func workWithStrin() {
        let str = "Tsangyao Chen"
        let newTypeString = NSString(string: str)
        let test1 = newTypeString.substring(to: 5)
        let test2 = newTypeString.substring(from: 3)
        print("test1: " + test1)
        print("test2: " + test2)
        newTypeString.substring(with: NSRange(location: 0, length:3))
        
    }
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        workWithStrin()
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}

