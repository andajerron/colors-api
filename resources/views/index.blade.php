<!DoctypeHTML>
<head>
<link rel="stylesheet" href=
"https://unpkg.com/purecss@2.0.6/build/pure-min.css"
         integrity=
"sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5"
         crossorigin="anonymous">
<style>
.card-header{
  text-align: center;
}
.pure-menu-list{
  padding:16px;
  border-bottom:1px dotted black;
  border-left:5px solid coral;
  overflow: hidden;
}
.menu-custom {
  height: 300px;
  background-color: white;
  border-bottom:7px solid black;

}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 10px;
  text-align: center;
  text-decoration: none;
  float: right;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.preview {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.preview:hover {
  background-color: #008CBA;
  color: white;
}
#myBG {
  width: 1376px;
  height: 332px;
  background-color: coral;
  color: white;
  text-align: center;
  padding: 32px;
}
</style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>{{ __('Color List') }}</h4></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="pure-menu pure-menu-scrollable menu-custom">
                    @foreach($colors as $color)
                        <ul class="pure-menu-list">
                            <li class="pure-menu-item">
                            <b>{{$color->name}}&nbsp;&nbsp;&nbsp;&nbsp;<button class="button preview" onclick="showColorInfo('{{$color->hex_code}}','{{$color->color_code}}','{{$color->name}}')">Preview</button></b>
                            </li>
                        </ul>
                        <br>
                    @endforeach
                    </div>

                    <div id="myBG">
                        <p>Click preview button to view color information.</p>
                        <b id="cname"></b><br><br>
                        <b id="chex"></b><br><br>
                        <b id="ccode"></b><br><br>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<script>
function showColorInfo(hexCode,colorCode,colorName) {
    let prefix = "#";
    let finalColor = prefix.concat(hexCode);
    document.getElementById("myBG").style.backgroundColor = finalColor;
    document.getElementById("cname").innerHTML = "name:"+"    "+colorName;
    document.getElementById("chex").innerHTML = "hex:"+"    "+hexCode;
    document.getElementById("ccode").innerHTML = "color code:"+"    "+colorCode;

}
</script>
</body>
</html>
