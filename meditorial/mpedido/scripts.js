function calcularTotales(nroLinea) {
	// Cálculo de la líena actual
	var ctCantidad, ctPrecioUnitario, ctTotal;
	ctCantidad = document.getElementById('txtCantidad_' + nroLinea);
	ctPrecioUnitario = document.getElementById('txtPrecio_' + nroLinea);
	ctTotal = document.getElementById('txtTotalLinea_' + nroLinea);
	if(ctCantidad.value == '' || ctPrecioUnitario.value == '') {
		ctTotal.value = '';
		return false;
	}
	var cantidad, precioUnitario;
	cantidad = parseFloat(ctCantidad.value);
	precioUnitario = parseFloat(ctPrecioUnitario.value);
	if(isNaN(cantidad)) {
		alert('Cantidad Inválida');
		ctCantidad.focus();
		ctCantidad.select();
		return false;
	}
	else {
		if(isNaN(precioUnitario)) {
			alert('Prceio Inválido');
			ctPrecioUnitario.focus();
			ctPrecioUnitario.select();
			return false;
		}
	}
	ctTotal.value = cantidad * precioUnitario;
	
	// Cálculo del total
	var ctTotalLinea, ctTotalFinal;
	var totalAcumulado = 0;
	for(var i = 1; i <= 13; i++){
		ctTotalLinea = document.getElementById('txtTotalLinea_' + i);
		if(ctTotalLinea.value != '')
		totalAcumulado = totalAcumulado + parseFloat(ctTotalLinea.value);
	
	ctTotalFinal = document.getElementById('txtTotal');
	ctTotalFinal.value = totalAcumulado;
	}
}

	function mostrarInfo(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo1(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos1").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos1").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso1.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo2(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos2").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos2").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso2.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo3(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos3").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos3").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso3.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo4(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos4").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos4").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso4.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo5(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos5").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos5").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso5.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo6(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos6").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos6").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso6.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo7(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos7").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos7").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso7.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo8(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos8").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos8").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso8.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo9(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos9").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos9").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso9.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo10(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos10").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos10").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso10.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo11(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos11").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos11").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso11.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo12(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos12").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos12").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso12.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo13(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos13").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos13").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso13.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("preciop="+cod);

}
function mostrarInfo14(cod){

	if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
		else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
	xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos14").innerHTML=xmlhttp.responseText;
    }else{ 
	document.getElementById("datos14").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","aproceso14.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("escuela="+cod);

}
