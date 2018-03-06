		<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="vtf.js"></script>
		<input type="file" id="files" name="files[]" accept=".png, .jpg, .jpeg" onchange="handleFileSelect(event)" />
		<div style="display: none">
			<input type="checkbox" name="mipmaps" id="mipmapsCheck" disabled>Generate Mipmaps<br />
			<div class="setting">
				Luma average:<br />
				<form id="lumaavgform">
					<input type="radio" name="lumaavg" value="average" checked>Average</input><br />
					<input type="radio" name="lumaavg" value="square">RMS</input>
				</form>
			</div>
			<div class="setting">
				Luma threshold:<br />
				<form id="lumathrform">
					<input type="radio" name="lumathr" value="average">Average</input><br />
					<input type="radio" name="lumathr" value="square" checked>RMS</input>
				</form>
			</div>
			<div class="setting">
				Brightness:<br />
				<form id="brightnessform">
					<input type="radio" name="brightness" value=0>-1</input>
					<input type="radio" name="brightness" value=1 checked>0</input>
					<input type="radio" name="brightness" value=2>+1</input>
				</form>
				<br />
			</div>
		</div>
		<br />
		Preview:
		<div id="contentWrapper">
			<div class="input" id="inputWrapper"></div>
			<canvas id="canvas"></canvas>
			<canvas id="tempCanvas"></canvas>
		</div>
		<button id="makeVTFButton" type="button" onclick="makeVTFClick()" dsiabled>Submit VTF</button>
		<!--<button id="convertButton" type="button" onclick="convert()" disabled>Convert</button> &nbsp; <button id="saveButton" type="button" onclick="createVTF()" disabled>Save as VTF</button><br />-->

		<!--<input type="file" id="files0" name="files[]" accept="image/*" onchange="changeMipmap(event,0)" disabled />-->
		<div id="mipmaps" style="display: none;"></div>
		
		<span style="position: absolute;right: 5px;bottom: 5px; float: bottom-right; text-align: right;">VTF script by <a href="https://mishcat.tk/">Mishcatt</a> and everything else is by <a href="http://steamcommunity.com/profiles/76561198045363076/">Retro</a></span>