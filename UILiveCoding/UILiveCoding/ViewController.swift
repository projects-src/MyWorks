//
//  ViewController.swift
//  UILiveCoding
//
//  Created by 衣川守 on 2018/05/13.
//  Copyright © 2018年 衣川守. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    @IBOutlet weak var timerlabel: UILabel!
    @IBOutlet weak var startButton: UIButton!
    @IBOutlet weak var stopButton: UIButton!
    @IBOutlet weak var resetButton: UIButton!
    private var timer = Timer()
    private var count = 0.0
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
    @IBAction func startTimer(_ sender: Any) {
        if !timer.isValid{
            timer = Timer.scheduledTimer(timeInterval:0.1, target:self, selector:#selector(ViewController.updateTimer), userInfo:nil, repeats:true)
        }
    }
    
    @objc private func updateTimer(){
        count += 0.1
        timerlabel.text = String(format:".1f", count)
    }

    @IBAction func stopTimer(_ sender: Any) {
        if timer.isValid{
            timer.invalidate()
        }
    }
    @IBAction func resetTimer(_ sender: Any) {
        timer.invalidate()
        count = 0.0
        timerlabel.text = String(format:"%.1f", count)
    }
}
