package com.anonymous.ucss;

import android.os.Bundle;
import android.support.v4.app.FragmentActivity;
import android.view.View;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.MarkerOptions;

public class MapsActivity extends FragmentActivity implements OnMapReadyCallback {

    private GoogleMap mMap;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_maps);
        // Obtain the SupportMapFragment and get notified when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
    }



    public void onChange(View view){

        if (mMap.getMapType() == GoogleMap.MAP_TYPE_NORMAL){

            mMap.setMapType(GoogleMap.MAP_TYPE_SATELLITE);

        }
        else if (mMap.getMapType() == GoogleMap.MAP_TYPE_SATELLITE){
            mMap.setMapType(GoogleMap.MAP_TYPE_TERRAIN);
        }
        else if (mMap.getMapType() == GoogleMap.MAP_TYPE_TERRAIN){
            mMap.setMapType(GoogleMap.MAP_TYPE_HYBRID);;
        }
        else if (mMap.getMapType() == GoogleMap.MAP_TYPE_HYBRID){
            mMap.setMapType(GoogleMap.MAP_TYPE_NORMAL);
        }


    }



    @Override
    public void onMapReady(GoogleMap googleMap) {
        mMap = googleMap;

        LatLng UCSS = new LatLng(17.40723, 78.45371);
        mMap.addMarker(new MarkerOptions().position(UCSS).title("University College of Science,Saifabad"));
//        mMap.moveCamera(CameraUpdateFactory.newLatLng(UCSS));
        mMap.moveCamera(CameraUpdateFactory.newLatLngZoom(new LatLng(17.40723,78.45371),12.8f));
        mMap.setMyLocationEnabled(true);
    }
}
