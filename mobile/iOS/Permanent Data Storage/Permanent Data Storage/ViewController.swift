//
//  ViewController.swift
//  Permanent Data Storage
//
//  Created by tychen on 6/4/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        UserDefaults.standard.set("Tsangyao Chen", forKey: "name")
        let nameObject = UserDefaults.standard.object(forKey: "name")
        if let name = nameObject as? String{
            print(name)
        } else {
            print("nope")
        }
        
//        let arr = [1, 2, 3, 4]
//        UserDefaults.standard.set(arr, forKey: "array")
        
        let arrayObject = UserDefaults.standard.object(forKey: "array")
        if let array = arrayObject as? NSArray {
            print(array)
        }
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}

