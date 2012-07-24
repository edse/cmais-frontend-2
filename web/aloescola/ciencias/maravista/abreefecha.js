function Abre(texto,tamanho,xis,ipsilone){
	label1 = new Label('')
	label1.setText(texto)
	label1.setWrap(true)
	label1.moveTo(xis,ipsilone)
	label1.setBgColor('#004080')
	label1.font.color="#FFCC00";
	label1.setPadding(5)
	label1.setWidth(tamanho)
//	label1.packHeight()
	DynAPI.document.addChild(label1)
}

function Fecha(){
	if (DynAPI.document.children.length>0) {
		DynAPI.document.deleteAllChildren();
		return true;
	} 
}

var SideBarWindow

function SideBar(url)
{
        novaurl = "../faunaeflora/" + url
        aSBWindow = window.open(novaurl, "SideBar", "width=250,height=255,toolbar=no,location=no,directories=no,status=no,scrollbars=no,resizable=no,copyhistory=no")
        self.SideBarWindow = aSBWindow
}
