import UIKit

class ViewController: UIViewController {
    var timer = Timer()
    var time = 210;
    
    @IBOutlet var timerLabel: UILabel!
    
    @objc func decreaseTimer () {
        if time > 0 {
            time -= 1
            timerLabel.text = String(time)
        } else {
            timer.invalidate()
        }}
    
    @IBAction func play(_ sender: Any) {
        timer = Timer.scheduledTimer(timeInterval: 1, target: self, selector:#selector(ViewController.decreaseTimer), userInfo: nil, repeats: true)
    }
    
    
    @IBAction func pause(_ sender: Any) {
        timer.invalidate()
    }
    
    @IBAction func minusTen(_ sender: Any) {
        time -= 10
        timerLabel.text = String(time)
    }
    
    @IBAction func plusTen(_ sender: Any) {
        time += 10
        if time > 10 {
        timerLabel.text = String(time)
        }
    }
    
    @IBAction func resetTimer(_ sender: Any) {
        time = 210
        timerLabel.text = String(time)
    }
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        // timer = Timer.scheduledTimer(timeInterval: 1, target: self, selector:#selector(processTimer), userInfo: nil, repeats: true) // + @objc
        
    }
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}

