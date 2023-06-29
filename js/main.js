	// START DIALOG CONFIRM
	$(document).ready(function() 
	{
		$('a[data-confirm-delete]').click(function(ev) 
		{
			var href = $(this).attr('href');
			if (!$('#dataConfirmModal').length) 
			{
				$('body').append('<div class="modal fade" id="dataConfirmModal" data-backdrop="static" data-keyboard="false"><div class="modal-dialog"><div class="modal-content"><div class="modal-header bg-danger"><div align="left"><span class="text-white display-4">Eliminar registro</span></div></div><div class="modal-body text-danger h4"></div><div class="modal-footer"><button class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Cancelar</button><a class="btn btn-danger" id="dataConfirmOK">Eliminar</a></div></div></div></div>');
			}
			$('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm-delete'));
			$('#dataConfirmOK').attr('href', href);
			$('#dataConfirmModal').modal({show:true});
			return false;
		});
	});
	// FINISH DIALOG CONFIRM
	
	//START FORMAT NUMBER
	function MASK(form, n, mask, format) 
	{
		if (format == "undefined") format = false;
		if (format || NUM(n)) 
		{
			dec = 0, point = 0;
			x = mask.indexOf(".")+1;
			if (x) 
			{ 
				dec = mask.length - x; 
			}

			if (dec) 
			{
				n = NUM(n, dec)+"";
				x = n.indexOf(".")+1;
				if (x) 
				{ 
					point = n.length - x; 
				} else { 
					n += "."; 
				}
			} else {
				n = NUM(n, 0)+"";
			}
			for (var x = point; x < dec ; x++) 
			{
				n += "0";
			}
			x = n.length, y = mask.length, XMASK = "";
			while ( x || y ) 
			{
				if ( x ) 
				{
					while ( y && "#0.".indexOf(mask.charAt(y-1)) == -1 ) 
					{
						if ( n.charAt(x-1) != "-")
						XMASK = mask.charAt(y-1) + XMASK;
						y--;
					}
					XMASK = n.charAt(x-1) + XMASK, x--;
				} else if ( y && "$0".indexOf(mask.charAt(y-1))+1 ) 
				{
					XMASK = mask.charAt(y-1) + XMASK;
				}
				if ( y ) 
				{
					y-- 
				}
			}
		} else {
			XMASK="";
		}
		if (form) 
		{
			form.value = XMASK;
			if (NUM(n)<0) 
			{
				form.style.color="#FF0000";
			} else {
				form.style.color="#000000";
			}
		}
		return XMASK;
	}

	// Convierte una cadena alfanumérica a numérica (incluyendo formulas aritméticas)
	//
	// s   = cadena a ser convertida a numérica
	// dec = numero de decimales a redondear
	//
	// La función devuelve el numero redondeado

	function NUM(s, dec) 
	{
		for (var s = s+"", num = "", x = 0 ; x < s.length ; x++) 
		{
			c = s.charAt(x);
			if (".-+/*".indexOf(c)+1 || c != " " && !isNaN(c)) 
			{
				num+=c; 
			}
		}
		if (isNaN(num)) 
		{ 
			num = eval(num); 
		}
		if (num == "")  
		{ 
			num=0;
		} else { 
			num = parseFloat(num); 
		}
		if (dec != undefined) 
		{
			r=.5; if (num<0) r=-r;
			e=Math.pow(10, (dec>0) ? dec : 0 );
			return parseInt(num*e+r) / e;
		} else {
			return num;
		}
	}
	// FINISH FORMAT NUMBER
	
	// START TOOLTIP
	$(document).ready(function()
	{
		$('[data-toggle="tooltip"]').tooltip();
	});
	// FINISH TOOLTIP
	
	// START TOAST
	$(document).ready(function()
	{
		$('.toast').toast({ delay: 3000 });
		$('.toast').toast('show');
		
	});
	// FINISH TOAST

  