function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
      }
	  function get4randoms(min,max,tap,ta)
	  {
		var randoms = [3];
		
		randoms[tap]=ta;
		
		if (tap!=0)
		do{
		randoms[0]=getRandomInt(min, max);
		}while(randoms[0]==randoms[tap]);
		
		
		if (tap!=1) do
		{
			randoms[1]=getRandomInt(min, max);
		}while((randoms[0]==randoms[1])||(randoms[1]==randoms[tap]));
	    if (tap!=2) do
		{
			randoms[2]=getRandomInt(min, max);
		}while((randoms[0]==randoms[2])||(randoms[1]==randoms[2])||(randoms[tap]==randoms[2]));
		
		if (tap!=3)do
		{
			randoms[3]=getRandomInt(min, max);
		}while((randoms[0]==randoms[3])||(randoms[1]==randoms[3])||(randoms[2]==randoms[3]));
		return randoms;
	  }
	  
	  
	  function genQuestString(val){
	  
		
	  for (var i = 0; i < val; i++) {
  
		document.write("| &nbsp &nbsp");
		}
	  
	  }
