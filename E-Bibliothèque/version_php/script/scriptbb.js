
	function getLocalDate_fr(){
			var now = new Date();
			var day = now.getDay();
			var date = now.getDate();
			var month = now.getMonth();
			var year = now.getFullYear();
			var DOW=new Array("Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi");
			var MON=new Array("Janvier","F�vrier","Mars","Avril","Mai","Juin","Juillet","Ao�t","Septembre","Octobre","Novembre","D�cembre");
			return DOW[day] + ' ' + date + ' ' + MON[month] + ' ' + year+'.';
	}

