//
//  ViewController.swift
//  TodoApp
//
//  Created by 衣川守 on 2018/10/01.
//  Copyright © 2018年 衣川守. All rights reserved.
//

import UIKit

class ViewController: UIViewController,UITableViewDelegate,UITableViewDataSource {
    
    var todoItem = [String]()
    
    @IBOutlet weak var tableView: UITableView!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        //新規追加
        if UserDefaults.standard.object(forKey: "TodoList") != nil {
            todoItem = UserDefaults.standard.object(forKey: "TodoList") as! [String]
        }
        
        // Do any additional setup after loading the view, typically from a nib.
    }
    
    func tableView(_ tableView: UITableView, numberOfRowsInSection section: Int) -> Int {
        return todoItem.count
    }
    
    func tableView(_ tableView: UITableView, cellForRowAt indexPath: IndexPath) -> UITableViewCell {
        //変数を作る
        let TodoCell : UITableViewCell = tableView.dequeueReusableCell(withIdentifier: "TodoCell", for: indexPath)
        //変数の中身を作る
        TodoCell.textLabel!.text = todoItem[indexPath.row]
        //戻り値の設定（表示する中身)
        return TodoCell
    }
    
    @IBAction func TodoAddButton(segue: UIStoryboardSegue) {
        
        guard let VC = segue.source as? AddController else {
            fatalError("ViewController does not exist")
        }
        
        guard let text = VC.TodoTextField.text else {
            fatalError()
        }
        todoItem.append(text)
        
        UserDefaults.standard.set(todoItem, forKey: "TodoList" )
        
        tableView.reloadData()
        
        print("add")
    }
    
    
    
    
    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    
    
}


