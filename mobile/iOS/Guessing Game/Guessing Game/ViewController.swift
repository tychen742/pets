//
//  ViewController.swift
//  Guessing Game
//
//  Created by tychen on 6/2/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    
    @IBOutlet var enterNumber: UITextField!
    
//    func random(_ n:Int) -> Int {
//        return Int(arc4random_uniform(UInt32(n)))
//    }
//    lazy var randNumber = random(6)
    
    let randNumber = arc4random_uniform(6)
    var strRight = "You are right!"
    var strWrong = "You are wrong"

    
    @IBOutlet var rightOrWrong: UILabel!
    
    @IBAction func makeGuessAndPrint(_ sender: Any) {
        
        if randNumber == Int(enterNumber.text!)! {
            rightOrWrong.text = strRight
        } else {
            rightOrWrong.text = strWrong
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

