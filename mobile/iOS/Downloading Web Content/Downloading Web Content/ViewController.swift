//
//  ViewController.swift
//  Downloading Web Content
//
//  Created by tychen on 6/4/18.
//  Copyright © 2018 tychen. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    @IBOutlet var webview: UIWebView!
    
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        //        _ = URL(string: "https://www.stackoverflow.com")!
        
        // let url = URL(string: "https://www.stackoverflow.com")!
        
        // let url = URL(string: "https://www.ptt.cc/bbs/Gossiping/index.html")!
        // webview.loadRequest(URLRequest(url: url))
        
        // webview.loadHTMLString("<h1>Hello there!</>", baseURL: nil)
        
        if let url = URL(string: "https://stackoverflow.com") {
            let request = NSMutableURLRequest(url: url)
            let task = URLSession.shared.dataTask(with:request as URLRequest) { data, reqponse, error in
                if error != nil {
                    print(error!)
                } else {
                    if let unwrappedData = data {
                        let dataString = NSString(data: unwrappedData, encoding: String.Encoding.utf8.rawValue)
                        print(dataString!)
                    }
                }
            }
            
            task.resume()
        }
    }
    
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}

