<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/JavaScript.js"></script>
<link rel="stylesheet" type="text/css" href="css/ChamDiem.css"/>
<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
<title>Chấm điểm đối kháng</title>
</head>
<body onkeydown="onKey(event, 'down');" onkeyup="onKey(event, 'up');" onload="onLoad();" onunload="onUnload();">
<div id="Display" style="display: block;">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" border="1">
		<tr align="center" valign="top">
			<td colspan="2">
                <span class="Hiep">Trận </span>
				<span id="TranSo" class="Hiep"></span>
			</td>
			<td colspan="2">
				<span id="GioConLai" class="Hiep">&nbsp;</span>
			</td>
			<td colspan="2">
                <span class="Hiep">Hiệp </span>
				<span id="HiepSo" class="Hiep"></span>
			</td>
		</tr>
		<tr align="center" valign="top">
			<td width="10%" class="Do">
				1<img id="Dm1" src="img/DDot.gif" class="MatBung"><br />
				2<img id="Dm2" src="img/DDot.gif" class="MatBung"><br />
				3<img id="Dm3" src="img/DDot.gif" class="MatBung"><br />
				4<img id="Dm4" src="img/DDot.gif" class="MatBung"><br />
				1<img id="Dk1" src="img/DDot.gif" class="MatBung"><br />
				2<img id="Dk2" src="img/DDot.gif" class="MatBung"><br />
				3<img id="Dk3" src="img/DDot.gif" class="MatBung"><br />
				4<img id="Dk4" src="img/DDot.gif" class="MatBung"><br />
				1<img id="Db1" src="img/DDot.gif" class="MatBung"><br />
				2<img id="Db2" src="img/DDot.gif" class="MatBung"><br />
				3<img id="Db3" src="img/DDot.gif" class="MatBung"><br />
				4<img id="Db4" src="img/DDot.gif" class="MatBung"><br />
			</td>
			<td id="tdLoiD" width="40%" class="Do" colspan="2">
				<span id="DiemDo" class="Diem">0</span>
			</td>
			<td id="tdLoiX" width="40%" class="Xanh" colspan="2">
				<span id="DiemXanh" class="Diem">0</span>
			</td>
			<td width="10%" class="Xanh">
				<img id="Xm1" src="img/XDot.gif" class="MatBung">1<br />
				<img id="Xm2" src="img/XDot.gif" class="MatBung">2<br />
				<img id="Xm3" src="img/XDot.gif" class="MatBung">3<br />
				<img id="Xm4" src="img/XDot.gif" class="MatBung">4<br />
				<img id="Xk1" src="img/XDot.gif" class="MatBung">1<br />
				<img id="Xk2" src="img/XDot.gif" class="MatBung">2<br />
				<img id="Xk3" src="img/XDot.gif" class="MatBung">3<br />
				<img id="Xk4" src="img/XDot.gif" class="MatBung">4<br />
				<img id="Xb1" src="img/XDot.gif" class="MatBung">1<br />
				<img id="Xb2" src="img/XDot.gif" class="MatBung">2<br />
				<img id="Xb3" src="img/XDot.gif" class="MatBung">3<br />
				<img id="Xb4" src="img/XDot.gif" class="MatBung">4<br />
			</td>
		</tr>
		<tr align="center" valign="top">
			<td class="Do" colspan="2" width="30%">
				<span id="TenDo" class="Ten"></span>
			</td>
			<td width="20%">
				<span id="GioiTinh" class="Ten"></span>
			</td>
			<td width="20%">
				<span id="HangCan" class="Ten"></span>
			</td>
			<td class="Xanh" colspan="2" width="30%">
				<span id="TenXanh" class="Ten"></span>
			</td>
		</tr>
		<tr>
			<td width="10%">
			</td>
			<td width="20%">
			</td>
			<td width="20%">
			</td>
			<td width="20%">
			</td>
			<td width="20%">
			</td>
			<td width="10%">
			</td>
		</tr>
	</table>
