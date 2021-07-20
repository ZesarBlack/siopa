$(function(){
	
		$('#formFechas').submit(function(e){
			e.preventDefault();
			const posdate ={
				FechaI : $('#FechaI').val(),
				FechaF : $('#FechaF').val()
			};
			let url = 'controladorFechas.php';
			$.post(url,posdate,function console.log(response){
				
				if (response == 1 ) {
					alert("No hay datos que mostrar");
				}else if(response==4){
					alert("Elige un rango de fehas valido");
				}else{
					
					let datos = JSON.parse(response);
					console.log(datos);
					let template = '';
					
					datos.forEach(datos =>{
						template += `
						<tr>
						<td>${datos.idturno}</td>
						<td>${datos.base}</td>
						<td>${datos.escolta}</td>
                        <td>${datos.tierra}</td>
                        <td>${datos.francos}</td>
                        <td>${datos.comisionados}</td>
                        <td>${datos.curso}</td>
                        <td>${datos.ctrlConfianza}</td>
                        <td>${datos.suspendidos}</td>
                        <td>${datos.bajas}</td>
						</tr>
						`
				}) 
				$('#Datos').html(template);
				}
				
			});
		})

});