			$(function(){

				$('#cropbox').Jcrop({
					//aspectRatio: 1,
					onSelect: updateCoords
				});

			});

			function updateCoords(c)
			{
				$('#x1').val(c.x);
				$('#y1').val(c.y);
				 $('#x2').val(c.x2);
				$('#y2').val(c.y2);
				$('#w').val(c.w);
				$('#h').val(c.h);
			};

			function checkCoords()
			{
				if (parseInt($('#w').val())) return true;
				alert('Please select a crop region then press submit.');
				return false;
			};