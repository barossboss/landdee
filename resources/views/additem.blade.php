@extends('layout.app')

@section('content')

@include('components.navbarlite')
	
	
	<section class='mysection'>
		<div class="container myform">
<form role="form" method='POST' action="additem.submit">
 {!! csrf_field() !!}
<br>
<br>
<br>
<br>
<br>
<br>
<br>
   <div class="col-xs-12 col-sm-12"> 

    <div class="row">
	   <div class="col-xs-12">
	     <h2 class=''><label>เพิ่มข้อมูลที่ดิน</label></h2>
	   </div>
	 </div>
    <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>หัวข้อ</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="input-lg" name='name' id="name" style="" placeholder=""></div>
	   </div>
   <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>ราคาขาย</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="" name='price' id="price" style="display:inline;" placeholder=""></div>
	   </div>
	
	
	
<hr>
     <div class="row">
	   <div class="col-xs-12">
	     <h3 class=''><label>ที่ตั้ง</label></h3>
	   </div>
	 </div>
	   
	 <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>จังหวัด</label></div>
		 <div class="col-xs-12 col-sm-9">
		   <select class="" id="province" >
	    	  <option>กรุงเทพมหานคร</option><option>กระบี่</option><option>กาญจนบุรี</option><option>กาฬสินธุ์</option><option>กำแพงเพชร</option><option>ขอนแก่น</option><option>จันทบุรี</option><option>ฉะเชิงเทรา</option><option>ชลบุรี</option><option>ชัยนาท</option><option>ชัยภูมิ</option><option>ชุมพร</option><option>เชียงราย</option><option>เชียงใหม่</option><option>ตรัง</option><option>ตราด</option><option>ตาก</option><option>นครนายก</option><option>นครปฐม</option><option>นครพนม</option><option>นครราชสีมา</option><option>นครศรีธรรมราช</option><option>นครสวรรค์</option><option>นนทบุรี</option><option>นราธิวาส</option><option>น่าน</option><option>บึงกาฬ</option><option>บุรีรัมย์</option><option>ปทุมธานี</option><option>ประจวบคีรีขันธ์</option><option>ปราจีนบุรี</option><option>ปัตตานี</option><option>พระนครศรีอยุธยา</option><option>พังงา</option><option>พัทลุง</option><option>พิจิตร</option><option>พิษณุโลก</option><option>เพชรบุรี</option><option>เพชรบูรณ์</option><option>แพร่</option><option>พะเยา</option><option>ภูเก็ต</option><option>มหาสารคาม</option><option>มุกดาหาร</option><option>แม่ฮ่องสอน</option><option>ยะลา</option><option>ยโสธร</option><option>ร้อยเอ็ด</option><option>ระนอง</option><option>ระยอง</option><option>ราชบุรี</option><option>ลพบุรี</option><option>ลำปาง</option><option>ลำพูน</option><option>เลย</option><option>ศรีสะเกษ</option><option>สกลนคร</option><option>สงขลา</option><option>สตูล</option><option>สมุทรปราการ</option><option>สมุทรสงคราม</option><option>สมุทรสาคร</option><option>สระแก้ว</option><option>สระบุรี</option><option>สิงห์บุรี</option><option>สุโขทัย</option><option>สุพรรณบุรี</option><option>สุราษฎร์ธานี</option><option>สุรินทร์</option><option>หนองคาย</option><option>หนองบัวลำภู</option><option>อ่างทอง</option><option>อุดรธานี</option><option>อุทัยธานี</option><option>อุตรดิตถ์</option><option>อุบลราชธานี</option><option>อำนาจเจริญ</option>
	       </select>
		 </div>
	   </div>
	   <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>อำเภอ</label></div>
		 <div class="col-xs-12 col-sm-9">
		   <select class="" id="province" >
	    	  <option>กรุงเทพมหานคร</option><option>กระบี่</option><option>กาญจนบุรี</option><option>กาฬสินธุ์</option><option>กำแพงเพชร</option><option>ขอนแก่น</option><option>จันทบุรี</option><option>ฉะเชิงเทรา</option><option>ชลบุรี</option><option>ชัยนาท</option><option>ชัยภูมิ</option><option>ชุมพร</option><option>เชียงราย</option><option>เชียงใหม่</option><option>ตรัง</option><option>ตราด</option><option>ตาก</option><option>นครนายก</option><option>นครปฐม</option><option>นครพนม</option><option>นครราชสีมา</option><option>นครศรีธรรมราช</option><option>นครสวรรค์</option><option>นนทบุรี</option><option>นราธิวาส</option><option>น่าน</option><option>บึงกาฬ</option><option>บุรีรัมย์</option><option>ปทุมธานี</option><option>ประจวบคีรีขันธ์</option><option>ปราจีนบุรี</option><option>ปัตตานี</option><option>พระนครศรีอยุธยา</option><option>พังงา</option><option>พัทลุง</option><option>พิจิตร</option><option>พิษณุโลก</option><option>เพชรบุรี</option><option>เพชรบูรณ์</option><option>แพร่</option><option>พะเยา</option><option>ภูเก็ต</option><option>มหาสารคาม</option><option>มุกดาหาร</option><option>แม่ฮ่องสอน</option><option>ยะลา</option><option>ยโสธร</option><option>ร้อยเอ็ด</option><option>ระนอง</option><option>ระยอง</option><option>ราชบุรี</option><option>ลพบุรี</option><option>ลำปาง</option><option>ลำพูน</option><option>เลย</option><option>ศรีสะเกษ</option><option>สกลนคร</option><option>สงขลา</option><option>สตูล</option><option>สมุทรปราการ</option><option>สมุทรสงคราม</option><option>สมุทรสาคร</option><option>สระแก้ว</option><option>สระบุรี</option><option>สิงห์บุรี</option><option>สุโขทัย</option><option>สุพรรณบุรี</option><option>สุราษฎร์ธานี</option><option>สุรินทร์</option><option>หนองคาย</option><option>หนองบัวลำภู</option><option>อ่างทอง</option><option>อุดรธานี</option><option>อุทัยธานี</option><option>อุตรดิตถ์</option><option>อุบลราชธานี</option><option>อำนาจเจริญ</option>
	       </select>
		 </div>
	   </div>
	   <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>ตำบล</label></div>
		 <div class="col-xs-12 col-sm-9">
		   <select class="" id="province" >
	    	  <option>กรุงเทพมหานคร</option><option>กระบี่</option><option>กาญจนบุรี</option><option>กาฬสินธุ์</option><option>กำแพงเพชร</option><option>ขอนแก่น</option><option>จันทบุรี</option><option>ฉะเชิงเทรา</option><option>ชลบุรี</option><option>ชัยนาท</option><option>ชัยภูมิ</option><option>ชุมพร</option><option>เชียงราย</option><option>เชียงใหม่</option><option>ตรัง</option><option>ตราด</option><option>ตาก</option><option>นครนายก</option><option>นครปฐม</option><option>นครพนม</option><option>นครราชสีมา</option><option>นครศรีธรรมราช</option><option>นครสวรรค์</option><option>นนทบุรี</option><option>นราธิวาส</option><option>น่าน</option><option>บึงกาฬ</option><option>บุรีรัมย์</option><option>ปทุมธานี</option><option>ประจวบคีรีขันธ์</option><option>ปราจีนบุรี</option><option>ปัตตานี</option><option>พระนครศรีอยุธยา</option><option>พังงา</option><option>พัทลุง</option><option>พิจิตร</option><option>พิษณุโลก</option><option>เพชรบุรี</option><option>เพชรบูรณ์</option><option>แพร่</option><option>พะเยา</option><option>ภูเก็ต</option><option>มหาสารคาม</option><option>มุกดาหาร</option><option>แม่ฮ่องสอน</option><option>ยะลา</option><option>ยโสธร</option><option>ร้อยเอ็ด</option><option>ระนอง</option><option>ระยอง</option><option>ราชบุรี</option><option>ลพบุรี</option><option>ลำปาง</option><option>ลำพูน</option><option>เลย</option><option>ศรีสะเกษ</option><option>สกลนคร</option><option>สงขลา</option><option>สตูล</option><option>สมุทรปราการ</option><option>สมุทรสงคราม</option><option>สมุทรสาคร</option><option>สระแก้ว</option><option>สระบุรี</option><option>สิงห์บุรี</option><option>สุโขทัย</option><option>สุพรรณบุรี</option><option>สุราษฎร์ธานี</option><option>สุรินทร์</option><option>หนองคาย</option><option>หนองบัวลำภู</option><option>อ่างทอง</option><option>อุดรธานี</option><option>อุทัยธานี</option><option>อุตรดิตถ์</option><option>อุบลราชธานี</option><option>อำนาจเจริญ</option>
	       </select>
		 </div>
	   </div>
	   <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>รายละเอียดที่ตั้ง</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="" name='location' id="location" style="display:inline;" placeholder=""></div>
	   </div>
	   <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>เนื่อที่</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="" name='area_num' id="area_num" style="display:inline;" placeholder=""></div>
	   </div>
	   <div class="row form-edit">
	     <div class="col-xs-12 col-sm-3"><label>ประเภทอสังหาริมทรัพย์</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="" name='printplatetype'  placeholder=""></div>
	   </div>
	   <div class="row form-edit">
	     <div class="col-xs-12 col-sm-3"><label>สถานที่สำคัญใกล้เคียง</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="" id="line" placeholder=""></div>
	   </div>
	   <div class="row form-edit">
	     <div class="col-xs-12 col-sm-3"><label>รายละเอียดอื่นๆ</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="" name='desc' id="desc" placeholder=""></div>
	   </div>
	 <hr>
	 <div class="row">
	   <div class="col-xs-12">
	     <h3 class=''><label>รูปภาพประกอบ</label></h3>
	   </div>
	 </div>
	   <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>เลือกรูปภาพ</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="file" class="" id="fileupload" placeholder=""></div>
	   </div>
 	<hr>
	 <div class="row">
	   <div class="col-xs-12">
	     <h3 class=''><label>แผนที่</label></h3>
	   </div>
	 </div>
	<div class="row  ">
		<div class="col-xs-12">
				 
			    <input id="pac-input" class="controls" type="text"
						  placeholder="Enter a location">
			    <div id="map-canvas" style='width:100%;height:350px'></div>
				
		   </div> 
	</div> <!-- mws-form-row -->
	   <hr>
     <div class="row">
	   <div class="col-xs-12">
	     <h3 class=''><label>ข้อมูลผู้ติดต่อ</label></h3>
	   </div>
	 </div>
	 	 <div class="row form-edit">
	     <div class="col-xs-12 col-sm-3"><label>ชื่อ</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class=""  name='contact_name' id="contact_name" placeholder=""></div>
	   </div>
	   <div class="row">
	     <div class="col-xs-12 col-sm-3"><label>เบอร์ติดต่อ</label></div>
		 <div class="col-xs-12 col-sm-9"><input type="text" class="" name='contact_tel' id="contact_tel" placeholder=""></div>
	   </div>
	   <div class="row">
	     <div class="col-xs-12 col-sm-3">&nbsp;</div>
	   </div>
	   <div class="row">
	     <div class="col-xs-12">
	       <div style="text-align:center;"><button type="submit" class="btn btn-default btn-lg btn-blue margin-bottom" id="save">บันทึกข้อมูล</button></div>
		 </div>
	   </div>

  </div> 
  
  <div class="hidden-xs col-sm-0"></div>
