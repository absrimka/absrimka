<html>
<head>
<script type="text/javascript">
 
var c,c2, ch1, ch2;
 
// ajouter un champ avec son "name" propre;
function plus(){
c=document.getElementById('cadre');
c2=c.getElementsByTagName('input');
ch1=document.createElement('input');
ch2=document.createElement('input');
 
ch1.setAttribute('type','text');
ch1.setAttribute('name','ch1'+c2.length);
ch1.setAttribute('readonly','readonly'); 
ch1.setAttribute('value', 'etiquette'+c2.length/2);
ch1.setAttribute('style','border:none');

ch2.setAttribute('type','text');
ch2.setAttribute('name','ch2'+c2.length);
c.appendChild(ch1);
c.appendChild(ch2);
 
document.getElementById('sup').style.display='inline';
}
 
// supprimer le dernier champ;
function moins(){
if(c2.length>0){
	c.removeChild(c2[c2.length-1]);
	c.removeChild(c2[c2.length-1]);
}
if(c2.length==0){document.getElementById('sup').style.display='none'};
}
 
</script>
</head>
<body>
<form id="frm" action="">
<div id="cadre" style="margin-left:100px;width:200px">
</div>
 
<p>
<input type="button" value="ajouter un champ" onclick="plus()" />
<input type="button" style="display:none" id="sup" value="supprimer un champ" onclick="moins()" />
</p>
</form>
</body>
</html>