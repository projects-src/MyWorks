using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class BallFactoryScript : MonoBehaviour {
    public GameObject ball;
	// Use this for initialization
	void Start () {
        //Instantiate(ball, transform.position, transform.rotation);
        InvokeRepeating("SpawnBall", 0f, 1);
	}
	
    void SpawnBall(){
        Instantiate(ball, new Vector3(Random.Range(-5f, 5f), transform.position.y, transform.position.z), transform.rotation);
    }

	// Update is called once per frame
	void Update () {
		
	}
}
