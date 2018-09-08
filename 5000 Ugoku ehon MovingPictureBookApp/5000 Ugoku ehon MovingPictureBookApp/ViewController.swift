//
//  ViewController.swift
//  5000 Ugoku ehon MovingPictureBookApp
//
//  Created by 衣川守 on 2018/08/20.
//  Copyright © 2018年 衣川守. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    var 現在のページ番号 = 1
    @IBOutlet weak var イメージ: UIImageView!
    override func viewDidLoad() {
        super.viewDidLoad()
         //[1]画像データをインスタンス化
        let imageA: UIImage! = UIImage(named: "Image1-A")
        let imageB: UIImage! = UIImage(named: "Image1-B")
        //[2]コマ送りに使う画像データの配列をセット
        イメージ.animationImages = [imageA, imageB]
        //[3]コマ送りの間隔を設定
        イメージ.animationDuration = 1
        //[4]コマ送りのアニメーションを開始
        イメージ.startAnimating()
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    @IBAction func 進むボタンをタップしたとき() {
        if 現在のページ番号 < 4 {
            現在のページ番号 += 1
        }
        print("\(現在のページ番号)ページ目")
        ページの変更(ページ番号: 現在のページ番号)
    }
    
    @IBAction func 戻るボタンをタップしたとき() {
        if 現在のページ番号 > 1 {
           現在のページ番号 -= 1
        }
        print("\(現在のページ番号)ページ目")
        ページの変更(ページ番号: 現在のページ番号)
    }
    
    func ページの変更(ページ番号: Int) {
        イメージ.stopAnimating()
        switch ページ番号 {
        case 1:
            イメージ.animationImages = [UIImage(named: "Image1-A")!, UIImage(named: "Image1-B")!]
        case 2:
        イメージ.animationImages = [UIImage(named: "Image2-A")!, UIImage(named: "Image2-B")!]
        case 3:
            イメージ.animationImages = [UIImage(named: "Image3-A")!, UIImage(named: "Image3-B")!]
        case 4:
        イメージ.animationImages = [UIImage(named: "Image4-A")!, UIImage(named: "Image4-B")!]
        default: break
        }
        イメージ.startAnimating()
    }

}
