//
//  omikuziViewController.swift
//  TestApp
//
//  Created by 衣川守 on 2018/05/19.
//  Copyright © 2018年 衣川守. All rights reserved.
//

import UIKit

class omikuziViewController: UIViewController {

    //前のページから名前を受け取るための変数
    var name:String? = ""
    
    
    //おみくじの結果を配列に格納
    var result:[String] = ["大吉","中吉","小吉","凶","大凶"]
    
    //名前とおみくじの結果を表示させるためのlabelをControllerと紐づける
    @IBOutlet weak var nameLabel: UILabel!
    @IBOutlet weak var resultLabel: UILabel!
    
    
    //viewDidLoadはページが表示された時に実行される
    override func viewDidLoad() {
        super.viewDidLoad()

        //受け取ったnameにnilが入っていないかチェックする
        if let name = name{
            //nilが入っていなかった場合にLabelに名前を表示させる
            nameLabel.text = name + "さん"
        }
        //ランダムな数値0~3を取得、結果に応じて配列からおみくじの値を表示させる
        let num = Int(arc4random_uniform(4))
        resultLabel.text = "\(result[num])です!"
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    /*
    // MARK: - Navigation

    // In a storyboard-based application, you will often want to do a little preparation before navigation
    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        // Get the new view controller using segue.destinationViewController.
        // Pass the selected object to the new view controller.
    }
    */

}
