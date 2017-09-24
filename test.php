@extends('layouts.master')

@section('title', 'Analysis')

@section('script')
<div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.4.0/wavesurfer.min.js"></script>
<div style="width:100%; height:60px;">        <button  type="button" onclick="Search()" >جستجو</button>
    <input id="txtSearch" type="text" placeholder="جستجو"  style="direction:rtl;"/>
</div> 

<select size="4" name="lstMarkers" id="lstMarkers" style="width:700px; height:250px">
<option value="9">( چپ    راست  راست   راست   راست )=start:00:02.268 ,duration:00:02.036</option>
<option value="10">( راست   راست  راست   راست   راست )=start:00:04.304 ,duration:00:01.906</option>
<option value="11">( راست   راست   راست   راست )=start:00:06.211 ,duration:00:01.870</option>
<option value="12">( راست   راست   راست   راست )=start:00:08.081 ,duration:00:01.885</option>
<option value="13">( راست   راست  راست   راست   راست )=start:00:09.967 ,duration:00:01.786</option>
<option value="14">( راست   راست  راست   راست   راست )=start:00:11.754 ,duration:00:01.863</option>
<option value="15">( چپ   راست  راست   راست )=start:00:13.617 ,duration:00:01.960</option>
<option value="16">( راست   راست  راست   راست   راست )=start:00:15.578 ,duration:00:02.138</option>
<option value="17">( چپ   راست  راست   راست   راست )=start:00:17.717 ,duration:00:01.881</option>
<option value="18">( راست   راست  راست   راست   راست )=start:00:19.598 ,duration:00:01.927</option>
<option value="19">( راست   راست  راست   راست   راست )=start:00:21.525 ,duration:00:01.833</option>
<option value="20">( راست   راست   راست   راست )=start:00:23.359 ,duration:00:01.825</option>
<option value="21">( راست   راست  راست   راست   راست )=start:00:25.185 ,duration:00:01.793</option>
<option value="22">( راست  راست   راست  راست )=start:00:26.978 ,duration:00:01.922</option>
<option value="23">( چپ   راست  راست   راست   راست )=start:00:28.901 ,duration:00:01.890</option>
<option value="24">( چپ   راست  راست   راست   راست )=start:00:30.791 ,duration:00:01.626</option>
<option value="25">( راست   راست   راست )=start:00:32.418 ,duration:00:01.956</option>
<option value="26">( راست   راست  راست )=start:00:34.374 ,duration:00:01.379</option>
<option value="27">( راست   راست   راست )=start:00:35.754 ,duration:00:01.769</option>
<option value="28">( چپ   راست   راست  راست )=start:00:37.524 ,duration:00:01.631</option>
<option value="29">( راست   راست  راست   راست   راست )=start:00:39.155 ,duration:00:01.636</option>
<option value="30">( چپ   راست  راست   راست   راست )=start:00:40.791 ,duration:00:01.708</option>
<option value="31">( راست   راست  راست  راست )=start:00:42.500 ,duration:00:01.681</option>
<option value="32">( راست   راست   راست  راست ) =start:00:44.181 ,duration:00:01.552</option>
<option value="33">( راست   راست  راست   راست   راست )=start:00:45.734 ,duration:00:01.583</option>
<option value="34">( راست   راست   راست  راست )=start:00:47.317 ,duration:00:01.582</option>
<option value="35">( راست  راست   راست  راست )=start:00:48.899 ,duration:00:01.526</option>
<option value="36">( راست  راست   راست  راست )=start:00:50.426 ,duration:00:01.667</option>
<option value="37">( راست  راست   راست  راست )=start:00:52.094 ,duration:00:01.647</option>
<option value="38">( راست  راست   راست  راست )=start:00:53.741 ,duration:00:01.552</option>
<option value="39">( راست  راست   راست   راست   راست )=start:00:55.294 ,duration:00:01.579</option>
<option value="40">( راست  راست   راست  راست )=start:00:56.873 ,duration:00:01.528</option>
<option value="41">( راست   راست   راست )=start:00:58.401 ,duration:00:01.617</option>
<option value="42">( راست  راست   راست  راست )=start:01:00.019 ,duration:00:01.558</option>
<option value="43">( راست   راست   راست )=start:01:01.578 ,duration:00:01.668</option>
<option value="44">( راست  راست   راست  راست )=start:01:03.246 ,duration:00:01.609</option>
<option value="45">( راست   راست  راست   راست   راست  راست )=start:01:04.856 ,duration:00:01.568</option>
<option value="46">( راست  راست   راست  راست )=start:01:06.425 ,duration:00:01.574</option>
<option value="47">( راست   راست  راست  راست  راست )=start:01:08.000 ,duration:00:01.601</option>
<option value="48">( راست  راست   راست  راست )=start:01:09.601 ,duration:00:01.508</option>
<option value="49">( راست   راست  راست  راست  راست  راست  راست )=start:01:11.110 ,duration:00:02.119</option>
<option value="50">( راست   راست  راست  راست  راست  راست  راست )=start:01:13.229 ,duration:00:02.231</option>
<option value="51">( راست   راست  راست   راست  راست )=start:01:15.460 ,duration:00:02.091</option>
<option value="52">( راست   راست  راست  راست  راست  راست  راست )=start:01:17.552 ,duration:00:02.180</option>
<option value="53">( راست   راست  راست   راست  راست )=start:01:19.732 ,duration:00:02.059</option>
<option value="54">( راست   راست  راست  راست  راست  راست  راست )=start:01:21.792 ,duration:00:02.163</option>
<option value="55">( راست   راست   راست   راست )=start:01:23.955 ,duration:00:02.243</option>
<option value="56">( راست   راست   راست   راست )=start:01:26.198 ,duration:00:02.801</option>
<option value="57">( راست   راست )=start:01:29.000 ,duration:00:01.897</option>
<option value="58">( راست  راست   راست   راست )=start:01:30.897 ,duration:00:02.645</option>
<option value="59">( راست )=start:01:33.543 ,duration:00:01.796</option>
<option value="60">( راست  راست   راست   راست   راست )=start:01:35.339 ,duration:00:02.309</option>
<option value="61">( راست   راست  چپ  راست )=start:01:37.648 ,duration:00:02.048</option>
<option value="62">( راست   راست   راست  راست   راست   راست )=start:01:39.697 ,duration:00:05.439</option>
<option value="63">( راست  راست   راست   راست  راست   راست   راست  راست   راست )=start:01:45.136 ,duration:00:04.401</option>
<option value="64">( راست   راست   راست )=start:01:49.537 ,duration:00:02.753</option>
<option value="65">( راست   راست )=start:01:52.290 ,duration:00:01.856</option>
<option value="66">( راست  راست   راست   راست  راست   راست   راست )=start:01:54.147 ,duration:00:03.507</option>
<option value="67">( راست   راست  راست  راست )=start:01:57.655 ,duration:00:02.748</option>
<option value="68">( راست   راست   راست )=start:02:00.403 ,duration:00:02.596</option>
<option value="69">( راست   راست  راست )=start:02:03.000 ,duration:00:02.385</option>
<option value="70">( راست   راست  راست )=start:02:05.385 ,duration:00:02.234</option>
<option value="71">( راست   راست )=start:02:07.620 ,duration:00:01.664</option>
<option value="72">( راست   راست   راست   راست )=start:02:09.284 ,duration:00:03.255</option>
<option value="73">( راست   راست   راست   راست )=start:02:12.540 ,duration:00:03.059</option>
<option value="74">( راست   راست   راست )=start:02:15.600 ,duration:00:02.969</option>
<option value="75">( راست  راست   راست   راست )=start:02:18.569 ,duration:00:02.613</option>
<option value="76">( راست   راست  راست   راست )=start:02:21.183 ,duration:00:03.223</option>
<option value="77">( راست   راست   راست   راست   راست   راست )=start:02:24.406 ,duration:00:04.679</option>
<option value="78">( راست   راست  راست   راست  راست   راست   راست  راست )=start:02:29.086 ,duration:00:06.055</option>
<option value="79">( راست   راست   راست   راست   راست )=start:02:35.142 ,duration:00:03.011</option>
<option value="80">( راست   راست   راست   راست   راست )=start:02:38.154 ,duration:00:03.727</option>
<option value="81">( راست  راست   راست   راست )=start:02:41.881 ,duration:00:02.377</option>
<option value="82">( راست  راست   راست   راست )=start:02:44.258 ,duration:00:02.199</option>
<option value="83">( راست   راست   راست )=start:02:46.457 ,duration:00:02.208</option>
<option value="84">( راست  راست   راست   راست )=start:02:48.665 ,duration:00:02.402</option>
<option value="85">( راست   راست  راست  راست )=start:02:51.068 ,duration:00:02.675</option>
<option value="86">( راست   راست   راست   راست  راست )=start:02:53.743 ,duration:00:03.208</option>
<option value="87">( راست   راست  راست )=start:02:56.951 ,duration:00:02.310</option>
<option value="88">( راست   راست   راست )=start:02:59.262 ,duration:00:02.869</option>
<option value="89">( راست   راست   راست )=start:03:02.132 ,duration:00:03.061</option>
<option value="90">( راست   راست   راست )=start:03:05.193 ,duration:00:02.174</option>
<option value="91">( راست   راست  راست )=start:03:07.367 ,duration:00:01.863</option>
<option value="92">( راست   راست  راست )=start:03:09.231 ,duration:00:02.010</option>
<option value="93">( راست  راست   راست   راست )=start:03:11.242 ,duration:00:02.415</option>
<option value="94">( راست  راست   راست   راست   راست )=start:03:13.657 ,duration:00:02.315</option>
<option value="95">( راست   راست   راست )=start:03:15.972 ,duration:00:02.027</option>
<option value="96">( راست   راست   راست )=start:03:18.000 ,duration:00:02.546</option>
<option value="97">( راست   راست   راست   راست )=start:03:20.546 ,duration:00:02.244</option>
<option value="98">( راست  راست   راست   راست )=start:03:22.790 ,duration:00:02.180</option>
<option value="99">( راست  راست   راست   راست )=start:03:24.970 ,duration:00:01.965</option>
<option value="100">( راست   راست   راست )=start:03:26.935 ,duration:00:02.193</option>
<option value="101">( راست   راست   راست )=start:03:29.129 ,duration:00:01.937</option>
<option value="102">( راست   راست  راست   راست   راست )=start:03:31.066 ,duration:00:02.199</option>
<option value="103">( راست   چپ  راست   راست   راست   راست )=start:03:33.265 ,duration:00:03.715</option>
<option value="104">( راست  راست   راست   چپ  راست   راست   راست   راست )=start:03:36.980 ,duration:00:03.990</option>
<option value="105">( راست   چپ  راست )=start:03:40.970 ,duration:00:01.747</option>
<option value="106">( راست   راست  راست   راست   راست   راست )=start:03:42.718 ,duration:00:03.472</option>
<option value="107">( راست  راست   راست   چپ  راست   راست   راست   راست )=start:03:46.190 ,duration:00:03.629</option>
<option value="108">( راست   راست )=start:03:49.820 ,duration:00:00.679</option>
<option value="109">( راست  راست   راست   راست  راست   راست   راست   راست )=start:03:50.500 ,duration:00:04.641</option>

