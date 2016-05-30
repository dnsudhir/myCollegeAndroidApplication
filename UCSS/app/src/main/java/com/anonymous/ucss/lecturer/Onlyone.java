package com.anonymous.ucss.lecturer;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;

import com.anonymous.ucss.R;
import com.anonymous.ucss.config.Config;
import com.anonymous.ucss.view_students;

public class Onlyone extends AppCompatActivity {

    Button btn1,btn2,btn3,btn4,btn5,btn6;
    TextView header1,header2;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_onlyone);

        Intent intent = getIntent();

        String username = intent.getStringExtra(Config.login_id);
        String list = intent.getStringExtra(Config.list);
        header1 = (TextView) findViewById(R.id.header1);
        header2 = (TextView) findViewById(R.id.header2);


        btn1 = (Button) findViewById(R.id.btn1);
        btn2 = (Button) findViewById(R.id.btn2);
        btn3 = (Button) findViewById(R.id.btn3);
        btn4 = (Button) findViewById(R.id.btn4);
        btn5 = (Button) findViewById(R.id.btn5);
        btn6 = (Button) findViewById(R.id.btn6);


        if (list.contentEquals("internal")) {

            internal();
        }
        else if (list.contentEquals("attendance")){
            attendance();
        }


    }

    public void internal(){

        header1.setText("INTERNAL I");
        header2.setText("INTERNAL II");

        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_i");
                intent.putExtra(Config.MCA,"MCA 1 Year");
                startActivity(intent);
            }
        });

        btn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_i");
                intent.putExtra(Config.MCA,"MCA 2 Year");
                startActivity(intent);

            }
        });

        btn3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_i");
                intent.putExtra(Config.MCA,"MCA 3 Year");
                startActivity(intent);

            }
        });

        btn4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_ii");
                intent.putExtra(Config.MCA,"MCA 1 Year");
                startActivity(intent);

            }
        });

        btn5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_ii");
                intent.putExtra(Config.MCA,"MCA 2 Year");
                startActivity(intent);

            }
        });

        btn6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_ii");
                intent.putExtra(Config.MCA,"MCA 3 Year");
                startActivity(intent);
            }
        });


    }


    public void attendance(){
        header1.setText("ATTENDANCE I");
        header2.setText("ATTENDANCE II");


        btn1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "attend_i");
                intent.putExtra(Config.MCA,"MCA 1 Year");
                startActivity(intent);

            }
        });

        btn2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "attend_i");
                intent.putExtra(Config.MCA,"MCA 2 Year");
                startActivity(intent);


            }
        });

        btn3.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "attend_i");
                intent.putExtra(Config.MCA,"MCA 3 Year");
                startActivity(intent);

            }
        });

        btn4.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "attend_ii");
                intent.putExtra(Config.MCA,"MCA 1 Year");
                startActivity(intent);

            }
        });

        btn5.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "attend_ii");
                intent.putExtra(Config.MCA,"MCA 2 Year");
                startActivity(intent);

            }
        });

        btn6.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(Onlyone.this,view_students.class);
                intent.putExtra(Config.table, "attend_ii");
                intent.putExtra(Config.MCA,"MCA 3 Year");
                startActivity(intent);


            }
        });



    }


}
