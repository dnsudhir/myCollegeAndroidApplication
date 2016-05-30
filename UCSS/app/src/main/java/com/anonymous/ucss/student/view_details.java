package com.anonymous.ucss.student;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;

import com.anonymous.ucss.R;
import com.anonymous.ucss.config.Config;
import com.anonymous.ucss.view_students;

public class view_details extends AppCompatActivity {

    String who,table;
    Button btn1,btn2;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_view_details);

        Intent intent = getIntent();

        who = intent.getStringExtra(Config.WHO);
        table = intent.getStringExtra(Config.table);

        btn1 = (Button) findViewById(R.id.stu_btn1);
        btn2 = (Button) findViewById(R.id.stu_btn2);

        if (table.contentEquals("Internals")){
            internal();
        }
        else if (table.contentEquals("Attendance")){

            attendance();

        }



    }

    public void internal(){
        btn1.setText("Internals I");
        btn2.setText("Internals II");

        btn1.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(view_details.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_i");
                intent.putExtra(Config.MCA,who);
                startActivity(intent);

            }
        });

        btn2.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(view_details.this,view_students.class);
                intent.putExtra(Config.table, "intnl_marks_ii");
                intent.putExtra(Config.MCA,who);
                startActivity(intent);

            }
        });



    }

    public void attendance(){

        btn1.setText("Attendance I");
        btn2.setText("Attendance II");

        btn1.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(view_details.this,view_students.class);
                intent.putExtra(Config.table, "attend_i");
                intent.putExtra(Config.MCA,who);
                startActivity(intent);

            }
        });

        btn2.setOnClickListener(new OnClickListener() {
            @Override
            public void onClick(View view) {

                Intent intent = new Intent(view_details.this,view_students.class);
                intent.putExtra(Config.table, "attend_ii");
                intent.putExtra(Config.MCA,who);
                startActivity(intent);

            }
        });



    }







}