</select>    <button style="display:none;" type="button">Play/Pause</button>
</div>

    <div id="waveform"></div>

    <script>
        function Search() {
            try {
                var text = $('#txtSearch').val();
                console.log(text);
                document.getElementById('lstMarkers').options.length = 0;
                var items = document.getElementById('HFItems').value.split('$');
                for (var i = 0 ; i < items.length; i++) {
                    if (items[i] != "") {
                        if (items[i].replace("   ", " ").replace("  ", " ").replace("   ", " ").replace("  ", " ").replace("   ", " ").replace("  ", " ").replace("   ", " ").replace("  ", " ").replace("   ", " ").replace("  ", " ").indexOf(text) != -1) {
                            var opt = document.createElement("option");
                            // Add an Option object to List Box
                            opt.text = items[i];
                            document.getElementById('lstMarkers').options.add(opt);
                            //opt.value = document.getElementById("TextBox4").value;
                        }
                    }
                }
            }
            catch (ex) {
                console.log(ex.message);
            }
        }

        function Select() {
            $('#waveform').html("");
            var wavesurfer = WaveSurfer.create({
                container: '#waveform',
                waveColor: 'violet',
                progressColor: 'purple'
            });
            console.log(document.getElementById('lstMarkers').selectedIndex);
            wavesurfer.load('motif/m' + document.getElementById('lstMarkers').selectedIndex + '.mp3');

            wavesurfer.on("ready", function () { wavesurfer.playPause(); });
        }
        var wavesurfer;
        function Select2() {
            if (wavesurfer != null)
                wavesurfer.pause();
            $('#waveform').html("");
            wavesurfer = WaveSurfer.create({
                container: '#waveform',
                waveColor: 'violet',
                progressColor: 'purple'
            });
            wavesurfer.load('music5.mp3');
            var times = document.getElementById('HFTimes').value.split(',');
            var start = times[document.getElementById('lstMarkers').selectedIndex];
            wavesurfer.on("ready", function () { wavesurfer.play(start); });
        }

        function Pause2() {
            wavesurfer.pause();
        }

    </script>

    <button class="btn btn-primary" onclick="Select()" style="display:none;" id="btnPlayPause" type="button" >
  <i class="fa fa-play"></i>
  Play
  /
  <i class="fa fa-pause"></i>
  Pause