</div>
<br />
<br />
<br />
<br />
	<form name="ChamDiem" id="ChamDiem" action="#" method="post">
		<table border="2">
			<tr>
				<td></td>
				<td>Trận: <select name="TranSo" id="ChonTran" width="70" onchange="showAllInfo();">
                    <option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select><br />
				Giới tính: <input type="text" name="GioiTinh" size="6" onchange="showInfo('GioiTinh');" /><br />
				Hạng cân: <input type="text" name="HangCan" size="6" onchange="showInfo('HangCan');" /></td>
				<td>
					<input type="checkbox" name="HaiManHinh" id="HaiManHinh" checked="true" onclick="showDisplayWindow();" /> Dùng hai màn hình<br />
					<input type="button" class="BigButton" name="BatDau" id="BatDau" value="Bắt đầu" onclick="startFight();" /><br /><br />
					<input type="button" class="BigButton" name="KetThuc" id="KetThuc" value="Kết thúc" onclick="doneFight();" />
				</td>
				<td valign="bottom">
					<input type="checkbox" name="HaiTrongBa" id="HaiTrongBa" /> 2 trong 3 trọng tài<br />
					<input type="button" class="BigButton" name="DungSS" id="DungSS" value="Dừng săn sóc / Tiếp tục" onclick="setPause('ss');" disabled /><br /><br />
					<input type="button" class="BigButton" name="DungXX" id="DungXX" value="Dừng xem xét / Tiếp tục" onclick="setPause('xx');" disabled />
				</td>
				<td>
				</td>
				<td>
				Đặt lại hiệp <select name="DatLaiHiep" id="DatLaiHiep" width="30">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
				</select>
				phút <select name="DatLaiPhut" id="DatLaiPhut" width="30">
					<option>0</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
				</select>
				giây <select name="DatLaiGiay" id="DatLaiGiay" width="30">
					<option>00</option>
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
					<option>32</option>
					<option>33</option>
					<option>34</option>
					<option>35</option>
					<option>36</option>
					<option>37</option>
					<option>38</option>
					<option>39</option>
					<option>40</option>
					<option>41</option>
					<option>42</option>
					<option>43</option>
					<option>44</option>
					<option>45</option>
					<option>46</option>
					<option>47</option>
					<option>48</option>
					<option>49</option>
					<option>50</option>
					<option>51</option>
					<option>52</option>
					<option>53</option>
					<option>54</option>
					<option>55</option>
					<option>56</option>
					<option>57</option>
					<option>58</option>
					<option>59</option>
				</select><br />
				<input type="button" class="SmallButton" name="BatDauLai" id="BatDauLai" value="Bắt đầu lại" onclick="restartFight();" /><br />
				Điểm dừng hiệp 4: <select name="DiemDungHiep4" id="DiemDungHiep4" width="30">
					<option>1</option>
					<option>3</option>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<th>Tên
				</th>
				<!--th>Trọng tài 1</th>
				<th>Trọng tài 2</th>
				<th>Trọng tài 3</th>
				<th>Trọng tài 4</th-->
				<th>Điểm</th>
				<th>Lỗi</th>
				<th></th>
				<th>Thời gian</th>
			</tr>
			<tr>
				<th><span class="Xanh">Xanh</div></th>
				<td><input type="text" name="TenXanh" class="Xanh" size="10" onchange="showInfo('TenXanh');" /></td>
				<!--td><input type="text" name="TrongTaiX1" class="Xanh" size="5" onfocus="onFocus(this);" /></td>
				<td><input type="text" name="TrongTaiX2" class="Xanh" size="5" onfocus="onFocus(this);" /></td>
				<td><input type="text" name="TrongTaiX3" class="Xanh" size="5" onfocus="onFocus(this);" /></td>
				<td><input type="text" name="TrongTaiX4" class="Xanh" size="5" onfocus="onFocus(this);" /></td-->
				<td><input type="text" name="DiemX" id="DiemX" class="Xanh" size="5" value="0" onfocus="onFocus(this);" onchange="showScore();" />
					<input type="button" name="CongDiemX" id="CongDiemX" value="+" onclick="modify('X', 1);" />
					<input type="button" name="TruDiemX" id="TruDiemX" value="--" onclick="modify('X', -1);" />&nbsp;&nbsp;&nbsp;
					<input type="button" name="TruDiemX" id="TruDiemX" value="----" onclick="modify('X', -2);" />
				</td>
				<td><input type="text" name="TruX" class="Xanh" size="5" value="0" onfocus="onFocus(this);" onchange="showScore();" />
					<input type="button" name="CongLoiX" id="CongLoiX" value="+" onclick="decrease('X', false);" />
					<input type="button" name="TruLoiX" id="TruLoiX" value="--" onclick="decrease('X', true);" />
				</td>
				<td rowspan="2"><input type="button" name="XoaDiem" value="Xóa điểm" onclick="clearScore();" /></td>
				<td>Một hiệp: <select name="TGHiepDau" onfocus="onFocus(this);">
					<!--option value="20">1/3 phút</option-->
					<option value="15">Thử 15 giây</option>
					<option value="30">30 giây</option>
					<option value="45">45 giây</option>
					<option value="60">1 phút</option>
					<option value="90">1 phút 30 giây</option>
					<option value="120" selected="selected">2 phút</option>
					<option value="150">2 phút 30 giây</option>
					<option value="180">3 phút</option>
					<option value="240">4 phút</option>
					<option value="300">5 phút</option>
					<option value="360">6 phút</option>
					<option value="420">7 phút</option>
					<option value="480">8 phút</option>
					<option value="540">9 phút</option>
					<option value="600">10 phút</option>
					</select>
					&nbsp;&nbsp;TG Khớp phím<select name="TGKhopPhim" onfocus="onFocus(this);">
						<option value="1000">1.0 giây</option>
						<option value="1500">1.5 giây</option>
						<option value="2000">2.0 giây</option>
					</select>
				</td>
			</tr>
			<tr>
				<th><span class="Do">Đỏ</div></th>
				<td><input type="text" name="TenDo" class="Do" size="10" onchange="showInfo('TenDo');" /></td>
				<!--td><input type="text" name="TrongTaiD1" class="Do" size="5" onfocus="onFocus(this);" /></td>
				<td><input type="text" name="TrongTaiD2" class="Do" size="5" onfocus="onFocus(this);" /></td>
				<td><input type="text" name="TrongTaiD3" class="Do" size="5" onfocus="onFocus(this);" /></td>
				<td><input type="text" name="TrongTaiD4" class="Do" size="5" onfocus="onFocus(this);" /></td-->
				<td><input type="text" name="DiemD" id="DiemD" class="Do" size="5" value="0" onfocus="onFocus(this);" onchange="showScore();" />
					<input type="button" name="CongDiemD" id="CongDiemD" value="+" onclick="modify('D', 1);" />
					<input type="button" name="TruDiemD" id="TruDiemD" value="--" onclick="modify('D', -1);" />&nbsp;&nbsp;&nbsp;
					<input type="button" name="TruDiemD" id="TruDiemD" value="----" onclick="modify('D', -2);" />
				</td>
				<td><input type="text" name="TruD" class="Do" size="5" value="0" onfocus="onFocus(this);" onchange="showScore();" />
					<input type="button" name="CongLoiD" id="CongLoiD" value="+" onclick="decrease('D', false);" />
					<input type="button" name="TruLoiD" id="TruLoiD" value="--" onclick="decrease('D', true);" />
				</td>
				<td>Nghỉ giữa hiệp: <select name="TGNghiGiuaHiep" onfocus="onFocus(this);">
					<!--option value="20">1/3 phút</option-->
					<option value="15">Thử 15 giây</option>
					<option value="30">30 giây</option>
					<option value="45">45 giây</option>
					<option value="60" selected="selected">1 phút</option>
					<option value="90">1 phút 30 giây</option></select>
				</td>
			</tr>
			<tr>
				<td colspan="7">
					Các trận đấu<br />
					STT;Giới tính;Hạng cân;Tên đỏ;Tên xanh<br />
					<textarea name="DanhSachTran" id="DanhSachTran" cols="60" rows="20" onchange="showList();" onfocus="onFocus(this);"></textarea><br />
					<a href="#" onclick="showHide('divFightInfo');return false;">Thông tin trận đấu</a><br />
					<div id="divFightInfo" style="display: none;">
					<textarea id="FightInfo" name="FightInfo" cols="120" rows="20" onfocus="onFocus(this);"></textarea><br />
					</di>
					<!--textarea id="Debug" cols="200" rows="10" onfocus="onFocus(this);"> </textarea-->
				</td>
			</tr>
		</table>
		<a href="#" onclick="showHide('VungXacLapPhim', ChamDiem.PhimX1);return false;">Đổi mã phím</a>
		<!--
		http://www.w3schools.com/html/html5_audio.asp
		http://www.w3schools.com/jsref/dom_obj_audio.asp
		-->
		<audio id="wavCountDown" controls style="display: hidden;">
			<source src="file://C:/Windows/Media/chord.wav" type="audio/wav">
			Your browser does not support the audio element.
		</audio>
		<audio id="wavDoneFight" controls style="display: hidden;">
			<source src="file://C:/Windows/Media/tada.wav" type="audio/wav">
			Your browser does not support the audio element.
		</audio>
		<audio id="wavDoneBreak" controls style="display: hidden;">
			<source src="file://C:/Windows/Media/notify.wav" type="audio/wav">
			Your browser does not support the audio element.
		</audio>
	<div id="VungXacLapPhim" style="display: none;">
		<table summary="" border="1">
			<tr>
				<th></th>
				<th colspan="3"><div class="Do">Đỏ</div></th>
				<th></th>
				<th colspan="3"><div class="Xanh">Xanh</div></th>
				<th colspan="2">Điều khiển</th>
			</tr>
			<tr>
				<th></th>
				<th><div class="Do">3</div></th>
				<th><div class="Do">1</div></th>
				<th><div class="Do">2</div></th>
				<th></th>
				<th><div class="Xanh">3</div></th>
				<th><div class="Xanh">1</div></th>
				<th><div class="Xanh">2</div></th>
				<td rowspan="2">Bắt đầu / Tiếp tục<br />
					Dừng săn sóc<br />
					Dừng xem xét
				</td>
				<td rowspan="2"><input type="text" name="PhimBatDau" onfocus="onFocus(this);" size="5" /><br />
					<input type="text" name="PhimDungSS" onfocus="onFocus(this);" size="5" /><br />
					<input type="text" name="PhimDungXX" onfocus="onFocus(this);" size="5" />
				</td>
			</tr>
			<tr>
				<td>Trọng tài 1</td>
				<td><input type="text" name="PhimD1" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD5" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD9" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Trọng tài 1</td>
				<td><input type="text" name="PhimX1" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX5" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX9" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
			</tr>
			<tr>
				<td>Trọng tài 2</td>
				<td><input type="text" name="PhimD2" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD6" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD10" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Trọng tài 2</td>
				<td><input type="text" name="PhimX2" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX6" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX10" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td colspan="2" rowspan="4" valign="bottom">
					<textarea name="aDefKeys" cols="20" rows="5" onfocus="onFocus(this);"></textarea>
				</td>
			</tr>
			<tr>
				<td>Trọng tài 3</td>
				<td><input type="text" name="PhimD3" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD7" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD11" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Trọng tài 3</td>
				<td><input type="text" name="PhimX3" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX7" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX11" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
			</tr>
			<tr>
				<td>Trọng tài 4</td>
				<td><input type="text" name="PhimD4" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD8" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimD12" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Trọng tài 4</td>
				<td><input type="text" name="PhimX4" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX8" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td><input type="text" name="PhimX12" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
			</tr>
			<tr>
				<td>Phạm lỗi</td>
				<td><input type="text" name="PhimDTru" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Hủy lỗi</td>
				<td><input type="text" name="PhimDCong" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Phạm lỗi</td>
				<td><input type="text" name="PhimXTru" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td>Hủy lỗi</td>
				<td><input type="text" name="PhimXCong" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
			</tr>
			<tr>
				<td>Cộng điểm</td>
				<td><input type="text" name="PhimDTruDiem" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Trừ điểm</td>
				<td><input type="text" name="PhimDCongDiem" class="Do" onfocus="onFocus(this);" size="5" /></td>
				<td>Cộng điểm</td>
				<td><input type="text" name="PhimXTruDiem" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
				<td>Trừ điểm</td>
				<td><input type="text" name="PhimXCongDiem" class="Xanh" onfocus="onFocus(this);" size="5" /></td>
			</tr>
		</table>
	</div>
	</form>
</body>
</html>