</form>
</div>	
</section>
	
@include('components.modal')	

@endsection

@section('body-end')
<script src="https://maps.googleapis.com/maps/api/js?&libraries=places&key=AIzaSyAkJnwbUvlf7XO_UBxP_3sQ95B3Wu4LMmo"></script>
<script type="text/javascript">
// This sample uses the Place Autocomplete widget to allow the user to search
// for and select a place. The sample then displays an info window containing
// the place ID and other information about the place that the user has
// selected.

function initialize() {
  var mapOptions = {
  //13.764934, 100.53829500000006
    center: {lat: 13.764934, lng: 100.53829500000006},
    zoom: 13
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map
  });
  /*if($('#semMap').val() != ''){
  		var semMap = $('#semMap').val();
  		var myLatlng = new google.maps.LatLng(getL1(semMap),getL2(semMap));
  		marker.setPosition(myLatlng);
  		marker.setVisible(true);
  		map.setCenter(myLatlng);
        map.setZoom(17);
       infowindow.setContent('<div><strong>' + '' + '</strong><br>'
       + 'พิกัด : ' + $('#semMap').val() + '<br>' 
        );
        infowindow.open(map, marker);
  }*/
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map, marker);
  });

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    infowindow.close();
    place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }

    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);
    }

    // Set the position of the marker using the place ID and location
    marker.setPlace(/** @type {!google.maps.Place} */ ({
      placeId: place.place_id,
      location: place.geometry.location
    }));
    var semLocation = place.geometry.location;
    
    //semLocation = semLocation.substring(0 , semLocation.length-1);
     //alert(semLocation.lat() +","+ semLocation.lng());
    /*$('#semMap').val(semLocation.lat() +","+ semLocation.lng());
    $('#semMapPlaceName').val(place.name);*/
    marker.setVisible(true);
    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
       'พิกัด : ' + place.geometry.location + '<br>' +
       // place.formatted_address
       ""
        );
    infowindow.open(map, marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
<script type="text/javascript">
function getL1(location){
	try{
		var ss = parseFloat(location.split(',')[0].trim())
		//alert(ss);
		return ss;
	}catch(e){ alert(e)}
	
}
function getL2(location){
	try{
		var ss = parseFloat(location.split(',')[1].trim())
		//alert(ss);
		return ss;
	}catch(e){ alert(e)}
	
}
function addMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  markers.push(marker);
}
// Sets the map on all markers in the array.
function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setAllMap(null);
}

// Shows any markers currently in the array.
function showMarkers() {
  setAllMap(map);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}
 </script>
 @endsection