</button>

    <button class="btn btn-primary" onclick="Select2()" id="Button1" type="button" >Play</button>
    <button class="btn btn-primary" onclick="Pause2()" id="Button2" type="button" >Pause</button>




<input type="hidden" name="HFItems" id="HFItems" value="( چپ    راست  راست   راست   راست )=start:00:02.268 ,duration:00:02.036$( راست   راست  راست   راست   راست )=start:00:04.304 ,duration:00:01.906$( راست   راست   راست   راست )=start:00:06.211 ,duration:00:01.870$( راست   راست   راست   راست )=start:00:08.081 ,duration:00:01.885$( راست   راست  راست   راست   راست )=start:00:09.967 ,duration:00:01.786$( راست   راست  راست   راست   راست )=start:00:11.754 ,duration:00:01.863$( چپ   راست  راست   راست )=start:00:13.617 ,duration:00:01.960$( راست   راست  راست   راست   راست )=start:00:15.578 ,duration:00:02.138$( چپ   راست  راست   راست   راست )=start:00:17.717 ,duration:00:01.881$( راست   راست  راست   راست   راست )=start:00:19.598 ,duration:00:01.927$( راست   راست  راست   راست   راست )=start:00:21.525 ,duration:00:01.833$( راست   راست   راست   راست )=start:00:23.359 ,duration:00:01.825$( راست   راست  راست   راست   راست )=start:00:25.185 ,duration:00:01.793$( راست  راست   راست  راست )=start:00:26.978 ,duration:00:01.922$( چپ   راست  راست   راست   راست )=start:00:28.901 ,duration:00:01.890$( چپ   راست  راست   راست   راست )=start:00:30.791 ,duration:00:01.626$( راست   راست   راست )=start:00:32.418 ,duration:00:01.956$( راست   راست  راست )=start:00:34.374 ,duration:00:01.379$( راست   راست   راست )=start:00:35.754 ,duration:00:01.769$( چپ   راست   راست  راست )=start:00:37.524 ,duration:00:01.631$( راست   راست  راست   راست   راست )=start:00:39.155 ,duration:00:01.636$( چپ   راست  راست   راست   راست )=start:00:40.791 ,duration:00:01.708$( راست   راست  راست  راست )=start:00:42.500 ,duration:00:01.681$( راست   راست   راست  راست ) =start:00:44.181 ,duration:00:01.552$( راست   راست  راست   راست   راست )=start:00:45.734 ,duration:00:01.583$( راست   راست   راست  راست )=start:00:47.317 ,duration:00:01.582$( راست  راست   راست  راست )=start:00:48.899 ,duration:00:01.526$( راست  راست   راست  راست )=start:00:50.426 ,duration:00:01.667$( راست  راست   راست  راست )=start:00:52.094 ,duration:00:01.647$( راست  راست   راست  راست )=start:00:53.741 ,duration:00:01.552$( راست  راست   راست   راست   راست )=start:00:55.294 ,duration:00:01.579$( راست  راست   راست  راست )=start:00:56.873 ,duration:00:01.528$( راست   راست   راست )=start:00:58.401 ,duration:00:01.617$( راست  راست   راست  راست )=start:01:00.019 ,duration:00:01.558$( راست   راست   راست )=start:01:01.578 ,duration:00:01.668$( راست  راست   راست  راست )=start:01:03.246 ,duration:00:01.609$( راست   راست  راست   راست   راست  راست )=start:01:04.856 ,duration:00:01.568$( راست  راست   راست  راست )=start:01:06.425 ,duration:00:01.574$( راست   راست  راست  راست  راست )=start:01:08.000 ,duration:00:01.601$( راست  راست   راست  راست )=start:01:09.601 ,duration:00:01.508$( راست   راست  راست  راست  راست  راست  راست )=start:01:11.110 ,duration:00:02.119$( راست   راست  راست  راست  راست  راست  راست )=start:01:13.229 ,duration:00:02.231$( راست   راست  راست   راست  راست )=start:01:15.460 ,duration:00:02.091$( راست   راست  راست  راست  راست  راست  راست )=start:01:17.552 ,duration:00:02.180$( راست   راست  راست   راست  راست )=start:01:19.732 ,duration:00:02.059$( راست   راست  راست  راست  راست  راست  راست )=start:01:21.792 ,duration:00:02.163$( راست   راست   راست   راست )=start:01:23.955 ,duration:00:02.243$( راست   راست   راست   راست )=start:01:26.198 ,duration:00:02.801$( راست   راست )=start:01:29.000 ,duration:00:01.897$( راست  راست   راست   راست )=start:01:30.897 ,duration:00:02.645$( راست )=start:01:33.543 ,duration:00:01.796$( راست  راست   راست   راست   راست )=start:01:35.339 ,duration:00:02.309$( راست   راست  چپ  راست )=start:01:37.648 ,duration:00:02.048$( راست   راست   راست  راست   راست   راست )=start:01:39.697 ,duration:00:05.439$( راست  راست   راست   راست  راست   راست   راست  راست   راست )=start:01:45.136 ,duration:00:04.401$( راست   راست   راست )=start:01:49.537 ,duration:00:02.753$( راست   راست )=start:01:52.290 ,duration:00:01.856$( راست  راست   راست   راست  راست   راست   راست )=start:01:54.147 ,duration:00:03.507$( راست   راست  راست  راست )=start:01:57.655 ,duration:00:02.748$( راست   راست   راست )=start:02:00.403 ,duration:00:02.596$( راست   راست  راست )=start:02:03.000 ,duration:00:02.385$( راست   راست  راست )=start:02:05.385 ,duration:00:02.234$( راست   راست )=start:02:07.620 ,duration:00:01.664$( راست   راست   راست   راست )=start:02:09.284 ,duration:00:03.255$( راست   راست   راست   راست )=start:02:12.540 ,duration:00:03.059$( راست   راست   راست )=start:02:15.600 ,duration:00:02.969$( راست  راست   راست   راست )=start:02:18.569 ,duration:00:02.613$( راست   راست  راست   راست )=start:02:21.183 ,duration:00:03.223$( راست   راست   راست   راست   راست   راست )=start:02:24.406 ,duration:00:04.679$( راست   راست  راست   راست  راست   راست   راست  راست )=start:02:29.086 ,duration:00:06.055$( راست   راست   راست   راست   راست )=start:02:35.142 ,duration:00:03.011$( راست   راست   راست   راست   راست )=start:02:38.154 ,duration:00:03.727$( راست  راست   راست   راست )=start:02:41.881 ,duration:00:02.377$( راست  راست   راست   راست )=start:02:44.258 ,duration:00:02.199$( راست   راست   راست )=start:02:46.457 ,duration:00:02.208$( راست  راست   راست   راست )=start:02:48.665 ,duration:00:02.402$( راست   راست  راست  راست )=start:02:51.068 ,duration:00:02.675$( راست   راست   راست   راست  راست )=start:02:53.743 ,duration:00:03.208$( راست   راست  راست )=start:02:56.951 ,duration:00:02.310$( راست   راست   راست )=start:02:59.262 ,duration:00:02.869$( راست   راست   راست )=start:03:02.132 ,duration:00:03.061$( راست   راست   راست )=start:03:05.193 ,duration:00:02.174$( راست   راست  راست )=start:03:07.367 ,duration:00:01.863$( راست   راست  راست )=start:03:09.231 ,duration:00:02.010$( راست  راست   راست   راست )=start:03:11.242 ,duration:00:02.415$( راست  راست   راست   راست   راست )=start:03:13.657 ,duration:00:02.315$( راست   راست   راست )=start:03:15.972 ,duration:00:02.027$( راست   راست   راست )=start:03:18.000 ,duration:00:02.546$( راست   راست   راست   راست )=start:03:20.546 ,duration:00:02.244$( راست  راست   راست   راست )=start:03:22.790 ,duration:00:02.180$( راست  راست   راست   راست )=start:03:24.970 ,duration:00:01.965$( راست   راست   راست )=start:03:26.935 ,duration:00:02.193$( راست   راست   راست )=start:03:29.129 ,duration:00:01.937$( راست   راست  راست   راست   راست )=start:03:31.066 ,duration:00:02.199$( راست   چپ  راست   راست   راست   راست )=start:03:33.265 ,duration:00:03.715$( راست  راست   راست   چپ  راست   راست   راست   راست )=start:03:36.980 ,duration:00:03.990$( راست   چپ  راست )=start:03:40.970 ,duration:00:01.747$( راست   راست  راست   راست   راست   راست )=start:03:42.718 ,duration:00:03.472$( راست  راست   راست   چپ  راست   راست   راست   راست )=start:03:46.190 ,duration:00:03.629$( راست   راست )=start:03:49.820 ,duration:00:00.679$( راست  راست   راست   راست  راست   راست   راست   راست )=start:03:50.500 ,duration:00:04.641$" />
<input type="hidden" name="HFTimes" id="HFTimes" value="2,4,6,8,9,11,13,15,17,19,21,23,25,26,28,30,32,34,35,37,39,40,42,44,45,47,48,50,52,53,55,56,58,60,61,63,64,66,68,69,71,73,75,77,79,81,83,86,89,90,93,95,97,99,105,109,112,114,117,120,123,125,127,129,132,135,138,141,144,149,155,158,161,164,166,168,171,173,176,179,182,185,187,189,191,193,195,198,200,202,204,206,209,211,213,216,220,222,226,229,230," />
@stop