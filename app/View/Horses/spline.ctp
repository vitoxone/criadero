<?php
/**
 *  CakePHP HighCharts Plugin
 * 
 * 	Copyright (C) 2012 Kurn La Montagne / destinydriven
 *	<https://github.com/destinydriven> 
 * 
 * 	Multi-licensed under:
 * 		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
 * 		LGPL <http://www.gnu.org/licenses/lgpl.html>
 * 		GPL <http://www.gnu.org/licenses/gpl.html>
 * 		Apache License, Version 2.0 <http://www.apache.org/licenses/LICENSE-2.0.html>
 */
?>
<div class="panel panel-body">
	
	<div id="splinewrapper" style="display: block; float: left; width:90%; margin-bottom: 20px;"></div>

	<table>
	<tr>
		<td>	
    		<div class="clear"></div>	
	
			<?php echo $this->HighCharts->render('Spline Chart'); ?>
		</td>
		<td>
			<div class="center-form-search">
			<?php echo $this->Html->link('Volver', array('controller' => 'horses', 'action' => 'view', $id), array('class' => 'btn btn-success')); ?>
		</br>
			<a class="btn btn-success hidden-print" onclick="PrintElem('#splinewrapper')"><i class="fa fa-print"></i> Imprimir</a>
		</div>
		</td>
		</tr>	
	</table>
</div>


	<script>
		$(function()	{
			$('#invoicePrint').click(function()	{
				window.print();
			});
		});



function PrintElem(elem)
{
      Popup($('<div/>').append($(elem).clone()).html());
}

function Popup(data) 
{
    var mywindow = window.open('', 'my div', 'height=400,width=600');
    mywindow.document.write('<html><head><title>my div</title>');
     mywindow.document.write('<link rel="stylesheet" href="http://www.dynamicdrive.com/ddincludes/mainstyle.css" type="text/css" />');
    mywindow.document.write('</head><body >');
    mywindow.document.write(data);
    mywindow.document.write('</body></html>');

    mywindow.print();
  //  mywindow.close();

    return true;
}
	</script>