//
//  ViewController.swift
//  Animations
//
//  Created by tychen on 6/23/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet var image: UIImageView!
    
    var counter = 2;
    
    @IBAction func next(_ sender: AnyObject) {
        image.image = UIImage(named: "frame_\(counter)_delay-0.1s.gif")
        counter += 1
        if counter == 7 {
            counter = 2;
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

