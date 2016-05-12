<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				@if (Auth::guest())
				<div class="modal-header">
					<a href="#" class="close-link close_login"><i class="icon_close_alt2"></i></a>
					<h3 class="white">เข้าสู่ระบบ</h3>
				</div>
				<div class="modal-body">
				<form method="POST" action="{{ url('/login') }}" class="popup-form">
					 {!! csrf_field() !!}
					<input type='hidden' name='iaction' value='login'/>
					<input type="text" name='email' class="form-control form-white" placeholder="Email" value='{{ old('email') }}'>
					 @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
					<input type="password" name='password' class="form-control form-white" placeholder="Password">
					@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
				    <div class="checkbox-holder text-left">
						<div class="checkbox">
							  <input type="checkbox" name="remember" id='remember'> 
							<label for="remember"><span>Remember me</span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">ตกลง</button>
					<button type="button" class="btn btn-submit">ลืมรหัสผ่าน</button>
				</form>
				</div>
				@else
				<div class="modal-header">
					<a href="#" class="close-link close_login"><i class="icon_close_alt2"></i></a>
					<h3 class="white">กรุณาออกจากระบบก่อน</h3>
				</div>
				<div class="modal-body"> 
					<button type="button" class="btn btn-submit" onclick="window.location='{{ url("/logout") }}'">ออกจากระบบ </button>
				</div>
				@endif
			</div>
		</div>
	</div>
	<div class="modal fade" id="modal_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				@if (Auth::guest())
				<div class="modal-header">
					<a href="#" class="close-link close_register"><i class="icon_close_alt2"></i></a>
					<h3 class="white">สมัครสมาชิก</h3>
				</div>
				<div class="modal-body">
				<form method="POST" action="{{ url('/register') }}" class="popup-form">
					{!! csrf_field() !!}
					<input type='hidden' name='iaction' value='register'/>
					<input type="text" name='email' class="form-control form-white" placeholder="Email" value='{{ old('email') }}'>
					@if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
					<input type="password" name='password' class="form-control form-white" placeholder="Password">
					@if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
					<input type="password" name='password_confirmation' class="form-control form-white" placeholder="Confirm Password">
					@if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
					<input type="text" name='name' class="form-control form-white" placeholder="ชื่อ-สกุล" value='{{ old('name') }}'>
					@if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
					<input type="text" name='tel' class="form-control form-white" placeholder="เบอร์ติดต่อ" value='{{ old('tel') }}'>
					<select   class="form-control form-white" name='province_id' >
						<option value="" disabled selected>จังหวัด</option>
						<option class="form-control" value=	64	>	กระบี่	</option>
						<option class="form-control" value=	1	>	กรุงเทพมหานคร	</option>
						<option class="form-control" value=	56	>	กาญจนบุรี	</option>
						<option class="form-control" value=	34	>	กาฬสินธุ์	</option>
						<option class="form-control" value=	49	>	กำแพงเพชร	</option>
						<option class="form-control" value=	28	>	ขอนแก่น	</option>
						<option class="form-control" value=	13	>	จันทบุรี	</option>
						<option class="form-control" value=	15	>	ฉะเชิงเทรา	</option>
						<option class="form-control" value=	11	>	ชลบุรี	</option>
						<option class="form-control" value=	9	>	ชัยนาท	</option>
						<option class="form-control" value=	25	>	ชัยภูมิ	</option>
						<option class="form-control" value=	69	>	ชุมพร	</option>
						<option class="form-control" value=	72	>	ตรัง	</option>
						<option class="form-control" value=	14	>	ตราด	</option>
						<option class="form-control" value=	50	>	ตาก	</option>
						<option class="form-control" value=	17	>	นครนายก	</option>
						<option class="form-control" value=	58	>	นครปฐม	</option>
						<option class="form-control" value=	36	>	นครพนม	</option>
						<option class="form-control" value=	19	>	นครราชสีมา	</option>
						<option class="form-control" value=	63	>	นครศรีธรรมราช	</option>
						<option class="form-control" value=	47	>	นครสวรรค์	</option>
						<option class="form-control" value=	3	>	นนทบุรี	</option>
						<option class="form-control" value=	76	>	นราธิวาส	</option>
						<option class="form-control" value=	43	>	น่าน	</option>
						<option class="form-control" value=	77	>	บึงกาฬ	</option>
						<option class="form-control" value=	20	>	บุรีรัมย์	</option>
						<option class="form-control" value=	4	>	ปทุมธานี	</option>
						<option class="form-control" value=	62	>	ประจวบคีรีขันธ์	</option>
						<option class="form-control" value=	16	>	ปราจีนบุรี	</option>
						<option class="form-control" value=	74	>	ปัตตานี	</option>
						<option class="form-control" value=	5	>	พระนครศรีอยุธยา	</option>
						<option class="form-control" value=	44	>	พะเยา	</option>
						<option class="form-control" value=	65	>	พังงา	</option>
						<option class="form-control" value=	73	>	พัทลุง	</option>
						<option class="form-control" value=	53	>	พิจิตร	</option>
						<option class="form-control" value=	52	>	พิษณุโลก	</option>
						<option class="form-control" value=	66	>	ภูเก็ต	</option>
						<option class="form-control" value=	32	>	มหาสารคาม	</option>
						<option class="form-control" value=	37	>	มุกดาหาร	</option>
						<option class="form-control" value=	75	>	ยะลา	</option>
						<option class="form-control" value=	24	>	ยโสธร	</option>
						<option class="form-control" value=	68	>	ระนอง	</option>
						<option class="form-control" value=	12	>	ระยอง	</option>
						<option class="form-control" value=	55	>	ราชบุรี	</option>
						<option class="form-control" value=	33	>	ร้อยเอ็ด	</option>
						<option class="form-control" value=	7	>	ลพบุรี	</option>
						<option class="form-control" value=	40	>	ลำปาง	</option>
						<option class="form-control" value=	39	>	ลำพูน	</option>
						<option class="form-control" value=	22	>	ศรีสะเกษ	</option>
						<option class="form-control" value=	35	>	สกลนคร	</option>
						<option class="form-control" value=	70	>	สงขลา	</option>
						<option class="form-control" value=	71	>	สตูล	</option>
						<option class="form-control" value=	2	>	สมุทรปราการ	</option>
						<option class="form-control" value=	60	>	สมุทรสงคราม	</option>
						<option class="form-control" value=	59	>	สมุทรสาคร	</option>
						<option class="form-control" value=	10	>	สระบุรี	</option>
						<option class="form-control" value=	18	>	สระแก้ว	</option>
						<option class="form-control" value=	8	>	สิงห์บุรี	</option>
						<option class="form-control" value=	57	>	สุพรรณบุรี	</option>
						<option class="form-control" value=	67	>	สุราษฎร์ธานี	</option>
						<option class="form-control" value=	21	>	สุรินทร์	</option>
						<option class="form-control" value=	51	>	สุโขทัย	</option>
						<option class="form-control" value=	31	>	หนองคาย	</option>
						<option class="form-control" value=	27	>	หนองบัวลำภู	</option>
						<option class="form-control" value=	26	>	อำนาจเจริญ	</option>
						<option class="form-control" value=	29	>	อุดรธานี	</option>
						<option class="form-control" value=	41	>	อุตรดิตถ์	</option>
						<option class="form-control" value=	48	>	อุทัยธานี	</option>
						<option class="form-control" value=	23	>	อุบลราชธานี	</option>
						<option class="form-control" value=	6	>	อ่างทอง	</option>
						<option class="form-control" value=	45	>	เชียงราย	</option>
						<option class="form-control" value=	38	>	เชียงใหม่	</option>
						<option class="form-control" value=	61	>	เพชรบุรี	</option>
						<option class="form-control" value=	54	>	เพชรบูรณ์	</option>
						<option class="form-control" value=	30	>	เลย	</option>
						<option class="form-control" value=	42	>	แพร่	</option>
						<option class="form-control" value=	46	>	แม่ฮ่องสอน	</option>

					</select>
					
					<!--<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>-->
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
				</div>
				@else
				<div class="modal-header">
					<a href="#" class="close-link close_register"><i class="icon_close_alt2"></i></a>
					<h3 class="white">กรุณาออกจากระบบก่อน</h3>
				</div>
				<div class="modal-body"> 
					<button type="button" class="btn btn-submit" onclick="window.location='{{ url("/logout") }}'">ออกจากระบบ </button>
				</div>
				@endif
			</div>
		</div>
	</div>