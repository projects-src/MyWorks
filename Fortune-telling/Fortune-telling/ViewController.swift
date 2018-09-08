//
//  ViewController.swift
//  TestApp
//
//  Created by 衣川守 on 2018/05/14.
//  Copyright © 2018年 衣川守. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet weak var ageField: UITextField!
    @IBOutlet weak var nameField: UITextField!
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    override func prepare(for segue: UIStoryboardSegue, sender: Any?) {
        
        //次のページの情報を取得する
        //次のページはOmikuziViewControllerClassなので、それに合わせてas!でダウンキャストする
        let omikuziController = segue.destination as! omikuziViewController
        
        //１ページ目の名前のtextFieldの値にnilが入っていないかチェックする
        if let name = nameField.text {
            //nilチェックが通ったら次のページのnameに値を代入する
            omikuziController.name = name
        }
    }
    
    //前の画面から戻った時の処理
    @IBAction func restart(_segue: UIStoryboardSegue){
        //textFieldの値を空欄に戻す
        nameField.text = ""
        ageField.text = ""
    }
    

}

