package com.anonymous.ucss.student;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.webkit.WebView;

import com.anonymous.ucss.R;
import com.anonymous.ucss.config.Config;

public class download_files extends AppCompatActivity {

    String download_url = "http://www.userdata.esy.es/MCA_1_Year/";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_download_files);

        Intent intent = getIntent();
        String who = intent.getStringExtra(Config.WHO);

        if (who.contentEquals("MCA 1 Year")){
            download_url = "http://www.userdata.esy.es/MCA_1_Year/";
        }else if (who.contentEquals("MCA 2 Year")){
            download_url = "http://www.userdata.esy.es/MCA_2_Year/";
        }else if (who.contentEquals("MCA 3 Year")){
            download_url = "http://www.userdata.esy.es/MCA_3_Year/";
        }



        WebView browser = (WebView) findViewById(R.id.webview);
        browser.getSettings().setJavaScriptEnabled(true);
        browser.loadUrl(download_url);
    }
}
